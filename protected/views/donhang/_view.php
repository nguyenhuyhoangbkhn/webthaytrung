<?php
/* @var $this DonhangController */
/* @var $data Donhang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tongtien')); ?>:</b>
	<?php echo CHtml::encode($data->tongtien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thoigian')); ?>:</b>
	<?php echo CHtml::encode($data->thoigian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>