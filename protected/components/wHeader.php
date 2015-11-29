<?php 
class wHeader extends CWidget
{
	
	public function init(){
		parent::init();
		
	}
	public function run()
	{
		$this->render('header');
	}
}
?>