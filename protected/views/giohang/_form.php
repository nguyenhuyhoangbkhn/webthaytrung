<?php
/* @var $this GiohangController */
/* @var $model Giohang */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'giohang-form',
	'action'=>Yii::app()->createUrl('giohang/create'),
	// them dong tren
	'enableAjaxValidation'=>false,
)); ?>
	


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<!-- them tiep vao duoi -->
	<?php 
		if (isset($object))
		{

			$model->id_book=$object->id;
			$model->name_book = $object->name;
			$model->cost = $object->cost;
			$model->status = 1;
			print_r($model->status);

		}
	?>

	<div class="row" style="display:none">
		<?php echo $form->labelEx($model,'id_book'); ?>
		<?php echo $form->textField($model,'id_book'); ?>
		<?php echo $form->error($model,'id_book'); ?>
	</div> 
	<!-- <div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>
 -->
	<div class="row">
		<?php echo $form->labelEx($model,'name_book'); ?>
		<?php echo $form->textField($model,'name_book',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name_book'); ?>
	</div>

	<div class="row" >
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row" style="display:none">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
		<?php echo $form->error($model,'time'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->