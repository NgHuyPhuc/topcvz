<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>

<?php
    $sql = "SELECT `jobinfo` .* ,`inforecruit`.*
    FROM `jobinfo` ,`inforecruit`
    WHERE `jobinfo`.`IdInfoRecruit`=`inforecruit`.`IdInfoRecruit`";
    $jobinfo = $db->fetchAll($sql);
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
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
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
                                            <?php foreach ($jobinfo as $item) : ?>
                                            <tr>
                                                <td><?php echo $item['IdJobInfo'] ?></td>
                                                <td><img width="100" height="100" src="<?php echo $base_url.$item['Avatar'] ?>" alt=""></td>
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
        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div> -->
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