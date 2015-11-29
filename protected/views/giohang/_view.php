<?php
/* @var $this GiohangController */
/* @var $data Giohang */
?>



<div class="row">
		<div class="col-sm-5">
			<?php echo CHtml::encode($data->name_book); ?>
		</div>
		<div class="col-sm-2"><?php echo CHtml::encode($data->number); ?></div>
		<div class="col-sm-3"><?php echo CHtml::encode($data->cost); ?></div>
		<div class="col-md-2 npl">
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/Giohang/update&id=<?php echo($data->id) ?>">chỉnh sửa</a>
		</div>
		<!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Đặt mua</button> -->

	</div>
