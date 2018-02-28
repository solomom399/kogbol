<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>KOGBOL - Contact Us</title>
	<?php require_once 'includes/css.php' ?>
</head>
<body>
	<?php require_once 'includes/header.php' ?>

<section class="inner-banner">
	<div class="thm-container">
		<h2>Contact Us</h2>
		<ul class="breadcumb">
			<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
			<li><span>Contact Us</span></li>
		</ul>
	</div>
</section>

<section class="sec-padding contact-page-content">
	<div class="thm-container">
		<div class="sec-title">
			<h2><span>Get in touch</span></h2>
			<p>You can talk to our online representative at any time. Please use our Live Chat System on our website or <br>Fill up below instant messaging programs.</p>
		</div>
		<div class="row">
			<div class="col-md-7 col-sm-6 col-xs-12 pull-left">
				<form action="http://demos.pixelatethemes.com/logic-cargo/include/sendemail.php" class="contact-form contact-page">
					<p><input type="text" placeholder="Name" name="name"></p>
					<p><input type="text" placeholder="Email" name="email"></p>
					<p><input type="text" placeholder="Subject" name="subject"></p>
					<p><textarea name="message" placeholder="Message"></textarea></p>
					<button type="submit" class="thm-btn">Submit Now <i class="fa fa-arrow-right"></i></button>
				</form>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 pull-right">
				<div class="contact-info">
					<ul>
						<li>
							<div class="icon-box">
								<i class="icon icon-Pointer"></i>
							</div>
							<div class="content">
								<p>KOGBOL Consults <br> 9, Association Avenue, <br> Ilupeju, Lagos.</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<i class="icon icon-Plaine"></i>
							</div>
							<div class="content">
								<p>kogbolconsults@gmail.com <br>consultskogbol@gmail.com</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<i class="icon icon-Phone2"></i>
							</div>
							<div class="content">
								<p>+234-802 395 9106 <br></p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">				
				<div class="google-map" id="contact-page-google-map" data-map-lat="-37.812802" data-map-lng="144.956981" data-map-zoom="10" data-map-title="Envato HQ"></div>
			</div>
		</div>
	</div>
</section>

	<?php require_once 'includes/footer.php' ?>
	
	<?php require_once 'includes/javascript.php' ?>


</body>

</html>