<?php
/* @var $this ThongbaoController */
/* @var $model Thongbao */

$this->breadcrumbs=array(
	'Thongbaos'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Thongbao', 'url'=>array('index')),
	array('label'=>'Create Thongbao', 'url'=>array('create')),
	array('label'=>'View Thongbao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Thongbao', 'url'=>array('admin')),
);
?>

<h1>Update Thongbao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>