<?php
require_once(__DIR__ . '/../lib/autoload.php');
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/chitiet.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/Chung.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/dsct.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/form1cv.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/form3cv.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/form4cv.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/home.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/login.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/maucv.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/ttcanhan.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/Tuyendung.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/vieclam.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/css/timkiemviec.css">
<link rel="stylesheet" href="<?php echo $base_url ?>/asset/font/themify-icons-font/themify-icons/themify-icons.css">
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }

    }
</script>
