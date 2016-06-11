<?php

class RestTest extends \PHPUnit_Framework_TestCase{
	protected $t1;
	
	public function setUp(){
		$this->t1 = new \Tszy\Rest\Rest();
	}
	//nie da się przetestować ze względu na autoryzację twittera(przypisanie do http://127.0.0.1)
	/*public function testwyslijzapytanie(){
		$this->$this->assertInternalType('array',$this->t1->wyslijzapytanie());
	}*/
        public function testobserwuj(){
	}
        public function testwyswietlstatystyki(){
	}
}