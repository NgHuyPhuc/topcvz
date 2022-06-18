<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once(__DIR__ .'/layout/head.php')
    ?>
    <title>Login</title>
</head>

<?php
if (isset($_SESSION['usercv'])) {
    // header("location:./index.php");
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["UserName"]) || empty($_POST['Password'])) {
            // echo "<script>alert('Không được bỏ trống')</script>";
        } else {
            $UserName  = $_POST["UserName"];
            $Password  = md5($_POST["Password"]);

            $sql = "SELECT * 
                    FROM `useraccountcv`
                    WHERE  UserName = '$UserName' AND Password = '$Password' ";

            $sql2 = "SELECT * 
                    FROM `useraccountcv`,`infocv` 
                    WHERE `useraccountcv`.`IdAccount`=`infocv`.`IdAccount` AND UserName = '$UserName' AND Password = '$Password'  ";

            $rs2 = $db->fetchOne($sql2);     

            $rs = $db->fetchOne($sql);
            if ($rs > 0) {
                echo "Đăng Nhập Thành Công";
                $_SESSION['usercv'] = $rs['UserName'];
                $_SESSION['UserName'] = $rs['UserName'];
                $_SESSION['IdAccount']=$rs['IdAccount'];
                if($rs2>0)
                {
                    $_SESSION['IdInfoCV']=$rs2['IdInfoCV'];
                }
                header("location:./index.php");
            } else {
                echo "Đăng Nhập Thất Bại";
            }
        }
    }
}

?>
<body>
    <div class="full_web">
        <div class="grid grid_lg-flex">
            <div class="grid_lg1">
                <a href="./index.php" class="">
                    <img src="./asset/img/logo.png" alt="">
                </a>

                <div class="grid_lg1-title">
                    <h2>Chào mừng bạn quay trở lại</h2>
                    <p>Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội sự nghiệp lí tưởng</p>
                </div>
                <form method="POST" action="">
                <div class="grid_lg1-form">
                    <h3>
                        <i class="ti-email"></i>
                        Email
                    </h3>
                    <input type="text" name="UserName" class="grid_lg1-form-Log"  placeholder="Nhập email">

                    <h3>
                        <i class="ti-lock"></i>
                        Mật khẩu</h3>
                    <input type="password" name="Password" class="grid_lg1-form-Log"  placeholder="Nhập mật khẩu">
                </div>
                <button type="submit" class="grid_lg1-btn">Đăng Nhập</button>
                </form>

                <ul class="grid_lg1-mxh">
                    <li class="grid_lg1-item" ><a href="" style="background-color: #365899;">
                        <i class="ti-facebook"></i>Facebook
                    </a></li>
                    <li class="grid_lg1-item"><a href="" style="background-color:#ea4335;">
                        <i class="ti-google"></i>Google
                    </a></li>
                    <li class="grid_lg1-item" ><a href="" style="background-color:#056497;">
                        <i class="ti-linkedin"></i>Linkedin
                    </a></li>
                </ul>

                <div class="grid_lg1-question">
                    <p>Bạn chưa có tài khoản?<a href="./register.php"> Đăng ký ngay</a></p>
                    <a href="./repass.php" class="">Quên mật khẩu</a>
                </div>
            </div>
            <div class="grid_lg2">
            </div>
            
        </div>
    </div>
</body>
</html>