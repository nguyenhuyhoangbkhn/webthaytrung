<?php
/* @var $this CtdhangController */
/* @var $model Ctdhang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_book'); ?>
		<?php echo $form->textField($model,'id_book'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soluong'); ?>
		<?php echo $form->textField($model,'soluong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gia'); ?>
		<?php echo $form->textField($model,'gia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_donhang'); ?>
		<?php echo $form->textField($model,'id_donhang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->