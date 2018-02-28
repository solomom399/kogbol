<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'kogbol');
?>
<?php 
	require_once 'includes/css.php';
	require_once 'includes/header.php';
?>
<?php

if (!isset($_SESSION['admin_details']) && empty($_SESSION['admin_details'])) {
	header("location: admin.php");
}
if (isset($_GET['status']) && $_GET['status'] == 'out') {
	session_destroy();
	header("location: admin.php");
}



if (isset($_POST['upload_news'])) {
	
	$news_title = addslashes($_POST['news_title']);
	$news_body = addslashes($_POST['news_body']);
	$news_id = uniqid();

	$sql = "INSERT INTO news (news_title, news_body, date_created, time_created) VALUES ('$news_title', '$news_body', now(), now())";

	if (mysqli_query($conn, $sql)) {
		echo '<p class="alert alert-success">News uploaded successfully</p>';
	} else {
		echo '<p class="alert alert-danger">News not uploaded</p>';
	}

}



?>
<br><br><br><br>
<a class="btn btn-primary pull-right" href="admin_dashboard.php?status=out">Logout</a>

<div class="container">
	<div class="clearfix">
		<div class="col-md-4 col-md-offset-4">
			<form method="POST" action="">
				<h1>UPLOAD NEWS</h1>
				<hr>
				<div class="form-group">
					<input type="text" class="form-control input-lg" name="news_title" placeholder="News title">
				</div>

				<div class="form-group">
					<textarea class="form-control input-lg" name="news_body" rows="6" placeholder="News Body"></textarea>
				</div>
				
				<div class="form-group">
					<button class="btn btn-primary btn-lg" name="upload_news">UPLOAD</button>
				</div>

			</form>
		</div>
	</div>
</div>





<?php

require_once 'includes/footer.php';
?>