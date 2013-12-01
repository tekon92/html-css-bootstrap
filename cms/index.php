<?php 
	include_once('includes/connection.php');
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acrostia</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<section id="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">
					  <!-- Brand and toggle get grouped for better mobile display -->
					  <div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					      <span class="sr-only">Toggle navigation</span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					    </button>
					    <a class="navbar-brand" href="#">Brand</a>
					  </div>

					  <!-- Collect the nav links, forms, and other content for toggling -->
					  <div class="collapse navbar-collapse col-md-offset-3" id="bs-example-navbar-collapse-1">
					    <ul class="nav navbar-nav">
					      <li class="active"><a href="#">home</a></li>
					      <li><a href="#">about</a></li>
					      <li><a href="#">services</a></li>
					      <li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">portfolio <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Action</a></li>
					          <li><a href="#">Another action</a></li>
					          <li><a href="#">Something else here</a></li>
					          <li class="divider"></li>
					          <li><a href="#">Separated link</a></li>
					          <li class="divider"></li>
					          <li><a href="#">One more separated link</a></li>
					        </ul>
					      </li>
					      <li><a href="#">blog</a></li>
					      <li><a href="#">features</a></li>
					      <li><a href="#">contact</a></li>
					      <li><a href="#"><span class="search"></span></a></li>
					    </ul>
					  </div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
		</div>
	</section>

	<div class="jumbotron text-center img-responsive">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <span id="big-header" class="img-responsive">
			        <h1>vestibulum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Expedita suscipit excepturi similique?</p>
		      </span>
		    </div>
		    
		    <div class="item">
		    	 <span id="big-header">
		      	<div class="carousel-caption">
			        <h1>vestibulum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, eius, fuga maiores odio inventore ab ad! Accusamus, ipsa, repellendus, quidem, magnam placeat cum doloribus aspernatur tempore tenetur provident id tempora.</p>
		      	</div>
		      </span>
		    </div>

		    <div class="item">
		    	 <span id="big-header">
		      	<div class="carousel-caption">
			        <h1>vestibulum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, eius, fuga maiores odio inventore ab ad! Accusamus, ipsa, repellendus, quidem, magnam placeat cum doloribus aspernatur tempore tenetur provident id tempora.</p>
		      	</div>
		      </span>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div>
	</div>
	<div class="container">
		<section id="another-srv">
			<div class="row">
				<div class="col-md-10">
					<h3>some of our top services</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste earum qui cumque ullam eaque. Cumque.</p>
				</div>
				<div class="col-md-2">
					<button type="button" class="another-btn btn btn-primary btn-block">view more</button>
				</div>
			</div>
		</section>
		<div class="clearfix">...</div>
		<section id="service">
			<div class="row text-center">
				<div class="selow col-md-3">
					<span class="service-img ser1"></span>
					<h4>suspendisme</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, nobis temporibus alias similique beatae debitis asperiores provident tempore natus perferendis in mollitia vero aliquid deleniti eaque veritatis dolores corporis officiis.</p>
					<div class="row">
						<div class="col-md-10">
							<button type="button" class="btn btn-primary btn-block">view more</button>
						</div>
					</div>
				</div>
				<div class="selow col-md-3">
					<span class="service-img ser2"></span>
					<h4>malicenas</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, nobis temporibus alias similique beatae debitis asperiores provident tempore natus perferendis in mollitia vero aliquid deleniti eaque veritatis dolores corporis officiis.</p>
					<div class="row">
						<div class="col-md-10">
							<button type="button" class="btn btn-primary btn-block">view more</button>
						</div>
					</div>
				</div>
				<div class="selow col-md-3">
					<span class="service-img ser3"></span>
					<h4>abiquam</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, nobis temporibus alias similique beatae debitis asperiores provident tempore natus perferendis in mollitia vero aliquid deleniti eaque veritatis dolores corporis officiis.</p>
					<div class="row">
						<div class="col-md-10">
							<button type="button" class="btn btn-primary btn-block">view more</button>
						</div>
					</div>
				</div>
				<div class="selow col-md-3">
					<span class="service-img ser4"></span>
					<h4>abitasse</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus placeat rem consequatur soluta ipsam quis minima! Consectetur, alias, nisi, aliquam, excepturi deleniti voluptas perspiciatis minus facere consequatur molestiae velit eos?</p>
					<div class="row">
						<div class="col-md-10">
							<button type="button" class="btn btn-primary btn-block">view more</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="clearfix">...</div>
		<section id="why">
			<div class="row text-center">
				<div class="col-md-12">
					<h2>why modus Lorem ipsum dolor.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, dolore accusamus sapiente ad provident inventore?</p>
				</div>
			</div>
			<div class="clearfix">...</div>
			<div class="row">
				<div class="col-md-12">
					<span class="browser-img"></span>
				</div>
			</div>
		</section>
		<div class="clearfix">...</div>
		<div class="clearfix">...</div>
		<section id="performance">
			<div class="row">
				<div class="col-md-3">
					<h4>why choose us</h4>
					<ul class="skill-stat">
						<li>Lorem ipsum dolor.</li>
						<li>Lorem ipsum dolor.</li>
						<li>Lorem ipsum dolor.</li>
						<li>Lorem ipsum dolor.</li>
						<li>Lorem ipsum dolor.</li>
						<li>Lorem ipsum dolor.</li>
					</ul>
				</div>
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, facilis aliquid qui pariatur ducimus eum <a href="#" class="words">quisquam consequuntur</a>. Explicabo, architecto, illum est qui iusto inventore dolore blanditiis eaque in provident praesentium.</p>
					<ul class="lorem">
						<li><span class="perf-img perf1"></span><h4>lorem</h4></li>
						<li><span class="perf-img perf1"></span><h4>lorem</h4></li>
						<li><span class="perf-img perf1"></span><h4>lorem</h4></li>
						<li><span class="perf-img perf1"></span><h4>lorem</h4></li>
					</ul>
				</div>
				<div class="righty col-md-3">
					<h4>what customer say?</h4>
					<blockquote>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, consequuntur, quibusdam, quo provident accusamus officiis rem doloribus amet tempora vitae dolorem explicabo praesentium placeat ab aperiam nobis eaque deleniti velit!</p>
						<cite>john doe</cite>
					</blockquote>
				</div>
			</div>
		</section>
		<div class="clearfix">...</div>
		<section id="clients">
			<div class="row">
				<div class="col-md-12">
					<h4>our happy clients</h4>
					<ul class="arr">
						<li><span class="arrow left"></span></li>
						<li><span class="arrow rigth"></span></li>
					</ul>
					<ul class="client">
						<li><span class="happy"></span></li>
						<li><span class="happy"></span></li>
						<li><span class="happy"></span></li>
						<li><span class="happy"></span></li>
						<li><span class="happy"></span></li>
						<li><span class="happy"></span></li>
					</ul>
					
				</div>
			</div>
		</section>
		<div class="clearfix">...</div>
	</div>
	<footer>
		<div class="clearfix">...</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a class="navbar-brand" href="#">Brand</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, pariatur, laboriosam, dignissimos maiores ipsum nihil facere ad quis aspernatur expedita quibusdam saepe odit autem provident laudantium cum numquam vitae iste!</p>
					<address>
						  <abbr title="Phone">Phone:</abbr> (123) 456-7890 <br>
						  <abbr title="Email">Email:</abbr><a href="#">info@acrostia.com</a> <br>
					</address>
				</div>
				<div class="col-md-2">
					<h5>company</h5>
					<ul class="company">
						<li><a href="#">About</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h5>comunity</h5>
					<ul class="comunity">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<span class="blog"></span>
					<div class="row">
						<div class="col-md-4"><span class="avatar"></span></div>
						<div class="col-md-8">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, doloremque!</p>
							<small>12 maret 2013</small>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4"><span class="avatar"></span></div>
						<div class="col-md-8">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, doloremque!</p>
							<small>12 maret 2013</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(function(){
			$('.carouselBanner').carousel(),
			$('.collapse').collapse('')
		});
	</script>
</body>
</html>