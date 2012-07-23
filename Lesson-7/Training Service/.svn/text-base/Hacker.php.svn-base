<?php

class Human {}

class Hacker extends Human
{
	protected $_training = array();
	
	public function receiveTraining(TrainingService $service)
	{
		$this->_training[] = $service->load('karate');
	}
	
	public function trainedIn($topic)
	{
		return in_array($topic, $this->_training, true);
	}
}