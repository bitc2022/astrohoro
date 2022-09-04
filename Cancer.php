<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>dailyhoro</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--lightbox-->
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
<!--lightbox-->
</head>
<body>

		<div class="banner-header">
			<div class="container">
				<h2>Todays Cancer Horoscope</h2>
			</div>
			</div>
	<div class="content">
	<!--gallery-->
			<div class="gallery-section">
					<div class="container">
					<div class="welcome-grid">
				
				<div class="col-md-8">
					<div>
						<?php 
						$anid=$_GET['anid'];
 $query=mysqli_query($con,"select * from tblanimal where ID='$anid'");
 while ($row=mysqli_fetch_array($query)) {
 ?>
						<img src="images/cancer.png" alt=" " class="img-responsive" width="100" height="100"/>
<h3 style="padding-top: 0px">Cancer</h3>
<h4 style="padding-top: 10px"><?php 
include('simple_html_dom.php');
$html = file_get_html('https://www.prokerala.com/astrology/horoscope/?sign=cancer');
echo $html->find('h1',0)->innertext;
?></h4>

					<?php }?>
					
					</div>	

				</div>
		
				<div class="clearfix"> </div>
	
			</div>
<div class="banner-header">
<div class="container">
<h5 style="padding-top: 30px"><?php echo $html->find('p',1)->innertext;?></h5>
</div>
</div>	


		</div>
	</div>
<!--gallery-->
<!--specials-->
		<?php include_once('includes/special.php');?>
			</div>
		<?php include_once('includes/footer.php');?>
</body>
</html>