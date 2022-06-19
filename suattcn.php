<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once(__DIR__ . '/layout/head.php')
    ?>
    <title>Chỉnh sửa thông tin</title>
    <!-- BT inp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <?php
    $id = (int)$_SESSION['IdInfoCV'];
    $sql = "SELECT * FROM infocv WHERE IdInfoCV=$id ";
    $user = $db->fetchOne($sql);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // upload file
        $check = false;
        if (isset($_FILES['file'])) {
            $errors = array();
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            if ($file_size > 0) {
                move_uploaded_file($file_tmp, './public/userimg/' . $file_name);
                $check = true;
            }
        }

        //


        $data =
            [
                "FirstName" => $_POST['FirstName'] ? $_POST['FirstName'] : '',
                "LastName" => $_POST['LastName'] ? $_POST['LastName'] : '',
                "DoB" => $_POST['DoB'] ? $_POST['DoB'] : '',
                // "Sex" => $_POST['Sex'] ? $_POST['Sex'] : '',
                "Email" => $_POST['Email'] ? $_POST['Email'] : '',
                "Hometown" => $_POST['Hometown'] ? $_POST['Hometown'] : '',
                "PermanentAddress" => $_POST['PermanentAddress'] ? $_POST['PermanentAddress'] : '',
                // "Avatar" => $_POST['Avatar'] ? $_POST['Avatar'] : '',
                "CityforCV" => $_POST['CityforCV'] ? $_POST['CityforCV'] : '',
                "WorkExperience" => $_POST['WorkExperience'] ? $_POST['WorkExperience'] : '',

            ];
        if ($check) {
            $data["Avatar"] = "public/userimg/" . $file_name;
        }
        // $update = $db->update('infocv', $data, array('IdInfoCV' => $id));
        // if ($update > 0) {
        //     $_SESSION['error'] = "sửa thành công";
        //     header("location:./ttcanhan.php");
        // } else{
        //     $_SESSION['error'] = "không thành công";
        // }

        $update = $db->update('infocv', $data, array('IdInfoCV' => $id));
        if ($update > 0) {
            // header('Location: ./ttcanhan.php');
            $_SESSION['error'] = "sửa thành công";
        } else{
            $_SESSION['error'] = "không thành công";
        }
    }
    ?>
</head>

<body>
    <div class="full_web">
        <?php require_once(__DIR__ . '/layout/header.php') ?>

        <div class="container-suatt">
            <div class="grid">
                <div class="container_form-tt">
                    <div class="grid__column-3">
                        <div class="form-trai">
                            <h3> Ảnh đại diện</h3>
                            <input type='file' onchange="readURL(this);" />
                            <div style="display: flex; justify-content: center;">
                                <img id="blah" src="<?php echo $user['Avatar'] ?>" alt="Ảnh của bạn" style="border-radius: 50%;" />
                            </div>
                        </div>
                    </div>

                    <div class="grid__column-7">
                        <div class="form-phai">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Họ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="FirstName" value="<?php echo $user['FirstName'] ?>" placeholder="Họ" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="LastName" value="<?php echo $user['LastName'] ?>" placeholder="Tên" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Ngày sinh</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="DoB" value="<?php echo $user['DoB'] ?>" placeholder="Ngày sinh" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Số điện thoại</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="0833529833" placeholder="Nhập Số điện thoại" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nghề nghiệp</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="Sinh viên" placeholder="Nhập Nghề nghiệp" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>


                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nơi công tác</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="Đại học Điện Lực" placeholder="Nhập Nơi công tác" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Quê quán</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Hometown" value="<?php echo $user['Hometown'] ?>" placeholder="Nhập Quê quán" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Địa chỉ thường trú:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="PermanentAddress" value="<?php echo $user['PermanentAddress'] ?>" placeholder="Nhập Địa chỉ thường trú" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Thành phố:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="CityforCV" value="<?php echo $user['CityforCV'] ?>" placeholder="Nhập Thành phố" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Kinh nghiệm:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="WorkExperience" value="<?php echo $user['WorkExperience'] ?>" placeholder="Nhập Thành phố" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>
                                
                                <div class="form-group row" style="margin-left: 20px; font-size: 1.6rem;">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="Email" class="form-control" name="Email" value="<?php echo $user['Email'] ?>" placeholder="Email" style="width:60% ; font-size: 1.6rem;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- <img src="<?php echo $base_url . $user['Avatar'] ?>" width="100" height="100" alt=""> -->
                                    <input type="file" name="file" class="form-control-file">
                                </div>
                                <div class="chinhsua">
                                    <a href="./ttcanhan.php" class="">Quay lại</a>

                                    <button style="text-decoration: none;
                                                    background-color: var(--primary-color);
                                                    padding: 8px 12px;
                                                    color: var(--white-color);
                                                    border:none;
                                                    border-radius: 5px;
                                                    cursor: pointer;
                                                    margin: 0 10px;"  type="submit" id="btn-modal-add">Lưu</button>
                                    <!-- <script language="javascript">
                                    var button = document.getElementById("btn-modal-add");
                                    button.onclick = function() {
                                        swal("Xác nhận!", "Lưu thành công");
                                    }
                                </script> -->
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JQ inp -->
    <script script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>