<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once(__DIR__ .'/layout/head.php')
    ?>
    <title>Login</title>
</head>

<?php

    // $x=$_SESSION['IdAccount'];

    // $us=isset($_POST['UserName']) ? $_POST['UserName']:null;
    // $sqlx = "SELECT *
    //         From useraccountcv
    //         Where UserName = '$us'";
    // $tt=$db->fetchOne($sqlx);

    // $idnew=$tt['IdAccount'];

    

    // echo $us;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // upload file
    $check = false;
    if (isset($_FILES['file'])) {
        $$errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        // $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        $expensions = array("jpeg", "jpg", "png");

        // if (in_array($file_ext, $expensions) === false) {
        //     $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        // }


        if ($file_size > 0) {
            move_uploaded_file($file_tmp, './public/userimg/' . $file_name);
            // $check = true;
        }
    }

    //
    $us=$_SESSION['UserNamez'];
    $sqlx = "SELECT *
            From useraccountcv
            Where UserName = '$us'";
    $tt=$db->fetchOne($sqlx);
    echo $us;
    $idnew=$tt['IdAccount'];

    $data =
        [
            "IdAccount" => $idnew,
            "FirstName" => $_POST['FirstName'] ? $_POST['FirstName'] : '',
            "LastName" => $_POST['LastName'] ? $_POST['LastName'] : '',
            "DoB" => $_POST['DoB'] ? $_POST['DoB'] : '',
            "Sex" => $_POST['Sex'] ? $_POST['Sex'] : '',
            "Email" => $_POST['Email'] ? $_POST['Email'] : '',
            "Hometown" => $_POST['Hometown'] ? $_POST['Hometown'] : '',
            "PermanentAddress" => $_POST['PermanentAddress'] ? $_POST['PermanentAddress'] : '',
            "Avatar" => "public/userimg/" . $file_name,
            "CityforCV" => $_POST['CityforCV'] ? $_POST['CityforCV'] : '',
            "WorkExperience" => $_POST['WorkExperience'] ? $_POST['WorkExperience'] : '',
        ];

    $insert = $db->insert('infocv', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
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
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="grid_lg1-form">
                        <h3>FirstName:</h3>
                        <input type="text" name="FirstName" class="grid_lg1-form-Log"  placeholder="Nhập FirstName">

                        <h3></i>LastName:</h3>
                        <input type="text" name="LastName" class="grid_lg1-form-Log"  placeholder="Nhập LastName">

                        <h3>DoB:</h3>
                        <input type="date" name="DoB" class="grid_lg1-form-Log"  placeholder="Nhập DoB">

                        <h3>Sex:</h3>
                        <select style="font-size: 18px;" id="inputState" name="Sex" required class="form-control">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Không">Không</option>
                        </select>
                        <!-- <input type="text" name="Sex" class="grid_lg1-form-Log"  placeholder="Nhập Sex"> -->

                        <h3>Email:</h3>
                        <input type="text" name="Email" class="grid_lg1-form-Log"  placeholder="Nhập Email">

                        <h3>PermanentAddress:</h3>
                        <input type="text" name="PermanentAddress" class="grid_lg1-form-Log"  placeholder="Nhập PermanentAddress">

                        <h3>Hometown:</h3>
                        <input type="text" name="Hometown" class="grid_lg1-form-Log"  placeholder="Nhập Hometown">

                        <h3>CityforCV:</h3>
                        <input type="text" name="CityforCV" class="grid_lg1-form-Log"  placeholder="Nhập CityforCV">

                        <h3>WorkExperience:</h3>
                        <input type="text" name="WorkExperience" class="grid_lg1-form-Log"  placeholder="Nhập WorkExperience">

                        <h3>Avatar:</h3>
                        <input type="file" required name="file" class="form-control-file">

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