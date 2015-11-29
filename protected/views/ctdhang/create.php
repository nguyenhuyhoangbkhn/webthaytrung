<?php
/* @var $this CtdhangController */
/* @var $model Ctdhang */

$this->breadcrumbs=array(
	'Ctdhangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ctdhang', 'url'=>array('index')),
	array('label'=>'Manage Ctdhang', 'url'=>array('admin')),
);
?>

<h1>Create Ctdhang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>