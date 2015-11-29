<?php foreach($list as  $data):?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/search&id=<?php echo $data->id;?>"><p class="category"><?php echo $data->name; ?></p>
	</a>
<?php endforeach;?>	