<?php 

namespace Helpers;

class Arr 
{

	/**
	 * Get the first value
	 * @param  $arr
	 * @return mixed|null
	 */
	public static function first(array $arr)
	{
		if(empty($arr)) return null;
		return reset($arr);
	}

	/**
	 * Get the last value
	 * @param  $arr
	 * @return mixed|null
	 */
	public static function last(array $arr)
	{
		if(empty($arr)) return null;
		return end($arr);
	}

	/**
	 * Get the value if not exists return the default.
	 * @param  $arr
	 * @param  $key
	 * @param  $default
	 * @return mixed|null
	 */
	public static function get(array $arr, $key, $default = null)
	{
		$arr = self::flat($arr);
		if(is_array($arr) && isset($arr[$key])) {
            return $arr[$key];
        }

        return $default;
	}

	/**
	 * Transform a array into object
	 * @param  $arr
	 * @return object
	 */
	public static function toObject(array $arr)
	{
		$obj = new \StdClass();
		foreach ($arr as $key => $value) {
			$obj->$key = $value;
		}

		return $obj;
	}

	/**
	 * Flatten a multi-dimensional array to a one-dimensional array.
	 * @param  $arr
	 * @return array
	 */
	public static function flat(array $arr)
	{
		$newArr = [];
		$fkey = [];
		self::recursion($arr, $fkey, $newArr);

		return $newArr;
	}

	/**
	 * Pluck the given key's value from a two-dimensional array
	 * @param  $arr
	 * @param  $key
	 * @return array
	 */
	public static function pluck(array $arr, $key)
	{
		$newArr = [];
		foreach ($arr as $value) {
			if(is_array($value) && isset($value[$key])) {
				$newArr[] = $value[$key];
			}
		}

		return $newArr;
	}

	/**
	 * Array recursion.
	 * @param  $arr
	 * @param  &$fkey
	 * @param  &$newArr
	 */
	protected static function recursion(array $arr, &$fkey=[], &$newArr=[])
	{
		foreach ($arr as $key => $value) {
			$fkey[] = $key;
			if(is_array($value)) {
				self::recursion($value, $fkey, $newArr);
			}else {
				$newKey = implode('.', $fkey);
				$newArr[$newKey] = $value;
				array_pop($fkey);
			}
		}

		$fkey = [];
	}

	/**
	 * Check if the given value exists in an array
	 * @param  $value
	 * @param  $arr
	 * @param  $returnKey
	 * @return mixed|null
	 */
	public static function in($value, array $arr, $returnKey=false)
	{
		$existValue = in_array($value, $arr, true);

		if($returnKey) {
			if($existValue) {
				return array_search($value, $arr, true);
			}

			return null;
		}

		return $existValue;
	}
	
}