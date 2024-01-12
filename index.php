<!doctype html>
<html lang="en">
	<head>
		<title>Jamia Darul Quran | Home</title>
		<?php include_once 'includes/head.php'; ?>
	</head>
<?php
include_once 'includes/header.php';
?>
<div class="container-fluid padding-none">
	<div id="myCarousel" class="carousel slide row" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
			<li data-target="#myCarousel" data-slide-to="8"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/slider/1.jpg" style="width: 100% 
				!important; height: 50%" alt="">
			</div>
			<div class="item">
				<img src="images/slider/2.jpg" style="width: 100% 
				!important; height: 50%" alt="">
			</div>
			<div class="item">
				<img src="images/slider/3.jpg" style="width: 100% 
				!important; height: 50%" alt="">
			</div>
			<div class="item">
				<img src="images/slider/4.jpeg" style="width: 100% 
				!important; height: 50%" alt="">
			</div>
			<div class="item">
				<img src="images/slider/5.jpg" style="width: 100% 
				!important; height: 50%" alt="">
			</div>
			<div class="item">
				<img src="images/slider/6.jpg" style="width: 100% 
				!important; height: 50%" alt="">
			</div>
			<div class="item">
				<img src="images/slider/8.jpg" style="width: 100% 
				!important; height: 50%" alt="">
			</div>
			<div class="item">
				<img src="images/slider/9.jpg" style="width: 100% 
				!important; height: 50%" alt="">
			</div>
				<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>	
	</div>	
				<div class="row" style="margin-top: 5%;margin-bottom: 5%;">
	<center>
		<div onclick="window.location='admission.php'" class="border col-md-4">
			<img src="images/home-pic/dakhla-2.png" alt="Please Wait"> <br>
			<a href="admission.php" class="btn btn-primary home_button">
				<font>تفصیل</font>
			</a>
		</div>
		<div onclick="window.location='exam.php'" class="border col-md-4">
			<img src="images/home-pic/exam-2.png" alt="Please Wait"> <br>
			<a href="exam.php" class="btn btn-primary home_button">
				<font>تفصیل</font>
			</a>
		</div>
		<div onclick="window.location='download.php'" class="border col-md-4">
			<img src="images/home-pic/download-2.png" alt="Please Wait"> <br>
			<a href="download.php" class="btn btn-primary home_button">
				<font>تفصیل</font>
			</a>
		</div>
	</center>
	</div>
	<div class="first_floor_image fixed_img">
        <div class="img"></div>
    </div>
	<div class="row">
	<center>
		<div onclick="window.location='progress-report.php'" class="border col-md-4">
			<img src="images/home-pic/progress-report-2.png" alt="Please Wait"> <br>
			<a href="progress-report.php" class="btn btn-primary home_button">
				<font>تفصیل</font>
			</a>
		</div>
		<div onclick="window.location='branches.php'" class="border col-md-4">
			<img src="images/home-pic/branches-2.png" alt="Please Wait"> <br>
			<a href="branches.php" class="btn btn-primary home_button">
				<font>تفصیل</font>
			</a>
		</div>
		<div onclick="window.location='about.php'" class="border col-md-4">
			<img src="images/home-pic/about-us-2.png" alt="Please Wait"> <br>
			<a href="about.php" class="btn btn-primary home_button">
				<font>تفصیل</font>
			</a>
		</div>
	</center>
	</div>
</div>

<?php
include_once 'includes/footer.php';
?>