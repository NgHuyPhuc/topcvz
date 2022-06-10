<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/Chung.css">
    <link rel="stylesheet" href="./asset/css/home.css">
    <link rel="stylesheet" href="./asset/css/form4cv.css">
    <link rel="stylesheet" href="./asset/css/form3cv.css">
    <link rel="stylesheet" href="./asset/font/themify-icons-font/themify-icons/themify-icons.css">
    <title>Form 5 CV</title>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#blah')
            .attr('src', e.target.result)
            .width(200)
            .height(200);
        };
        reader.readAsDataURL(input.files[0]);
  }
}
    </script>
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
                                        <a href="">Mẫu Cover Letter</a> </li>
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
                                        <p class="user_mini-form-td"><a href="./ttcanhan.php" >
                                            Trang cá nhân
                                        </a></p>
                                        <p class="user_mini-form-td"><a href="./repass.php" >
                                            Đổi mật khẩu
                                        </a></p>
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

        <div class="form4-container">
            <div class="grid">
                <div class="container-form4-cv">
                    <div class="grid__column-7">
                        <div  class="form-4_chung">
                            <div style="display: flex; justify-content: space-around; ">
                                <div class="form-4-cv-gioithieu">
                                    <p class="gioithieu-ten">Trần Việt Hoàn</p>
                                    <div class="form-4-gtinp">
                                        Ngày sinh: <input type="date" name="" id="">
                                        SĐT: <input type="tel" id="phone" name="phone" placeholder="Nhập sđt" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                        Email: <input type="email" name="" id="" placeholder="Nhập email">
                                        Địa chỉ: <input type="text" placeholder="Nhập địa chỉ" name="" id="">
                                    </div>
                                </div>
                                <div >
                                    <input type='file' onchange="readURL(this);" />
                                    <img id="blah" src="#" alt="Ảnh của bạn"/>
                                </div>
                            </div>
                            
                            <div class="form-4-muctieu">
                                <h3>Mục tiêu nghề nghiệp</h3>
                                <textarea rows="8" cols="40" name="comment" form="usrform" style="font-size:1.4rem; width: 100%;">Mục tiêu đề ra...</textarea>
                            </div>

                            <div class="form-4-muctieu">
                                <h3>Học vấn</h3>
                                <p>Đại học: TOPCV</p>
                                <textarea rows="8" cols="40" name="comment" form="usrform" style="font-size:1.4rem; width: 100%;">Thành tích trong quá trình học Đại hoc...</textarea>
                            </div>

                            <div class="form-4-muctieu">
                                <h3 class="">Hoạt động ngoại khóa</h3>
                                <textarea rows="8" cols="40" name="comment" form="usrform" style="font-size:1.4rem ; width: 100%;"> Chi tiết về các hoạt động từng tham gia...</textarea>
                            </div>

                            <div class="form-4-muctieu">
                                <h3 class="">Kỹ năng ngoài</h3>
                                <textarea rows="8" cols="40" name="comment" form="usrform" style="font-size:1.4rem ; width: 100%;">Liệt kê các kỹ năng ngoài ...</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="grid__column-3">
                        <div class="form3-huongdan">
                            <h2>Hướng dẫn</h2>
                            <div>
                                <ol>
                                    <li>Điền đầy đủ các thông tin hiển thị trong CV</li>
                                    <li>Bấm nút <b>Lưu CV</b> </li>
                                    <li>Xem & Tải CV về máy</li>
                                </ol>

                                <ul>
                                    <p>Một số lưu ý chung:</p>
                                    <li>Sắp xếp thời gian theo thứ tự mới -> cũ.</li>
                                    <li>Ưu tiên những gì quan trọng, có liên quan đến vị trí ứng tuyển lên đầu.</li>
                                    <li>Ngày tháng nên dùng: 01/2016, 01-2016 hoặc Jan 2016</li>
                                </ul>
                                <p>Mọi chi tiết vui lòng liên hệ: 
                                   <br> Email: hotro@topcv.vn</p>
                            </div>
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
</body>
</html>