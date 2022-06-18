<?php
require_once(__DIR__ . '/../lib/autoload.php');
if(empty($_SESSION['logintuyendung']))
    {
        echo("Vui lòng đăng nhập");
        header('location:./logintuyendung.php');
    }
    else{
        $id=$_SESSION['IdRecruit'];
        $sql="SELECT * 
        FROM `inforecruit`,`userrecruit`
        WHERE `inforecruit`.`IdRecruit`=`userrecruit`.`IdRecruit` AND `userrecruit`.`IdRecruit`=$id";
        $userrecruit = $db->fetchOne($sql);
       
    }
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $base_url ?>asset/css/Chung.css">
<link rel="stylesheet" href="<?php echo $base_url ?>asset/css/Tuyendung.css">
<link rel="stylesheet" href="<?php echo $base_url ?>asset/css/thongtinNTD.css">
<link rel="stylesheet" href="<?php echo $base_url ?>asset/font/themify-icons-font/themify-icons/themify-icons.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
        #pagination {
            text-align: right;
            margin-top: 15px;
        }

        .page-item {
            border: 1px solid #ccc;
            padding: 5px 9px;
            color: #000;
        }

        .current-page {
            background: #000;
            color: #FFF;
        }
</style>