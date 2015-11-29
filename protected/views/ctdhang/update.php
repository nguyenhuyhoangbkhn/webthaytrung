<?php
/* @var $this CtdhangController */
/* @var $model Ctdhang */

$this->breadcrumbs=array(
	'Ctdhangs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ctdhang', 'url'=>array('index')),
	array('label'=>'Create Ctdhang', 'url'=>array('create')),
	array('label'=>'View Ctdhang', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ctdhang', 'url'=>array('admin')),
);
?>

<h1>Update Ctdhang <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>