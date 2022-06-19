<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once(__DIR__ . '/../lib/autoload.php');
  ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tuyển dụng</title>
    <link rel="stylesheet" href="../asset/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../asset/css/Chung.css">
    <link rel="stylesheet" href="../asset/css/lgtuyendung.css">
   
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
    <div class="half">
        <form action="" method="POST">
            <div class="content">
                <h3>Đăng ký <strong>Tuyển Dụng</strong></h3>

                <div class="main">
                    <h4>UserName</h4>
                    <input name="UserName" type="text" placeholder="Tài khoản ">
                </div>

                <div class="main">
                    <h4>PassWord</h4>
                    <input name="" type="password" placeholder="Mật khẩu ">
                </div>

                <div class="main">
                    <h4>Nhập lại mật khẩu</h4>
                    <input name="Password" type="password" placeholder="Nhập lại mật khẩu ">
                </div>
                <div style="display:flex ; justify-content:space-between; text-align:center; margin: 15px 0;">
                    
                    <a href="">Đã có tài khoản quay lại đăng nhập</a>
                </div>

                <button value="Login">Đăng ký</button>
            </div>        
        </form>
    </div>
</body>
</html>