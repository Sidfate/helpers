<?php 

namespace Helpers;

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

	/**
	 * Verify is a valid chinese phone
	 * @param  $phone
	 * @return boolean
	 */
	public static function isPhone($phone)
	{
		if(empty($ip)) return false;
		
    	return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $phone) ? true : false;
	}

	/**
	 * Verify is a valid ip address
	 * @param  $email
	 * @return boolean
	 */
	public static function isIp($ip)
	{
		if(empty($ip)) return false;

		if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
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

		if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            return false;
        }

        return true;
	}
}