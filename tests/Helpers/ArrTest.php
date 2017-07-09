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

    public function testGet()
    {
    	$arr = [
    		'a'=> 1, 
    		'b'=> 2, 
    		'c'=> 3
    	];

    	$this->assertEquals(2, Arr::get($arr, 'b'));
    	$this->assertEquals(null, Arr::get($arr, 'e'));
    }

    public function testArrToObject()
    {
    	$arr = [
    		'a'=> 1, 
    		'b'=> 2, 
    		'c'=> 3
    	];
    	$obj = Arr::toObject($arr);

    	$this->assertEquals(2, $obj->b);
    }

    public function testFlat()
    {
    	$arr = [
    		'a'=> 1,
    		'b'=> [
    			'b1'=> 2,
    			'b2'=> 3
    		],
    		'c'=> [
    			'c1'=> 4,
    			'c2'=> [
    				'c21'=> 5,
    				'c22'=> 6
    			]
    		]
    	];
    	$newArr = Arr::flat($arr);

    	$this->assertEquals(5, $newArr['c.c2.c21']);
    }

    public function testPluck()
    {
    	$a = [
    		['name'=> 'js'],
    		['name'=> 'php'],
    		['name'=> 'java']
    	];

    	$b = ['js', 'php', 'java'];

    	$this->assertEquals($b, Arr::pluck($a, 'name'));
    }
}