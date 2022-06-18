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
    <link rel="stylesheet" href="/public/recruitimg/">
    <title>Nhập thông tin</title>
  </head>

  <!-- zz -->
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
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('<?php echo $base_url ?>/asset/login-form-04/login-form-04/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div style="max-width:none" class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Đăng ký </br><strong>Trang tuyển dụng</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group first">
                            <label for="username">Nhập FirstName</label>
                            <input type="text" name="FirstName" class="form-control" placeholder="Your FirstName" id="username">
                        </div>
                        <div class="form-group first">
                            <label for="username">Nhập LastName</label>
                            <input type="text" name="LastName" class="form-control" placeholder="Your LastName" id="username">
                        </div>
                        <div class="form-group first">
                            <label>Giới tính</label>
                            <select id="inputState" name="Sex" required class="form-control">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Không">Không</option>
                            </select>
                        </div>
                        <div class="form-group first">
                            <label for="username">Nhập Email</label>
                            <input type="email" name="Email" class="form-control" placeholder="Your Email" id="username">
                        </div>
                    
                        <div class="form-group first">
                                <label for="username">Nhập NameOfCompany</label>
                                <input type="text" name="NameOfCompany" class="form-control" placeholder="Your NameOfCompany" id="username">
                            </div>
                    </div>
                    <div class="col">
                        <div class="form-group first">
                            <label for="username">Nhập WorkPlace</label>
                            <input type="text" name="WorkPlace" class="form-control" placeholder="Your WorkPlace" id="username">
                        </div>
                        <div class="form-group last mb-3">
                            <label for="username">Nhập WorkLocation</label>
                            <input type="text" name="WorkLocation" class="form-control" placeholder="Your WorkLocation" id="password">
                        </div>
                        <div class="form-group last mb-3">
                            <label for="username">Nhập PhoneNumber</label>
                            <input type="text" name="PhoneNumber" class="form-control" placeholder="Your PhoneNumber" id="password">
                        </div>
                        <div class="form-group last mb-3">
                            <img src="" width="100" height="100" alt="">
                            <input type="file" name="file" class="form-control-file">
                        </div>
                    </div>
                </div>
                
                
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <!-- <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span> -->
                    <!-- <input type="checkbox" checked="checked"/> -->
                    <!-- <div class="control__indicator"></div> -->
                  <!-- </label> -->
                  <!-- <span class="ml-auto"><a href="#" class="forgot-pass">Đăng ký tài khoản mới</a></span>  -->
                  <!-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  -->
                </div>

                <input type="submit" value="Xác nhận" class="btn btn-block btn-primary">

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