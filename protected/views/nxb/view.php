<div class="row">
<img class="col-md-5 img-sachmoi"src="<?php echo $model->image;?>">
	<p class="title-ranking"><?php echo $model->name;?> </p>
	<span class="author">Giới thiệu: </span>
	<span class="decription"><?php echo $model->content; ?></span>

</div>
<div id="ranking-itineary" class="row nplr">
	<p>Sách của nhà xuất bản</p>
</div>
<div role="tabpanel" class="tab-pane active overhidden" id="Iterary">
	<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$book_nxb,
								// 'ajaxUpdate'=>false,
								// 'id'=>'list-course',
								'itemsCssClass'=>'row',
								'itemView'=>'book_nxb',
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