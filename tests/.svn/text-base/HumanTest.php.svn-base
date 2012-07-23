<?php
require('Human.php');

/**
 * Description of HumanTest
 *
 * @author rwinslow1016
 */
class HumanTest extends PHPUnit_Framework_TestCase
{
	function testHumanIsCreatedWithNick() {
		$human = new Human('nottrobin');
		$this->assertEquals('nottrobin', $this->readAttribute($human,'nick'));
	}
	
	/**
	 * @test 
	 */
	function itCanAlterHumanNick() {
		$human = new Human('nottrobin');
		$human->setNick('something');
		$this->assertEquals('something', $this->readAttribute($human,'nick'));
	}
	
	/**
	 * @group markedTests 
	 */
	function testHumanNickCannotBeNull() {
		$this->markTestSkipped();
	}
	
	/**
	 * @group markedTests 
	 */
	function testHumanNickCannotBeInteger() {
		$this->markTestIncomplete();
	}
}
