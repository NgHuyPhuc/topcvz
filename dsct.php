<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/Chung.css">
    <link rel="stylesheet" href="./asset/css/home.css">
    <link rel="stylesheet" href="./asset/css/dsct.css">
    <link rel="stylesheet" href="./asset/font/themify-icons-font/themify-icons/themify-icons.css">
    <title>Danh sách công ty</title>
</head>
<body>
    <div class="full_web">
        <div class="header">
            <div class="grid header_display">
                <div class="header_navbar">
                    <!-- Logo -->
                    <div class="header_navbar-logo">
                        <a href="./index.php" class="header_navbar-logo-link">
                            <img src="./asset/img/logo.png" alt="Logo" class="header_navbar-logo-img">
                        </a>
                    </div>

                    <div class="header_navbar-request">
                        <ul class="header_navbar-request-list">
                            <li class="header_navbar-request-item">
                                <a href="./vieclam.php" class="header_navbar-request-item-link">Việc làm</a>
                            </li>
                            <li class="header_navbar-request-item">
                                <a href="./maucv.php" class="header_navbar-request-item-link">Hồ sơ và CV</a>
                                <ul class="header_navbar-form-extra">
                                    <li class="header_navbar-form-extra-list">
                                        <a href="./maucv.php">Mẫu CV</a> </li>
                                    <li class="header_navbar-form-extra-list">
                                        <a href="./maucv.php">Mẫu Cover Letter</a> </li>
                                </ul>
                            </li>
                            <li class="header_navbar-request-item">
                                <a href="" class="header_navbar-request-item-link">Công ty</a>
                                <ul class="header_navbar-form-extra">
                                    <li class="header_navbar-form-extra-list">
                                        <a href="./dsct.php">Danh sách công ty</a> </li>
                                    <li class="header_navbar-form-extra-list">
                                        <a href="./topct.php">Top công ty</a> </li>
                                </ul>
                            </li>
                            <li class="header_navbar-request-item">
                                <a href="" class="header_navbar-request-item-link">Về chúng tôi</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="header_navbar-form">
                    <!-- <ul>
                        <li><a href="./login.php" class="login_link aHover">Đăng nhập</a></li>
                        <li>                    
                            <a href="./register.php" class="login_link aHover">Đăng ký</a></li>
                        <li>                    
                            <a href="" class="finding_resumes aHover">Đăng tuyển & tìm hồ sơ</a></li>
                    </ul> -->
                    <ul class="header_navbar-list2">
                        <li>
                            <i class="ti-themify-favicon-alt"></i>
                        </li>
                        <li>
                            <i class="ti-bell"></i>
                        </li>
                        <li class="user-form">
                            <img src="https://www.instagram.com/static/images/mediaUpsell.jpg/6efc710a1d5a.jpg" alt="" srcset="">
                            <div class="form-mini-user">
                                <p class="name_user">Huy Phuc
                                    <div class="User_mini-form-list">
                                        <p class="user_mini-form-td">Kích hoạt tài khoản vip</p>
                                        <p class="user_mini-form-td">Nhà tuyển dụng xem hồ sơ</p>
                                        <p class="user_mini-form-td">
                                            <a href="./ttcanhan.php" >
                                                Trang cá nhân
                                            </a>
                                        </p>
                                        <p class="user_mini-form-td">
                                            <a href="./repass.php" >
                                                Đổi mật khẩu
                                            </a>
                                        </p>
                                        <p class="user_mini-form-td"> 
                                            <a href="./Tuyendung.php" style="text-decoration: none;color: var(--text-color);">Form tuyển dung</a>
                                        </p>
                                        <p class="user_mini-form-td">Dang xuat</p>
                                    </div>
                                </p>    
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="backgr-search">
            <div class="grid">
                <div class="" style="padding: 20px 0; margin-top: 10px;">
                    <h3 style="font-size: 1.4rem;">Danh sách công ty</h3>
                    <h4 style="font-size: 2.4rem; color: var(--primary-color); font-weight: 500;">Khám phá 100.000+ công ty nổi bật</h4>
                    <p style="font-size: 1.6rem; color: var(--text-color);">Tra cứu thông tin công ty và tìm kiếm nơi làm việc tốt nhất dành cho bạn</p>
                </div>
                <div class="Timkiemct">
                    <input type="text" name="" id="" placeholder="Tìm kiếm công ty" class="input-tk">
                    
                    <button><i class="ti-search"></i>
                        Tìm Kiếm
                    </button>
                </div>
            </div>
        </div>

        <div class="container_congtynb">
            <div class="grid">
                <h3 class="container_congtynb-title">Danh sách các công ty nổi bật</h3>
                <div class="form-congtynb">
                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/cong-ty-tnhh-cmc-global-5e3dc09f007df09930dcb7b36f9cbd11-60c33177cb4c7.jpg" style="width: 100%; border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY TNHH CMC GLOBAL</a>
                        <p class="congty_mota">
                            " CMC Global ra đời từ kinh nghiệm 25 năm trong lĩnh vực ICT và hơn 10 năm kinh nghiệm trong lĩnh vực Outsourcing 
                            của Tập đoàn công nghệ CMC, với sứ mệnh trở thành đơn vị cung cấp nhân lực kỹ sư phần mềm chất lượng cao, cung cấp 
                            các giải pháp, dịch vụ CNTT cho thị trường quốc tế. Hiện CMC Global đang sở hữu đến 700++ nhân viên,..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/cong-ty-co-phan-cong-nghe-amp-sang-tao-tre-teky-holdings-3e051b0947732d80546c6d3c4e3a109a-61e789fda5abb.jpg" style="width: 100%;height: 160px ;object-fit: cover;border-radius: 10px; padding-top: 4px; " alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY CỔ PHẦN CÔNG NGHỆ & SÁNG TẠO TRẺ TEKY HOLDINGS</a>
                        <p class="congty_mota">
                            " Young can do ITTEKY là Tổ chức giáo dục công nghệ STEAM K12 chuẩn Mỹ tiên phong và dẫn đầu tại Việt Nam với hệ 
                            sinh thái Học viện - Nền tảng edtech - Hợp tác trường, nhằm thực hiện sứ mệnh Đổi mới giáo dục, mang đến cho thế hệ 
                            trẻ Việt Nam kiến thức toàn diện về STEAM (Science - Technology - Engineering - Art - Math), đặc..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/cong-ty-cho-thue-tai-chinh-tnhh-mtv-quoc-te-chailease-00121a41a78a2428cb9f0d12d8b94de9-61656bb084659.jpg" style="width: 100%; border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY CHO THUÊ TÀI CHÍNH TNHH MTV QUỐC TẾ CHAILEASE</a>
                        <p class="congty_mota">
                            " Công ty Cho Thuê Tài Chính TNHH Một Thành Viên Quốc Tế Chailease (""CILC"") là tổ chức tín dụng 100% vốn nước ngoài 
                            thuộc Chailease Finance Group – là tập đoàn cho thuê tài chính hàng đầu ở Đài Loan với hơn 40 năm kinh nghiệm và có 
                            hoạt động kinh doanh tại các quốc gia thuộc lãnh thổ Trung Quốc, Đài Loan, Châu Á Thái Bình Dương và Hoa..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/babilala-ung-dung-tieng-anh-online-cho-tre-em-tang-truong-bac-nhat-dong-nam-a-122cc4c2434103edc7956f78b425c5bd-6285ffb359873.jpg" style="width: 100%;height: 160px ;object-fit: cover ; border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">BABILALA - ỨNG DỤNG TIẾNG ANH ONLINE CHO TRẺ EM TĂNG TRƯỞNG BẬC NHẤT ĐNÁ</a>
                        <p class="congty_mota">
                            " Babilala ra mắt thị trường Việt Nam đầu tiên vào tháng 9/2020. Babilala được thiết kế bởi các chuyên gia giáo dục
                             sớm Việt Nam và Quốc tế, gắn liền với tiêu chuẩn ngôn ngữ Châu âu CEFR. Phù hợp với trẻ trong giai đoạn từ 3 đến 8
                              tuổi cam kết sẽ giúp trẻ: Chủ động, tích cực học tiếng Anh, khả năng tiếp thu từ mới x 10..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/cong-ty-co-phan-tap-doan-itp-81d40496b3ae3072e630fd990fe3b452-61b388a99e312.jpg" style="width: 100%;height: 160px ;object-fit: cover;border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY CỔ PHẦN TẬP ĐOÀN ITP</a>
                        <p class="congty_mota">
                            " Công ty Cổ phần Tập đoàn ITP (ITP Group) là tập đoàn công nghệ tiên phong hỗ trợ toàn diện các doanh nghiệp SME 
                            trong cộng đồng Việt toàn cầu.Trong suốt 2 năm hình thành và phát triển với phương châm TÂM - TẦM - TÀI - TỐC - TRÍ, 
                            ITP Group đã có hơn 100 dự án hoàn thành, hơn 1000 khách hàng thân thiết là những tập đoàn..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/18c724a3da8c74327d78ba01ecd9896e-615d7df87628b.jpg" style="width: 100%; border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY TNHH TRANSCOSMOS VIỆT NAM</a>
                        <p class="congty_mota">
                            " Được thành lập vào năm 1966 tại Shibuya, Tokyo, Nhật Bản, tập đoàn Transcosmos Inc đã nhanh chóng mở rộng quy mô tại 
                            32 quốc gia trên toàn thế giới với 172 địa điểm cho đến nay.Tại Việt Nam, trụ sở chính của Transcosmos được thành lập 
                            tại Hà Nội vào năm 2014. Hơn nữa, Transcosmos Việt Nam đã phát triển nhanh chóng thành thị trường lớn nhất của Thành..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/cong-ty-co-phan-dkra-vega-ecc56f0ad2f2e7ae7d5b8e78a3318af8-603f063e2bc25.jpg" style="width: 100%; border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY CỔ PHẦN DKRA VEGA</a>
                        <p class="congty_mota">
                            " Công ty Cổ phần DKRA Vega – thành viên hệ thống DKRA Vietnam, được thành lập năm 2018. Thừa hưởng hệ giá trị cốt 
                            lõi và nền tảng kinh doanh vững chắc từ hệ thống, DKRA Vega đặt mục tiêu chiến lược là đơn vị cung cấp dịch vụ tư vấn, 
                            phân phối và tiếp thị các dự án bất động sản uy tín, mang đến những sản phẩm chất..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/cong-ty-tnhh-milensea-retail-22ed6842f5eef556a54c6ca78f2dfa62-61b1b5a941607.jpg" style="width: 100%;height: 160px;object-fit: cover; border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY TNHH MILENSEA RETAIL</a>
                        <p class="congty_mota">
                            " “Cuộc sống là sẻ chia”, với phương châm sống này, từ năm 2010, Ông Tal Siman Tov cùng vợ là Bà Sima Siman Tov, 
                            2 người con của vùng đất thánh Jerusalem, đã mang những bí truyền làm đẹp từ quê hương sở tại đi khắp khu vực Đông 
                            Nam Á với mong muốn chăm sóc và giữ gìn vẻ đẹp cùng làn da cho người phụ nữ Á Đông.Đem..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/8ZYgctuY3HlX1OeGyuD4.jpg" style="width: 100%; border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY TÀI CHÍNH TNHH MB SHINSEI (MCREDIT)</a>
                        <p class="congty_mota">
                            " Mcredit trao cho bạn một tương lai tài chính vững vàng, ngay KHI BẠN CẦNĐược thành lập từ năm 2016, Công ty Tài chính
                             TNHH MB Shinsei (Mcredit) là công ty tài chính liên doanh giữa Ngân hàng TMCP Quân đội (thuộc MB Group) và Ngân hàng 
                             Shinsei (Nhật Bản).Nhất quán với chiến lược kinh doanh “Khách hàng là trung tâm”, Mcredit cung cấp các giải pháp tài 
                             chính thuận..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/cong-ty-tnhh-giai-phap-tin-hoc-ifi-solution-jsc-88076a332a8920647e9d57d33e44b8f2-61cd62af5d1ef.jpg" style="width: 100%;height: 160px ;object-fit:cover;border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY TÀI CHÍNH TNHH MB SHINSEI (MCREDIT)</a>
                        <p class="congty_mota">
                            " Mcredit trao cho bạn một tương lai tài chính vững vàng, ngay KHI BẠN CẦNĐược thành lập từ năm 2016, Công ty Tài chính
                             TNHH MB Shinsei (Mcredit) là công ty tài chính liên doanh giữa Ngân hàng TMCP Quân đội (thuộc MB Group) và Ngân hàng 
                             Shinsei (Nhật Bản).Nhất quán với chiến lược kinh doanh “Khách hàng là trung tâm”, Mcredit cung cấp các giải pháp tài 
                             chính thuận..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/JAREvfjbD7kDcxVhtUzG.jpg" style="width: 100%;height: 160px ;object-fit: cover;border-radius: 10px; padding-top: 4px;" alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY CỔ PHẦN SMARTOSC</a>
                        <p class="congty_mota">
                            " Được thành lập năm 2006, SmartOSC là công ty hàng đầu cung cấp các giải pháp toàn diện về Thương Mại Điện Tử 
                            trên nền tảng Magento, Sitecore, Adobe, Hybris, Kentico mang tính hiệu quả cao, từ việc thiết kế cho đến xây dựng 
                            các chiến lược kinh doanh hay quản lý hoạt động ở các cửa hàng. Hiện này, SmartOSC đã cung cấp giải pháp cho hơn 500 
                            khách..."
                        </p>
                    </div>

                    <div class="grid__column-3 congty_hover" >
                        <div>
                            <a href="">
                                <img src="https://static.topcv.vn/company_covers/cong-ty-co-phan-cong-nghe-amp-sang-tao-tre-teky-holdings-3e051b0947732d80546c6d3c4e3a109a-61e789fda5abb.jpg" style="width: 100%;height: 160px ;object-fit: cover;border-radius: 10px; padding-top: 4px; " alt="">
                            </a>
                        </div>
                        <a href="" class="congty_name">CÔNG TY CỔ PHẦN CÔNG NGHỆ & SÁNG TẠO TRẺ TEKY HOLDINGS</a>
                        <p class="congty_mota">
                            " Young can do ITTEKY là Tổ chức giáo dục công nghệ STEAM K12 chuẩn Mỹ tiên phong và dẫn đầu tại Việt Nam với hệ 
                            sinh thái Học viện - Nền tảng edtech - Hợp tác trường, nhằm thực hiện sứ mệnh Đổi mới giáo dục, mang đến cho thế hệ 
                            trẻ Việt Nam kiến thức toàn diện về STEAM (Science - Technology - Engineering - Art - Math), đặc..."
                        </p>
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