<div class="row">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $dataProvider->id;?>">
<img class="col-md-5 img-sachmoi"src="<?php echo $dataProvider->image;?>">
	<p class="title-ranking"><?php echo $dataProvider->name;?> </p>
</a>
	<span class="author">Author: </span>
	<span><?php echo $dataProvider->author; ?></span>
	<p class="decription"><?php echo $dataProvider->introduc; ?></p>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $dataProvider->id;?>">
<p class="seemore">Mua sách</p>
</a>
</div>
<div id="ranking-itineary" class="row nplr">
	<p>Sách mới</p>
</div>

<div role="tabpanel" class="tab-pane active overhidden" id="Iterary">
	<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$list_book,
								// 'ajaxUpdate'=>false,
								// 'id'=>'list-course',
								'itemsCssClass'=>'row',
								'itemView'=>'sachbanchay',
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






