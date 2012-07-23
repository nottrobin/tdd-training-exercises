<?php
/**
 * Description of GnomeFactory
 *
 * @author rwinslow1016
 */
class GnomeFactory implements GuiFactory
{
	public function createFrame() {
		return new Gnome_Frame();
	}
	
	public function createButton() {
		return new Gnome_Button();
	}
	
	public function createChecklist() {
		return new Gnome_Checklist();
	}
	
	public function createDropdown() {
		return new Gnome_Dropdown();
	}
	
	public function createText() {
		return new Gnome_Text();
	}
	
	public function createLabel() {
		return new Gnome_Label();
	}
	
	public function createToolbar() {
		return new Gnome_Toolbar();
	}
	
	public function createMenu() {
		return new Gnome_Menu();
	}
}

?>
