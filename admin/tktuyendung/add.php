<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // upload file
        if(isset($_FILES['file'])){
            $errors= array();
            $file_name = $_FILES['file']['name'];
            $file_size =$_FILES['file']['size'];
            $file_tmp =$_FILES['file']['tmp_name'];
            $file_type=$_FILES['file']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
            $expensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$expensions)=== false){
               $errors[]="Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        }
                        
            if(empty($errors)==true){
               move_uploaded_file($file_tmp, '../../public/img/user/'.$file_name);
               
            }
         }

        //


        $data =
            [
                "UserName" => $_POST['UserName'] ? $_POST['UserName'] : '',
                "Password" => md5($_POST['Password']),
                // "Anh" => "public/img/user/".$file_name,
                // "Accrole" => $_POST['Accrole'] ? $_POST['Accrole'] : '',
            ];
        
        $insert = $db->insert('userrecruit', $data);
        if ($insert > 0) {
            $_SESSION['error']="Thêm thành công";
            header('Location: ./index.php');
        } else
            $_SESSION['error']="không thành công";
    }
    
?>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php require_once(__DIR__ . '/../layout/nav_header.php') ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once(__DIR__ . '/../layout/side_bar.php') ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thêm user</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tài khoản</label>
                                        <input type="text" required name="UserName" class="form-control" placeholder="Tài Khoản">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Mật Khẩu</label>
                                            <input type="MatKhau" required name="Password" class="form-control" placeholder="Mật Khẩu">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nhập lại mật khẩu</label>
                                            <input type="MatKhau" required class="form-control" placeholder="Nhập lại mật khẩu">
                                        </div>
                                    </div>
                                    <!-- <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Accrole</label>
                                            <input type="text" name="Accrole" required class="form-control" placeholder="Accrole">
                                        </div>
                                    </div> -->
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="file" required name="file" class="form-control-file">
                                    </div> -->

                                    <button type="submit" class="btn btn-dark">Tạo Tài Khoản</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div> -->
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?php require_once(__DIR__ . '/../layout/script.php') ?>

</body>

</html>