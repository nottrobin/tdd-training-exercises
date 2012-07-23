<?php

require_once 'Matrix.php';
require_once 'HumanFactory.php';
require_once 'Human.php';

class MatrixTest extends PHPUnit_Framework_TestCase
{
	public function testJackingAHumanIncreasesTheCount()
	{
		$human = $this->getMock('Human', null, array(), 'MockHuman', null, false);
		
		$humanFactory = $this->getMock('HumanFactory');
		$humanFactory->expects($this->once())
		             ->method('create')
		             ->will($this->returnValue($human));
		
		$matrix = new Matrix();
		$matrix->setHumanFactory($humanFactory);
		$expectedCount = $matrix->count();
		$matrix->jackIn('robin');
		$this->assertEquals($expectedCount + 1, $matrix->count());
	}
}
