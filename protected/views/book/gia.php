<div id="ranking-itineary" class="row nplr gia">
	<p>Tìm kiếm theo giá</p>
</div>
	<?php
	 foreach($list_book as  $data):
	if ($model==1) {
		if ($data->cost<50000) {?>
	<div class="col-sm-4 book-new">
		<a class="sachmoi-ten" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $data->id;?>">
		<img class="sachmoi"src="<?php echo $data->image?>">
		<p><?php echo $data->name; ?></p>
		</a>
		<p class="sachmoi-ten"><?php echo $data->cost; ?> vnđ</p>
	</div>
	<?php
		}
	}

		if ($model==2) {
		if ($data->cost >= 50000 and $data->cost<100000) {?>
	<div class="col-sm-4 book-new">
		<a class="sachmoi-ten" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $data->id;?>">
		<img class="sachmoi"src="<?php echo $data->image?>">
		<p><?php echo $data->name; ?></p>
		</a>
		<p class="sachmoi-ten"><?php echo $data->cost; ?> vnđ</p>
	</div>
	<?php
		}
	}

		if ($model==3) {
		if ($data->cost >= 100000 and $data->cost<200000) {?>
	<div class="col-sm-4 book-new">
		<a class="sachmoi-ten" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $data->id;?>">
		<img class="sachmoi"src="<?php echo $data->image?>">
		<p><?php echo $data->name; ?></p>
		</a>
		<p class="sachmoi-ten"><?php echo $data->cost; ?> vnđ</p>
	</div>
	<?php
		}
	}

		if ($model==2) {
		if ($data->cost > 200000) {?>
	<div class="col-sm-4 book-new">
		<a class="sachmoi-ten" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $data->id;?>">
		<img class="sachmoi"src="<?php echo $data->image?>">
		<p><?php echo $data->name; ?></p>
		</a>
		<p class="sachmoi-ten"><?php echo $data->cost; ?> vnđ</p>
	</div>
	<?php
		}
	}?>
	<?php endforeach;?>	

	