<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once(__DIR__ . '/layouttuyendung/head.php')
    ?>

    <title>Thông tin NTD</title>
</head>
<?php
$id = $_SESSION['IdRecruit'];
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
            move_uploaded_file($file_tmp, './public/recruitimg/' . $file_name);
            $check = true;
        }
    }

    //

    $data =
        [

            "Password" => md5($_POST['Password']),

        ];
    if ($check) {
        $data["Anh"] = "public/img/user/" . $file_name;
    }
    $update = $db->update('userrecruit', $data, array('IdRecruit' => $id));
    if ($update > 0) {
        $_SESSION['error'] = "sửa thành công";
        header('Location: ./thongtinNTD.php');
    } else
        $_SESSION['error'] = "không thành công";
}

?>

<body>
    <div class="full_web">
        <?php
        require_once(__DIR__ . '/layouttuyendung/header.php')
        ?>

        <div style="background-color: #f1f2f6;height:95vh;">
            <div class="grid">
                <div class="row">
                    <?php
                    require_once(__DIR__ . '/layouttuyendung/nav.php')
                    ?>

                    <div class="infomation">
                        <!-- Thông tin công ty -->

                        <div class="company">
                            <h3>Thông tin công ty</h3>
                            <div style="display: flex; margin-top: 20px;">
                                <img src="<?php echo $userrecruit['Avatar'] ?>" alt="">
                                <div style=" margin-left:10px; font-size:1.2rem;">
                                    <p style="font-size:18px; font-weight:bolder ;"> <?php echo $userrecruit['NameOfCompany'] ?></p>
                                    <p>Quy mô công ty: 25-99 </p>
                                </div>
                            </div>
                            <div style="display:flex; font-size: 1.4rem; font-weight:500 ; margin: 30px 0;">
                                <div class="grid__column-5">
                                    <p>Mã số thuế: 2400809399</p>
                                    <p>Lĩnh vực hoạt động: Xuất nhập khẩu</p>
                                    <p>Địa chỉ: <?php echo $userrecruit['WorkPlace'] ?></p>
                                </div>
                                <div class="grid__column-5">
                                    <p>Số điện thoại: <?php echo $userrecruit['PhoneNumber'] ?></p>
                                    <p>Email: <?php echo $userrecruit['Email'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        var check = function ktmatkhau() {
            if (document.getElementById('lan1').value == document.getElementById('lan2').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Hai mật khẩu giống nhau';
                document.getElementById('subm').disabled = false;
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'HAI MẬT KHẨU KHÔNG GIỐNG NHAU';
                document.getElementById('subm').disabled = true;
            }
        }
    </script>
    <!-- bt navbar -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>