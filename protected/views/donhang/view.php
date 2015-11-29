<?php
/* @var $this DonhangController */
/* @var $model Donhang */

$this->breadcrumbs=array(
	'Donhangs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Donhang', 'url'=>array('index')),
	array('label'=>'Create Donhang', 'url'=>array('create')),
	array('label'=>'Update Donhang', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Donhang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donhang', 'url'=>array('admin')),
);
?>

<h1>View Donhang #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tongtien',
		'thoigian',
		'user_id',
	),
)); ?>
