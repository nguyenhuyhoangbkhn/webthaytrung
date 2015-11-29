<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
	
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class=" margin-left-15">
		<p>Tài khoản</p>
		<?php echo $form->textField($model,'username',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<br/>
	<div class=" margin-left-15">
		<p>Mật khẩu</p>
		<?php echo $form->passwordField($model,'password',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<br/>
	<div class=" margin-left-15">
		<p>Email</p>
		<?php echo $form->textField($model,'email',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	<br/>
	<div class=" margin-left-15">
		<p>Thông tin cá nhân</p>
		<?php echo $form->textArea($model,'profile',array('class'=>'form-control input-traodoi', 'rows'=>'4')); ?>
		<?php echo $form->error($model,'profile'); ?>
	</div>
	<br/>
	<div class=" margin-left-15">
		<p>Số điện thoại</p>
		<?php echo $form->textField($model,'phone',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>
	<br/>
	<div class=" margin-left-15">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo tài khoản' : 'Lưu', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->