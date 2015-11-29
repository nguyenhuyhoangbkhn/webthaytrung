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
	<?php
	$idUser = Yii::app()->user->id;
	?>
	<div class="row">
		<?php echo $form->textField($model,'id_user',array('class'=>'form-control input-traodoi hidden','value'=>$idUser)) ?>
	</div>

	<div class="row">
		<p>Nội dung phản hồi</p>
		<?php echo $form->textArea($model,'content',array('class'=>'form-control input-traodoi', 'rows'=>'4')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'status',array('class'=>'form-control input-traodoi hidden','value'=>'0')); ?>
	</div>
	<div class="row">

		<?php echo $form->textArea($model,'messeage',array('class'=>'form-control input-traodoi hidden', 'rows'=>'4','value'=>'Chưa trả lời')); ?>
		<?php echo $form->error($model,'messeage'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Gửi phản hồi' : 'Trả lời phản hồi', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
function myFunction() {
    alert("Cảm ơn về phản hồi của bạn!. Chúng tôi sẽ nỗ lực để đem đến cho bạn dịch vụ tốt nhất !");
}
</script>