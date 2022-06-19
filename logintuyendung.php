<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      require_once(__DIR__ . './lib/autoload.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login tuyển dụng</title>
    <link rel="stylesheet" href="./asset/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./asset/css/Chung.css">
    <link rel="stylesheet" href="./asset/css/lgtuyendung.css">
   
</head>
<?php
  if(isset($_SESSION['logintuyendung'])){
    header("location:./thongtinNTD.php");
  }
  else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["UserName"]) || empty($_POST['Password'])){
            echo "<script>alert('Không được bỏ trống')</script>";
        }else{
            $UserName  = $_POST["UserName"];
            $Password  = md5($_POST["Password"]);

            $sql = "select * from userrecruit where UserName = '$UserName' and Password = '$Password' ";

            $rs = $db->fetchOne($sql);
            
            if($rs > 0){
                echo "Đăng Nhập Thành Công";
                session_start();
                $_SESSION['logintuyendung'] = $rs['IdRecruit'] ."-". $rs['UserName'];
                $_SESSION['IdRecruit']= $rs['IdRecruit'];
                header("location:./thongtinNTD.php");
            }else{
                echo "Đăng Nhập Thất Bại";
            }
        }
    }
}
  ?>
<body>
    <div class="half">
        <form action="" method="POST">
            <div class="content">
                <h3>Login to <strong>Tuyển Dụng</strong></h3>

                <div class="main">
                    <h4>UserName</h4>
                    <input name="UserName" type="text" placeholder="Tài khoản ">
                </div>

                <div class="main">
                    <h4>PassWord</h4>
                    <input name="Password" type="password" placeholder="Mật khẩu ">
                </div>
                <div style="display:flex ; justify-content:space-between; text-align:center; margin: 15px 0;">
                    <div style="display: flex;">
                        <input type="checkbox" name="" value="" id="" > 
                        <h3 style="font-size: 1.3rem; margin: 0;">Remember Me</h3>
                    </div>
                    <a href="<?php echo $base_url ?>dkytktuyendung/dky.php">Đăng ký tk mới</a>
                    <a href="">forgot pass</a>
                </div>

                <button value="Login">Login</button>
            </div>      
        </form>  
    </div>
</body>
</html>