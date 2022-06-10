<?php
    require_once(__DIR__ .'/../lib/autoload.php');
?>

<?php 
    if(isset($_SESSION['login'])){
        header("location:./index.php");
    }
    else{
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["taikhoan"]) || empty($_POST['matkhau'])){
                //echo "<script>alert('Không được bỏ trống')</script>";
            }else{
                $taikhoan  = $_POST["taikhoan"];
                $matkhau  = md5($_POST["matkhau"]);
    
                $sql = "select * from nguoidung where taikhoan = '$taikhoan' and matkhau = '$matkhau' and accrole='nhanvien' ";
    
                $rs = $db->fetchOne($sql);
                if($rs > 0){
                    echo "Đăng Nhập Thành Công";
                    $_SESSION['login'] = $rs['id'] ."-". $rs['taikhoan'];
                    //$_SESSION['avt_Admin'] = $rs['avatarImg'];
                    header("location:./index.php");
                }else{
                    echo "Đăng Nhập Thất Bại";
                }
            }
        }
    }
    

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Login</title>
    <link href="../public/admin/Adminlogin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/admin/Adminlogin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../public/admin/Adminlogin/css/animate.css" rel="stylesheet">
    <link href="../public/admin/Adminlogin/css/style.css" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">Welcome to Shop admin</h2>

                <p>
                    Chúng tôi rất hân hạnh khi quý khách sử dụng dịch vụ của Shop admin.
                </p>

                <p>
                    Vui lòng đăng nhập để có thể tiến hành giao dịch .
                </p>

                <p>
                    Nếu quý khách chưa có tài khoản thì quý khách có thể đăng kí với chúng tôi.
                </p>

                <p>
                    Việc đăng nhập sẽ không mất nhiều thời gian với mọi người nhưng có thể giúp chúng tôi xử lý rất nhiều, xin trân trọng cảm ơn!
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                        <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Đăng Nhập</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="taikhoan" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="matkhau" class="form-control" placeholder="Password">
                                    </div>
                                    <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p>
                                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                                    <!-- <button class="btn login-form__btn submit w-100">Sign In</button> -->
                                </form>
                                
                            </div>
                        
                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="../../User/Register/Create">Create an account</a>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
                <small>© 2014-2015</small>
            </div>
        </div>
    </div>
</body>
</html>