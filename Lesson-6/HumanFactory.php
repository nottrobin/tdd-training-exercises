<?php

class HumanFactory
{
	public function create($name, $jackedId)
	{
		return new Human($name, $jackedId);
	}
} 