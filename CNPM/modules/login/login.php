

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh ">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
  <?php
      if(isset($_POST['sbm'])){
        $mail = $_POST['mail'];
        $pass = md5($_POST['pass']);
        $sql = "SELECT * from user where user_mail = '$mail' AND user_pass = '$pass'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($query);
        if($row){
            $_SESSION['mail'] = $mail;
            $_SESSION['pass'] = $pass;
            header(include_once('modules/login/memner.php'));
        }
        else{
            $erorr = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
        }
    }
  ?>
    <!-- <div class="card mx-auto" style="max-width: 380px; margin-top:100px; text-align:center;">
        <div class="card-body">
            <h4 class="card-title mb-4">Đăng nhập</h4>
            <?php 
						if(isset($erorr)){
							echo $erorr;
						}
					?>
            <form role="form" method="post">
            <fieldset>
                <div class="form-group">
                    <input name="" class="form-control" placeholder="E-mail" type="email"name="mail"
                    autofocus>
                </div> 
                <div class="form-group">
                    <input name="" class="form-control" placeholder="Password" type="password"name="pass" value="">
                </div>

                <div class="form-group">
                    <a href="#" class="float-right">Quên mật khẩu?</a>
                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                            class="custom-control-input" checked="">
                            <div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Nhớ tài khoản
								</label>
							</div>
                    </label>
                </div> 
                <button type="submit" class="btn btn-primary btn-block"name="sbm"> Đăng nhập </button>
            </fieldset>
                <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp Sign in
                    with Facebook</a>
                <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp Sign in with
                    Google</a>
            </form>
        </div> 
    </div>  -->
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px; text-align:center;">
		<div class="text-center mt-4">
			<div class="login-panel panel panel-default">
            <h4 class="card-title mb-4">Đăng nhập</h4>
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
                                <a href="#" class="float-right">Quên mật khẩu?</a>
							</div>
							<button type="submit" name="sbm" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
		<a href="#" class="btn btn-facebook btn-block mt-3"> <i class="fab fa-facebook-f"></i> &nbsp Sign in
                    with Facebook</a>
                <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp Sign in with
                    Google</a>
    </div>
    <p class="text-center mt-4">Chưa có tài khoản? <a href="index.php?page_layout=register">Đăng ký</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>

<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->

