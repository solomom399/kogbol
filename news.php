<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'kogbol');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>KOGBOL - News Feeds</title>
	<?php require_once 'includes/css.php' ?>
</head>
<body>
	<?php require_once 'includes/header.php' ?>

<section class="inner-banner">
	<div class="thm-container">
		<h2>News</h2>
		<ul class="breadcumb">
			<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
			<li><span>News</span></li>
		</ul>
	</div>
</section>


<section class="sec-padding blog-page">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-4 pull-left">
				<div class="single-sidebar-widget">
					<a href="admin.php">
							<button type="button" class="btn btn-primary btn-lg">Admin Login</button>
						</a>
				</div>


			</div>
			<?php

							$sql = "SELECT * FROM news LIMIT 3";

							$res = mysqli_query($conn, $sql);

							while ($row = mysqli_fetch_assoc($res)) {

								if (strlen($row['news_body']) > 600) {
									$body = substr($row['news_body'], 0, 100);
								} else {
									$body = $row['news_body'];
								}

			echo ' <div class="col-md-8 pull-right">
					
				<div class="single-post-wrapper">

					<article class="single-blog-post">
						<div class="img-box">
							<img src="images/blog-page/1.jpg" style="height:230px;" alt="Awesome Image"/>
							<div class="img-caption">
								
							</div>
						</div>
						<div class="meta-info">
							<div class="date-box">
								
							</div>
							<div class="content-box">
								<h3>'.$row['news_title'].'</h3>
								<ul class="post-links">
									<li><a href="#"><i class="fa fa-user"></i> By: Kogbol Admin</a></li>
									<li><a href="#"><i class="fa fa-user"></i>'.$row['date_created'].'</a></li>
									
								</ul>
							</div>
						</div>
						<p>'.$row['news_body'].'</p>
					</article>					




			</div>
		</div>
					';
}
?>
	</div>
</section>

	<?php require_once 'includes/footer.php' ?>
	<?php require_once 'includes/javascript.php' ?>
</body>

</html>