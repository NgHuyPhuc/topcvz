<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once(__DIR__ .'/layout/head.php')?>
    <title>TOPCV</title>
</head>
<?php
    $datelimit = date('Y-m-d', strtotime('-30 days'));
    $sqljob = "SELECT `jobinfo` .* ,`inforecruit`.*
        FROM `jobinfo` ,`inforecruit`
        WHERE `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND `jobinfo`.`Refresh`>'$datelimit'
        ORDER BY `jobinfo`.`Refresh` DESC ";
    $job = $db->fetchAll($sqljob);

    $sqlall = "SELECT `jobinfo` .* ,`inforecruit`.*
    FROM `jobinfo` ,`inforecruit`
    WHERE `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit`";
    $alljob = $db->fetchAll($sqlall);
?>

<body>
    <div class="full_web">
        <!-- Header -->
        <?php require_once(__DIR__.'/layout/header.php')?>
        <!-- Header-end -->
        <!-- Container -->
        <div class="container">
            <div class="search_container">
                <div class="grid pay-form">
                    <div class="div1">
                        <h2 class="search_container-title">Tìm việc phù hợp với bạn</h2>
                        <form action="<?php echo $base_url?>timkiemviec.php?" method="get">
                            <div class="search_container-input">
                                <input name="name" type="text" placeholder="Tìm công việc, vị trí bạn muốn ứng tuyển" class="search_container-import">
                                <button type="submit" class="btn_search">
                                    Tìm Việc Ngay</button>
                            </div>
                        </form>
                        

                        <h3 class="top_cong-ty">Các công ty tuyển dụng hàng đầu trên TopCV</h3>
                        <div class="top_cong-ty-list">
                            <img src="./asset/img/topCT1.jpg" alt="" class="top_cong-ty-img">
                            <img src="./asset/img/topCT2.jpg" alt="" class="top_cong-ty-img">
                            <img src="./asset/img/topCt3.jpg" alt="" class="top_cong-ty-img">
                        </div>
                    </div>

                    <div class="div2">
                        <img src="./asset/img/banner1.jpg" alt="" class="banner-search">
                    </div>
                </div>
            </div>

            <div class="form-create">
                <div class="grid create-CV">
                    <div class="container-CV1">
                        <h2 class="create_container-title">Tạo CV online ấn tượng</h2>
                        <div class="create_container">
                            <div class="create_container-describe">
                                <p class="create_container-text">TopCV hiện có 50+ mẫu CV chuyên nghiệp, độc đáo phù hợp với mọi nghành nghề</p>
                                <button class="btn_create-CV">
                                    <i class="ti-plus"></i>
                                    Tạo CV ngay
                                </button>
                            </div>
                            <div class="create_container-sample">
                                <img src="./asset/img/mau1.jpg" alt="" class="create_container-sample-img">
                            </div>
                        </div>
                    </div>

                    <div class="container-CV2">
                        <h2 class="create_container-title">Sử dụng CV có sẵn để tìm việc</h2>
                        <div class="create_container">
                            <div class="create_container-describe">
                                <p class="create_container-text">Cách đơn giản để tìm việc tại TopCV, Nhà tuyển dụng sẽ nhìn thấy CV của bạn đã tải lên</p>
                                <button class="btn_create-CV">
                                    <i class="ti-upload"></i>
                                    Upload CV ngay
                                </button>
                            </div>
                            <div class="create_container-sample">
                                <img src="./asset/img/images.png" alt="" class="create_container-sample-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

            <div class="slider">
                <div class="grid">
                    <h2 class="slider-title" style="margin: 12px 0; font-size: 2rem;">Môi trường làm việc của một số công ty</h2>
                    <div class="image-slider">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://images.unsplash.com/photo-1496851473196-e26508c21494?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGNvbXBhbnl8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" />
                            </div>
                            <h3 class="image-title">This is demo title</h3>
                        </div>

                        <div class="image-item">
                            <div class="image">
                                <img src="https://images.unsplash.com/photo-1603195827187-459ab02554a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" />
                            </div>
                            <h3 class="image-title">This is demo title</h3>
                        </div>

                        <div class="image-item">
                            <div class="image">
                                <img src="https://images.unsplash.com/photo-1521898284481-a5ec348cb555?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjV8fGNvbXBhbnl8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" />
                            </div>
                            <h3 class="image-title">This is demo title</h3>
                        </div>

                        <div class="image-item">
                            <div class="image">
                                <img src="https://images.unsplash.com/photo-1557113166-6bf8102e535b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNvbXBhbnl8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" />
                            </div>
                            <h3 class="image-title">This is demo title</h3>
                        </div>

                        <div class="image-item">
                            <div class="image">
                                <img src="https://images.unsplash.com/photo-1610702875227-f796c246cebf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fGNvbXBhbnl8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" />
                            </div>
                            <h3 class="image-title">This is demo title</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container_viectot">
            <div class="grid">
                <div class="viectot-form">
                    <div style="display: flex; font-size: 1.6rem; align-items: center; text-transform: uppercase; margin-left: 12px;">
                        <i class="ti-star"></i>
                        <h3 style="margin-left: 10px;">Tin tuyển dụng, việc làm tốt nhất</h3>
                    </div>

                    <div class="container_job-management">
                        <div class="grid__column-3">
                            <div class="container_high-paying-jobs">
                                <ul class="container_high-paying-jobslist">
                                    <?php foreach ($job as $index => $item) : ?>
                                        <li class="container_high-paying-jobsitem">
                                          <img src="<?php echo $base_url.$item['Avatar']?>" alt="">
                                          <div class="container_company">
                                              <div style=" margin-top: 8px;">
                                                  <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name">Tuyển <?php echo $item['Job'] ?></a>
                                              </div>
                                              <div style="display: flex;">
                                                  <div style="display: flex;">
                                                      <p class="container_company-wage"><?php echo $item['MucLuong'] ?></p>
                                                      <p class="container_company-wage"><?php echo $item['WorkPlace'] ?></p>
                                                  </div>
                                                  <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                              </div>
                                          </div>
                                      </li>
                                        <?php if ($index >= 5) break; ?>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>

                        <div class="grid__column-3">
                            <div class="container_high-paying-jobs">
                                <ul class="container_high-paying-jobslist">
                                <?php foreach ($alljob as $index => $item) : ?>
                                    <li class="container_high-paying-jobsitem">
                                          <img src="<?php echo $base_url.$item['Avatar']?>" alt="">
                                          <div class="container_company">
                                              <div style=" margin-top: 8px;">
                                                  <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="container_company-name">Tuyển <?php echo $item['Job'] ?></a>
                                              </div>
                                              <div style="display: flex;">
                                                  <div style="display: flex;">
                                                      <p class="container_company-wage"><?php echo $item['MucLuong'] ?></p>
                                                      <p class="container_company-wage"><?php echo $item['WorkPlace'] ?></p>
                                                  </div>
                                                  <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                              </div>
                                          </div>
                                      </li>
                                        <?php if ($index >= 5) break; ?>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>

                        <div class="grid__column-3">
                            <div class="container_high-paying-jobs">
                                <ul class="container_high-paying-jobslist">
                                    <li class="container_high-paying-jobsitem">
                                        <img src="./asset/img/logocty16.jpg" alt="">
                                        <div class="container_company">
                                            <div style="display: flex; margin-top: 8px;">
                                                <h3 class="container_company-name">Công ty TNHH Thương Mại Đèn Pha Lê</h3>
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
                                        <img src="./asset/img/logocty17.jpg" alt="">
                                        <div class="container_company">
                                            <div style=" margin-top: 8px;">
                                                <h3 class="container_company-name">CÔNG TY CỔ PHẦN LITTLE EINSTEINS</h3>
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
                                        <img src="./asset/img/logocty18.png" alt="">
                                        <div class="container_company">
                                            <div style=" margin-top: 8px;">
                                                <h3 class="container_company-name">CÔNG TY TNHH HOMES</h3>
                                            </div>
                                            <div style="display: flex;">
                                                <div style="display: flex;">
                                                    <p class="container_company-wage">2.5-7 triệu</p>
                                                    <p class="container_company-wage">Hà Nội</p>
                                                </div>
                                                <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="container_high-paying-jobsitem">
                                        <img src="./asset/img/logocty19.png" alt="">
                                        <div class="container_company">
                                            <div style=" margin-top: 8px;">
                                                <h3 class="container_company-name">Tập Đoàn Chubb - Hoa Kỳ</h3>
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

        <div class="container_multiple-choice">
            <div class="grid">
                <h2 class="container_multiple-choice-title">Phát triển bản thân và sự nghiệp</h2>
                <div class="container_multiple-choice-display">
                    <div class="container_multiple-choice-form">
                        <div class="container_multiple-choice-discover">
                            <i class="ti-search"></i>
                            <div class="container_multiple-choice-slogan">
                                <h3>Khám phá tính cách và năng lực bản thân</h3>
                                <p class="container_multiple-choice-text">Lựa chọn nghề nghiệp chính xác hơn thông qua các bài trắc nghiệm về tính cách, khả năng giải quyết vấn đề, trí thông minh,...</p>
                                <div class="container_multiple-choice-experiment">
                                    <a href="">Trắc nghiệm MBTI</a>
                                    <a href="">Trắc nghiệm MI</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container_multiple-choice-form">
                        <div class="container_multiple-choice-discover">
                            <i class="ti-tablet"></i>
                            <div class="container_multiple-choice-slogan">
                                <h3>Tra cứu thông tin sự nghiệp</h3>
                                <p class="container_multiple-choice-text">Dễ dàng tiếp cận và tìm hiểu về các chế độ, chính sách nhân sự cần biết thông qua các công cụ hữu ích</p>
                                <div class="container_multiple-choice-experiment">
                                    <a href="">Công cụ tính lương Gross - Net</a>
                                    <a href="">Công cụ tính BHTN</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container_multiple-choice-form">
                        <div class="container_multiple-choice-discover">
                            <i class="ti-stats-up"></i>
                            <div class="container_multiple-choice-slogan">
                                <h3>Quỹ ý tưởng phát triển nghề nghiệp TopCareer</h3>
                                <p class="container_multiple-choice-text">Giúp học sinh, sinh viên hiểu về tầm quan trọng của giáo dục hướng nghiệp, nhận diện nghề và nâng cao năng lực ứng tuyển</p>
                                <div class="container_multiple-choice-experiment">
                                    <a href="">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container_multiple-choice-form">
                        <div class="container_multiple-choice-discover">
                            <i class="ti-notepad"></i>
                            <div class="container_multiple-choice-slogan">
                                <h3>TopCV Contest - Cổng học tập và đánh giá năng lực</h3>
                                <p class="container_multiple-choice-text">Cung cấp các khóa học, các kỳ thi giúp ứng viên hiểu rõ về xu hướng việc làm và những tiêu chuẩn mới về Năng lực chuyên môn</p>
                                <div class="container_multiple-choice-experiment">
                                    <a href="">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container_multiple-choice-form">
                        <div class="container_multiple-choice-discover">
                            <i class="ti-hand-open"></i>
                            <div class="container_multiple-choice-slogan">
                                <h3>Chương trình bệ phóng sự nghiệp 4.0</h3>
                                <p class="container_multiple-choice-text">Cung cấp cho sinh viên thông tin về thị trường tuyển dụng và đào tạo kỹ năng ứng tuyển, kết nối Nhà trường và Doanh nghiệp</p>
                                <div class="container_multiple-choice-experiment">
                                    <a href="">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container_app">
            <div class="grid container_app-flex">
                <div class="app1">
                    <h2 class="container_app-title">Cơ hội vàng nằm gọn trong tay bạn</h2>
                    <div class="container_app-advantage">
                        <div class="container_app-advantage-check">
                            <i class="ti-check"></i>
                            <p class="container_app-advantage-text">Tạo CV, Profile ngay trên điện thoại</p>
                        </div>
    
                        <div class="container_app-advantage-check">
                            <i class="ti-check"></i>
                            <p class="container_app-advantage-text">Tìm kiếm và ứng tuyển công việc nhanh gọn, dễ dàng, mọi lúc mọi nơi</p>
                        </div>
    
                        <div class="container_app-advantage-check">
                            <i class="ti-check"></i>
                           <p class="container_app-advantage-text">Liên lạc với nhà tuyển dụng qua TopCV Connect</p>
                        </div>
                    </div>

                    <h3>Tải ứng dụng tìm việc ngay</h3>
                    <div class="container_app-dowload">
                        <a href="https://itunes.apple.com/us/app/topcv-t%E1%BA%A1o-cv-t%C3%ACm-vi%E1%BB%87c-l%C3%A0m/id1455928592?ls=1&mt=8" class="container_app-link">
                            <img src="./asset/img/dow1.jpg" alt="App Store">
                        </a>

                        <a href="https://play.google.com/store/apps/details?id=com.topcv" class="container_app-link">
                            <img src="./asset/img/dow2.jpg" alt="Google Play">
                        </a>
                    </div>
                </div>

                <div class="app2">
                    <div class="App-topCV">
                        <img src="./asset/img/dowAPP.png" alt="" style="margin-bottom: 20px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Vè chúng tôi -->
        <div class="container_vect">
            <div class="grid">
                <h3>Về chúng tôi</h3>
                <p class="gt">TopCV là công ty công nghệ nhân sự (HR Tech) hàng đầu Việt Nam. Với năng lực lõi là công nghệ, đặc biệt là trí tuệ nhân tạo (AI), 
                    sứ mệnh của TopCV đặt ra cho mình là thay đổi thị trường tuyển dụng - nhân sự ngày một hiệu quả hơn. Bằng công nghệ, chúng tôi tạo ra 
                    nền tảng cho phép người lao động tạo CV, phát triển được các kỹ năng cá nhân, xây dựng hình ảnh chuyên nghiệp trong mắt nhà tuyển dụng 
                    và tiếp cận với các cơ hội việc làm phù hợp.</p>

                <div style="background-color: var(--white-color);display: flex; flex-wrap: wrap;">
                    <div style="margin: 0 40px ;">
                        <h4>30.000+</h4>
                        <p style="font-size: 1.4rem; width: 100%;"> Ứng viên đang bật tìm việc trung bình/thời điểm</p>
                    </div>

                    <div style="margin: 0 40px ;">
                        <h4>90.000+</h4>
                        <p style="font-size: 1.4rem;"> Doanh nghiệp sử dụng dịch vụ</p>
                    </div>

                    <div style="margin: 0 40px ;"> 
                        <h4>120.000+</h4>
                        <p style="font-size: 1.4rem;"> Nhà tuyển dụng sử dụng thường xuyên</p>
                    </div>

                    <div style="margin: 0 40px ;">
                        <h4>200.000+</h4>
                        <p style="font-size: 1.4rem;">Ứng viên mới mỗi tháng</p>
                    </div>

                    <div style="margin: 0 40px ;">
                        <h4>3.000.000+</h4>
                        <p style="font-size: 1.4rem;"> Lượt ứng viên truy cập hàng tháng</p>
                    </div>

                    <div style="margin: 0 40px ;">
                        <h4>4.000.000+</h4>
                        <p style="font-size: 1.4rem;">Ứng viên tiềm năng</p>
                    </div>

                    <div style="margin: 0 40px ;">
                        <h4>60%</h4>
                        <p style="font-size: 1.4rem;"> Ứng viên có trên 2 năm kinh nghiệm</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-baochi">
            <div class="grid">
                <h3>Báo chí nói gì về TOPCV</h3>
                <ul style="display:flex ; list-style: none;">
                    <li style="margin:0 20px ;">
                        <a href="https://vietnambiz.vn/topcv-va-thuocsi-la-2-startup-viet-duoc-google-ho-tro-tang-toc-khoi-nghiep-20200807110033455.htm">
                            <img src="data:image/png;base64,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" alt="">
                        </a>
                    </li>

                    <li style="margin:0 20px ;">
                        <a href="https://cafebiz.vn/topcv-nhan-cu-dup-giai-thuong-sao-khue-2021-202104271838343.chn">
                            <img src="data:image/png;base64,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" alt="">
                        </a>
                    </li>

                    <li style="margin:0 20px ;">
                        <a href="https://genk.vn/bat-dau-tu-nhu-cau-het-suc-don-gian-trong-khau-tim-viec-startup-nay-da-giup-16000-nguoi-tim-duoc-viec-lam-nhu-the-nao-20170328123950793.chn">
                            <img src="data:image/png;base64,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" alt="">
                        </a>
                    </li>

                    <li style="margin:0 20px ;">
                        <a href="https://kenh14.vn/tao-cv-ha-guc-nha-tuyen-dung-chi-trong-mot-buoc-20210301205913038.chn">
                            <img src="data:image/png;base64,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" alt="">
                        </a>
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

<!-- Backtop -->
    <div id="backtop">
        <i class="ti-angle-up backtop-icon"></i>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
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
</body>
</html>