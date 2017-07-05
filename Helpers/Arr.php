<?php 

namespace Sidfate\Helper;

class Arr 
{

	/**
	 * Get the first value
	 * @param  $arr
	 * @return mixed|null
	 */
	public static function fisrt(array $arr)
	{
		if(count($arr) === 0) return null;
		return array_values($arr)[0];
	}

	/**
	 * Get the last value
	 * @param  $arr
	 * @return mixed|null
	 */
	public static function last(array $arr)
	{
		if(count($arr) === 0) return null;
		return array_values($arr)[count($arr) - 1];
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
		$obj = new StdClass();
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
	
}