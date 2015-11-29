<?php foreach($list as  $data):?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/thongbao/view&id=<?php echo $data->id;?>"><p class="category"><?php echo $data->title; ?></p>
	</a>
<?php endforeach;?>	