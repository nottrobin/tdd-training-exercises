<?php
/**
 * Description of Human
 *
 * @author rwinslow1016
 */
class Human
{
	private $nick = null;

	public function __construct($nick) {
		$this->setNick($nick);
	}
	
	public function setNick($nick) {
		$this->nick = $nick;
	}
}
