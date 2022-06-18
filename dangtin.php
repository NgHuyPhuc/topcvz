<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
    require_once(__DIR__ . '/layouttuyendung/head.php')
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/home.css">
    <link rel="stylesheet" href="./asset/css/Chung.css">
    <link rel="stylesheet" href="./asset/css/dangtin.css">
    <link rel="stylesheet" href="./asset/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Đăng tin tuyển dụng</title>
</head>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $idr=$_SESSION['IdRecruit'];
    $sqlb="SELECT `inforecruit`.`IdInfoRecruit`
        FROM `userrecruit`,`inforecruit`
        WHERE `userrecruit`.`IdRecruit`=`inforecruit`.`IdRecruit` AND `userrecruit`.`IdRecruit`=$idr";
    $data = $db->fetchOne($sqlb);
    $bien = $data['IdInfoRecruit'];

    $datenow = date('Y-m-d');

    $data =
        [
            // "IdInfoCV" => $_POST['IdInfoCV'] ? $_POST['IdInfoCV'] : '',
            "IdInfoRecruit" => $bien,
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
        <form action="" method="POST">
            <div class="Tuyendung-form">
                <div class="grid">
                    <div class="Tuyendung-content">
                        <div class="grid__column-5">
                            <div class="Tuyendung-content-chung1">
                                <div class="Tuyendung-content-chung1-mini">
                                    <h3>Thông tin chung</h3>
                                    <div class="tuyendung-inp">
                                        Công việc: <input type="text" name="Job" id="" >
                                    </div>
                                    <div class="tuyendung-inp">
                                        Mức lương: <input type="text" name="MucLuong" id="" >
                                    </div>
                                    <div class="tuyendung-inp">
                                        Hình thức làm việc: 
                                        <Select name="HinhThucLam">
                                            <option value="Toàn thời gian">Toàn thời gian</option>
                                            <option value="Bán thời gian">Bán thời gian</option>
                                        </Select>
                                    </div>
        
                                    <div class="tuyendung-inp">
                                        Giới tính: 
                                        <!-- <input type="text" name="GioiTinh" value="" class="tuyendung-inp">  -->
                                        <Select name="GioiTinh">
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Không">Không</option>
                                        </Select>
                                    </div>
                                    <div class="tuyendung-inp">
                                        Cấp bậc: <input type="text" name="CapBac" id="" class="tuyendung-inp">
                                    </div>
                                    <div class="tuyendung-inp">
                                        Kinh nghiệm: <input type="text" name="YeuCauKinhNghiem" id="" class="tuyendung-inp">
                                    </div>
                                    <div class="tuyendung-inp">
                                        Số lượng cần tuyển: <input type="text" name="SoLuongCanTuyen" id="" class="tuyendung-inp">
                                    </div>
                                </div>


                                <div style="margin:20px 0 0 18px;">
                                    <h3 style="text-transform:uppercase; font-size: 1.4rem;">Mô tả công việc</h3>
                                    <!-- <textarea rows="12" cols="62" name="MoTa" form="usrform" style="font-size:1.4rem ;" placeholder="Mô tả chi tiết..."> </textarea> -->
                                    <input type="text" name="MoTa" class="tuyendung-inp">
                                </div>

                                <!-- <div style="margin:20px 0 0 18px;">
                                    <h3 style="text-transform:uppercase; font-size: 1.4rem;">Yêu cầu ứng viên</h3>
                                    <textarea rows="12" cols="62" name="comment" form="usrform" style="font-size:1.4rem ;"> Yêu cầu chi tiết...</textarea>
                                </div> -->

                                <!-- <div style="margin:20px 0 0 18px;">
                                    <h3 style="text-transform:uppercase; font-size: 1.4rem;">Quyền lợi được hưởng</h3>
                                    <textarea rows="12" cols="62" name="comment" form="usrform" style="font-size:1.4rem ;"> Chi tiết...</textarea>
                                </div> -->

                                <button type="submit" >Tuyển dụng ngay</button>
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