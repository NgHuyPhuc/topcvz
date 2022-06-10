<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once(__DIR__ . '/layout/head.php')
    ?>
    <title>Đăng ký</title>
</head>
<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $sqlcheck="SELECT UserName FROM useraccountcv";
//     $check = $db->fetchAll($sqlcheck);
//     $count=0;
//     $countdata=0;
//     $ktusername = "UserName";
//     foreach($check as $item)
//     {
//         $countdata=$countdata+1;
//         if(strcmp($item["UserName"], $ktusername) !==0)
//         {
//             $count=$count+1;
//         }
//     }
//     if($count == $countdata)
//     {
//         // echo '<script type="text/JavaScript"> 
//         // document.getElementById("check").style.display="block";
//         // </script>';
//     }
//     else{
//         $data =
//             [
//                 "UserName" => $_POST['UserName'] ? $_POST['UserName'] : '',
//                 "Password" => md5($_POST['Password']),
//             ];

//         $insert = $db->insert('useraccountcv', $data);
//         if ($insert > 0) {
//             echo "<script>alert('Đăng ký Thành Công')</script>";
//             header("Refresh: 5;location:./index.php");
//         } else {
//             echo "Đăng ký Thất Bại";
//         }
//     }
// }


// if(isset($_POST['UserName']))
// {
//     $ktuser=['UserName'];
//     $sqlkt="SELECT * FROM useraccountcv WHERE UserName='".$_POST['UserName']."'";
//     $rs = $db->fetchAll($sqlkt);
//     if($rs>0)
//     {
//         echo 
//             '<script type="text/JavaScript"> 
//                 document.getElementById("check").style.display="block";
//             </script>';
//     }
//     else {
//         if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $data =
//             [
//                 "UserName" => $_POST['UserName'] ? $_POST['UserName'] : '',
//                 "Password" => md5($_POST['Password']),
//             ];

//         $insert = $db->insert('useraccountcv', $data);
//         if ($insert > 0) {
//             echo "<script>alert('Đăng ký Thành Công')</script>";
//             header("Refresh: 5;location:./index.php");
//         } else {
//             echo "Đăng ký Thất Bại";
//         }
//     }
//     }
// }
// if(isset($_POST['UserName']))
// {
//     $ktuser=['UserName'];
//     $sqlkt="SELECT * FROM useraccountcv WHERE UserName=$ktuser";'".$_POST['UserName']."'
//     $rs = $db->fetchAll($sqlkt);
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $ktusername = ['UserName'];
    // $sqlkt = "SELECT * FROM useraccountcv WHERE UserName='$ktusername'";
    // $rs = $db->fetchOne($sqlkt);
    // if ($rs == 0) {
    //     $data =
    //         [
    //             "UserName" => $_POST['UserName'] ? $_POST['UserName'] : '',
    //             "Password" => md5($_POST['Password']),
    //         ];

    //     $insert = $db->insert('useraccountcv', $data);
    // }
    // else{
    //     echo '<script type="text/JavaScript"> 
    //     document.getElementById("check").style.display="block";
    //     </script>';
    // }


    // $ktuser=['UserName'];
    // if (empty($_POST["UserName"]) || empty($_POST['Password'])) {
    //     echo "<script>alert('Không được để trống')</script>";
    // } else {
    //     // $sqlkt="SELECT * FROM useraccountcv WHERE UserName=$ktuser";
    //     // $rs = $db->fetchAll($sqlkt);
    //     if($rs>0){
    //         echo '
    //         <script type="text/JavaScript"> 
    //             document.getElementById("check").style.display="block";
    //         </script>';
    //     }
    //     else{
    //         $data =
    //         [
    //             "UserName" => $_POST['UserName'] ? $_POST['UserName'] : '',
    //             "Password" => md5($_POST['Password']),
    //         ];

    //     $insert = $db->insert('useraccountcv', $data);
    //     if ($insert > 0) {
    //         echo "<script>alert('Đăng ký Thành Công')</script>";
    //         header("Refresh: 5;location:./index.php");
    //     } else {
    //         echo "Đăng ký Thất Bại";
    //     }
    //     }
    // }


    // chay dc

    $data =
        [
            "UserName" => $_POST['UserName'] ? $_POST['UserName'] : '',
            "Password" => md5($_POST['Password']),
        ];

    $insert = $db->insert('useraccountcv', $data);
    if ($insert > 0) {
        echo "<script>alert('Đăng ký Thành Công')</script>";
        header("Refresh: 5;location:./index.php");
    } else {
        echo "Đăng ký Thất Bại";
    }
}
?>

<body>
    <form method="POST" action="">
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

                    <div class="grid_lg1-form">
                        <!-- <h3>
                        <i class="ti-user"></i>
                        Họ và tên</h3>
                    <input type="text" class="grid_lg1-form-Log"  placeholder="Nhập họ và tên"> -->
                        <p id="check" style="color:red ;display:none ;">Tài khoản đã tồn tại</p>
                        <h3>
                            <i class="ti-email"></i>
                            UserName
                        </h3>
                        <input type="text" class="grid_lg1-form-Log" name="UserName" placeholder="Nhập UserName">
                        <h3>
                            <i class="ti-lock"></i>
                            Mật khẩu
                        </h3>
                        <input type="password" class="grid_lg1-form-Log" name="Password" placeholder="Nhập mật khẩu">
                        <h3>
                            <i class="ti-lock"></i>
                            Nhập lại mật khẩu
                        </h3>
                        <input type="password" class="grid_lg1-form-Log" placeholder="Nhập lại mật khẩu">
                    </div>

                    <p class="dieukhoan">Bằng việc đăng ký tài khoản, bạn đã đồng ý với <a href="">Điều khoản dịch vụ</a> và <a href="">Chính sách bảo mật</a> của chúng tôi</p>

                    <button type="submit" class="grid_lg1-btn">Đăng ký</button>

                    <div class="grid_lg1-question">
                        <p>Bạn đã có tài khoản?<a href="./login.php"> Đăng nhập ngay</a></p>
                    </div>
                </div>


                <div class="grid_lg2">
                </div>

            </div>
        </div>
    </form>
</body>

</html>