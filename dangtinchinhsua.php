<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
    require_once(__DIR__ . '/layouttuyendung/head.php')
    ?>
    <title>Đăng tin tuyển dụng</title>
</head>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM jobinfo WHERE IdJobInfo=$id ";
    $job = $db->fetchOne($sql);
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
        header('Location: ./quanlyviec.php');
    } else
        $_SESSION['error'] = "không thành công";
}
?>
<body>
    <div class="full_web">
    <?php
        require_once(__DIR__ . '/layouttuyendung/header.php')
        ?>
        <form action="" method="POST">
            <div class="Tuyendung-form">
                <div class="grid">
                    <div class="Tuyendung-content">
                        <div class="grid__column-5">
                            <div class="Tuyendung-content-chung1">
                                <div class="Tuyendung-content-chung1-mini">
                                    <h3>Thông tin chung</h3>
                                    <div class="tuyendung-inp">
                                        Công việc: <input type="text" name="Job" value="<?php echo $job['Job']?>" id="" >
                                    </div>
                                    <div class="tuyendung-inp">
                                        Mức lương: <input type="text" name="MucLuong" value="<?php echo $job['MucLuong']?>" id="" >
                                    </div>
                                    <div class="tuyendung-inp">
                                        Hình thức làm việc: 
                                        <Select name="HinhThucLam">
                                            <option value="<?php echo $job['HinhThucLam']?>"><?php echo $job['HinhThucLam']?></option>
                                            <option value="Toàn thời gian">Toàn thời gian</option>
                                            <option value="Bán thời gian">Bán thời gian</option>
                                        </Select>
                                    </div>
        
                                    <div class="tuyendung-inp">
                                        Giới tính: 
                                        <!-- <input type="text" name="GioiTinh" value="" class="tuyendung-inp">  -->
                                        <Select name="GioiTinh">
                                            <option value="<?php echo $job['GioiTinh']?>"><?php echo $job['GioiTinh']?></option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Không">Không</option>
                                        </Select>
                                    </div>
                                    <div class="tuyendung-inp">
                                        Cấp bậc: <input type="text" value="<?php echo $job['CapBac']?>" name="CapBac" id="" class="tuyendung-inp">
                                    </div>
                                    <div class="tuyendung-inp">
                                        Kinh nghiệm: <input type="text" value="<?php echo $job['YeuCauKinhNghiem']?>" name="YeuCauKinhNghiem" id="" class="tuyendung-inp">
                                    </div>
                                    <div class="tuyendung-inp">
                                        Số lượng cần tuyển: <input value="<?php echo $job['SoLuongCanTuyen']?>" type="text" name="SoLuongCanTuyen" id="" class="tuyendung-inp">
                                    </div>
                                </div>


                                <div style="margin:20px 0 0 18px;">
                                    <h3 style="text-transform:uppercase; font-size: 1.4rem;">Mô tả công việc</h3>
                                    <!-- <textarea rows="12" cols="62" name="MoTa" form="usrform" style="font-size:1.4rem ;" placeholder="Mô tả chi tiết..."> </textarea> -->
                                    <input value="<?php echo $job['MoTa']?>" type="text" name="MoTa" class="tuyendung-inp">
                                </div>

                                <button type="submit" >Chỉnh sửa</button>
                            </div>
                        </div>

                        <div class="grid__column-5">
                            <img src="https://havn.com.vn/wp-content/uploads/2020/07/tuyen-dung.png" style="margin-top: 20px;width: 100%;" alt="" srcset="">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYsglCwI4zueg0VUpAT2cyc8-_cvORDVlVfFAiGhLx2p8hSU0bR0XqB6KyySA1anX0h3s&usqp=CAU" style="margin-top: 20px;width: 100%;" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="footer">
            <div class="footer_info">
                <div class="grid footer-flex">
                    <div class="footer_full-form grid__column-4">
                        <ul class="footer_full-list">
                            <h3 class="footer_full-title">Về TopCV</h3>
                            <li class="footer_full-item">Giới thiệu</li>
                            <li class="footer_full-item">Góc báo chí</li>
                            <li class="footer_full-item">Tuyển dụng</li>
                            <li class="footer_full-item">Liên hệ</li>
                            <li class="footer_full-item">Hỏi đáp</li>
                        </ul>
                    </div>
    
                    <div class="footer_full-form grid__column-4">
                        <ul class="footer_full-list">
                            <h3 class="footer_full-title">Đối tác</h3>
                            <li class="footer_full-item">TestCenter</li>
                            <li class="footer_full-item">TopHR</li>
                            <li class="footer_full-item">ViecNgay</li>
                            <li class="footer_full-item">Happy Time</li>
                            <li class="footer_full-item">Gitiho</li>
                        </ul>
                    </div>
    
                    <div class="footer_full-form grid__column-4">
                        <ul class="footer_full-list">
                            <h3 class="footer_full-title">Hồ sơ và CV</h3>
                            <li class="footer_full-item">TestCenterQuản lý CV của bạn</li>
                            <li class="footer_full-item">TopCV Profile</li>
                            <li class="footer_full-item">Hướng dẫn viết CV</li>
                            <li class="footer_full-item">Review CV</li>
                        </ul>
                    </div>
    
                    <div class="footer_full-form grid__column-4">
                        <ul class="footer_full-list">
                            <h3 class="footer_full-title">Xây dựng sự nghiệp</h3>
                            <li class="footer_full-item">Việc làm tốt nhất</li>
                            <li class="footer_full-item">Việc làm lương cao</li>
                            <li class="footer_full-item">Việc làm quản lý</li>
                            <li class="footer_full-item">Việc làm từ xa (remote)</li>
                            <li class="footer_full-item">Việc làm bán thời gian</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Backtop -->
    <div id="backtop">
        <i class="ti-angle-up backtop-icon"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if($(this).scrollTop()){
                    $('#backtop').fadeIn();
                }else{
                    $('#backtop').fadeOut();
                }
            });
            $('#backtop').click(function(){
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            });
        });
    </script>
    <script src="./asset/js/app.js"></script>

    <!-- bt navbar -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>