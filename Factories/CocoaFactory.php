<?php
/**
 * Description of CocoaFactory
 *
 * @author rwinslow1016
 */
class CocoaFactory implements GuiFactory
{
	public function createFrame() {
		return new Cocoa_Frame();
	}
	
	public function createButton() {
		return new Cocoa_Button();
	}
	
	public function createChecklist() {
		return new Cocoa_Checklist();
	}
	
	public function createDropdown() {
		return new Cocoa_Dropdown();
	}
	
	public function createText() {
		return new Cocoa_Text();
	}
	
	public function createLabel() {
		return new Cocoa_Label();
	}
	
	public function createToolbar() {
		return new Cocoa_Toolbar();
	}
	
	public function createMenu() {
		return new Cocoa_Menu();
	}
}

?>
