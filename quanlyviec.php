<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    require_once(__DIR__ . '/layouttuyendung/head.php')
    ?>
    <title>Quản lý việc làm</title>
</head>
<?php
    $sql="SELECT `jobinfo` .* ,`inforecruit`.*
    FROM `userrecruit`,`inforecruit`,`jobinfo` 
    WHERE `userrecruit`.`IdRecruit`=`inforecruit`.`IdRecruit`AND `inforecruit`.`IdInfoRecruit`=`jobinfo`.`IdInfoRecruit` 
    AND `userrecruit`.`IdRecruit`=$id;";

    $data = $db->fetchAll($sql);

    $count = $db->countData($sql);
?>


<body>
    <div class="full_web">
        <?php
        require_once(__DIR__ . '/layouttuyendung/header.php')
        ?>

        <div class="container-timkiem">
            <div class="grid">
                <div class="container-flex">
                    <div class="grid__column-8">
                        <div style="background-color: var(--white-color);">
                            <div style="min-height:0;" class="container-main">
                                <div class="main-title">
                                    <h3 class="main-title-text"> Việc làm phù hợp</h3>
                                    <p class="main-title-mini-text">Khám phá cơ hội việc làm được gợi ý dựa trên mong muốn, 
                                        kinh nghiệm và kỹ năng của bạn. Đón lấy sự nghiệp thành công với công việc phù hợp nhất dành cho bạn!</p>
                                </div>
                            </div>
    
                            <h4 class="container-mini-main">Tìm thấy <span style="color:var(--primary-color) ;"> <?php echo $count?></span> việc làm phù hợp với yêu cầu của bạn</h4>

                            <div class="container-vieclam">

                                <?php foreach($data as $item):?>
                                    <div class="container-vieclam-chitiet">
                                        <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>">
                                            <img src="<?php echo $item['Avatar']?>" alt="">
                                        </a>
                                        <div style="display: flex; justify-content: space-between; width: 100%;">
                                            <div style="padding-left: 15px;">
                                                <p style="font-size: 18px;" class="vieclam-chucvu"><?php echo $item['Job']?></p>
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="vieclam-congty"><?php echo $item['CapBac']?></a>
                                                <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="vieclam-congty"><?php echo $item['NameOfCompany']?></a>
                                            </div>
                                            <div style="font-size:1.2rem ;">
                                                <p>Còn <span>28</span> để ứng tuyển</p>
                                                <div class="vieclam-icon">
                                                    <a href="./chitiet.php?id=<?php echo $item['IdJobInfo']?>" class="ti-search"></a>
                                                    <a href="./dangtinchinhsua.php?id=<?php echo $item['IdJobInfo']?>"><i class="ti-pencil"></i></a>
                                                    <a href="./modules/xoajob.php?id=<?php echo $item['IdJobInfo']?>"><i class="ti-trash"></i></a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>

                    <div class="grid__collumn-2"  style="margin-left:20px ;">
                        <div class="img-col2">
                            <img style="width: 100%; border-radius: 10px; object-fit: contain;"src="https://static.topcv.vn/manual/dich-vu-tu-van-cv-doc-dao-topcv.png" alt="">
                        </div>

                        <div class="img-col2">
                            <img style="width: 100%; border-radius: 10px; object-fit: contain;"src="data:image/jpeg;base64,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" alt="">
                        </div>

                        <div class="img-col2">
                            <img style="width: 100%; border-radius: 10px; object-fit: contain;"src="data:image/jpeg;base64,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" alt="">
                        </div>

                    </div>
                </div>
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