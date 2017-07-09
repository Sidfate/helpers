<?php 

namespace Helpers;

class StrTest extends \PHPUnit_Framework_TestCase
{
	public function testCamel()
    {
        $str1 = "first-test";
        $this->assertEquals("firstTest", Str::camel($str1));

        $str2 = "second_test";
        $this->assertEquals("secondTest", Str::camel($str2));
    }

    public function testLimit()
    {
    	$str = "123456789";

    	$this->assertEquals("12345...", Str::limit($str, 5));
    	$this->assertEquals("123456789", Str::limit($str, 10));
    	$this->assertEquals("12345$", Str::limit($str, 5, '$'));
    }
}