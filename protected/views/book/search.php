
<div role="tabpanel" class="tab-pane active overhidden" id="Iterary">
	<?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$list_book,
								// 'ajaxUpdate'=>false,
								// 'id'=>'list-course',
								'itemsCssClass'=>'row',
								'itemView'=>'search_category',
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