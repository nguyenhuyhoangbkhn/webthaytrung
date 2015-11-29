
<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/angular.min.js"></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="header-web">
<div class="container ">
	<div id="mainmenu" class="row npl navbar-right user-header" >
		<?php $this->widget('wHeader');?>
	</div><!-- mainmenu -->
</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-4 npl">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/site/index"><img src="<?php echo Yii::app()->request->baseUrl; ?>/image/logo.png"></a>
	</div>
	<div class="col-md-4 npr">
		<form method="POST"  id = "" action="<?php echo Yii::app()->createUrl('Book/search1') ?>">
                <input id = "searchname" class="form-control form-input form-input-tripopus input-tripopus search_input"type="search" placeholder="search" name="search_str" >
                <button id = "butsearch" class="hidden">Search</button>
        </form>
	</div>
		<div class="col-md-4">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/site/login"><button  class="btn btn-create btn-itineary">Đăng nhập</button></a>
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/user/create"><button class="btn btn-create btn-courses">Đăng kí</button></a>
	</div>
	

</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 nplr background-white border-top-right border-left border-bottom border-bottom-left border-bottom-right">
			<div class="col-md-3 nplr ">
				<div class="all-ctg nplr">
				<p class="all-category">Category</p>
				</div>
				<?php $this->widget('wCategory');?>
				<div class="all-ctg nplr">
				<p class="all-category margin-top-20">Thông báo mới</p>
				</div>
				<?php $this->widget('wThongbao');?>
				<div class="all-ctg nplr">
				<p class="all-category margin-top-20">Tìm sách theo giá</p>
				</div>
				<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/gia&gia=1"><p class="category">Thấp hơn 50.000vnđ</p>
				</a>
				<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/gia&gia=2"><p class="category">Từ 50.000 đến 100.000vnđ</p>
				</a>
				<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/gia&gia=3"><p class="category">Từ 100.000 đến 200.000vnđ</p>
				</a>
				<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/gia&gia=4"><p class="category">Lớn hơn 200.000vnđ</p>
				</a>
				
			</div>
			<div class="col-md-9 nplr border-top-right">
				<div class="newest-book nplr border-right border-left border-top border-top-right" id="content-main">
					<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
					<?php endif?>

					<?php echo $content; ?>
			
				</div>
			</div>
			<div class="border-top">
			<div class="fb-like" data-href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" data-width="445" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

	<!--luu comments cho tung trang web-->
			<div class="fb-comments facebook" data-href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" data-width="905" data-numposts="10" data-colorscheme="light">
			</div>		
			</div>
				<!--like button facebook-->
	
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=919055684783017";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<!--end like button-->

	<!--comment facebook-->
	
		<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=919055684783017";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<!--end comment facebook-->

		</div>
		<div class="col-md-4">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/image/quangcao.png" class="border border-radius-5">
			<?php $this->widget('wTop_nxb');?>
			<?php $this->widget('wTop_tacgia');?>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
$(window).scroll(function () {
if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
else $('#goTop').fadeOut();
});
$('#goTop').click(function () {
$('body,html').animate({scrollTop: 0}, 'slow');
});
});
</script>
<div id="goTop">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/image/2.png" title="Lên đầu trang" />
</div>


<div id="footer">
	<div class="container">
		<div class="row">
            <div class="col-md-4">
            <div class="row">
               <p>Công ty TNHH Hedspi Việt Nam</p>
               <p>Tầng 4,5 Tòa nhà D9 Đại Học Bách Khoa Hà Nội</p>
               <p>Hà Nội, Việt Nam</p>
               <p>hedspi@gmail.com</p>
               <br />
               <span id="color-enjoy">Chọn ngôn ngữ</span> <a href="#" class="enjoy">Japanes</a> <a href="#" class="enjoy">Việt Nam</a>
               <a href="#" data-toggle="modal" data-target="#fullTipModal"><p>Bản đồ</p></a>
            </div>
            </div>
        
	        <div class="col-md-4">
	        	<div class=" footer-img">
	        	<p id="tripopus-social">Tìm chúng tôi trên</p>
	               <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/facebook.png">
	               <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/google.png">
	               <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/youtube.png">
	               <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/twitter.png">
	            </div>
	        </div>
	        <div class="col-md-4">
	        	<div class="row">
	        	    <div class="col-md-5">
	        	    <div class="row">
                    <input class="form-control form-input  input-tripopus" type="text" placeholder=" Name " > 
                    </div>
               	    </div>
               		<div class="col-md-7">
               		<div class="row"style="padding-left:10px; margin-bottom:10px;" >
                  	<input class="form-control form-input form-input-tripopus input-tripopus" type="text" placeholder="Email">
                  	</div>
               		</div>
               		<textarea class = "oponion form-control col-md-12 input-tripopus" rows="3" style="margin-bottom:10px;" placeholder="Send us your opinions"></textarea>
               		<button type="button" class="btn btn-default btn-tripopus btn-sm col-md-12" style="">Send </button>
               </div>
	        </div>
        </div>
	</div>
</div>
<div id="copyright">
	<div class="container">
		<center><p id="right-reserved">© 2015 - All Rights Reserved</p></center>
	</div>
</div>

<div class="modal fade margin-top-30" id="fullTipModal">
   <div class="modal-dialog">
         <div class="report-modal-header background-white">
            <div class="popup-close">
            </div>
            <div class="suport-popup-close">
               
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <span class="modal-title margin-left-15" id="full_tip_name">Bản đồ đường đi đến cửa hàng</span>
         </div>
      <div class="background-white border-bottom-right border-bottom-left">
         <div class="modal-body row">
 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.666488241077!2d105.84078531444494!3d21.00600199393195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac77acea3043%3A0x7030dea9a0b16d02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1448769322413" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
         <div class="modal-footer">
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-553f171b421b5051" async="async"></script>
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",31775]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
</body>
</html>
