<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

    
</head>

<?php
////
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
    $offset = ($current_page - 1) * $item_per_page;
    $sqlpt = "SELECT `jobinfo` .* ,`inforecruit`.*
    FROM `jobinfo` ,`inforecruit`
    WHERE `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND jobinfo.IdJobInfo like '%$name%' 
    OR jobinfo.IdInfoRecruit like '%$name%' OR jobinfo.Refresh like '%$name%' OR jobinfo.Job like '%$name%' 
    OR jobinfo.MucLuong like '%$name%' OR jobinfo.HinhThucLam like '%$name%' OR jobinfo.CapBac like '%$name%' 
    OR jobinfo.CapBac like '%$name%' OR jobinfo.YeuCauKinhNghiem like '%$name%' OR jobinfo.GioiTinh like '%$name%' 
    OR jobinfo.SoLuongCanTuyen like '%$name%' OR jobinfo.MoTa like '%$name%' OR inforecruit.IdInfoRecruit like '%$name%' 
    OR inforecruit.IdRecruit like '%$name%' OR inforecruit.FirstName like '%$name%' OR inforecruit.LastName like '%$name%' 
    OR inforecruit.Email like '%$name%' OR inforecruit.NameOfCompany like '%$name%' OR inforecruit.WorkPlace like '%$name%' 
    OR inforecruit.PhoneNumber like '%$name%' OR inforecruit.PhoneNumber like '%$name%' OR inforecruit.Sex like '%$name%' ORDER BY jobinfo.IdJobInfo ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
    $products = $db->fetchAll($sqlpt);

    // $products = mysqli_query($con, "SELECT * FROM `product` ORDER BY `id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
    $sql = "SELECT `jobinfo` .* ,`inforecruit`.*
    FROM `jobinfo` ,`inforecruit`
    WHERE `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit` AND jobinfo.IdJobInfo like '%$name%' 
    OR jobinfo.IdInfoRecruit like '%$name%' OR jobinfo.Refresh like '%$name%' OR jobinfo.Job like '%$name%' 
    OR jobinfo.MucLuong like '%$name%' OR jobinfo.HinhThucLam like '%$name%' OR jobinfo.CapBac like '%$name%' 
    OR jobinfo.CapBac like '%$name%' OR jobinfo.YeuCauKinhNghiem like '%$name%' OR jobinfo.GioiTinh like '%$name%' 
    OR jobinfo.SoLuongCanTuyen like '%$name%' OR jobinfo.MoTa like '%$name%' OR inforecruit.IdInfoRecruit like '%$name%' 
    OR inforecruit.IdRecruit like '%$name%' OR inforecruit.FirstName like '%$name%' OR inforecruit.LastName like '%$name%' 
    OR inforecruit.Email like '%$name%' OR inforecruit.NameOfCompany like '%$name%' OR inforecruit.WorkPlace like '%$name%' 
    OR inforecruit.PhoneNumber like '%$name%' OR inforecruit.PhoneNumber like '%$name%' OR inforecruit.Sex like '%$name%'";
    $totalRecords = $db->countData($sql);
    // $totalRecords = mysqli_query($con, "SELECT * FROM `product`");
    $totalPages = ceil($totalRecords / $item_per_page);

////
}
?>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php require_once(__DIR__ . '/../layout/nav_header.php') ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once(__DIR__ . '/../layout/side_bar.php') ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">


                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><a href="./add.php">Thêm Công việc</a></h4>
                                <form action="<?php echo $base_url ?>admin/Job/timkiem.php?" method="get">
                                    <div class="" style="display: flex;">
                                        <input name="name" style="width:80% ;" type="search" class="form-control" placeholder="Search" aria-label="Search Dashboard">
                                        <button style="width:19% ;background-color: lightgreen; border: none;" type="submit">
                                            <i style="font-size: 20px;" class="mdi mdi-magnify"></i>Tìm kiếm</button>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-strip
                                    ed verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id Job Info</th>
                                                <th scope="col">Avatar</th>
                                                <th scope="col">NameOfCompany</th>
                                                <th scope="col">Job</th>
                                                <th scope="col">Ngày đăng</th>
                                                <th scope="col">Mức Lương</th>
                                                <th scope="col">Hình Thức Làm</th>
                                                <th scope="col">Cấp Bậc</th>
                                                <th scope="col">Yêu Cầu Kinh Nghiệm</th>
                                                <th scope="col">Giới Tính</th>
                                                <th scope="col">Số Lượng Cần Tuyển</th>
                                                <th scope="col">Mô Tả</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($products as $item) : ?>
                                                <tr>
                                                    <td><?php echo $item['IdJobInfo'] ?></td>
                                                    <td><img width="100" height="100" src="<?php echo $base_url . $item['Avatar'] ?>" alt=""></td>
                                                    <td><?php echo $item['NameOfCompany'] ?></td>
                                                    <td><?php echo $item['Job'] ?></td>
                                                    <td><?php echo $item['Refresh'] ?></td>
                                                    <td><?php echo $item['MucLuong'] ?></td>
                                                    <td><?php echo $item['HinhThucLam'] ?></td>
                                                    <td><?php echo $item['CapBac'] ?></td>
                                                    <td><?php echo $item['YeuCauKinhNghiem'] ?></td>
                                                    <td><?php echo $item['GioiTinh'] ?></td>
                                                    <td><?php echo $item['SoLuongCanTuyen'] ?></td>
                                                    <td><?php echo $item['MoTa'] ?></td>
                                                    </td>
                                                    <td>
                                                        <span style="text-align:justify;">
                                                            <a style="margin-right:30px ;" href=""><i class="mdi mdi-magnify"></i></a>
                                                            <a style="margin-right:30px ;" href="./edit.php?id=<?php echo $item['IdJobInfo'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                <i class="fa fa-pencil color-muted m-r-5"></i>
                                                            </a>
                                                            <a href="./delete.php?id=<?php echo $item['IdJobInfo'] ?>" onclick="if(!confirm('Delete ?')) return false; " data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
                                                                <i class="fa fa-close color-danger"></i>
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <div id="pagination">
                                        <?php
                                        if ($current_page > 3) {
                                            $first_page = 1;
                                        ?>
                                            <a class="page-item" href="?name=<?= $name?>&per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
                                        <?php
                                        }
                                        if ($current_page > 1) {
                                            $prev_page = $current_page - 1;
                                        ?>
                                            <a class="page-item" href="?name=<?= $name?>&per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Prev</a>
                                        <?php }
                                        ?>
                                        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                            <?php if ($num != $current_page) { ?>
                                                <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                                    <a class="page-item" href="?name=<?= $name?>&per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <strong class="current-page page-item"><?= $num ?></strong>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php
                                        if ($current_page < $totalPages - 1) {
                                            $next_page = $current_page + 1;
                                        ?>
                                            <a class="page-item" href="?name=<?= $name?>&per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Next</a>
                                        <?php
                                        }
                                        if ($current_page < $totalPages - 3) {
                                            $end_page = $totalPages;
                                        ?>
                                            <a class="page-item" href="?name=<?= $name?>&per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php require_once(__DIR__ . '/../layout/footer.php') ?>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?php require_once(__DIR__ . '/../layout/script.php') ?>

</body>