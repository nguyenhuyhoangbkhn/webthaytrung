<div class="col-sm-12 top">
	<div class="row top-title">
		<p>
			Top tác giả
		</p>
	</div>
	<?php foreach($list as  $data):?>		
	<div class="row">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/tacgia/view&id=<?php echo $data->id;?>">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/image/default.png" class="col-md-5 margin-top-20">
			<p class="top-name "><?php echo $data->name;?></p>
		</a>
	</div>
	<?php endforeach;?>		
</div>