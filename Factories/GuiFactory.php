<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GuiFactory
 *
 * @author rwinslow1016
 */
interface GuiFactory
{
	public function createFrame();
	
	public function createButton();
	
	public function createChecklist();
	
	public function createDropdown();
	
	public function createText();
	
	public function createLabel();
	
	public function createToolbar();
	
	public function createMenu();
}
