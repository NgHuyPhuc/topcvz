<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once(__DIR__ .'/layout/head.php')
    ?>
    <title>Tuyen dung</title>
</head>
<body>
    <div class="full_web">
    <?php require_once(__DIR__.'/layout/header.php')?>

        <div class="Tuyendung-form">
            <div class="grid">
                <div class="Tuyendung-content">
                    <div class="grid__column-5">
                        <div class="Tuyendung-content-chung1">
                            <div class="Tuyendung-content-chung1-mini">
                                <h3>Thông tin chung</h3>
                                <div class="tuyendung-inp">
                                    Mức lương: <input type="text" name="" id="" >
                                </div>
                                <div class="tuyendung-inp">
                                    Hình thức làm việc: <Select>
                                        <option value="1">Toàn thời gian</option>
                                        <option value="2">Bán thời gian</option>
                                    </Select>
                                </div>
    
                                <div class="tuyendung-inp">
                                    Giới tính: <input type="text" value="Không yêu cầu" class="tuyendung-inp"> 
                                </div>
                                <div class="tuyendung-inp">
                                    Cấp bậc: <input type="text" name="" id="" class="tuyendung-inp">
                                </div>
                                <div class="tuyendung-inp">
                                    Kinh nghiệm: <input type="text" name="" id="" class="tuyendung-inp">
                                </div>
                            </div>

                            <div class="Tuyendung-content-chung1-mini" style="margin-top:20px ;">
                                <div style="padding: 20px;">
                                    Dia diem lam viec: <input type="text">
                                </div>
                            </div>

                            <div style="margin:20px 0 0 18px;">
                                <h3 style="text-transform:uppercase; font-size: 1.4rem;">Mô tả công việc</h3>
                                <textarea rows="12" cols="62" name="comment" form="usrform" style="font-size:1.4rem ;"> Mô tả chi tiết...</textarea>
                            </div>

                            <div style="margin:20px 0 0 18px;">
                                <h3 style="text-transform:uppercase; font-size: 1.4rem;">Yêu cầu ứng viên</h3>
                                <textarea rows="12" cols="62" name="comment" form="usrform" style="font-size:1.4rem ;"> Yêu cầu chi tiết...</textarea>
                            </div>

                            <div style="margin:20px 0 0 18px;">
                                <h3 style="text-transform:uppercase; font-size: 1.4rem;">Quyền lợi được hưởng</h3>
                                <textarea rows="12" cols="62" name="comment" form="usrform" style="font-size:1.4rem ;"> Chi tiết...</textarea>
                            </div>

                            <button >Tuyển dụng ngay</button>
                        </div>
                    </div>

                    <div class="grid__column-5">
                        <img src="https://havn.com.vn/wp-content/uploads/2020/07/tuyen-dung.png" style="margin-top: 20px;width: 100%;" alt="" srcset="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYsglCwI4zueg0VUpAT2cyc8-_cvORDVlVfFAiGhLx2p8hSU0bR0XqB6KyySA1anX0h3s&usqp=CAU" style="margin-top: 20px;width: 100%;" alt="" srcset="">
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