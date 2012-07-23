<?php

class Human
{
	protected $name = '';
	protected $nick = '';
	protected $isJacked ;
	
	public function __construct($nick, $jack = false)
	{
		$this->name = '';
		$this->nick = $nick;
		$this->isJacked = $jack;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
	private function setNick($nick)
	{
		$this->nick = $nick;
	}
	
	public function getNick()
	{
		return $this->nick;
	}
	
	public function jack()
	{
		$this->isJacked = true;
	}
	
	public function unJack()
	{
		$this->isJacked = false;
	}
	
	public function isJacked()
	{
		return $this->isJacked;
	}
}