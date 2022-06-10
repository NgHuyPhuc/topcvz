<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require_once(__DIR__ .'/layout/head.php')
    ?>
    <title>Form 4 CV</title>
    
</head>

<body>
    <div class="full_web">
    <?php require_once(__DIR__.'/layout/header.php')?>

        <div class="form4-container">
            <div class="grid">
                <div class="container-form4-cv">
                    <div class="grid__column-7">
                        <div class="form-4_chung">
                            <div style="display: flex; justify-content: space-around; ">
                                <div>
                                    <input type='file' onchange="readURL(this);" />
                                    <img id="blah" src="#" alt="Ảnh của bạn" />
                                </div>
                                <div class="form-4-cv-gioithieu">
                                    <p class="gioithieu-ten">Trần Việt Hoàn</p>
                                    <div class="form-4-gtinp">
                                        Ngày sinh: <input type="date" name="" id="">
                                        SĐT: <input type="tel" id="phone" name="phone" placeholder="Nhập sđt" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                        Email: <input type="email" name="" id="" placeholder="Nhập email">
                                        Địa chỉ: <input type="text" placeholder="Nhập địa chỉ" name="" id="">
                                    </div>
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
                                    <br> Email: hotro@topcv.vn
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once(__DIR__.'/layout/footer.php')?>
    </div>
    <!-- Backtop -->
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
</body>

</html>