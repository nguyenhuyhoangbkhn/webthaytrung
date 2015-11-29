<?php
/* @var $this DonhangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Donhangs',
);

$this->menu=array(
	array('label'=>'Create Donhang', 'url'=>array('create')),
	array('label'=>'Manage Donhang', 'url'=>array('admin')),
);
?>

<h1>Donhangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
