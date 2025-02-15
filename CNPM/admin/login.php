<?php 
if(!defined('SECURITY')){
	die('Bạn không có quyền truy cập file này !');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hệ thống web bán quần áo</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php 
		// include_once('config/connect.php');
		
        // while($row = mysqli_result{
		// 	if(isset($_POST['sbm'])){
		// 		$mail = $_POST['mail'];
		// 		$pass = $_POST['pass'];
		// 		if($row['usermail']== $mail && $row['pass'] == $pass){
		// 			header("location: index.php");
		// 		}
		// 		else{
		// 			$erorr = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
		// 		}
		// 	}	
        // }

		if(isset($_POST['sbm'])){
			$mail = $_POST['mail'];
			$pass = md5($_POST['pass']);
			$sql = "SELECT * from user where user_mail = '$mail' AND user_pass = '$pass'";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_num_rows($query);
			if($row){
				$_SESSION['mail'] = $mail;
				$_SESSION['pass'] = $pass;
				header("location: index.php");
			}
			else{
				$erorr = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
			}

			
			// if($_SESSION['mail'] = $mail && $_SESSION['pass'] = $pass){
			// 	header("location: index.php");
			// }
			// else{
			// 	$erorr = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
			// }
		}

	?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Hệ thống web bán quần áo</div>
				<div class="panel-body">
					<?php 
						if(isset($erorr)){
							echo $erorr;
						}
					?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="mail" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="pass" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Nhớ tài khoản
								</label>
							</div>
							<button type="submit" name="sbm" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</body>

</html>
