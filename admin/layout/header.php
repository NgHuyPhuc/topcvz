<?php
    require_once(__DIR__ .'/../../lib/autoload.php');
    if(empty($_SESSION['login']))
    {
        echo("Vui lòng đăng nhập");
        header('location:../login.php');
    }
    else{
        
    }
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url ?>/asset/admin/Asset/images/favicon.png">
<!-- Pignose Calender -->
<link href="<?php echo $base_url ?>/asset/admin/Asset/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
<!-- Chartist -->
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/admin/Asset/plugins/chartist/css/chartist.min.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/admin/Asset/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
<!-- Custom Stylesheet -->
<link href="<?php echo $base_url ?>/asset/admin/Asset/css/style.css" rel="stylesheet">

<style>
        #pagination {
            text-align: right;
            margin-top: 15px;
            margin-right: 40px;
            padding-bottom: 20px;
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