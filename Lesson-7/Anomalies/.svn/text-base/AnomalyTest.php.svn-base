<?php

require_once 'Anomaly.php';

class AnomalyTest extends PHPUnit_Framework_TestCase
{
	public function testSpecificAnomalyIsInvokedWhenItDisplays()
	{
		$dejaVu = $this->getMockForAbstractClass('Anomaly');
		$dejaVu->expects($this->once())
		       ->method('specificAnomaly')
		       ->will($this->returnValue('miao'));
		
		$anomaly = $dejaVu->display();
		$this->assertSame('miao', $anomaly);
	}
	
}