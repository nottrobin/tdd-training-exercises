<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DocumentClass
 *
 * @author rwinslow1016
 */
class DocumentClass implements Document
{
	private $body;
	private $title;
	
	public function __construct($title, $body) {
		$this->setBody($body);
		$this->setTitle($title);
	}
	
	public function getDecorated() {
		return $this->decorated;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function getBody() {
		return $this->body;
	}
	
	protected function setTitle($title) {
		$this->title = $title;
	}
	
	protected function setBody($body) {
		$this->body = $body;
	}
}

?>
