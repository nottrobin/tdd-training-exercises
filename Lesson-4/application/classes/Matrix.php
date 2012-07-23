<?php

require_once 'Human.php';

class Matrix
{
    protected $humans = array(); 

	public function __construct($humans = array())
	{
        $this->humans = $humans;
	}

	public function jackIn($name)
	{
		if (!array_key_exists($name, $this->humans)) {
			$this->humans[$name] = new Human($name, true);
		}
	}

	public function jackOut($name)
	{
		if (array_key_exists($name, $this->humans)) {
			$this->humans[$name]->unJack();
			unset ($this->humans[$name]);
		}
	}
	
	public function isJackedIn($name)
	{
		return array_key_exists($name, $this->humans);
	}
	
	public function count()
	{
		return count($this->humans);
	}
}