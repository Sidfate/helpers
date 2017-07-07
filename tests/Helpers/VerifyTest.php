<?php 

namespace Helpers;

class VerifyTest extends \PHPUnit_Framework_TestCase
{

	public function testIsEmail()
    {
    	$email = "sidfate@163.com";
        $this->assertTrue(Verify::isEmail($email));

        $email = "sidfate@163com";
        $this->assertFalse(Verify::isEmail($email));
    }

    public function testIsPhone()
    {
    	$phone = "15757176627";
        $this->assertTrue(Verify::isPhone($phone));

        $phone = "11111111111";
        $this->assertFalse(Verify::isPhone($phone));
    }

    public function testIsIp()
    {
    	$ip = "120.0.0.1";
        $this->assertTrue(Verify::isIp($ip));

        $ip = "120.0.0.1.0.1";
        $this->assertFalse(Verify::isIp($ip));
    }

}