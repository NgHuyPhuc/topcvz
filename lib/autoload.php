<?php
    session_start();
    require_once (__DIR__. '/database.php');
    $db=new database;
    $base_url = 'http://localhost/topcvz/';
    
    function slugify($str) { $str = trim(mb_strtolower($str)); $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str); $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str); $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str); $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str); $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str); $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str); $str = preg_replace('/(đ)/', 'd', $str); $str = preg_replace('/[^a-z0-9-\s]/', '', $str); $str = preg_replace('/([\s]+)/', '-', $str); return $str; }

function paginate($page, $limit = 5, $total_rows = 0)
{
    $total_pages = ceil($total_rows / $limit);

    //page prev
    $left = $page - 2;

    $right = $page + 2;

    $list_page = [];
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == 1 || $i == $total_pages || $i == $page || ($left <= $i && $i <= $right)
        ) {
            $list_page[] = $i;
        } else if ($i == $left - 1 || $i == $right + 1) {
            $list_page[] = "...";
        }
    }
    return $list_page;
}
?>