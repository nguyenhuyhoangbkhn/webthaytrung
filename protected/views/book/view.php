<div class="row">
<img class="col-md-5 img-sachmoi"src="<?php echo $model->image;?>">
	<p class="title-ranking"><?php echo $model->name;?> </p>
	<span class="author">Tác giả: </span>
	<span><?php echo $model->author; ?></span>
	<br/>
	<br/>
	<span class="author">Nhà xuất bản: </span>
	<span><?php echo $model->nxb; ?></span>
	<br/>
	<br/>
	<span class="author">Số lượng còn: </span>
	<span><?php echo $model->slcon; ?></span>
	<br/>
	<br/>
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Đặt mua</button>
	<a href="<?php  echo Yii::app()->request->baseUrl; ?>/index.php?r=Giohang/giohang"><button class="btn btn-info">Xem giỏ hàng</button> </a>
	<div class="col-md-12 margin-top-20">
	<span class="author">Giới thiệu: </span>
	<span class="decription"><?php echo $model->introduc; ?></span>
	</div>
</div>
<?php
	$this->renderPartial('comment.views.comment.commentList',array(
		'model'=>$model
		));
?>





  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div>
          	<?php 
				$dat=new Giohang;
				$this->renderPartial('//giohang/_form', 
				array(
					'model'=>$dat,
					'object' => $model,
				 ));
			?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
