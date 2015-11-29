<?php
/* @var $this CtdhangController */
/* @var $data Ctdhang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_book')); ?>:</b>
	<?php echo CHtml::encode($data->id_book); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soluong')); ?>:</b>
	<?php echo CHtml::encode($data->soluong); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gia')); ?>:</b>
	<?php echo CHtml::encode($data->gia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_donhang')); ?>:</b>
	<?php echo CHtml::encode($data->id_donhang); ?>
	<br />


</div>