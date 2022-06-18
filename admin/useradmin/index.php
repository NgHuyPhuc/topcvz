<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>

<?php
    // $sql = "SELECT * from useraccountcv";
    // $user = $db->fetchAll($sql);

    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
    $offset = ($current_page - 1) * $item_per_page;
    $sqlpt = "SELECT * from useradmin ORDER BY `ID` ASC LIMIT " . $item_per_page . " OFFSET " . $offset;
    $user = $db->fetchAll($sqlpt);

    // $products = mysqli_query($con, "SELECT * FROM `product` ORDER BY `id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
    $sql = "SELECT * from useradmin";
    $totalRecords = $db->countData($sql);
    // $totalRecords = mysqli_query($con, "SELECT * FROM `product`");
    $totalPages = ceil($totalRecords / $item_per_page);
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
                                <h4 class="card-title"><a href="./add.php">Thêm user</a></h4>
                                <form action="<?php echo $base_url ?>admin/useradmin/timkiem.php?" method="get">
                                    <div class="" style="display: flex;">
                                        <input name="name" style="width:80% ;" type="search" class="form-control" placeholder="Search" aria-label="Search Dashboard">
                                        <button style="width:19% ;background-color: lightgreen; border: none;" type="submit">
                                            <i style="font-size: 20px;" class="mdi mdi-magnify"></i>Tìm kiếm</button>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Tài Khoản</th>
                                                <th scope="col">Password</th>
                                                <!-- <th scope="col">Avatar</th>
                                                <th scope="col">Địa Chỉ</th>
                                                <th scope="col">SDT</th>
                                                <th scope="col">birthday</th>
                                                <th scope="col">Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($user as $item) : ?>
                                            <tr>
                                                <td><?php echo $item['ID'] ?></td>
                                                <td><?php echo $item['UserName'] ?></td>
                                                <td><?php echo $item['Password'] ?></td>
                                                <!-- <td><?php echo $item['AccRole'] ?></td> -->
                                                <!-- <td><img width="100" height="100" src="<?php echo $base_url.$item['Anh'] ?>" alt=""></td> -->
                                                </td>
                                                <td>
                                                    <span style="text-align:justify;">
                                                        <a style="margin-right:30px ;" href="./info.php?id=<?php echo $item['ID'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="mdi mdi-magnify"></i>
                                                        </a>
                                                        <a style="margin-right:30px ;" href="./edit.php?id=<?php echo $item['ID'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i> 
                                                        </a>
                                                        <a href="./delete.php?id=<?php echo $item['ID'] ?>" onclick="if(!confirm('Delete ?')) return false; " data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
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
                                            <a class="page-item" href="?name=<?=$name?>&per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
                                        <?php
                                        }
                                        if ($current_page > 1) {
                                            $prev_page = $current_page - 1;
                                        ?>
                                            <a class="page-item" href="?name=<?=$name?>&per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Prev</a>
                                        <?php }
                                        ?>
                                        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                            <?php if ($num != $current_page) { ?>
                                                <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                                    <a class="page-item" href="?name=<?=$name?>&per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <strong class="current-page page-item"><?= $num ?></strong>
                                            <?php } ?>
                                        <?php } ?>
                                        <?php
                                        if ($current_page < $totalPages - 1) {
                                            $next_page = $current_page + 1;
                                        ?>
                                            <a class="page-item" href="?name=<?=$name?>&per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Next</a>
                                        <?php
                                        }
                                        if ($current_page < $totalPages - 3) {
                                            $end_page = $totalPages;
                                        ?>
                                            <a class="page-item" href="?name=<?=$name?>&per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
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