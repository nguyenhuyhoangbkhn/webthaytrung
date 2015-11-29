<?php 
class wThongbao extends CWidget
{
	public function init(){
		parent::init();
		
	}
	public function run()
	{
		/*thong bao*/
		$criteria = new CDbCriteria ();
		$criteria->order='id desc';
		$criteria->limit='5';
		$list = Thongbao::model()->findAll($criteria);		
		$this->render('thongbao', array(
			'list'=>$list,			
		));
	}
}
?>