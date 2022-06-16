<?php
    require_once(__DIR__ . '/../lib/autoload.php');

    if(empty($_SESSION['IdInfoCV']))
    {
        
    }
    else{
        $id=$_SESSION['IdInfoCV'];
        $sql = "SELECT * FROM infocv WHERE IdInfoCV= $id" ;
        $user = $db->fetchOne($sql);
    }
?>


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
                                <a href="./topct.php" class="header_navbar-request-item-link">Công ty</a>
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
                    <?php if(empty($_SESSION['usercv'])) : ?>
                    <!-- Login -->
                    <ul>
                        <li><a href="./login.php" class="login_link aHover">Đăng nhập</a></li>
                        <li>
                            <a href="./register.php" class="login_link aHover">Đăng ký</a>
                        </li>
                        <li>
                            <a href="" class="finding_resumes aHover">Đăng tuyển & tìm hồ sơ</a>
                        </li>
                    </ul>
                    <?php else :?>
                    <!-- Login-successful -->
                    <ul class="header_navbar-list2">
                        <li>
                            <i class="ti-themify-favicon-alt"></i>
                        </li>
                        <li>
                            <i class="ti-bell"></i>
                        </li>
                        <li class="user-form">
                            <img src="<?php echo $user['Avatar'] ?>" alt="" srcset="">
                            <div class="form-mini-user">
                                <p class="name_user"><?php echo $user['LastName'] ?>
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
                                            <a href="<?php echo $base_url?>Tuyendung.php" style="text-decoration: none;color: var(--text-color);">Form tuyển dụng</a>
                                        </p>
                                        <p class="user_mini-form-td">
                                            <a href="<?php echo $base_url?>logout.php" style="text-decoration: none;color: var(--text-color);">Đăng xuất</a>
                                            
                                        </p>
                                    </div>
                                </p>    
                            </div>
                        </li>
                    </ul>
                    <?php endif ?>
                </div>
            </div>
        </div>