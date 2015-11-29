<?php
/* @var $this CtdhangController */
/* @var $model Ctdhang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ctdhang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_book'); ?>
		<?php echo $form->textField($model,'id_book'); ?>
		<?php echo $form->error($model,'id_book'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soluong'); ?>
		<?php echo $form->textField($model,'soluong'); ?>
		<?php echo $form->error($model,'soluong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gia'); ?>
		<?php echo $form->textField($model,'gia'); ?>
		<?php echo $form->error($model,'gia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_donhang'); ?>
		<?php echo $form->textField($model,'id_donhang'); ?>
		<?php echo $form->error($model,'id_donhang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->