<?php

require_once 'AgentReplication.php';

class AgentReplicationTest extends PHPUnit_Framework_TestCase
{

	/**
	 * @dataProvider agents
	 * @test
	 * @param Agent $agent
	 * @param type $name
	 * @param type $isNowAgent 
	 */
	public function onlySmithCanReplicate(Agent $agent, $name, $shouldReplicate)
	{
		$victim = new Program;
		
		$replication = new AgentReplication;
		$agent->setName($name);
		
		$replication->replicate($agent, $victim);
		
		if ($shouldReplicate) {
			$this->assertEquals('Agent', get_class($victim));
		} else {
			$this->assertEquals('Program', get_class($victim));
		}
		
	}
	
	public function agents()
	{
		return array(
			array(new Agent(), 'Andy', false),
			array(new Agent(), 'Smith', true),
		);
	}
}