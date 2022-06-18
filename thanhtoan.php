<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/thanhtoan.css">
    <link rel="stylesheet" href="./asset/css/home.css">
    <link rel="stylesheet" href="./asset/css/Chung.css">
    <script src="./asset/js/thanhtoan.js"></script>
    <title>Thanh toán</title>
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
                                        <p class="user_mini-form-td"><a href="./nangcapvip.php" >
                                            Kích hoạt tài khoản vip
                                        </a></p>
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
    </div>

    <div class='container'>
        <div class='window'>
          <div class='order-info'>
            <div class='order-info-content'>
              <h2>CHỌN GÓI</h2>
               <div class='line' style="margin-bottom:30px ;"></div>
               <input type="radio" id="age1" name="age" value="30" checked="checked">
               <label for="age1" style="font-size:1.6rem ;">Tài khoản Pro- 50.000đ</label><br> 
               <input type="radio" id="age3" name="age" value="100" >
               <label for="age3" style="font-size:1.6rem ;">Tài khoản Pretinum- 500.000đ</label><br><br>
              <div class='total'>
                <span style='float:left;'>
                  TOTAL
                </span>
                <span style='float:right; text-align:right;'>
                  $435.55
                </span>
              </div>
      </div>
      </div>
              <div class='credit-info'>
                <div class='credit-info-content'>
                  <table class='half-input-table'>
                    <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                      <div class='dropdown-select'>
                      <ul>
                        <li>Master Card</li>
                        <li>American Express</li>
                        </ul></div>
                      </div>
                     </td></tr>
                  </table>
                  <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
                  Card Number
                  <input class='input-field'></input>
                  Card Holder
                  <input class='input-field'></input>
                  <table class='half-input-table'>
                    <tr>
                      <td> Expires
                        <input class='input-field'></input>
                      </td>
                      <td>CVC
                        <input class='input-field'></input>
                      </td>
                    </tr>
                  </table>
                  <button class='pay-btn'>Thanh toán</button>
      
                </div>
      
              </div>
            </div>
          </div>
      
      
</body>
</html>