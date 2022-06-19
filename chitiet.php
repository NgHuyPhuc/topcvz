<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once(__DIR__ .'/layout/head.php')
    ?>
    <title>Chi Tiết</title>
</head>
<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sqljob = "SELECT `jobinfo` .* ,`inforecruit`.*
        FROM `jobinfo` ,`inforecruit`
        WHERE `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND `jobinfo`.`IdJobInfo`='$id'";
    $job=$db->fetchOne($sqljob);

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_SESSION['IdInfoCV']))
        {
            header('Location:./login.php');
        }
        else{
            $idinfocv=$_SESSION['IdInfoCV'];
        }
        $data =
            [
                "IdInfoCV" => $idinfocv,
                "IdJobInfo" => $id,
            ];
        
        $insert = $db->insert('jobcv', $data);
        if ($insert > 0) {
            $_SESSION['error']="Thêm Thành Công";
            echo "<script>alert('Apply Thành Công')</script>";
            header('Refresh:5; Location: ./index.php');
        } else
            $_SESSION['error']="không Thành Công";
    }
}

?>
<body>
    <div class="full_web">
        <?php require_once(__DIR__.'/layout/header.php')?>
        <div class="container_chitiet">
            <div class="grid">
                <div class="container_minimenu">
                    <a href="./vieclam.php" style="text-decoration: none; color: var(--primary-color);">Trang chủ</a>
                    <i class="ti-angle-right" style="margin: 0 20px ;"></i>
                    <p style="margin:0 ;">Tuyển <?php echo $job['Job']?></p>
                </div>
                <div class="container_congty">
                    <div style="display:flex; padding: 20px;">
                        <img src="<?php echo $base_url.$job['Avatar']?>" style=" border:1px solid #ccc;padding: 10px" alt="">
                        <div style="margin-left: 40px;">
                            <h3 style="font-size: 1.8rem; color: var(--primary-color); text-transform: uppercase;"><?php echo $job['Job']?></h3>
                            <p style="font-size: 1.6rem; color: var(--text-color); text-transform: uppercase;"><?php echo $job['NameOfCompany']?></p>
                            <i style="font-size: 1.4rem; color: #ccc;" class="ti-alarm-clock">Hạn nộp hồ sơ: 11/06/2022</i>
                        </div>
                    </div>
                    
                    <!-- Form ứng tuyển -->
                    <form action="" method="POST">
                    <div style="margin:20px 20px 0 0 ;">
                        <button type="submit" style="outline:none; cursor: pointer; background-color: var(--primary-color); color: var(--white-color); border: none;
                        border-radius: 5px; padding: 10px 14px; text-transform: uppercase; font-size: 1.6rem; "> Ứng tuyển ngay</button>
                        <div style="cursor: pointer; border: 1px solid #ccc; text-align: center; font-size: 1.6rem; padding: 10px 14px; border-radius: 5px;
                        text-transform: uppercase; margin-top: 12px;">
                            <i class="ti-heart" style="margin-right:8px ;"></i>
                            Lưu tin
                        </div>
                    </div>
                    </form>
                    <!-- End Form ứng tuyển -->
                </div>

                <div class="container_tin">
                    <div class="grid">
                        <ul>
                            <li><a href="">Tin tuyển dụng</a></li>
                            <li><a href="">Thông tin công ty</a></li>
                            <li><a href="">Việc làm liên quan</a></li>
                        </ul>
                    </div>
                </div>

                <div class="container_form-viec">
                    <h3 style="font-size: 1.8rem; padding: 15px ">Chi tiết tuyển dụng</h3>

                    <div class="container_form-viechung">
                        <div class="grid__column-7">
                            <div style="background-color: #f2fbf6;">
                                <h4>Thông tin chung</h4>
                                <div style="display:flex; justify-content:space-around">
                                    <ul style="list-style: none; font-size: 1.4rem; padding: 0;">
                                        <li style="display: flex; padding: 8px 0;">
                                            <i class="ti-money" style="margin-right: 10px;"></i>
                                            <p style="margin: 0;">Mức lương: <?php echo $job['MucLuong']?></p>
                                        </li>
                                        <li style="display: flex; padding: 8px 0;">
                                            <i class="ti-time" style="margin-right: 10px;"></i>
                                            <p style="margin: 0;">Hình thức làm việc: <?php echo $job['HinhThucLam']?></p>
                                        </li>
                                        <li style="display: flex; padding: 8px 0;"> 
                                            <i class="ti-rocket" style="margin-right: 10px;"></i>
                                            <p style="margin: 0;">Giới tính: <?php echo $job['GioiTinh']?></p>
                                        </li>
                                    </ul>
        
                                    <ul style="list-style: none; font-size: 1.4rem; padding: 0;">
                                        <li style="display: flex; padding: 8px 0;">
                                            <i class="ti-user" style="margin-right: 10px;"></i>
                                            <p style="margin: 0;">Số lượng người: <?php echo $job['SoLuongCanTuyen']?></p>
                                        </li>
                                        <li style="display: flex; padding: 8px 0;">
                                            <i class="ti-star" style="margin-right: 10px;"></i>
                                            <p style="margin: 0;">Cấp bậc: <?php echo $job['CapBac']?></p>
                                        </li>
                                        <li style="display: flex; padding: 8px 0;"> 
                                            <i class="ti-medall" style="margin-right: 10px;"></i>
                                            <p style="margin: 0;">Kinh nghiệm: <?php echo $job['YeuCauKinhNghiem']?></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div style="background-color: #f2fbf6; margin-top: 15px;">
                                <h4>Địa điểm làm việc</h4>
                                <p style="margin:0 25px; font-size: 1.4rem; ">- <?php echo $job['WorkPlace']?></p>
                            </div>

                            <div class="container_form-mota">
                                <h4>Mô tả công việc</h4>
                                <ul>
                                    <li><?php echo $job['MoTa']?></li>
                                    <li>Tư vấn, định hướng cho học viên, phụ huynh ghi danh khóa học lập trình phù hợp</li>
                                    <li>Duy trì mối quan hệ tốt đẹp với học viên, phụ huynh trong suốt quá trình tư vấn</li>
                                    <li>Chăm sóc học viên từ lúc tư vấn đến kết khoá (để học viên có được trải nghiệm thật tốt và giá trị khi tham gia khóa học)</li>
                                    <li>Các công việc khác theo sự phân công của Trưởng bộ phận.</li>
                                    <li>Thời gian: Giờ hành chính từ T2 - T6, nếu có khách vào T7 - CN thì có thể sắp xếp nghỉ bù linh hoạt</li>
                                    <li>Địa điểm làm việc: The Officity Space, tầng 3, tòa B, Việt Đức Complex, Số 39 Lê Văn Lương, Thanh Xuân, Hà Nội</li>
                                </ul>
                            </div>

                            <div class="container_form-mota">
                                <h4>Yêu cầu ứng viên</h4>
                                <ul>
                                    <li>Giao tiếp lưu loát, giọng nói rõ ràng, dễ nghe, không nói lắp, nói ngọng</li>
                                    <li>Ưu tiên các bạn trong độ tuổi từ 20 đến 25 tuổi (sinh năm 1997 - 2002), yêu thích kinh doanh/ đối ngoại/ giáo dục/ công nghệ thông tin</li>
                                    <li>Có thái độ tích cực, kiên trì, nhiệt huyết, muốn bứt phá bản thân</li>
                                    <li>Có laptop cá nhân</li>
                                    <li>Hứng thú với Công Nghệ 4.0</li>
                                    <li>Yêu thích môi trường startup, giáo dục, yêu trẻ con là một lợi thế</li>
                                    <li>Có tư duy của người làm dịch vụ, đặt khách hàng làm trọng tâm.</li>
                                </ul>
                            </div>

                            <div class="container_form-mota">
                                <h4>Quyền lợi</h4>
                                <ul>
                                    <li>Thu nhập cạnh tranh: lương cứng 6 - 9tr + thưởng kinh doanh</li>
                                    <li>Chế độ phúc lợi tốt: sinh nhật, lễ tết, chế độ BHXH, BHYT, BHTN, Phép 12 ngày/năm</li>
                                    <li>Được làm việc trong môi trường thân thiện, được sự hỗ trợ tận tình từ cấp trên, lộ trình công việc rõ ràng</li>
                                    <li>Công ty khuyến khích sự sáng tạo và tư duy làm chủ, tạo điều kiện cho mỗi cá nhân phát triển</li>
                                    <li>Các hoạt động chăm lo cho đời sống tinh thần: Sinh nhật cá nhân, lễ, tết, team building, outdoor cafe làm việc, nghỉ mát…</li>
                                </ul>
                            </div>
                        </div>

                        <div class="grid__column-3">
                            <div class="container_form-share">
                                <h4>Báo cáo tin tuyển dụng</h4>
                                <p>Nếu bạn thấy rằng tin tuyển dụng này không đúng, hãy phản ánh với chúng tôi</p>
                                <button>Báo cáo</button>
                            </div>

                            <ul class="container_form-share" style="padding:0 ; list-style: none;">
                                <h4>Nghành nghề</h4>
                                <li style="font-size:1.2rem ; margin-left: 20px">Giáo dục/Đào tạo</li>
                                <li style="font-size:1.2rem ; margin-left: 20px">Kinh doanh/Bán hàng</li>
                                <li style="font-size:1.2rem ; margin-left: 20px">Tư vấn</li>
                            </ul>

                            <ul class="container_form-share" style="padding:0 ; list-style: none;">
                                <h4>Khu vực</h4>
                                <li style="font-size:1.2rem ; margin-left: 20px">Thanh Xuân</li>
                                <li style="font-size:1.2rem ; margin-left: 20px">Hà Nội</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container_form-thongtin">
                    <h3 style="font-size: 1.8rem; padding: 15px; ">Thông tin CÔNG TY CỔ PHẦN CÔNG NGHỆ TEKMONK</h3>
                    <div style="margin: 0 15px; display: flex; font-size: 1.4rem; margin: 10px 15px;">
                        <i class="ti-home"></i>
                        <div style="margin:0 20px ;">
                            <h4 style="margin:0 0 10px;">Giới thiệu</h4>
                            <div >TekMonk là Học viện công nghệ có lộ trình đào tạo bài bản và định hướng xuyên suốt các lứa tuổi từ học sinh tới sinh viên, người đi làm. Chúng tôi tự hào là đơn vị đồng hành và truyền lửa cho các thế hệ dẫn dắt tiên phong về công nghệ.</div>
                        </div>
                    </div>

                    <div style="margin: 0 15px; display: flex; font-size: 1.4rem; margin: 10px 15px">
                        <i class="ti-user"></i>
                        <div style="margin:0 20px ;">
                            <h4 style="margin:0 0 10px;">Quy mô</h4>
                            <div >10-24 người</div>
                        </div>
                    </div>

                    <div style="margin: 0 15px; display: flex; font-size: 1.4rem; margin: 10px 15px">
                        <i class="ti-map-alt"></i>
                        <div style="margin:0 20px ;">
                            <h4 style="margin:0 0 10px;">Địa chỉ</h4>
                            <div >Phòng 10, Tầng 3 Tháp B Tòa nhà Việt Đức Complex, ngõ 164 Khuất Duy Tiến, Phường Nhân Chính, Quận Thanh Xuân, Thành phố Hà Nội, Việt Nam</div>
                        </div>
                    </div>
                </div>

                <div class="container_form-lienquan">
                    <h3 style="font-size: 1.8rem; padding: 15px; ">Việc làm liên quan</h3>

                    <div    >                            
                        <div style="display:flex ; justify-content: center;">
                                <div class="grid__column-3">
                                    <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                                    </div>
                                        <div class="container_high-paying-jobs">
                                            <ul class="container_high-paying-jobslist">
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty6.png" alt="">
                                                    <div class="container_company">
                                                        <div style="display: flex; margin-top: 8px;">
                                                            <h3 class="container_company-name">Công ty TNHH Paldo Vina</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">10-15 triệu</p>
                                                                <p class="container_company-wage">Hà Nam</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty7.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Công Ty Cổ Phần Đầu Tư Quốc Tế UBG</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Thỏa thuận</p>
                                                                <p class="container_company-wage">TP.HCM</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty8.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY CỔ PHẦN CARBON VIỆT NAM</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Trên 20 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty9.jpg" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY CỔ PHẦN AN VIỆT SÔNG HỒNG</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Thỏa thuận</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty2.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Công ty cổ phần công nghệ và phần mềm Genify</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">14-20 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty10.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Công ty Cổ phần POSO Việt Nam</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">20-40 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty11.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Công ty Cổ Phần Cung ứng Y tế Nha Phong</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Thỏa thuận</p>
                                                                <p class="container_company-wage">TP.HCM</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty3.jpg" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY CỔ PHẦN PPA HOLDING</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Trên 10 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
        
                                <div class="grid__column-3">
                                    <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                                    </div>
                                        <div class="container_high-paying-jobs">
                                            <ul class="container_high-paying-jobslist">
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty25.png" alt="">
                                                    <div class="container_company">
                                                        <div style="display: flex; margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY TNHH THỰC PHẨM MINH KHÁNH LONG</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Thỏa thuận</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty26.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY CỔ PHẦN HTC VIỄN THÔNG QUỐC TẾ</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">8-10 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty27.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">VTC Academy Hà Nội</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">11-14 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty28.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY CỔ PHẦN HTC VIỄN THÔNG QUỐC TẾ</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">8-10 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty29.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Công ty TNHH Xuất Nhập Khẩu COMALINA Việt Nam</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Trên 7 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty30.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY CỔ PHẦN VÒNG XANH</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">10-15 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty4.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY TNHH BEST LOGISTICS TECHNOLOGY (VIỆT NAM)</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">40-45 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty3.jpg" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY CỔ PHẦN PPA HOLDING</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Trên 10 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                  </div>

                                  <div class="grid__column-3">
                                    <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                                        
                                    </div>
                                        <div class="container_high-paying-jobs">
                                            <ul class="container_high-paying-jobslist">
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty20.png" alt="">
                                                    <div class="container_company">
                                                        <div style="display: flex; margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY TNHH VAREAL VIỆT NAM</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Trên 4 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty21.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Công ty BHNT Daiichi Việt Nam</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">5-10 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty22.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">EotyGroup</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Thỏa thuận</p>
                                                                <p class="container_company-wage">TP.HCM</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty23.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Công ty cổ phần bất động sản Maicom Việt Nam</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Thỏa thuận</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty24.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Siêu Thị Điện Máy Anh Đức</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">2-5 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty5.jpg" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">Công Ty Cổ Phần 216</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">12-18 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty4.png" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY TNHH BEST LOGISTICS TECHNOLOGY (VIỆT NAM)</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">40-45 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="container_high-paying-jobsitem">
                                                    <img src="./asset/img/logocty3.jpg" alt="">
                                                    <div class="container_company">
                                                        <div style=" margin-top: 8px;">
                                                            <h3 class="container_company-name">CÔNG TY CỔ PHẦN PPA HOLDING</h3>
                                                        </div>
                                                        <div style="display: flex;">
                                                            <div style="display: flex;">
                                                                <p class="container_company-wage">Trên 10 triệu</p>
                                                                <p class="container_company-wage">Hà Nội</p>
                                                            </div>
                                                            <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                  </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- Slider -->
        <script
        type="text/javascript"
        src="https://code.jquery.com/jquery-1.11.0.min.js"
      ></script>
      <script
        type="text/javascript"
        src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
      ></script>
      <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
      ></script>

      <div class="slider">
          <div class="grid">
              <h2 class="slider-title" style="margin: 12px 0; font-size: 2rem;">Khoá học dành cho bạn</h2>
             <div class="image-slider">
              <div class="image-item">
                  <div class="image">
                    <img style="object-fit:contain ;"
                      src="data:image/jpeg;base64,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"
                      alt=""/>
                  </div>
              </div>

              <div class="image-item">
                  <div class="image">
                    <img style="object-fit:contain ;"
                      src="data:image/jpeg;base64,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"
                      alt=""/>
                  </div>
              </div>

              <div class="image-item">
                  <div class="image">
                    <img style="object-fit:contain ;"
                      src="data:image/jpeg;base64,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s+YlmM5abDNWw0uos0XeoNq7/reVKWzObQgkbbj9C8uw4dUEC1/3z+vRZFjQAAAAAKAGwAHgFWsQ18plbfN2kktvLIja0BwYQ+t7Fd53PdVL0hnkL2tLXXzJNTuWQ3QC7R2qrcaehXgPH79PdZTER5e/trpcXWTRY7EzSjToBcHjljsHsPJ2e4HfSBqu/AeKiczayWk6WhlN0XrJcQ+z6V06IXqBGTS4/TTgskiIvaxoiIiIiIiLhBRFCvK+dIoJUqEUooJUEqFNF6oiKEtFKWiKERFCKFKlFd5TgXYmeKBvV7w0n8VvVx+Asq0W/wDsxyz+Vxbh/wBuL12Lz+yPmtfFzdzC5++3Xb3W1g8P38zWbb9B+0W9wwtja1jBpYxoa0DoGgUAvZEVMV2RERERERERERERRSlERERERERERERERERERERERERERERERcHUIivK+doqUUKV6RQpUIpQlEUKVKKEUIiWiKEUquJjnuaxo1FxDWtHUkmgF27JcvGGw8UAo6G04j7Tzu4/EkrnXs5yvnYrnOFsgGoeBe7Zvy3PwC6qq72xPmeIhtc9T7D8qy9jYfKwynU2HQe5/CIiLjLtIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiLgtqlEV6C+ehFCIilFCIpUoqURERERSpVKhEUjVSdF2Tg3K/ouEja4VK/wDCSeILugPoKHzWfRFRZXl73OdqSr1EwMYGt0AREReFkREREREREREREREREREREREREREREREREREREREREREREX//2Q=="
                      alt=""
                    />
                  </div>
              </div>

              <div class="image-item">
                  <div class="image">
                    <img style="object-fit:contain ;"
                      src="data:image/jpeg;base64,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"
                      alt=""/>
                  </div>
              </div>

              <div class="image-item">
                  <div class="image">
                    <img style="object-fit:contain ;"
                      src="data:image/jpeg;base64,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"
                      alt=""/>
                  </div>
              </div>
             </div>
          </div>
      </div>

      <?php require_once(__DIR__.'/layout/footer.php')?>
    </div>

    <script src="./asset/js/app.js"></script>
</body>
</html>