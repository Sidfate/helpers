<?php 

namespace Sidfate\Helpers;

/**
 * Verification class in Chinese conditions
 */
class Verify 
{

	/**
	 * Verify is a valid email address
	 * @param  $email
	 * @return boolean
	 */
	public static function isEmail($email)
	{
		if(empty($email)) return false;

		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return false;
        }

        return true;
	}

	public static function isPhone($phone)
	{
		
	}

	/**
	 * Verify is a valid ip address
	 * @param  $email
	 * @return boolean
	 */
	public static function isIp($ip)
	{
		if(empty($ip)) return false;

		if (filter_var($email, FILTER_VALIDATE_IP) === false) {
            return false;
        }

        return true;
	}
	
	/**
	 * Verify is a valid url
	 * @param  $email
	 * @return boolean
	 */
	public static function isUrl($url)
	{
		if(empty($url)) return false;

		if (filter_var($email, FILTER_VALIDATE_URL) === false) {
            return false;
        }

        return true;
	}
}