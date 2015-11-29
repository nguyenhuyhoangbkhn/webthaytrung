<?php
/* @var $this CtdhangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ctdhangs',
);

$this->menu=array(
	array('label'=>'Create Ctdhang', 'url'=>array('create')),
	array('label'=>'Manage Ctdhang', 'url'=>array('admin')),
);
?>

<h1>Ctdhangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
