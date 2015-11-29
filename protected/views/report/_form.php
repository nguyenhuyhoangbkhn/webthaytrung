<?php
/* @var $this ReportController */
/* @var $model Report */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<span>ID khách hàng: </span>
		<?php echo $model->id_user; ?>
	</div>

	<div class="row">
		<span>Nội dung phản hồi: </span>
		<?php echo $model->content; ?>
	</div>

	<div class="row">
		<p>Trạng thái</p>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<p>Trả lời</p>
		<?php echo $form->textArea($model,'messeage',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'messeage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->