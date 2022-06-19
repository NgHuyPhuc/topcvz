<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once(__DIR__ . '/../lib/autoload.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập Thông Tin Tuyển dụng</title>
    <link rel="stylesheet" href="../asset/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../asset/css/Chung.css">
    <link rel="stylesheet" href="../asset/css/lgtuyendung.css">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#blah')
            .attr('src', e.target.result)
            .width(200)
            .height(200);
        };
        reader.readAsDataURL(input.files[0]);
  }
}
    </script>
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // upload file
    if (isset($_FILES['file'])) {
        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        // $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        $expensions = array("jpeg", "jpg", "png");

        // if (in_array($file_ext, $expensions) === false) {
        //     $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        // }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../public/recruitimg/' . $file_name);
            // move_uploaded_file($file_tmp, '../../public/recruitimg/' . $file_name);
        }
    }

    //
    $usz=$_SESSION['UserNamerecruit'];
    $sqlx = "SELECT *
            From userrecruit
            Where UserName = '$usz'";
    $tt=$db->fetchOne($sqlx);
    echo $usz;
    $idnew=$tt['IdRecruit'];

    $data =
        [
            // "IdInfoCV" => $_POST['IdInfoCV'] ? $_POST['IdInfoCV'] : '',
            "IdRecruit" => $idnew,
            "FirstName" => $_POST['FirstName'] ? $_POST['FirstName'] : '',
            "LastName" => $_POST['LastName'] ? $_POST['LastName'] : '',
            "Sex" => $_POST['Sex'] ? $_POST['Sex'] : '',
            "Email" => $_POST['Email'] ? $_POST['Email'] : '',
            "NameOfCompany" => $_POST['NameOfCompany'] ? $_POST['NameOfCompany'] : '',
            "WorkPlace" => $_POST['WorkPlace'] ? $_POST['WorkPlace'] : '',
            "Avatar" => "public/recruitimg/" . $file_name,
            "WorkLocation" => $_POST['WorkLocation'] ? $_POST['WorkLocation'] : '',
            "PhoneNumber" => $_POST['PhoneNumber'] ? $_POST['PhoneNumber'] : '',

        ];

    $insert = $db->insert('inforecruit', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
        header('Location: ../logintuyendung.php');
    } else
        $_SESSION['error'] = "không thành công";
}
else{
    $sql = "select * from userrecruit";
    $dt = $db->fetchAll($sql);
}
    
?>

<body>
    <div class="half">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="content">
                <h3> <strong>Nhập Thông Tin Tuyển Dụng</strong></h3>
                <div class="content-main">
                    <div class="grid__column-5">
                        <div class="main-content-input">
                            <h4>Nhập FirstName</h4>
                            <input name="FirstName" type="text" name="" placeholder="Nhập FirstName" id="">
                        </div>

                        <div class="main-content-input">
                            <h4>Nhập LastName</h4>
                            <input name="LastName" type="text" name="" placeholder="Nhập LastName" id="">
                        </div>

                        <div class="main-content-input">
                            <h4>Nhập Giới Tính</h4>
                            <select id="inputState" name="Sex" required class="form-control">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Không">Không</option>
                            </select>
                        </div>

                        <div class="main-content-input">
                            <h4>Nhập Email</h4>
                            <input type="email" name="Email" name="" placeholder="Nhập Email" id="">
                        </div>

                        <div class="main-content-input">
                            <h4>Nhập NameofCompany</h4>
                            <input type="text" name="NameOfCompany" placeholder="Nhập NameofCompany" id="">
                        </div>
                    </div>
                    <div class="grid__column-5">
                        <div class="main-content-input">
                            <h4>Nhập WorkPlace</h4>
                            <input type="text" name="WorkPlace" placeholder="Nhập WorkPlace" id="">
                        </div>

                        <div class="main-content-input">
                            <h4>Nhập WorkLocation</h4>
                            <input type="text" name="WorkLocation" placeholder="Nhập WorkLocation" id="">
                        </div>

                        <div class="main-content-input">
                            <h4>Nhập PhoneNumber</h4>
                            <input type="text" name="PhoneNumber" placeholder="Nhập PhoneNumber" id="">
                        </div>

                        <!-- <div style="margin-top: 20px;">
                            <img src="" width="100" height="100" alt="">
                            <input type="file" name="file" class="form-control-file">
                        </div> -->
                        <div class="form-group last mb-3">
                            <img src="" width="100" height="100" alt="">
                            <input type="file" name="file" class="form-control-file">
                        </div>
                    </div>
                </div>

                <button type="submit">Xác nhận</button>
            </div>  
        </form>
              
    </div>
</body>
</html>