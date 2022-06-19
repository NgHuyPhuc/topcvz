<!DOCTYPE html>
<html lang="en">
<head>
<?php
// require_once(__DIR__ . '../lib/autoload.php');
require_once(__DIR__ . '/lib/autoload.php');
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Công ty đã ứng tuyển</title>
    <link rel="stylesheet" href="./asset/css/Chung.css">
    <link rel="stylesheet" href="./asset/css/home.css">
    <link rel="stylesheet" href="./asset/css/nangcaptk.css">
    <link rel="stylesheet" href="./asset/font/themify-icons-font/themify-icons/themify-icons.css">
</head>
<?php

    $id=$_SESSION['IdAccount'];
    $sql="SELECT `jobcv`.*,`inforecruit`.*, `jobinfo`.*
            FROM `jobinfo`,`useraccountcv`,`infocv`,`jobcv`,`inforecruit`
            WHERE `useraccountcv`.`IdAccount`=`infocv`.`IdAccount`AND `infocv`.`IdInfoCV`= `jobcv`.`IdInfoCV` AND `jobcv`.`IdJobInfo`=`jobinfo`.`IdJobInfo` AND`inforecruit`.`IdInfoRecruit`= `jobinfo`.`IdInfoRecruit`
            AND `useraccountcv`.`IdAccount`=$id";
    $job = $db->fetchAll($sql);
?>

<body>
    <div class="full_web">
        <?php require_once(__DIR__ . '/layout/header.php') ?>

        <div class="nangcap-container">
            <div class="nangcap-banner">
                <div class="grid">
                    <div style="text-align:center ;">
                        <h3>Việc làm đã ứng tuyển</h3>
                        <h4>Lựa chọn tương xứng với bạn</h4>
                    </div>
                </div>
            </div>

            <div class="grid">
                <h2>Danh sách việc làm</h2>
                <div class="table-wrapper">
                <table class="fl-table">
        <thead>
        <tr>
            <th></th>
            <th>Vị trí</th>
            <th>Công việc</th>
            <th>Công ty</th>
            <!-- <th>Ngày ứng tuyển</th> -->
            
            <th>CV đã nộp</th>
            <th>Trạng thái</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($job as $item):?>
                <tr>
                    <td><a href="<?php echo $base_url?>modules/xoacv.php?id=<?php echo $item['IdJobCV']?>">Xóa</a></td>
                    <td><?php echo $item['CapBac']?></td>
                    <td><?php echo $item['Job']?></td>
                    <td><?php echo $item['NameOfCompany']?></td>
                    <!-- <td>18/06/2022</td> -->
                    <td>Trực tuyến</td>
                    <td><?php echo $item['TrangThai']?></td>
                </tr>
            <?php endforeach?>
      
        <tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>