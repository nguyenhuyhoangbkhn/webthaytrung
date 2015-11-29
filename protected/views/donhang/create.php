<?php
/* @var $this DonhangController */
/* @var $model Donhang */

$this->breadcrumbs=array(
	'Donhangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Donhang', 'url'=>array('index')),
	array('label'=>'Manage Donhang', 'url'=>array('admin')),
);
?>

<h1>Create Donhang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>