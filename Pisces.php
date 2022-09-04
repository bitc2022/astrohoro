<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>dailyhoro</title>



<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="calender/css/style.css">



<style>
.scroll {
    overflow-y: scroll;
    height: 800px;
    width: 500px;
    background-color: #fff;
    margin: 0 0 10px 0;
}
.scroll::-webkit-scrollbar {
    width:5px;
}
.scroll::-webkit-scrollbar-track {
    -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius:5px;
}
.scroll::-webkit-scrollbar-thumb {
    border-radius:5px;
    -webkit-box-shadow: inset 0 0 6px red; 
}
</style>



</head>

<body>


				 <h2 style="text-align:center">Todays Pisces Horoscope</h2>
	<div class="scroll" >	
	<div class="content">
	<!--gallery-->
			<div class="gallery-section">
					<div class="container">
					<div class="welcome-grid">
				
				<div class="col-md-8">
					<div>
						
						<img src="images/pisces.png" alt=" " class="img-responsive" width="100" height="100"/>
<h3 style="padding-top: 0px">Pisces</h3>
<h4 style="padding-top: 10px"><?php 
include('simple_html_dom.php');
$html = file_get_html('https://www.prokerala.com/astrology/horoscope/?sign=pisces');
echo $html->find('h1',0)->innertext;
?></h4>

				
					
					</div>	

				</div>
		
				<div class="clearfix"> </div>
	
			</div>
<div class="banner-header">
<div class="container">
<h5 style="padding-top: 30px"><?php echo $html->find('p',1)->innertext;?></h5>
</div>
</div>	



  <div id="calendar"></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  
    <script src="calender/js/index.js"></script>
		</div>
	</div>
		</div>
</body>
</html>
