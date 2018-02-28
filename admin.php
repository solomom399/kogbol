<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'kogbol');
?>
<?php
	require_once 'includes/css.php';
	require_once 'includes/header.php';

	
	if ($conn) {
		if (isset($_POST['login_admin'])) {
			
			$username = addslashes($_POST['username']);
			$password = $_POST['password'];

			$sql = "SELECT * FROM admin WHERE username = '$username'";

			$res = mysqli_query($conn, $sql);

			$row = mysqli_fetch_assoc($res);

			if (mysqli_num_rows($res) != 0) {

				if ($password == $row['password']) {

					$_SESSION['admin_details'] = $row;
					header("Location: admin_dashboard.php");
				} else {

					echo "Invalid Details";
				}

			} else {
				echo "Invalid Details";
			}
		}
	}



?>
<br>
<br>
<br>

	<div class="container">
		<div class="clearfix">
			<div class="col-md-4 col-md-offset-4">
				<form method="POST" action="">
					<h1>ADMIN LOGIN</h1>
					<hr>
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary" name="login_admin">LOGIN</button>
					</div>

				</form>
			</div>
		</div>
	</div>

<br>
<?php
	require_once 'includes/footer.php';
?>
