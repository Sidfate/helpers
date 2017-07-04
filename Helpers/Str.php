<?php

namespace Sidfate\Helper;

class Str
{
    public static function camel($value) 
    {
        $value = ucwords(str_replace(array('-', '_'), ' ', $value));
        return lcfirst(str_replace(' ', '', $value));
    }

    public static function random() 
    {

    }

    public static function limit() 
    {
    	
    }
}