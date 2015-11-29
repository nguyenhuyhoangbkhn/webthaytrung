<?php 
class wTop_tacgia extends CWidget
{
	public function init(){
		parent::init();
		
	}
	public function run()
	{
		/*Top nxb*/
		$criteria = new CDbCriteria ();
		$criteria->limit = 3;
		$criteria->order = 'frequency desc';
		$list = Tacgia::model()->findAll($criteria);		
		$this->render('top_tacgia', array(
			'list'=>$list,			
		));
	}
}
?>