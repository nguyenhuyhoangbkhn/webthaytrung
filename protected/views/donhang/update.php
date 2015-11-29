<?php
/* @var $this DonhangController */
/* @var $model Donhang */

$this->breadcrumbs=array(
	'Donhangs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donhang', 'url'=>array('index')),
	array('label'=>'Create Donhang', 'url'=>array('create')),
	array('label'=>'View Donhang', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Donhang', 'url'=>array('admin')),
);
?>

<h1>Update Donhang <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>