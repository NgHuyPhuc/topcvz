<?php
    
    require_once(__DIR__ . '/../lib/autoload.php');
    
    if(isset($_GET['tt']))
    {
        $tt=$_GET['tt'];

        $data =
            [
                "Trangthai" => 'Từ Chối',
            ];
        
            /////
            $update = $db->update('jobcv', $data, array('IdJobCV' => $tt));
            if ($update > 0) {
                $_SESSION['error'] = "sửa thành công";
                header('Location: ../quanlycv.php');
            } else
                $_SESSION['error'] = "không thành công";
            
    }

?>