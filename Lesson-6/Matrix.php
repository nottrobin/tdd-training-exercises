<?php

require_once 'Human.php';

class Matrix
{
	protected $humanFactory = null;
    protected $humans = array();
    
	public function __construct($humans = array())
	{
        $this->humans = $humans;
	}

	public function jackIn($name)
	{
		if (!array_key_exists($name, $this->humans)) {
			$this->humans[$name] = $this->getHumanFactory()->create($name, 1);
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
	
	protected function getHumanFactory()
	{
		if (!(is_object($this->humanFactory) && $this->humanFactory instanceof HumanFactory)) {
			$this->setHumanFactory(new HumanFactory());
		}
		return $this->humanFactory;
	}
	
	public function setHumanFactory(HumanFactory $humanFactory)
	{
		$this->humanFactory = $humanFactory;
	}
}