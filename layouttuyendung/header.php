<div class="header-td">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="grid">
      <div style="display:flex; justify-content: space-between;">
        <div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 1.6rem; ">
            <ul class="navbar-nav navbar_list">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo $base_url ?>Tuyendung.php">Bảng tin <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_url ?>quanlycv.php" style="color:var(--white-color) ;">Quản lý CV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_url ?>thongtinNTD.php" style="color:var(--white-color) ;">Thông tin NTD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_url ?>dangtin.php" style="color:var(--white-color) ;">Đăng tin tuyển dụng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./quanlyviec.php" style="color:var(--white-color) ;">Quản lý công việc</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="user-logout">
          <img src="<?php echo  $base_url,$userrecruit['Avatar'] ?>" alt="">
          <a style="font-size: 14px;margin-left: 5px;color:white;text-decoration: none;" href="<?php echo $base_url ?>logouttuyendung.php">Đăng xuất</a>
        </div>
      </div>
    </div>
  </nav>
</div>