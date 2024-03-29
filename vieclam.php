<!DOCTYPE html>
<html lang="en">

<head>

    <title>Việc làm</title>
    <?php
        require_once(__DIR__ . '/layout/head.php')
    ?>
    
</head>
<?php
    $datelimit = date('Y-m-d', strtotime('-30 days'));
    $sqljob = "SELECT `jobinfo` .* ,`inforecruit`.*
        FROM `jobinfo` ,`inforecruit`
        WHERE `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND `jobinfo`.`Refresh`>'$datelimit'
        ORDER BY `jobinfo`.`Refresh` DESC ";
    $job = $db->fetchAll($sqljob);

    $sqljob2 = "SELECT `jobinfo` .* ,`inforecruit`.*
        FROM `jobinfo` ,`inforecruit`
        WHERE `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND `jobinfo`.`Refresh`>'$datelimit'
        ORDER BY `jobinfo`.`IdInfoRecruit` DESC ";
    $job2 = $db->fetchAll($sqljob);

?>
<body>
    <div class="full_web">
        <?php require_once(__DIR__ . '/layout/header.php') ?>
        <form action="<?php echo $base_url?>timkiemviec.php?" method="get">
            <div class="grid ">
                <ul class="header_search">
                    <li class="header-search">
                        <input style="border: 1px solid black;" type="text" name="name" id="" placeholder="Tên công việc, vị trí bạn muốn ứng tuyển">
                    </li>
                    <li class="header-search header-search-item">
                        <p>Tất cả nghành nghề
                            <i class="ti-angle-down "></i>
                        </p>
                        <ul class="header-search-minilist">
                            <li class="header-search-miniitem">Tất cả nghành nghề</li>
                            <li class="header-search-miniitem">Kinh doanh/bán hàng</li>
                            <li class="header-search-miniitem">Biên/phiên dịch</li>
                            <li class="header-search-miniitem">Báo chí/Truyền hình</li>
                            <li class="header-search-miniitem">Bưu chính viễn thông</li>
                            <li class="header-search-miniitem">Bảo hiểm</li>
                            <li class="header-search-miniitem">Bất động sản</li>
                            <li class="header-search-miniitem">Công nghệ cao</li>
                            <li class="header-search-miniitem">Du lịch</li>
                            <li class="header-search-miniitem">Cơ khí/Chế tạo</li>
                        </ul>
                    </li>
                    <li class="header-search header-search-item ">
                        <p>Tất cả lĩnh vực công ty
                            <i class="ti-angle-down"></i>
                        </p>
                        <ul class="header-search-minilist">
                            <li class="header-search-miniitem">Tất cả lĩnh vực công ty</li>
                            <li class="header-search-miniitem">It- phần mềm</li>
                            <li class="header-search-miniitem">Kế toán- Kiếm toán</li>
                            <li class="header-search-miniitem">Luật</li>
                            <li class="header-search-miniitem">Bảo hiểm</li>
                            <li class="header-search-miniitem">Bất động sản</li>
                            <li class="header-search-miniitem">Dược phẩm/Y tế</li>
                            <li class="header-search-miniitem">Internet/Online</li>
                            <li class="header-search-miniitem">Du lịch</li>
                            <li class="header-search-miniitem">Nhà hàng/Khách sạn</li>
                        </ul>
                    </li>
                    <li class="header-search header-search-item ">
                        <p>Tất cả địa điểm
                            <i class="ti-angle-down"></i>
                        </p>
                        <ul class="header-search-minilist">
                            <li class="header-search-miniitem">Tất cả địa điểm</li>
                            <li class="header-search-miniitem">Hà Nội</li>
                            <li class="header-search-miniitem">TP Hồ Chí Minh</li>
                            <li class="header-search-miniitem">Bình Dương</li>
                            <li class="header-search-miniitem">Ninh Bình</li>
                            <li class="header-search-miniitem">Nam Định</li>
                            <li class="header-search-miniitem">Hải Phòng</li>
                            <li class="header-search-miniitem">Quảng Ninh</li>
                            <li class="header-search-miniitem">Đông Nai</li>
                            <li class="header-search-miniitem">Thái Bình</li>
                        </ul>
                    </li>
                    <button type="submit"><i class="ti-search"></i> Tìm kiếm</button>
                </ul>

            </div>
        </form>

        <div class="container_vl">
            <div class="grid">
                <h2 class="container_vl-title">Tìm việc làm nhanh 24h, việc làm mới nhất trên toàn quốc</h2>
                <p class="container_vl-minititle">Tiếp cận 30,000+ tin tuyển dụng việc làm mới mỗi ngày từ hàng nghìn doanh nghiệp uy tín tại Việt Nam</p>

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="./wibu.html" class="slide-link">
                                <img src="./asset/img/slide1.jpg" class="d-block w-100" alt="Wibu">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="./t_shirt.html" class="slide-link">
                                <img src="./asset/img/slid2.jpg" class="d-block w-100" alt="Nhện">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="./cyberpunk.html" class="slide-link">
                                <img src="./asset/img/slide3.jpg" class="d-block w-100" alt="Cyberpunk">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class=" ti-angle-left slide-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class=" ti-angle-right slide-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

                <div class="container_job-hapdan">
                    <div class="grid__column-7">
                        <div style="display:flex;">
                            <div class="grid__column-5">
                                <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                                    <i class="ti-heart" style="margin: 8px"></i>
                                    <p style="margin: 8px; text-transform: uppercase;">Việc làm hấp dẫn</p>
                                </div>
                                <div class="container_high-paying-jobs">
                                    <ul class="container_high-paying-jobslist">
                                        <?php foreach($job as $item):?>
                                            <li class="container_high-paying-jobsitem">
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>"><img src="<?php echo $item['Avatar']?>" alt=""></a>
                                                <div class="container_company">
                                                    <div style="display: flex; margin-top: 8px;">
                                                        <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name"><?php echo $item['Job']?></a>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <div style="display: flex;">
                                                            <p class="container_company-wage"><?php echo $item['MucLuong']?></p>
                                                            <p class="container_company-wage"><?php echo $item['WorkLocation']?></p>
                                                        </div>
                                                        <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach?>
                                    </ul>
                                </div>
                            </div>
                            <div class="grid__column-5">
                                <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                                    <i class="ti-heart" style="margin: 8px"></i>
                                    <p style="margin: 8px; text-transform: uppercase;">Việc làm hấp dẫn</p>
                                </div>
                                <div class="container_high-paying-jobs">
                                    <ul class="container_high-paying-jobslist">
                                        <?php foreach($job as $item):?>
                                            <li class="container_high-paying-jobsitem">
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>"><img src="<?php echo $item['Avatar']?>" alt=""></a>
                                                <div class="container_company">
                                                    <div style="display: flex; margin-top: 8px;">
                                                        <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name"><?php echo $item['Job']?></a>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <div style="display: flex;">
                                                            <p class="container_company-wage"><?php echo $item['MucLuong']?></p>
                                                            <p class="container_company-wage"><?php echo $item['WorkLocation']?></p>
                                                        </div>
                                                        <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid__column-3">
                        <img src="https://static.topcv.vn/img/we%20are.png" alt="" style=" margin: 30px 0; height: 450px; width: 100%;">
                    </div>

                </div>

                <div class="container_job-management">

                    <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-money" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm lương cao</p>
                        </div>
                        <div class="container_high-paying-jobs">
                            <ul class="container_high-paying-jobslist">
                                <?php foreach($job as $item):?>
                                        <li class="container_high-paying-jobsitem">
                                            <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>"><img src="<?php echo $item['Avatar']?>" alt=""></a>
                                            <div class="container_company">
                                                <div style="display: flex; margin-top: 8px;">
                                                    <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name"><?php echo $item['Job']?></a>
                                                </div>
                                                <div style="display: flex;">
                                                    <div style="display: flex;">
                                                        <p class="container_company-wage"><?php echo $item['MucLuong']?></p>
                                                        <p class="container_company-wage"><?php echo $item['WorkLocation']?></p>
                                                    </div>
                                                    <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach?>
                            </ul>
                        </div>
                    </div>

                    <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-user" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm quản lý</p>
                        </div>
                        <div class="container_high-paying-jobs">
                            <ul class="container_high-paying-jobslist">
                                <?php foreach($job as $item):?>
                                    <li class="container_high-paying-jobsitem">
                                        <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>"><img src="<?php echo $item['Avatar']?>" alt=""></a>
                                        <div class="container_company">
                                            <div style="display: flex; margin-top: 8px;">
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name"><?php echo $item['Job']?></a>
                                            </div>
                                            <div style="display: flex;">
                                                <div style="display: flex;">
                                                    <p class="container_company-wage"><?php echo $item['MucLuong']?></p>
                                                    <p class="container_company-wage"><?php echo $item['WorkLocation']?></p>
                                                </div>
                                                <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach?>
                            </ul>
                        </div>
                    </div>

                    <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-desktop" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm IT</p>
                        </div>
                        <div class="container_high-paying-jobs">
                            <ul class="container_high-paying-jobslist">
                                <?php foreach($job as $item):?>
                                    <li class="container_high-paying-jobsitem">
                                        <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>"><img src="<?php echo $item['Avatar']?>" alt=""></a>
                                        <div class="container_company">
                                            <div style="display: flex; margin-top: 8px;">
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name"><?php echo $item['Job']?></a>
                                            </div>
                                            <div style="display: flex;">
                                                <div style="display: flex;">
                                                    <p class="container_company-wage"><?php echo $item['MucLuong']?></p>
                                                    <p class="container_company-wage"><?php echo $item['WorkLocation']?></p>
                                                </div>
                                                <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach?>
                            </ul>
                        </div>
                    </div>

                    <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-alarm-clock" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm bán thời gian</p>
                        </div>
                        <div class="container_high-paying-jobs">
                            <ul class="container_high-paying-jobslist">
                                <?php foreach($job as $item):?>
                                    <li class="container_high-paying-jobsitem">
                                        <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>"><img src="<?php echo $item['Avatar']?>" alt=""></a>
                                        <div class="container_company">
                                            <div style="display: flex; margin-top: 8px;">
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name"><?php echo $item['Job']?></a>
                                            </div>
                                            <div style="display: flex;">
                                                <div style="display: flex;">
                                                    <p class="container_company-wage"><?php echo $item['MucLuong']?></p>
                                                    <p class="container_company-wage"><?php echo $item['WorkLocation']?></p>
                                                </div>
                                                <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach?>
                            </ul>
                        </div>
                    </div>

                    <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-alarm-clock" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Tuyển thực tập sinh</p>
                        </div>
                        <div class="container_high-paying-jobs">
                            <ul class="container_high-paying-jobslist">
                                <?php foreach($job as $item):?>
                                    <li class="container_high-paying-jobsitem">
                                        <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>"><img src="<?php echo $item['Avatar']?>" alt=""></a>
                                        <div class="container_company">
                                            <div style="display: flex; margin-top: 8px;">
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name"><?php echo $item['Job']?></a>
                                            </div>
                                            <div style="display: flex;">
                                                <div style="display: flex;">
                                                    <p class="container_company-wage"><?php echo $item['MucLuong']?></p>
                                                    <p class="container_company-wage"><?php echo $item['WorkLocation']?></p>
                                                </div>
                                                <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach?>
                            </ul>
                        </div>
                    </div>

                    <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-star" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm mới</p>
                        </div>
                        <div class="container_high-paying-jobs">
                            <ul class="container_high-paying-jobslist">
                                <?php foreach($job as $item):?>
                                    <li class="container_high-paying-jobsitem">
                                        <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>"><img src="<?php echo $item['Avatar']?>" alt=""></a>
                                        <div class="container_company">
                                            <div style="display: flex; margin-top: 8px;">
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name"><?php echo $item['Job']?></a>
                                            </div>
                                            <div style="display: flex;">
                                                <div style="display: flex;">
                                                    <p class="container_company-wage"><?php echo $item['MucLuong']?></p>
                                                    <p class="container_company-wage"><?php echo $item['WorkLocation']?></p>
                                                </div>
                                                <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container_tuyedung">
            <div class="grid">
                <h3 class="container_tuyendung-title">Các công ty tuyển dụng hàng đầu trên TopCV</h3>
                <ul class="container_tuyendung-list">
                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty1.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty2.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty3.jpg" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty4.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty5.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty6.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty7.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty8.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty9.jpg" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty10.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty11.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty12.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty13.jpg" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty14.jpg" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty15.png" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty16.jpg" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty17.jpg" alt="" class="container_tuyendung-img"></a>
                    </li>

                    <li class="container_tuyendung-item">
                        <a href="">
                            <img src="./asset/img/logocty18.png" alt="" class="container_tuyendung-img"></a>
                    </li>
                </ul>
            </div>
        </div>

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

    <!-- back top -->
    <div id="backtop">
        <i class="ti-angle-up backtop-icon"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('#backtop').fadeIn();
                } else {
                    $('#backtop').fadeOut();
                }
            });
            $('#backtop').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            });
        });
    </script>
    <script src="./asset/js/app.js"></script>
</body>

</html>