		<?php 
			$model=User::model()->findByPk(Yii::app()->user->id);
			$user_id=Yii::app()->user->id;

		?>

		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				// array('label'=>'', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Đăng xuất ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		<?php if (!Yii::app()->user->isGuest) {
			if ($model->user_type=='1') {
				?>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/report/admin"><span class="glyphicon glyphicon-envelope report"></span></a>
			<?php
		}
			if ($model->user_type=='0') {
		?>
		
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/report/report&user_id=<?php echo $user_id;?>"><span class="glyphicon glyphicon-envelope report"></span></a>
		<?php
		} }
		?>
	
	<?php
		if (!Yii::app()->user->isGuest) {
		if ($model->user_type=='1') {
		?>
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/quanli" class="quanli"><span>Quản lí</span></a>
		<?php
		}
		}
		if(!Yii::app()->user->isGuest)
		{
			if ($model->user_type=='0') {
		?>
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/report/create" class="quanli"><span>Phản hồi</span></a>
		<?php
		}
	}
	?>