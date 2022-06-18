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
        // $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        $expensions = array("jpeg", "jpg", "png");

        // if (in_array($file_ext, $expensions) === false) {
        //     $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        // }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../../public/recruitimg/' . $file_name);
        }
    }

    //


    $data =
        [
            // "IdInfoCV" => $_POST['IdInfoCV'] ? $_POST['IdInfoCV'] : '',
            "IdRecruit" => $_POST['IdRecruit'] ? $_POST['IdRecruit'] : '',
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
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
}
else{
    $sql = "select * from userrecruit";
    $dt = $db->fetchAll($sql);
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
                            <h4 class="card-title">Thêm mới thông tin tài khoản tuyển dụng</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Tên công ty:</label>
                                        <select id="inputState" name="IdRecruit" required class="form-control">
                                            <?php foreach ($dt as $item) : ?>
                                                <option value="<?php echo $item['IdRecruit'] ?>"><?php echo $item['UserName'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>FirstName</label>
                                        <input type="text" name="FirstName" required class="form-control" placeholder="FirstName">
                                    </div>

                                    <div class="form-group">
                                        <label>LastName</label>
                                        <input type="text" name="LastName" required class="form-control" placeholder="LastName">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="Email" name="Email" required class="form-control" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <label>NameOfCompany</label>
                                        <input type="text" name="NameOfCompany" required class="form-control" placeholder="NameOfCompany">
                                    </div>

                                    <div class="form-group">
                                        <label>WorkPlace</label>
                                        <input type="text" name="WorkPlace" required class="form-control" placeholder="WorkPlace">
                                    </div>

                                    <div class="form-group">
                                        <label>WorkLocation</label>
                                        <input type="text" name="WorkLocation" required class="form-control" placeholder="WorkLocation">
                                    </div>
                                    <div class="form-group">
                                        <label>PhoneNumber</label>
                                        <input type="text" name="PhoneNumber" required class="form-control" placeholder="PhoneNumber">
                                    </div>

                                    <div class="form-group">
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

                                    <button type="submit" class="btn btn-dark">Thêm mới thông tin tài khoản tuyển dụng</button>
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
        <?php require_once(__DIR__ . '/../layout/footer.php') ?>
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