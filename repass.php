<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/head.php') ?>
    <title>Repass</title>
    
</head>

<?php
    if(empty($_SESSION['IdInfoCV']))
    {
        
    }
    else{
        $id=$_SESSION['IdInfoCV'];
        // $sql = "SELECT * FROM infocv WHERE IdInfoCV= $id" ;
        // $user = $db->fetchOne($sql);
    }
    // $sql="SELECT * from useraccountcv";
    // $user = $db->fetchAll($sql);

    // $id=$_SESSION['IdInfoCV'];
    //     $sql = "SELECT * FROM infocv WHERE IdInfoCV= $id" ;
    //     $user = $db->fetchOne($sql);

    $sql = "SELECT * 
            FROM `useraccountcv` ,`infocv` 
            WHERE `useraccountcv`.`IdAccount` = `infocv`.`IdAccount` AND `IdInfoCV` = $id ";
    
    // -- SELECT * FROM useraccountcv WHERE IdAccount=$id ";

    $user = $db->fetchOne($sql);
    $iduser = $user['IdAccount'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data =
        [
            // "UserName" => $_POST['UserName'] ? $_POST['UserName'] : '',
            "Password" => md5($_POST['Password']),
            
        ];
        $update = $db->update('useraccountcv', $data, array('IdAccount' => $iduser));
        if ($update > 0) {
            $_SESSION['error'] = "sửa thành công";
            
            header('Location:./ttcanhan.php');
        } else
            $_SESSION['error'] = "không thành công";
    }
?>

<body>
    <div class="full_web">
        <div class="grid grid_lg-flex">
            <div class="grid_lg1">
                <a href="./index.php">
                    <img src="./asset/img/logo.png" alt="">
                </a>

                <div class="grid_lg1-title">
                    <h2>Chào mừng bạn quay trở lại</h2>
                    <p>Cùng xây dựng một hồ sơ nổi bật và nhận được các cơ hội sự nghiệp lí tưởng</p>
                </div>
                <form action="" method="POST">
                    <div class="grid_lg1-form">
                        <h3>
                            <i class="ti-email"></i>
                            Nhập mật khẩu mới
                        </h3>
                        <input id="lan1" type="password" name="" class="grid_lg1-form-Log" placeholder="Nhập mật khẩu"  onkeyup='check()'/>
                    </div>
                    <div class="grid_lg1-form">
                        <h3>
                            <i class="ti-email"></i>
                            Nhập lại mật khẩu
                        </h3>
                        <input id="lan2" type="password" name="Password" class="grid_lg1-form-Log" placeholder="Nhập lại mật khẩu"  onkeyup='check()'/>
                        </br>    
                        <span id='message'></span>
                    </div>
                    <p class="dieukhoan">Bằng việc đăng ký tài khoản, bạn đã đồng ý với <a href="">Điều khoản dịch vụ</a> và <a href="">Chính sách bảo mật</a> của chúng tôi</p>

                    <button id="subm" type="submit" class="grid_lg1-btn" disabled>Đổi mật khẩu</button>
                </form>


                

                <div class="grid_lg1-question">
                    <p><a href="./login.php"> Quay lại đăng nhập</a></p>
                    <a href="./register.php" class="">Đăng ký tài khoản mới</a>
                </div>
            </div>
            <div class="grid_lg2">
            </div>

        </div>
    </div>

    <script>
        var check = function ktmatkhau(){
            if(document.getElementById('lan1').value==document.getElementById('lan2').value)
            {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Hai mật khẩu giống nhau';
                document.getElementById('subm').disabled = false;
            }
            else{
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'HAI MẬT KHẨU KHÔNG GIỐNG NHAU';
                document.getElementById('subm').disabled = true;
                
            }
        }
    </script>
</body>

</html>