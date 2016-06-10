<?php

class RestTest extends \PHPUnit_Framework_TestCase{
	protected $t1;
	
	public function setUp(){
		$this->t1 = new \Tszy\Rest\Rest();
	}
	
	public function testWorld(){
		$this->assertSame('world', $this->t1->wyslijzapytanie());
	}
}