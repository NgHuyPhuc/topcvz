<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once(__DIR__ . '/../layouttuyendung/head.php')
    ?>
</head>
<?php
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 3;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
    $offset = ($current_page - 1) * $item_per_page;
    $sqlpt = "SELECT `infocv`.* ,`jobcv`.`IdJobCV`,`jobinfo`.`IdJobInfo`,`jobinfo`.`Job`
              FROM `infocv`,`jobcv`,`jobinfo`,`inforecruit`,`userrecruit` 
              WHERE `infocv`.`IdInfoCV`=`jobcv`.`IdInfoCV` AND `jobcv`.`IdJobInfo`=`jobinfo`.`IdJobInfo` 
              AND `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND `inforecruit`.`IdRecruit`= `userrecruit`.`IdRecruit` 
              AND `userrecruit`.`IdRecruit`=$id AND`jobcv`.`TrangThai`='Xem sau'
              ORDER BY `IdAccount` ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
    $xinviec = $db->fetchAll($sqlpt);

    // $products = mysqli_query($con, "SELECT * FROM `product` ORDER BY `id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
    $sql = "SELECT `infocv`.* 
            FROM `infocv`,`jobcv`,`jobinfo`,`inforecruit`,`userrecruit` 
            WHERE `infocv`.`IdInfoCV`=`jobcv`.`IdInfoCV` AND `jobcv`.`IdJobInfo`=`jobinfo`.`IdJobInfo` 
            AND `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND `inforecruit`.`IdRecruit`= `userrecruit`.`IdRecruit` 
            AND `userrecruit`.`IdRecruit`=$id AND`jobcv`.`TrangThai`='Xem sau'";
    $totalRecords = $db->countData($sql);
    // $totalRecords = mysqli_query($con, "SELECT * FROM `product`");
    $totalPages = ceil($totalRecords / $item_per_page);

?>
<body>
    <div class="full_web">
    <?php
        require_once(__DIR__ . '/../layouttuyendung/header.php')
        ?>

        <div class="container-qlcv"  >
            <div class="grid">
                <h3 class="container-title">Quản lý CV ứng viên</h3>
                <?php
                    require_once(__DIR__ . '/../layouttuyendung/search.php')
                ?>
            </div>
        </div>
        <div class="container-main">
            <div class="grid">
                <div style="display:flex; justify-content: space-between; padding: 20px 0;"> 
                    <p style="font-size:1.4rem ;">
                        Tìm thấy <?php echo $totalRecords?> ứng viên
                    </p>
                    <div style="font-size: 1.4rem ; padding-bottom:20px ;">
                        <input type="radio" id="Hiển thị tất cả CV" name="fav_language" checked="checked" value="Hiển thị tất cả CV">
                        <label for="Hiển thị tất cả CV" style="margin-right:15px ;">Hiển thị tất cả CV</label>
                        <input type="radio" id="Chỉ hiển thị CV chưa xem" name="fav_language" value="Chỉ hiển thị CV chưa xem">
                        <label for="Chỉ hiển thị CV chưa xem">Chỉ hiển thị CV chưa xem</label>
                    </div>
                </div>

                <div class="container-content">
                  <!-- display none -->
                    <div style="padding-bottom:20px ; display: none; ">
                        <div style="display:flex ; justify-content: center;">
                            <img src="https://tuyendung.topcv.vn/app/_nuxt/img/empty.6324905.png" class="img-nocv" alt="">
                        </div>
                        <p style="text-align:center; font-size: 1.6rem;">Bạn không có CV</p>
                    </div>
                    <?php foreach($xinviec as $item):?>
                      <div style="border-bottom: 2px solid black;" class="thongtincv">
                        <img src="<?php echo $base_url,$item['Avatar']?>" alt="">
                        <ul class="form-thongtin">
                        <li>Tên Công Việc: <?php echo $item['Job']?></li>
                          <li>Tên tài khoản: <?php echo $item['LastName']?></li>
                          <li>Họ: <?php echo $item['FirstName']?></li>
                          <li>Tên: <?php echo $item['LastName']?></li>
                          <li>Ngày sinh: <?php echo $item['DoB']?></li>
                          <li>Số điện thoại: <?php echo $item['PhoneNumber']?></li>
                          <li>Nơi công tác: <?php echo $item['PermanentAddress']?></li>
                          <li>Email: <?php echo $item['Email']?></li>
                          <li>Giới tính: <?php echo $item['Sex']?></li>
                          <li>Kinh nghiệm làm việc: <?php echo $item['WorkExperience']?></li>
                        </ul>
                        <form action="" method="POST">
                            <div class="" >
                                


                                <!-- <select name="" id="">
                                    <option value="Phỏng vấn">Phỏng vấn</option>
                                    <option value="Xem Sau">Xem Sau</option>
                                    <option value="Từ trối">Từ trối</option>
                                </select> -->
                                <ul style="list-style: none;margin-left: 50px;">
                                    <li style="margin-top: 30px;border: none;">
                                        <a style="background-color: lightgreen;border: none;font-size: 20px;color: black;text-decoration: none;" href="<?php echo $base_url ?>/modules/phongvan.php?tt=<?php echo $item['IdJobCV'] ?>" >Phỏng vấn</a>
                                        
                                    </li>

                                    <li style="margin-top: 30px;border: none;">
                                        <a style="background-color: gray;border: none;font-size: 20px;color: black;text-decoration: none;" href="<?php echo $base_url ?>/modules/xemsau.php?tt=<?php echo $item['IdJobCV'] ?>" >Xem Sau</a>
                                        
                                    </li>

                                    <li style="margin-top: 30px;border: none;">
                                        <a style="background-color: red;border: none;font-size: 20px;color: black;text-decoration: none;" href="<?php echo $base_url ?>/modules/tuchoi.php?tt=<?php echo $item['IdJobCV'] ?>" >Từ chối</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </form>
                        
                      </div>

                    <?php endforeach ?>
                    <div id="pagination">
                        <?php
                        if ($current_page > 3) {
                            $first_page = 1;
                        ?>
                            <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
                        <?php
                        }
                        if ($current_page > 1) {
                            $prev_page = $current_page - 1;
                        ?>
                            <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Prev</a>
                        <?php }
                        ?>
                        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                            <?php if ($num != $current_page) { ?>
                                <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
                                <?php } ?>
                            <?php } else { ?>
                                <strong class="current-page page-item"><?= $num ?></strong>
                            <?php } ?>
                        <?php } ?>
                        <?php
                        if ($current_page < $totalPages - 1) {
                            $next_page = $current_page + 1;
                        ?>
                            <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Next</a>
                        <?php
                        }
                        if ($current_page < $totalPages - 3) {
                            $end_page = $totalPages;
                        ?>
                            <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bt navbar -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>