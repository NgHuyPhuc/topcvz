<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM inforecruit WHERE IdInfoRecruit=$id ";
    $user = $db->fetchOne($sql);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // upload file
    $check = false;
    if (isset($_FILES['file'])) {
        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        if ($file_size >0 ) {
            move_uploaded_file($file_tmp, '../../public/recruitimg/' . $file_name);
            $check = true;
        }
    }

    //


    $data =
    [
        // "IdInfoCV" => $_POST['IdInfoCV'] ? $_POST['IdInfoCV'] : '',
        // "IdAccount" => $_POST['IdAccount'] ? $_POST['IdAccount'] : '',
        "FirstName" => $_POST['FirstName'] ? $_POST['FirstName'] : '',
        "LastName" => $_POST['LastName'] ? $_POST['LastName'] : '',
        "Sex" => $_POST['Sex'] ? $_POST['Sex'] : '',
        "Email" => $_POST['Email'] ? $_POST['Email'] : '',
        "NameOfCompany" => $_POST['NameOfCompany'] ? $_POST['NameOfCompany'] : '',
        "WorkPlace" => $_POST['WorkPlace'] ? $_POST['WorkPlace'] : '',
        // "Avatar" => $_POST['Avatar'] ? $_POST['Avatar'] : '',
        "WorkLocation" => $_POST['WorkLocation'] ? $_POST['WorkLocation'] : '',
        "PhoneNumber" => $_POST['PhoneNumber'] ? $_POST['PhoneNumber'] : '',
        
    ];
    if($check){
        $data["Avatar"] = "public/recruitimg/" . $file_name;
    }
    $update = $db->update('inforecruit', $data, array('Idrecruit' => $id));
    if ($update > 0) {
        $_SESSION['error'] = "sửa thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
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
                            <h4 class="card-title">Sửa Thông tin tài khoản tuyển dụng</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label>FirstName</label>
                                        <input type="text" name="FirstName" required class="form-control" placeholder="FirstName" value="<?php echo $user['FirstName'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>LastName</label>
                                        <input type="text" name="LastName" required class="form-control" placeholder="LastName" value="<?php echo $user['LastName'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="Email" name="Email" required class="form-control" placeholder="Email" value="<?php echo $user['Email'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tên công ty</label>
                                        <input type="text" name="NameOfCompany" required class="form-control" placeholder="NameOfCompany" value="<?php echo $user['NameOfCompany'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nơi làm việc</label>
                                        <input type="text" name="WorkPlace" required class="form-control" placeholder="WorkPlace" value="<?php echo $user['WorkPlace'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="WorkLocation" required class="form-control" placeholder="WorkLocation" value="<?php echo $user['WorkLocation'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" name="PhoneNumber" required class="form-control" placeholder="PhoneNumber" value="<?php echo $user['PhoneNumber'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <label>Sex</label>
                                        <select id="inputState" name="Sex" required class="form-control">
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Không">Không</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <img src="" width="100" height="100" alt="">
                                        <input type="file" name="file" class="form-control-file">
                                    </div>

                                    <button type="submit" class="btn btn-dark">Sửa Thông tin tài khoản tuyển dụng</button>
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