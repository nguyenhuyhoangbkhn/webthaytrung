<?php
/* @var $this ThongbaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Thongbaos',
);

$this->menu=array(
	array('label'=>'Create Thongbao', 'url'=>array('create')),
	array('label'=>'Manage Thongbao', 'url'=>array('admin')),
);
?>

<h1>Thongbaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
