<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM jobinfo WHERE IdJobInfo=$id ";
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
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../../public/img/user/' . $file_name);
            $check = true;
        }
    }

    //

    $datenow = date('Y-m-d');
    $data =
    [
        // "IdInfoCV" => $_POST['IdInfoCV'] ? $_POST['IdInfoCV'] : '',
        // "IdAccount" => $_POST['IdAccount'] ? $_POST['IdAccount'] : '',
        "Job" => $_POST['Job'] ? $_POST['Job'] : '',
        "MucLuong" => $_POST['MucLuong'] ? $_POST['MucLuong'] : '',
        "HinhThucLam" => $_POST['HinhThucLam'] ? $_POST['HinhThucLam'] : '',
        "CapBac" => $_POST['CapBac'] ? $_POST['CapBac'] : '',
        "YeuCauKinhNghiem" => $_POST['YeuCauKinhNghiem'] ? $_POST['YeuCauKinhNghiem'] : '',
        "GioiTinh" => $_POST['GioiTinh'] ? $_POST['GioiTinh'] : '',
        "SoLuongCanTuyen" => $_POST['SoLuongCanTuyen'] ? $_POST['SoLuongCanTuyen'] : '',
        "MoTa" => $_POST['MoTa'] ? $_POST['MoTa'] : '',
        "Refresh" => $_POST['Refresh'] ? $_POST['Refresh'] : '',
    ];
    if($check){
        $data["Anh"] = "public/img/user/" . $file_name;
    }
    $update = $db->update('jobinfo', $data, array('IdJobInfo' => $id));
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
                            <h4 class="card-title">Sửa User</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                        <label>Job</label>
                                        <input type="text" name="Job" required class="form-control" placeholder="Job" value="<?php echo $user['Job'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Mức lương</label>
                                        <input type="text" name="MucLuong" required class="form-control" placeholder="MucLuong" value="<?php echo $user['MucLuong'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Hình thức làm</label>
                                        <input type="text" name="HinhThucLam" required class="form-control" placeholder="HinhThucLam" value="<?php echo $user['HinhThucLam'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Yêu cầu kinh nghiệm</label>
                                        <input type="text" name="YeuCauKinhNghiem" required class="form-control" placeholder="YeuCauKinhNghiem" value="<?php echo $user['YeuCauKinhNghiem'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Cấp bậc</label>
                                        <input type="text" name="CapBac" required class="form-control" placeholder="CapBac" value="<?php echo $user['CapBac'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Số lượng cần tuyển</label>
                                        <input type="text" name="SoLuongCanTuyen" required class="form-control" placeholder="SoLuongCanTuyen" value="<?php echo $user['SoLuongCanTuyen'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <input type="text" name="GioiTinh" required class="form-control" placeholder="GioiTinh" value="<?php echo $user['GioiTinh'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <input type="date" name="Refresh" required class="form-control" placeholder="Refresh" value="<?php echo $user['Refresh'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <input type="text" name="MoTa" required class="form-control" placeholder="MoTa" value="<?php echo $user['MoTa'] ?>">
                                    </div>
                    

                                    <!-- <div class="form-group">
                                        <img src="<?php echo $base_url . $user['Anh'] ?>" width="100" height="100" alt="">
                                        <input type="file" name="file" class="form-control-file">
                                    </div> -->

                                    <button type="submit" class="btn btn-dark">Sửa Tài Khoản</button>
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