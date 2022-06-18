<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // require_once(__DIR__ . '/lib/autoload.php');
        require_once(__DIR__ . '/lib/autoload.php');
        require_once(__DIR__ . '/layouttuyendung/head.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuyen Dung</title>
    <link rel="stylesheet" href="./asset/css/Tuyendung.css">
    <link rel="stylesheet" href="./asset/css/Chung.css">
    <link rel="stylesheet" href="./asset/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php

    $sql = "SELECT `jobinfo`.*
    FROM `jobinfo`,`inforecruit`,`userrecruit`
    WHERE `userrecruit`.`IdRecruit`=`inforecruit`.`IdRecruit`
        AND `inforecruit`.`IdInfoRecruit`=`jobinfo`.`IdInfoRecruit` 
        AND `userrecruit`.`IdRecruit`=$id ";
    $totalRecordsOfJob = $db->countData($sql);

    $sqlslcv = "SELECT `infocv`.* 
        FROM `infocv`,`jobcv`,`jobinfo`,`inforecruit`,`userrecruit` 
        WHERE `infocv`.`IdInfoCV`=`jobcv`.`IdInfoCV` AND `jobcv`.`IdJobInfo`=`jobinfo`.`IdJobInfo` 
        AND `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND `inforecruit`.`IdRecruit`= `userrecruit`.`IdRecruit` 
        AND `userrecruit`.`IdRecruit`=$id ";
    $totalRecordsOfcv = $db->countData($sqlslcv);

    $sqlslcvchuasl = "SELECT `infocv`.* 
        FROM `infocv`,`jobcv`,`jobinfo`,`inforecruit`,`userrecruit` 
        WHERE `infocv`.`IdInfoCV`=`jobcv`.`IdInfoCV` AND `jobcv`.`IdJobInfo`=`jobinfo`.`IdJobInfo` 
        AND `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND `inforecruit`.`IdRecruit`= `userrecruit`.`IdRecruit` 
        AND `userrecruit`.`IdRecruit`=$id AND`jobcv`.`TrangThai`=''";
    $totalRecordsOfcvchuasl = $db->countData($sqlslcvchuasl);
?>



<body>
    <div class="full_web">
        <?php
            require_once(__DIR__ . '/layouttuyendung/header.php')
        ?>

        <div class="container-td" style="background-color: #f1f2f6; padding-bottom: 50px;">
            <div class="grid">
                <h3 class="container-title">Bảng tin</h3>
                <div class="contaner-form-td">
                    <div class="grid__column-5">
                        <img src="https://tuyendung.topcv.vn/app/_nuxt/img/banner-7.88b3c53.jpg" alt="">

                        <div class="container-hieuqua">
                            <h4>Hiệu quả tuyển dụng</h4>
                                <ul class="container-hq-chitiet">
                                    <li class="container-hq-item" style="background-color: #f6f9fe; color: blue; font-size: 1.4rem;">
                                        <div ><?php echo $totalRecordsOfJob?>
                                            <p>Chiến dịch đang mở</p>
                                        </div>

                                        <i class="ti-headphone-alt hq-icon" style="color: #4285f4; padding: 10px; background-color: #e3eefd; border-radius: 50%;"></i>
                                    </li>

                                    <li class="container-hq-item" style="background-color: #e5f7ed; color: #68b35d; font-size: 1.4rem;">
                                        <div ><?php echo $totalRecordsOfcv ?>
                                            <p>CV tiếp nhận</p>
                                        </div>

                                        <i class="ti-file" style=" padding: 10px; background-color: #e5f7ee; border-radius: 50%;"></i>
                                    </li>

                                    <li class="container-hq-item" style="background-color: #fef7e5; color: #ffc111; font-size: 1.4rem;">
                                        <div><?php echo $totalRecordsOfJob?>
                                            <p>Tin tuyển dụng hiển thị</p>
                                        </div>

                                        <i class="ti-files" style=" padding: 10px; background-color: #fdf0ce; border-radius: 50%;"></i>
                                    </li>

                                    <li class="container-hq-item" style="background-color: #fceceb; color: #e06e89; font-size: 1.4rem;">
                                        <div><?php echo $totalRecordsOfcvchuasl ?>
                                            <p>CV mới ứng tuyển</p>
                                        </div>

                                        <i class="ti-upload" style=" padding: 10px; background-color: #f9dbd9; border-radius: 50%;"></i>
                                    </li>
                                </ul>

                                <div style="text-align: center;">
                                    <div style="display:flex ; justify-content:center;margin-bottom: 10px;">
                                        <img src="https://tuyendung.topcv.vn/app/_nuxt/img/recruitment-effective-empty.f3e2d62.png" style="object-fit:cover; width:300px; height: 161px;text-align: center;" alt="">
                                    </div>
                                    <p>Chưa đủ dữ liệu để hiển thị</p>
                                </div>
                                
                            </div>
                        </div>
        
                        <div class="grid__column-5">
                            <img src="https://tuyendung.topcv.vn/app/_nuxt/img/banner-4.727f591.png" alt="">

                            <div class="container-taikhoan">
                                <div class="taikhoan-user">
                                    <i class="ti-user tk-icon"></i>
                                    <div>
                                        <h4>Nguyễn Huy Phúc</h4>
                                        <p>Mã NTD: 390696</p>
                                    </div>
                                </div>

                                <h4 class="xacthuc">Tài khoản xác thực: <p style="color: var(--primary-color);">Cấp 2/5</p></h4>

                                <h4 class="quyenloi">Nâng cấp tài khoản: Để đạt cấp 3/5, Quý khách cần xác thực email tên miền công ty hoặc được duyệt Giấy phép kinh doanh.
                                </h4>

                                <h4 class="quyenloi">Quyền lợi: Khi đạt cấp 3/5, nhà tuyển dụng có 3 lượt hiển thị tin tuyển dụng/ tháng, không giới hạn số lượt tìm kiếm
                                     CV và 100 lượt xem CV từ công cụ tìm kiếm CV ứng viên.</h4>

                                <div style="margin: 20px 0 0 10px;">
                                    <button class="capnhat capnhat1">Cập nhật thông tin xác thực</button>
                                    <button class="capnhat capnhat2">Tìm hiểu thêm</button>
                                </div>
                            </div>

                            <div style="display:flex; justify-content:space-around;">
                                <div class="dexuat">
                                    <h3> Đề xuất từ Toppy AI</h3>
                                    <p>Tự động phân tích bằng công nghệ trí tuệ nhân tạo</p>
                                    <div style="display:flex ; align-items:center;color: var(--primary-color); font-size: 1.6rem;">
                                        <i class="ti-settings" style="margin-right:10px ;background-color: #e5f7ee; padding: 6px; border-radius: 50%;" ></i>
                                        <p style="margin: 0;">Tối ưu thiết lập</p>
                                    </div>
                                </div>

                                <div class="dichvu">
                                    <h3> Dịch vụ sắp hết hạn</h3>
                                    <p>Hiện ko có dịch vụ nào hết hạn</p>
                                    <div style="display:flex ; align-items:center; color: var(--primary-color); font-size: 1.6rem;">
                                        <i class="ti-settings" style="margin-right:10px ;background-color: #e5f7ee; padding: 6px; border-radius: 50%;"></i>
                                        <p style="margin: 0;">Quản lý dịch vụ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid">
                    <div class="container-toiuu">
                        <h3>Các vị trí đã được TopCV tối ưu kết quả tìm kiếm</h3>
                        <p style="font-size:1.3rem ;">Chúng tôi sẽ liên tục cập nhật các vị trí mới và gia tăng nguồn ứng viên phù hợp dựa theo nhu cầu tìm kiếm của bạn.
                        </p>

                        <div>
                            <h4>Hành chính văn phòng</h4>
                            <div style=" display: flex; justify-content:space-between;">
                                <div class="grid__column-3" >
                                    <p>Chuyên viên Nhân sự (109,209) <br>
                                        Nhân viên Hành chính - Nhân sự (34,532) <br>
                                        Lễ tân (88,386) <br>
                                        Kế toán tổng hợp (33,275) <br>
                                        Nghiên cứu phát triển - R&D (30,054) <br>
                                        Nhân viên kho (48,518)
                                    </p>
                                </div>

                                <div class="grid__column-3" >
                                    <p>Chuyên viên Tuyển dụng (32,513) <br>
                                        Nhân viên Hành chính - Kế toán (4,215) <br>
                                        Giao dịch viên (16,521) <br>
                                        Xuất nhập khẩu (61,558) <br>
                                        Trợ lý giám đốc (14,050)<br>
                                        Kế toán trưởng (4,459)
                                    </p>
                                </div>

                                <div class="grid__column-3" >
                                    <p>Nhân viên Hành chính - Văn phòng (150,405) <br>
                                        Thu ngân (103,547) <br>
                                        Kế toán (167,040) <br>
                                        Luật - Pháp chế (19,197)<br>
                                        Thư ký (20,022) <br>
                                    </p>
                                </div>
                            </div>

                            <h4>Kinh doanh-bán hàng</h4>
                            <div style=" display: flex; justify-content:space-between;">
                                <div class="grid__column-3" >
                                    <p>Nhân viên kinh doanh (390,780) <br>
                                        Tư vấn bán hàng (24,471) <br>
                                        Giám sát bán hàng (22,984)<br>
                                        Telesales (69,218)<br>
                                        Sales Phần mềm (39,019)<br>
                                        Business Manager (7,735) <br>
                                        Nhân viên bán tour (5,219)
                                    </p>
                                </div>

                                <div class="grid__column-3" >
                                    <p>Nhân viên bán hàng (351,178) <br>
                                        Trưởng nhóm kinh doanh (13,879) <br>
                                        Tư vấn tài chính (103,766) <br>
                                        Sales bảo hiểm (21,366) <br>
                                        Sales Thị trường (49,925)<br>
                                        Trình Dược Viên (9,725) <br>
                                        Điều hành tour (4,505)
                                    </p>
                                </div>

                                <div class="grid__column-3" >
                                    <p>Nhân viên Hành chính - Văn phòng (150,405) <br>
                                        Thu ngân (103,547) <br>
                                        Kế toán (167,040) <br>
                                        Luật - Pháp chế (19,197)<br>
                                        Thư ký (20,022) <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bt navbar -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>