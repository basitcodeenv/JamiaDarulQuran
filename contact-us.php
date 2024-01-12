<!doctype html>
<html lang="en">
	<head>
		<title>Jamia Darul Quran | Contact Us</title>
		<?php include_once 'includes/head.php'; ?>
	</head>
<?php  
include_once 'includes/header.php';
?>
<div class="row">
	<div class="full">
	    <div class="full row">
	        <h3 id="heading_setting"><font>ہم سے رابطہ کریں</font></h3>
	        <div class="shadow col-md-12">
	        </div>
	    </div>
		<div class="email">
			<form method="post" action="includes/ajax_parsers.php" style="font-size: 18px !important;">
				<div class="form-group">
					<label for="name"><font>اسم گرامی</font></label>
					<input dir="ltr" align="left" type="text" class="form-control" id="name" placeholder=" اسم گرامی" name="name">
				</div>
				<div class="form-group">
					<label for="email"><font>ای میل</font></label>
					<input dir="ltr" align="left" type="email" class="form-control" id="email" placeholder="ای میل" name="email">
				</div>
				<div class="form-group">
					<label for="phone"><font>موبائل نمبر</font></label>
					<input dir="ltr" align="left" type="text" id="phone" class="form-control" placeholder="موبائل نمبر" name="phone">
				</div>
				<div class="form-group">
					<label for="msg"><font>پیغام</font></label>
					<textarea dir="ltr" align="left"  placeholder="پیغام جو آپ دینا چا ئیں"  name="msg" id="msg" cols="30" class="form-control resize_none"></textarea>
					<input type="hidden" name="action" value="contact">
				</div>
				<button type="submit" class="btn btn-primary"><font>بھیجیں</font></button>
			</form>
		</div>
	</div>
</div>	
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.496380735356!2d73.08992609846548!3d31.455528857983634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392269d766e53599%3A0x1c88b9f5a10199a1!2sJamia+Darul+Quran!5e0!3m2!1sen!2s!4v1511800511845" class="screen-problem" style="width: 100%; height: 550px;" class="some-problem" frameborder="0" style="border:0" allowfullscreen>
</iframe>

<?php  
include_once 'includes/footer.php';
?>