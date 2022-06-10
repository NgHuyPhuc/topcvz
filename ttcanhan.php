<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once(__DIR__ .'/layout/head.php')
    ?>
    <title>Trang cá nhân</title>

</head>

<?php
    $id=$_SESSION['IdInfoCV'];
    // $sql = "SELECT * FROM infocv WHERE IdInfoCV='{$_SESSION['IdInfoCV']}'" ;
    $sql = "SELECT * FROM infocv WHERE IdInfoCV= $id" ;
    // $int = (int)$num
    // $sql = "SELECT * FROM infocv WHERE IdInfoCV='".(int)$_SESSION['IdInfoCV']."'";
    $user = $db->fetchOne($sql);
    ?>
<body>
    <div class="full_web">
    <?php require_once(__DIR__.'/layout/header.php')?>

        <!-- <div class="container_ttcanhan">
            <div class="grid">
                <div class="container_form-tt">
                    <div class="grid__column-3">
                        <div class="form-trai">
                            <h3> Ảnh đại diện</h3>
                            <div style="display:flex; justify-content: center;">
                                <img src="<?php echo $_SESSION['Avatar']?>" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="grid__column-7">
                        <div class="form-phai">
                            <ul class="form-thongtin">
                                <li>Tên tài khoản: <?php echo $_SESSION['UserName']?></li>
                                <li>Họ: <?php echo $_SESSION['FirstName']?></li>
                                <li>Tên: <?php echo $_SESSION['LastName']?></li>
                                <li>Ngày sinh: <?php echo $_SESSION['DoB']?></li>
                                <li>Số điện thoại: 0833529833</li>
                                <li>Nghề nghiệp: Sinh viên</li>
                                <li>Nơi công tác: Đại học Điện Lực</li>
                                <li>Email: <?php echo $_SESSION['Email']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container_ttcanhan">
            <div class="grid">
                <div class="container_form-tt">
                    <div class="grid__column-3">
                        <div class="form-trai">
                            <h3> Ảnh đại diện</h3>
                            <div style="display:flex; justify-content: center;">
                            <img src="<?php echo $user['Avatar'] ?>" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="grid__column-7">
                        <div class="form-phai">
                            <ul class="form-thongtin">
                                <li>Tên tài khoản: <?php echo $user['IdAccount']?></li>
                                <li>Họ: <?php echo $user['FirstName']?></li>
                                <li>Tên: <?php echo $user['LastName']?></li>
                                <li>Ngày sinh: <?php echo $user['DoB']?></li>
                                <li>Số điện thoại: 0833529833</li>
                                <li>Nghề nghiệp: Sinh viên</li>
                                <li>Nơi công tác: Đại học Điện Lực</li>
                                <li>Quê quán: <?php echo $user['Hometown']?></li>
                                <li>Địa chỉ thường trú: <?php echo $user['PermanentAddress']?></li>
                                <li>Thành phố: <?php echo $user['CityforCV']?></li>
                                <li>Email: <?php echo $user['Email']?></li>
                                <li>Email: <?php echo $user['WorkExperience']?></li>
                            </ul>
                            <div class="chinhsua">
                                <a href="./suattcn.php" class="">Chỉnh sửa</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>