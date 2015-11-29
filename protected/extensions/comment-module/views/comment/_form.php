<?php if (Yii::app()->user->isGuest) {
?><div class="ext-comment-not-loggedin">
	Sorry, you have to login to leave a comment.
</div><?php } else { ?>
<div id="ext-comment-form-<?php echo $comment->isNewRecord ? 'new' : 'edit-'.$comment->id; ?>" class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'id'=>'ext-comment-form',
    'action'=>array('/comment/comment/create'),
	'enableAjaxValidation'=>false
)); ?>

	<?php /** @var CActiveForm $form */
	echo $form->errorSummary($comment); ?>

	<div class="row">
		<p class="margin-left-20">Nhận xét</p>
		<?php echo $form->textArea($comment,'message',array('rows'=>7, 'cols'=>50,'id'=>'comment_textarea')); ?>
		<?php echo $form->error($comment,'message'); ?>
	</div>

	<div class="row buttons">
	    <?php if ($comment->isNewRecord) {

			echo $form->hiddenField($comment, 'type');
			echo $form->hiddenField($comment, 'key');

            /* echo CHtml::hiddenField('returnUrl', $this->createUrl(''));}
		    echo CHtml::submitButton('Save'); */
			echo CHtml::ajaxSubmitButton('Submit',
                array('/comment/comment/create'),
		        array(
                    'replace'=>'#ext-comment-form-new',
                    'error'=>"function(){
                        $('#Comment_message').css('border-color', 'red');
                        $('#Comment_message').css('background-color', '#fcc');
                    }"
		        ),
		        array('id'=>'ext-comment-submit' . (isset($ajaxId) ? $ajaxId : ''), 'class'=>'btn-comment')
		    );
		} else {
			echo CHtml::ajaxSubmitButton('Update',
				
				array('/comment/comment/update', 'id'=>$comment->id,),
				array(
					'replace'=>'#ext-comment-form-edit-'.$comment->id,
					'error'=>"function(){
						$('#Comment_message').css('border-color', 'red');
						$('#Comment_message').css('background-color', '#fcc');
					}"
		        ),
		        array('id'=>'ext-comment-submit' . (isset($ajaxId) ? $ajaxId : ''), 'class'=>'btn-comment')
	        );
		}
		?>
	</div>

<?php $this->endWidget() ?>

</div><!-- form -->
<?php } ?>