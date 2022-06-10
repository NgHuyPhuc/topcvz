<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require_once(__DIR__ .'/layout/head.php')
    ?>
    <title>Form CV 3</title>
</head>

<body>
    <div class="full_web">
    <?php require_once(__DIR__.'/layout/header.php')?>

        <div class="container-form3">
            <div class="grid">
                <div class="container-form3-cv">
                    <div class="grid__column-7">
                        <div style="background-color: var(--white-color); display: flex; border: 1px solid #ccc;">
                            <div class="grid__column-3" style="margin-top:20px ;">
                                <div class="backgr-left"></div>
                                <div class="form-3_thongtin">
                                    Ngày sinh: <input type="date" name="" id="">
                                    SĐT: <input type="tel" id="phone" name="phone" placeholder="Nhập sđt" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                    Email: <input type="email" name="" id="" placeholder="Nhập email">
                                    Địa chỉ: <input type="text" placeholder="Nhập địa chỉ" name="" id="">
                                </div>

                                <div class="form3_kynang">
                                    <h3>Các kỹ năng</h3>
                                    <textarea rows="4" cols="40" name="comment" form="usrform" style="font-size:1.4rem; width: 100%;">Các kỹ năng cần thiết...</textarea>
                                </div>
                            </div>

                            <div class="grid__column-7" style="margin-top:20px ;">
                                <input type='file' onchange="readURL(this);" />
                                <img id="blah" src="#" alt="Ảnh của bạn" />

                                <p class="form3_name">Nguyen Huy Phuc</p>

                                <div class="kinhnghiem">
                                    <h3>Kinh nghiệm làm việc</h3>
                                    <input type="text" name="" id="" placeholder="Vị trí từng làm việc" style="width: 50%">
                                    <p>Công ty: TOPCV</p>
                                    <textarea rows="8" cols="40" name="comment" form="usrform" style="font-size:1.4rem ; width: 100%;"> Mô tả công việc từng làm...</textarea>
                                </div>

                                <div class="hocvan">
                                    <h3>Học vấn</h3>
                                    <input type="text" name="" id="" placeholder="Nghành học từng học" style="width: 50%">
                                    <p>Trường Đại học: TOPCV</p>
                                    <textarea rows="8" cols="40" name="comment" form="usrform" style="font-size:1.4rem ; width: 100%;"> Chi tiết quá trình học Đại học</textarea>
                                </div>

                                <div class="hocvan">
                                    <h3 class="h3-form2">Hoạt động ngoại khóa</h3>
                                    <textarea rows="8" cols="40" name="comment" form="usrform" style="font-size:1.4rem ; width: 100%;"> Chi tiết về các hoạt động từng tham gia...</textarea>
                                </div>
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
    <script src="./asset/js/app.js"></script>
</body>

</html>