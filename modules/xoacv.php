<?php
require_once(__DIR__ . '/../lib/autoload.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    
    $sql= "DELETE FROM jobcv WHERE IdJobCV = $id";
    $delete=$db->delete($sql);
    if($delete>0)
    {
        $_SESSION['error']="xóa thành công";
        header('Location: ../ungtuyen.php');
    } else
        $_SESSION['error']="không thành công";
}
?>
