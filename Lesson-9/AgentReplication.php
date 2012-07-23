<?php

require_once 'Program.php';
require_once 'Agent.php';

class AgentReplication
{
	public function replicate(Agent $agent, Program &$victim)
	{
		if ($agent->getName() === 'Smith') {
			$victim = clone $agent;
		}
	}
}