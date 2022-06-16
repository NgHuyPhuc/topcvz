<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

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
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../../public/img/user/' . $file_name);
        }
    }

    //

    $datenow = date('Y-m-d');
    $data =
        [
            // "IdInfoCV" => $_POST['IdInfoCV'] ? $_POST['IdInfoCV'] : '',
            "IdInfoRecruit" => $_POST['IdInfoRecruit'] ? $_POST['IdInfoRecruit'] : '',
            "Job" => $_POST['Job'] ? $_POST['Job'] : '',
            "MucLuong" => $_POST['MucLuong'] ? $_POST['MucLuong'] : '',
            "HinhThucLam" => $_POST['HinhThucLam'] ? $_POST['HinhThucLam'] : '',
            "CapBac" => $_POST['CapBac'] ? $_POST['CapBac'] : '',
            "YeuCauKinhNghiem" => $_POST['YeuCauKinhNghiem'] ? $_POST['YeuCauKinhNghiem'] : '',
            "GioiTinh" => $_POST['GioiTinh'] ? $_POST['GioiTinh'] : '',
            "SoLuongCanTuyen" => $_POST['SoLuongCanTuyen'] ? $_POST['SoLuongCanTuyen'] : '',
            "MoTa" => $_POST['MoTa'] ? $_POST['MoTa'] : '',
            "Refresh" => $datenow,
        ];

    $insert = $db->insert('jobinfo', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
}

$sql = "select * from inforecruit";
$tktd = $db->fetchAll($sql);
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
                            <h4 class="card-title">Thêm Job</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Tên công ty:</label>
                                        <select id="inputState" name="IdInfoRecruit" required class="form-control">
                                            <?php foreach ($tktd as $item) : ?>
                                                <option value="<?php echo $item['IdInfoRecruit'] ?>"><?php echo $item['NameOfCompany'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Job</label>
                                        <input type="text" name="Job" required class="form-control" placeholder="Job" >
                                    </div>

                                    <div class="form-group">
                                        <label>Mức lương</label>
                                        <input type="text" name="MucLuong" required class="form-control" placeholder="MucLuong" >
                                    </div>

                                    <div class="form-group">
                                        <label>Hình thức làm</label>
                                        <input type="text" name="HinhThucLam" required class="form-control" placeholder="HinhThucLam">
                                    </div>

                                    <div class="form-group">
                                        <label>Yêu cầu kinh nghiệm</label>
                                        <input type="text" name="YeuCauKinhNghiem" required class="form-control" placeholder="YeuCauKinhNghiem" >
                                    </div>

                                    <div class="form-group">
                                        <label>Cấp bậc</label>
                                        <input type="text" name="CapBac" required class="form-control" placeholder="CapBac" >
                                    </div>

                                    <div class="form-group">
                                        <label>Số lượng cần tuyển</label>
                                        <input type="text" name="SoLuongCanTuyen" required class="form-control" placeholder="SoLuongCanTuyen" >
                                    </div>

                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <input type="text" name="GioiTinh" required class="form-control" placeholder="GioiTinh">
                                    </div>

                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <input type="text" name="MoTa" required class="form-control" placeholder="MoTa">
                                    </div>
                    
                                    <button type="submit" class="btn btn-dark">Thêm mới Job</button>
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