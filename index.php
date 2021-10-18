<?php
	// phpinfo();
	// die();
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; Fakhrotunnisa-Aditya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<link rel="shortcut icon" href="images/wedding-rings.png">

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- swiper css & js -->
	<link rel="stylesheet" href="css/swiper.min.css">
	
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/carousel/">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Vibur&display=swap" rel="stylesheet">
	<link href="http://fonts.cdnfonts.com/css/photograph-signature" rel="stylesheet">

	<script type="text/javascript">
	$(function() {
		$('#gallery a').lightBox();
	});
	</script>
			<style>
				
				@media(max-width : 720px)
				{
					#fh5co-header
					{
						background-image: url(images/undangan/galeri-depan.jpeg);
					}
				}
				@media(min-width : 720px)
				{
					#fh5co-header
					{
						background-image: url(images/undangan/galeri-depan.jpeg);						
					}
				}
				.float
				{
					position: fixed;
					width: 50px;
					height: 50px;
					bottom: 95px;
					right: 20px;
					background-color: #af9e96;
					opacity: 0.5;
					color: #FFF;
					border-radius: 50px;
					text-align: center;
					padding-top:9px;	
					z-index: 1;
					
				}
				.videoWrapper 
				{
					position: relative;
					padding-bottom: 56.25%; /* 16:9 */
					padding-top: 25px;
					height: 0;
				}
				.videoWrapper iframe {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
				}
				
				.navbar {
					position: fixed;
					z-index: 999;
					top: 500px;
					left: 10px;
					color :#b19569;
				}

				

			

			/* Add Animation */
			@-webkit-keyframes animatetop {
			  from {top:-300px; opacity:0} 
			  to {top:0; opacity:1}
			}

			@keyframes animatetop {
			  from {top:-300px; opacity:0}
			  to {top:0; opacity:1}
			}

			/* The Close Button */
			.close {
			  color: brown;
			  float: right;
			  font-size: 28px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: #000;
			  text-decoration: none;
			  cursor: pointer;
			}

			.modal-header {
			  padding: 2px 16px;
			  color: #fefefe;
			}

			.modal-body {
				padding: 2px 16px;
				margin-bottom: 30px;
			}

			.modal {
				position: fixed;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				overflow: hidden;
			}
			.modal-dialog {
				position: fixed;
				margin: 0;
				width: 100%;
				height: 100%;
				padding: 0;
			}

			.modal-content {
				position: absolute;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				border: 2px;
				border-radius: 0;
				box-shadow: none;
			}


			
			</style>
	</head>
	<body>
	<audio loop preload='auto'  id="myAudio" autoplay="true">
	  <source src="sound/sound.mp3">
	</audio>
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" >
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" style="background-image:url('images/undangan/cover-depan.jpeg');background-position:center;background-repeat:no-repeat;background-size:cover;">
			
			<div class="modal-body">
				<div style="margin-top:10%;">
					<p style="font-family:'Josefin Sans', Sans-serif;text-align:center;color:white">Wedding Announcement</p>
				</div>
				<div style="margin-top:10%;">
					<p style="font-family:'Photograph Signature', Sans-serif;text-align:center;color:white;font-size:40px">Fakhrotun Nisa & Aditya</p>
				</div>
				<div style="margin-top:60%">
					<div style="margin-top:10%;text-align:center;">
						<h3 style="color:white;margin-bottom:0"></h3>
						<p style="color:white"></p>
						<p id="" style="color:#5e6e37;font-weight:600;font-size:25px"></p>
						
					</div>	
					<div>
						<center><button type="button" class="btn btn-default" data-dismiss="modal" style="width:100%;border-radius:6.1px;font-family:'Sacramento', Arial, serif;font-weight:bold" id="btnOp">&#10084; Buka Undangan</button></center>
					</div>
				</div>
			</div>
			
			</div>

		</div>
	</div>
	<!-- <a onclick="playAudio()" type="button" id='un-mute' class='float'><img src='images/music-mute.png' width='30px;'></a>
	<a onclick="pauseAudio()" type="button" id='mute'  class='float'><img src='images/music.png' width='30px;'></a> -->
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.php">Wedding<strong>.</strong></a></div>
				</div>
				
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1 style="margin-top:80%">Fakhrotun Nisa &amp; Aditya</h1>
							<h2>We Are Getting Married</h2>
							<!-- <div class="simply-countdown simply-countdown-one"></div> -->
							
							<p>

								<!-- <a target="_blank" href="https://calendar.google.com/calendar/u/0?cid=cm01N2hxcW9rdm5nbmduN3YwdWtzcWtyM29AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ" class="btn btn-default btn-sm">Save the date</a> -->
								<a target="_blank" href="https://calendar.google.com/calendar/ical/mj0ik7g0bepo0e89fojhik0ae8%40group.calendar.google.com/public/basic.ics" class="btn btn-default btn-sm">Save the date</a>
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple" style="background-color: #89b6e0;background-repeat: no-repeat;background-size: cover;">
  		<div class="overlay"></div>	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<!-- <img src="images/bunga4.png" width="220px" height="70" style="padding-bottom:20px;"/> -->
					<h2 style="font-size: 25px;color: white;">Assalamu’alaikum Warahmatullahi Wabarakatuh</h2>
					<p style="color: white;">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.<br>(Q.S. Ar Rum:21)</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="">
						<img src="images/undangan/wanitaaa.jpeg" alt="groom" class="img-responsive" style="border-radius:10px">
					</div>
					<div class="desc-groom">
						<h3 style="text-align: center;font-size: 31px;color: white;">Fakhrotun Nisa</h3>
						<p style="text-align: center;color: white;">Putri dari<br> Drs. H. Syamsudin & <br>Ibu Asiah, S.Ag.</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="">
						<img src="images/undangan/priaaa.jpeg" alt="groom" class="img-responsive" style="border-radius:10px">
					</div>
					<div class="desc-bride">
						<h3 style="text-align: center;font-size: 31px;color: white;">Aditya Arif Pratama</h3>
						<p style="text-align: center;color: white;">Putra dari <br>Adang Sapari, S.E. & <br>Ibu Euis Hernawati, S.E., M.M.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-color: #89b6e0;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<!-- <span>Our Special Events</span> -->
					<!-- <img src="images/bunga4.png" width="220px" height="70" style="padding-bottom:20px;"/> -->
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box" style="background:none;border:none;">
									<h3>Akad Nikah</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>08:00</span>
										<span>12:00</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Sabtu 23</span>
										<span>Oktober, 2021</span>
										
									</div>
									<i class="icon-location"></i>
									<p>RM. Saung Ema</p>
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-gallery" class="fh5co-section-gray" style="background-color: #89b6e0;background-repeat: no-repeat;background-size: cover;">
		<div class="container" style="font-family: 'Work Sans', sans-serif;">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<!-- <img src="images/bunga4.png" width="220px" height="70" style="padding-bottom:20px;"/> -->
					<h2 style="color: white;">Our Gallery</h2>
					<p>
					
					</p>
				</div>

			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<div class="row">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
						    
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						  	<div class="item active">
						      <img src="images/undangan/galeri-depan.jpeg" alt="...">
						      <div class="carousel-caption">
						        
						      </div>
						    </div>
						    <div class="item">
						      <img src="images/undangan/1.jpeg" alt="...">
						      <div class="carousel-caption">
						        
						      </div>
						    </div>
						    <div class="item">
						      <img src="images/undangan/2.jpeg" alt="...">
						      <div class="carousel-caption">
						       
						      </div>
						    </div>
						    
						    
						    <div class="item">
						      <img src="images/undangan/cover-depan.jpeg" alt="...">
						      <div class="carousel-caption">
						        
						      </div>
						    </div>
						    
						    <div class="item">
						      <img src="images/undangan/wanita.jpeg" alt="...">
						      <div class="carousel-caption">
						        
						      </div>
						    </div>

							<div class="item">
						      <img src="images/undangan/3.jpeg" alt="...">
						      <div class="carousel-caption">
						        
						      </div>
						    </div>
						    
						    
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
					
					
						
				</div>		
				
			</div>
		</div>
	</div>
	
	<div id="fh5co-gallery" class="fh5co-section-gray" style="background-color: white;padding-bottom: 0;">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<p>Maps</p>
					<h2>Find US</h2>
					
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="586" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663.6521077418895!2d108.46986670717753!3d-6.977356335016885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f15d58cec7eb9%3A0x379122cfb91c644e!2sRM%20New%20Saung%20Ema&#39;!5e0!3m2!1sid!2sid!4v1634462868972!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.enable-javascript.net/blog/divi-discount/"></a></div><style>.mapouter{position:relative;text-align:right;height:586px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:586px;width:100%;}</style></div>
				</div>
			</div>
			
				<p style="color:white;padding:0px;margin-top: 10px;"><a href="https://g.page/saung_ema_kuningan?share" target="_blank" class="btn btn-default btn-sm" 
					style="background-color:#373135;color:white;padding:10px;font-weight:bold;width:100%;" class="animate-box">Google Maps Direction</a>
				</p>
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<p>Namun dikarenakan keterbatasan kondisi saat ini, mohon maaf kami hanya mengundang keluarga dan kerabat terdekat untuk menghadiri acara secara langsung.</p>
					<h2 style="font-size: 25px;">Wassalamu’alaikum Warahmatullahi Wabarakatuh</h2>
				</div>
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>New Normal Protocols</h2>
					<img src="images/covid.png" style="width:100%;" class="animate-box" />
				</div>
					
			
			
		</div>
	</div>
	
	<div id="fh5co-testimonial" style="padding-top: 8px;" style="background-color: white;">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<!-- <span>Best Wishes</span> -->
						<!-- <img src="images/bunga3.png" width="220px" height="70" style="padding-bottom:20px;"/> -->
						<h2>Friends Wishes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="swiper-container">
							<div class="swiper-wrapper">
									<?php
								      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
								      $query = "SELECT * FROM tb_otun ORDER BY id ASC";
								      $result = mysqli_query($koneksi, $query);
								      //mengecek apakah ada error ketika menjalankan query
								      if(!$result){
								        die ("Query Error: ".mysqli_errno($koneksi).
								           " - ".mysqli_error($koneksi));
      									} 
      									while($row = mysqli_fetch_assoc($result))
      									{
      									?>
								<div class="swiper-slide">
									<div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
										
										<span><?php echo $row['nama'];?></span><br>
										<span><?php echo $row['alamat'];?></span>
										<blockquote>
											<p><?php echo $row['pesan'];?></p>
										</blockquote>
									</div>
								</div>
									<?php
										}
									?>
								<!-- <div class="swiper-slide">
									<div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
										
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
								<div class="swiper-slide">
									<div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
										
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div> -->

							</div>
								<div class='swiper-button-next'></div>
								<div class='swiper-button-prev'></div>
								<div style='clear:both;'><br><br></div>
						</div>
					</div>
					<div class="clear;both">
						
					</div>
					<div class="container">
						<form class="form-inline" method="post" action="tambah_pesan.php">
							<input type='hidden' name='id_event' value='157'>
										
							<div class='form-group' style='display:block; width:100%;'>
							
								<!-- <input type='hidden' name='header_link' value='http://grinvitation.com/audiaaudywedding'> -->
								<input type='name' class='form-control' id='name' placeholder='Name' name='nama' required style='width:100%;'>
								
							</div>
							<div class='form-group' style='display:block; width:100%;'>
							
								<!-- <input type='hidden' name='header_link' value='http://grinvitation.com/audiaaudywedding'> -->
								<input type='text' class='form-control' id='alamat' placeholder='Address' name='alamat' required style='width:100%;'>
								
							</div>
							
							<div style='clear:both;margin-bottom:5px;'></div>
							<div class='form-group'style='display:block; width:100%;'>
								<textarea class='form-control' id='wishes' placeholder='Wishes' rows='10' name='pesan' required style='width:100%;'></textarea>
							</div>
							<div style='clear:both;margin-bottom:5px;'></div>
							<div style='width:100%;'>
								<button type='submit' class='btn btn-block' style='color:white; background-color:#45403d;'>SUBMIT</button>
							</div>
							
						</form>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> &amp; MF Ashiddiqi </small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/MFiqriAshiddiqi"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/fiqriashiddiqi/?hl=id"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com/in/muhamad-fiqri-ashiddiqi-738768109/"><i class="icon-linkedin"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- swiper js -->
	<script src="js/swiper.min.js"></script>

	<script>


	// Get the modal
	var modal = document.getElementById("myGift");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	  modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}


	</script>
					  <script>
					var swiper = new Swiper('.swiper-container', {
					  navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					  },
					});
				  </script>

	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: 2021,
        month:10,
        day: 23,
        hours: 16,
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: 2020,
        month: 11,
        day: 1,
        enableUtc: true
    });
</script>
	<script>
		document.getElementById('mute').style.display = 'none';
		
		var x = document.getElementById("myAudio"); 
		function playAudio() { 
			x.play();
			document.getElementById('un-mute').style.display = 'none';
			document.getElementById('mute').style.display = 'inline-block';	
		} 
		function pauseAudio() { 
			x.pause();
			document.getElementById('mute').style.display = 'none';
			document.getElementById('un-mute').style.display = 'inline-block';
		}
	</script>
	<script type="text/javascript">
		var myAudio = document.getElementById("myAudio");
		var audioIsPlaying = false;
		myAudio.loop = true;

		function audioPlay() {
		  audioIsPlaying ? myAudio.pause() : myAudio.play();
		};

		myAudio.onplaying = function() {
		  audioIsPlaying = true;
		};

		myAudio.onpause = function() {
		  audioIsPlaying = false;
		};		

		$(window).load(function(){        
			$('#myModal').modal('show');
			$('#btnOp').on('click',function(){
				$('#myModal').modal('hide');
				audioPlay();
			})
		});
	</script>

	</body>
</html>

