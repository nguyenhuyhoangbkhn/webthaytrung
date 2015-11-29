<script type="text/javascript" language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/ckeditor/ckeditor.js" ></script>
<script type="text/javascript" language="javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/ckfinder/ckfinder.js" ></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'book-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<p>Nhập tên nhà xuất bản</p>
		<?php echo $form->dropDownList($model,'nxb', CHtml::listData(Nxb::model()->findAll(),'id','name'),array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'nxb'); ?>
	</div>

	<div class="row">
		<p>Mời bạn nhập tên tác giả</p>
		<?php $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'author',
			'url'=>array('suggestTags'),
			'multiple'=>true,
			'htmlOptions'=>array('size'=>50,'class'=>'form-control input-traodoi'),
		)); ?>
		<p class="hint">Có thể nhập được nhiều tác giả</p>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<p>Nhập phần trăm khuyến mãi</p>
		<?php echo $form->dropDownList($model,'km_id', CHtml::listData(Km::model()->findAll(),'id','phantram'),array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'km_id'); ?>
	</div>

	<div class="row">
		<p>Nhập tên sách</p>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200,'class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<p>Nhập loại sách</p>
		<?php echo $form->dropDownList($model,'type', CHtml::listData(Type::model()->findAll(),'id','name'),array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<p>Nhập giá sách</p>
		<?php echo $form->textField($model,'cost',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<p>Nhập giới thiệu về sách</p>
		<?php echo $form->textArea($model,'introduc',array('rows'=>6, 'cols'=>50,'id'=>'editor','class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'introduc'); ?>
	</div>

	<div class="row">
		<p>Chọn ảnh</p>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>300,'id'=>'Image','class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'image'); ?>
		<input type="button" id="Browser" class="btn btn-default" value="Chọn ảnh" />
	</div>

	<div class="row">
		<p>Năm xuất bản</p>
		<?php echo $form->textField($model,'namxb',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'namxb'); ?>
	</div>

	<div class="row">
		<p>Số lượng nhập</p>
		<?php echo $form->textField($model,'slnhap',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'slnhap'); ?>
	</div>

	<div class="row">
	<p>Số lượng còn</p>
		<?php echo $form->textField($model,'slcon',array('class'=>'form-control input-traodoi')); ?>
		<?php echo $form->error($model,'slcon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
	<script type="text/javascript">
	$(function(){
		$("#Browser").click(function(){
			var ckfiner=new CKFinder();
			ckfiner.selectActionFunction = function(fileUrl){
				$("#Image").val(fileUrl);
			};
			ckfiner.popup();
		});
	});
	</script>
<script type="text/javascript">CKEDITOR.replace( 'editor'); </script>