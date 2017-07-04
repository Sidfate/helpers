<?php 

namespace Sidfate\Helper;

class Arr 
{
	public static function fisrt(array $arr)
	{
		if(count($arr) === 0) return null;
		return array_values($arr)[0];
	}

	public static function last(array $arr)
	{
		if(count($arr) === 0) return null;
		return array_values($arr)[count($arr) - 1];
	}

	public static function get(array $arr, $key, $default=null)
	{

	}
	
}