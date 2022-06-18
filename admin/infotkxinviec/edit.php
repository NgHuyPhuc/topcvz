<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM infocv WHERE IdInfoCV=$id ";
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
            move_uploaded_file($file_tmp, '../../public/userimg/' . $file_name);
            $check = true;
        }
    }

    //


    $data =
    [
        "FirstName" => $_POST['FirstName'] ? $_POST['FirstName'] : '',
        "LastName" => $_POST['LastName'] ? $_POST['LastName'] : '',
        "DoB" => $_POST['DoB'] ? $_POST['DoB'] : '',
        "Sex" => $_POST['Sex'] ? $_POST['Sex'] : '',
        "Email" => $_POST['Email'] ? $_POST['Email'] : '',
        "Hometown" => $_POST['Hometown'] ? $_POST['Hometown'] : '',
        "PermanentAddress" => $_POST['PermanentAddress'] ? $_POST['PermanentAddress'] : '',
        "CityforCV" => $_POST['CityforCV'] ? $_POST['CityforCV'] : '',
        "WorkExperience" => $_POST['WorkExperience'] ? $_POST['WorkExperience'] : '',
        
    ];
    if($check){
        $data["Avatar"] = "public/userimg/" . $file_name;
    }
    $update = $db->update('infocv', $data, array('IdInfoCV' => $id));
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
                                        <label>FirstName</label>
                                        <input type="text" name="FirstName" required class="form-control" placeholder="FirstName" value="<?php echo $user['FirstName'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>LastName</label>
                                        <input type="text" name="LastName" required class="form-control" placeholder="LastName" value="<?php echo $user['LastName'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>DoB</label>
                                        <input type="text" name="DoB" required class="form-control" placeholder="DoB" value="<?php echo $user['DoB'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Sex</label>
                                        <input type="text" name="Sex" required class="form-control" placeholder="Sex" value="<?php echo $user['Sex'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="Email" required class="form-control" placeholder="Email" value="<?php echo $user['Email'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>PermanentAddress</label>
                                        <input type="text" name="PermanentAddress" required class="form-control" placeholder="PermanentAddress" value="<?php echo $user['PermanentAddress'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Hometown</label>
                                        <input type="text" name="Hometown" required class="form-control" placeholder="Hometown" value="<?php echo $user['Hometown'] ?>">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Avatar</label>
                                        <input type="text" name="Avatar" required class="form-control" placeholder="Avatar" value="<?php echo $user['Avatar'] ?>">
                                    </div> -->

                                    <div class="form-group">
                                        <label>CityforCV</label>
                                        <input type="text" name="CityforCV" required class="form-control" placeholder="CityforCV" value="<?php echo $user['CityforCV'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>WorkExperience</label>
                                        <input type="text" name="WorkExperience" required class="form-control" placeholder="WorkExperience" value="<?php echo $user['WorkExperience'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <img src="<?php echo $base_url . $user['Avatar'] ?>" width="100" height="100" alt="">
                                        <input type="file" name="file" class="form-control-file">
                                    </div>

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