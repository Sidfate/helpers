<?php

namespace Sidfate\Helper;

class Str
{
	/**
	 * Change the str to camel case.
	 * @param  $str
	 * @return string
	 */
    public static function camel($str) 
    {
        $value = ucwords(str_replace(['-', '_'], ' ', $str));
        return lcfirst(str_replace(' ', '', $value));
    }

    public static function random() 
    {

    }

    /**
     * Get the limited str
     * @param  $str    
     * @param  $length
     * @param  $end
     * @return string
     */
    public static function limit($str, $length=50, $end="...") 
    {
    	if(mb_strlen($str) <= $length) return $str;

		return rtrim(mb_substr($str, 0, $length, 'UTF-8')).$end;
    }


}
