<?php

require_once 'Squid.php';

class SquidTest extends PHPUnit_Framework_TestCase
{
	
	public function testSquidCanCatchPoweredOnShip()
	{
		$squid = new Squid(); 

        $shipStub = $this->getMock('Ship');
        $shipStub->expects($this->any())
                 ->method('isPoweredOff')
                 ->will($this->returnValue(false));

        $caughtYou = $squid->catchShip($shipStub);

        $this->assertTrue($caughtYou);
	}

	/**
	 * @group shipTests 
	 */
    public function testSquidsCantSeePoweredOffShip()
    {
        $squid = new Squid(); 

        $shipStub = $this->getMock('Ship');
        $shipStub->expects($this->any())
                 ->method('isPoweredOff')
                 ->will($this->returnValue(true));

        $caughtYou = $squid->catchShip($shipStub);

        $this->assertFalse($caughtYou);
    }
}
