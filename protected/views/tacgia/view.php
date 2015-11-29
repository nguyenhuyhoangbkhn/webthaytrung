<div class="row">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/image/default.png" class="col-md-5 ">
	<p class="title-ranking"><?php echo $model->name;?> </p>
	<span class="author">Giới thiệu: </span>
	<span class="decription"><?php echo $model->profile; ?></span>
</div>
<div id="ranking-itineary" class="row nplr">
	<p>Sách của tác giả</p>
</div>
<div role="tabpanel" class="tab-pane active overhidden" id="Iterary">
	<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$book_tacgia,
								// 'ajaxUpdate'=>false,
								// 'id'=>'list-course',
								'itemsCssClass'=>'row',
								'itemView'=>'book_tacgia',
								'template'=>"{items}\n{pager}",
								'pager'=>array(
									'class'=>'CLinkPager',
									'header'=>'',
									'prevPageLabel'=>'Preview',
									'nextPageLabel'=>'Next',
									//'firstPageLabel'=>'<<',
									//'lastPageLabel'=>'>>',
									'htmlOptions'=>array('class'=>'pagination-btn'),
									'maxButtonCount'=>'6',
								),									
							)); ?>
							</div>

