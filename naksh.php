<!doctype html>
<html lang="en">
	<head>
		  <title></title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDriEEhWp_WxT82Fd_ArinWKxyqlJcM9-Y&callback=myMap"></script>
 		  
 		  <script>
		 		$('.carousel').carousel({
		  		interval: 1000
		  		});
				function myMap() {
					var mapOptions = {
					    center: new google.maps.LatLng(51.5, -0.12),
					    zoom: 10,
					    mapTypeId: google.maps.MapTypeId.HYBRID
					}
					var map = new google.maps.Map(document.getElementById("map"), mapOptions);
					}
		 </script> 
		  <style type="text/css">
				body{
					overflow-x: auto;
    				overflow-y: scroll;
    				font-size: 10px;
   					font-family: Arial, Helvetica, sans-serif;
				}
				.background{
					background-image: url('/nakshcarpets/public_html/img/layout/background.jpg');
					background-repeat: repeat; 
				}
				ul{
			        padding: 0;
			        list-style: none;
			        background: #f2f2f2;
			    }
			    ul li{
			        display: inline-block;
			        position: relative;
			        line-height: 35px;
			        text-align: center;
			    }
			    ul li a{
			        display: block;
			        padding: 8px 25px;
			        color: #22476d;
			        text-decoration: none;
			    }
			    ul li a:hover{
			        color: #fff;
			        background: #22476d;
			    }
			    ul li ul.dropdown{
			        min-width: 100%; /* Set width of the dropdown */
			        background: #f2f2f2;
			        display: none;
			        position: absolute;
			        z-index: 999;
			        left: 0;
			    }
			    ul li:hover ul.dropdown{
			        display: block; /* Display the dropdown */
			    }
			    ul li ul.dropdown li{
			        display: block;
			    }
			    .carousel-inner > .item > img,
				.carousel-inner > .item > a > img {
				    width: 100%;
				    height: 55em;
				}
				#trans-background{
					background: rgb(0,0,0); 
				    margin-top: 50px;
				    display: flex;
				    height: 600px;
				    width: 100%;
				    background: rgba(0, 0, 0, .5);
				}/*
				#img-box{
					line-height: 100px;
				}
				#img-box img{
					vertical-align: middle;
				}*/
/*--------------------------------------------------tablet-------------------------------------------------*/
			@media only screen and (max-width: 991px) and (min-width: 768px) {
			
		
			}


/*--------------------------------------------------phone-------------------------------------------------*/
			@media only screen and (max-width: 767px) and (min-width: 480px) {


			}


/*--------------------------------------------------phone-------------------------------------------------*/
			@media only screen and (max-width: 479px) {

			}

		  </style>
	</head>
	<body>
		<div class="background">
			<div class="row" style="text-align: center;">	
					<h1>NAKSH CARPET</h1>
			</div>

			<div class="row">
		    	<ul>
			        <li><a href="#">HOME</a></li>
			        <li><a href="#">ABOUT CARPET</a></li>
			        <li>
			            <a href="#">GALLERY &#9662;</a>
			            <ul class="dropdown">
			                <li><a href="#">Casual</a></li>
			                <li><a href="#">Classic</a></li>
			                <li><a href="#">Floral</a></li>
			                <li><a href="#">Geometric</a></li>
			                <li><a href="#">Solid</a></li>
			                <li><a href="#">Mordern</a></li>
			                <li><a href="#">Traditional</a></li>
			                <li><a href="#">Over Dyed</a></li>
			                <li><a href="#">Shaggy</a></li>
			            </ul>
			        </li>
			        <li><a href="#">CONTACT US</a></li>
			    </ul>
			</div>

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
				    <div class="item active">
				      <img src="/nakshcarpets/public_html/img/slider/image1.jpg">
				    </div>
				    <div class="item">
				      <img src="/nakshcarpets/public_html/img/slider/image2.jpg">
				    </div>
				    <div class="item">
				      <img src="/nakshcarpets/public_html/img/slider/image3.jpg">
				    </div>
				    <div class="item">
				      <img src="/nakshcarpets/public_html/img/slider/image4.jpg">
				    </div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
			<div class="row" id="trans-background" >
				<div class="col-sm-6" id= "img-box" style="margin-top: 4%; margin-bottom: 4%; margin-left: 4%">
					<img src="/nakshcarpets/public_html/img/slider/image4.jpg" style="width:100%; height: 100%;" />				
				</div>
				<div class="col-sm-6" id= "img-box" style=" margin-bottom: 4%; margin-top: 2%; color: #ffffff; font-size: 18px; letter-spacing: 1px;" >
					<h2><span style="font-size: 34px; font-weight: bold; letter-spacing: 2px; ">ABOUT US</span></h2><hr>					
					<p>nAksh offers expertly manufactured hand-woven carpets and rugs to distributors, dealers and wholesale worldwide using best-quality wool. Our excellence lies in carrying our heritage along with innovation; and from the very beginning, our company has been known for providing superior quality at competitive prices. </p><br>
					<p>nAksh specializes in exceptional designs with a certain "extra" portraying an inspiring story for each floor suit and offers complete support for any distinctive interior or can be choosen from our already available designs and caters the demand of home, hotels and all kinds of commercial establishments.</p><br>
					<p>nAksh focuses on custom made hand-tufted and hand-knotted carpets and rugs using best-quality wool and deals in creating perfect rugs for homes, hotels, and all kinds of commercial areas.</p>
				</div>
			</div>
			<div class="row" style="background: rgba(0, 0, 0, .9); ">
				<div class="row" style="margin-left: 3% ; margin-top: 3%; margin-bottom: 3%; font-size: 20px; font-weight: bold; letter-spacing: 2px; color: #ffffff">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-8">
							<h2><span style="font-size: 34px; font-weight: bold; letter-spacing: 2px; color: #ffffff">CONTACT US</span></h2><hr></div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<p>Tel: +91-73763 5 7737</p>
								<p>Tel: +65-8260 7747</p>
							</div>
							<div class="col-sm-6">
								<p>Sabri, Mirzapur,</p>
								<p>Uttar Pradesh,</p>
								<p>India-231001</p>
								<p>nakshcarpets@gmail.com</p>
							</div>
						</div>

						<div class="row" style="color: #000000; font-weight: none;">
							<div class="col-sm-6" >
								<form id="form1">
									<input type="text" id="fname" name="firstname" placeholder="First Name">
									<input type="email" id="email" name="email" placeholder="Email">
									<input type="text" id="subject" name="subject" placeholder="Subject" >
								
							</div>
							<div class="col-sm-6">
									<textarea id="message" name="message" placeholder="Message" style="height:100px"></textarea>
									<button type="submit" form="form1" value="Submit">Submit</button>
								</form>
							</div>
							
						</div>

						
					</div>
					<div class="col-sm-5" id="map" style="width:400px;height:350px; background:yellow;">
						
					</div>
				</div>
				
			</div>
		</div>

		
	</body>
</html>
   			
	