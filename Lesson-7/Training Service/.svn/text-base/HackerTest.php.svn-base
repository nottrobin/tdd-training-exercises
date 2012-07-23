<?php

require_once 'Hacker.php';

class HackerTest extends PHPUnit_Framework_TestCase
{
	public function testReceiveTrainingLoadsService()
	{
		$hacker = new Hacker;
		
		$service = $this->getMockFromWsdl('TrainingService.wsdl', 'TrainingService');
		
		$service->expects($this->once())
		        ->method('load')
		        ->will($this->returnValue('karate'));
		
		$hacker->receiveTraining($service);
		$this->assertTrue($hacker->trainedIn('karate'));
	}
}
