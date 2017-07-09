<?php 

namespace Helpers;

class ArrTest extends \PHPUnit_Framework_TestCase
{
	public function testFirst()
    {
        $arr = [1, 2, 3];

        $this->assertEquals(1, Arr::first($arr));
    }

    public function testLast()
    {
    	$arr = [1, 2, 3];

    	$this->assertEquals(3, Arr::last($arr));
    }
}