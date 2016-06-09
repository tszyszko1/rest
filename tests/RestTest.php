<?php

class RestTest extends \PHPUnit_Framework_TestCase{
	protected $hello;
	
	public function setUp(){
		$this->hello = new \Tszy\Rest\Rest();
	}
	
	public function testWorld(){
		$this->assertSame('world', $this->hello->world());
	}
}