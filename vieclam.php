<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once(__DIR__ .'/layout/head.php')
    ?>
    <title>Việc làm</title>
</head>
<body>
    
    <div class="full_web">
    <?php require_once(__DIR__.'/layout/header.php')?>

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
                        <a href="./wibu.php" class="slide-link">
                            <img src="./asset/img/slide1.jpg" class="d-block w-100" alt="Wibu">
                        </a>
                      </div>
                      <div class="carousel-item">
                          <a href="./t_shirt.php" class="slide-link">
                              <img src="./asset/img/slid2.jpg"  class="d-block w-100" alt="Nhện">
                          </a>
                      </div>
                      <div class="carousel-item">
                        <a href="./cyberpunk.php" class="slide-link">
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

                  <div class="container_job-management">
                      <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-money" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm lương cao</p>
                        </div>
                            <div class="container_high-paying-jobs">
                                <ul class="container_high-paying-jobslist">
                                    <li class="container_high-paying-jobsitem">
                                        <img src="./asset/img/logocty1.png" alt="">
                                        <div class="container_company">
                                            <div style="display: flex; margin-top: 8px;">
                                                <h3 class="container_company-name">Nhân Viên Marketing (Lương 10-15 Triệu)</h3>
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

                      <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-user" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm quản lý</p>
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
                            <i class="ti-desktop" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm IT</p>
                        </div>
                            <div class="container_high-paying-jobs">
                                <ul class="container_high-paying-jobslist">
                                    <li class="container_high-paying-jobsitem">
                                        <img src="./asset/img/logocty1.png" alt="">
                                        <div class="container_company">
                                            <div style="display: flex; margin-top: 8px;">
                                                <h3 class="container_company-name">CÔNG TY TNHH IOTLINK</h3>
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
                                        <img src="./asset/img/logocty13.jpg" alt="">
                                        <div class="container_company">
                                            <div style=" margin-top: 8px;">
                                                <h3 class="container_company-name">CÔNG TY CỔ PHẦN ES GAME</h3>
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
                                        <img src="./asset/img/logocty14.jpg" alt="">
                                        <div class="container_company">
                                            <div style=" margin-top: 8px;">
                                                <h3 class="container_company-name">Azoom VietNam Inc</h3>
                                            </div>
                                            <div style="display: flex;">
                                                <div style="display: flex;">
                                                    <p class="container_company-wage">Trên 35 triệu</p>
                                                    <p class="container_company-wage">Hà Nội</p>
                                                </div>
                                                <i class="ti-heart" style="display: flex; align-items: center; margin-left: 12px;"></i>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="container_high-paying-jobsitem">
                                        <img src="./asset/img/logocty15.png" alt="">
                                        <div class="container_company">
                                            <div style=" margin-top: 8px;">
                                                <h3 class="container_company-name">BÁO ĐIỆN TỬ VNEXPRESS.NET (CÔNG TY CỔ PHẦN DỊCH VỤ TRỰC TUYẾN FPT)</h3>
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

                      <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-alarm-clock" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm bán thời gian</p>
                        </div>
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

                      <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-alarm-clock" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Tuyển thực tập sinh</p>
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

                      <div class="grid__column-3">
                        <div style="display: flex; font-size: 1.6rem; font-weight: 600; background-color: var(--white-color);align-items: center; margin: 30px 0 0 0px; border-bottom: 1px solid #ccc;">
                            <i class="ti-star" style="margin: 8px"></i>
                            <p style="margin: 8px; text-transform: uppercase;">Việc làm mới</p>
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

        <?php require_once(__DIR__.'/layout/footer.php')?>
    </div>

    <!-- back top -->
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
</body>
</html>