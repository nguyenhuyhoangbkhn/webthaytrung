<?php
/* @var $this CtdhangController */
/* @var $model Ctdhang */

$this->breadcrumbs=array(
	'Ctdhangs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ctdhang', 'url'=>array('index')),
	array('label'=>'Create Ctdhang', 'url'=>array('create')),
	array('label'=>'Update Ctdhang', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ctdhang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ctdhang', 'url'=>array('admin')),
);
?>

<h1>View Ctdhang #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_book',
		'soluong',
		'gia',
		'id_donhang',
	),
)); ?>
