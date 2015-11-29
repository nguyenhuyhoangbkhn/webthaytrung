<?php
/* @var $this ThongbaoController */
/* @var $model Thongbao */

$this->breadcrumbs=array(
	'Thongbaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Thongbao', 'url'=>array('index')),
	array('label'=>'Manage Thongbao', 'url'=>array('admin')),
);
?>

<h1>Create Thongbao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>