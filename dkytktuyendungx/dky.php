<!doctype html>
<html lang="en">
  <head>
  <?php
    require_once(__DIR__ . '/../lib/autoload.php');
  ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo $base_url ?>/asset/login-form-04/login-form-04/fonts/icomoon/style.css">


    <link rel="stylesheet" href="<?php echo $base_url ?>/asset/login-form-04/login-form-04/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_url ?>/asset/login-form-04/login-form-04/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo $base_url ?>/asset/login-form-04/login-form-04/css/style.css">

    <title>Đăng ký tài khoản</title>
  </head>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // chay dc

    $data =
        [
            "UserName" => $_POST['UserName'] ? $_POST['UserName'] : '',
            "Password" => md5($_POST['Password']),
        ];
    $zz=$_POST['UserName'];
    $insert = $db->insert('userrecruit', $data);
    if ($insert > 0) {
        echo "<script>alert('Đăng ký Thành Công Hãy Nhập Thông Tin Cá Nhân')</script>";
        // session_start();
        $_SESSION['UserNamerecruit']=$zz;
        header("location:./nhapthongtintuyendung.php");
    } else {
        echo "Đăng ký Thất Bại";
    }
}
  ?>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('<?php echo $base_url ?>/asset/login-form-04/login-form-04/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Đăng ký </br><strong>Trang tuyển dụng</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Nhập Username</label>
                  <input type="text" name="UserName" class="form-control" placeholder="Your Username" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Nhập Password</label>
                  <input type="password" name="" class="form-control" placeholder="Your Password" id="password">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Nhập lại Password</label>
                  <input type="password" name="Password" class="form-control" placeholder="Your Password" id="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <!-- <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span> -->
                    <!-- <input type="checkbox" checked="checked"/> -->
                    <!-- <div class="control__indicator"></div> -->
                  <!-- </label> -->
                  <!-- <span class="ml-auto"><a href="#" class="forgot-pass">Đăng ký tài khoản mới</a></span>  -->
                  <!-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  -->
                </div>

                <input type="submit" value="Đăng ký" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>