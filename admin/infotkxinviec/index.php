<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>

<?php
    $sql = "SELECT * from infocv";
    $userinfo = $db->fetchAll($sql);
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
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id Info CV</th>
                                                <th scope="col">Id Account</th>
                                                <th scope="col">FirstName</th>
                                                <th scope="col">LastName</th>
                                                <th scope="col">Date of Birth</th>
                                                <th scope="col">Sex</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">HomeTown</th>
                                                <th scope="col">PermanentAddress</th>
                                                <th scope="col">Avatar</th>
                                                <th scope="col">City for CV</th>
                                                <th scope="col">Work Experien</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($userinfo as $item) : ?>
                                            <tr>
                                                <td><?php echo $item['IdInfoCV'] ?></td>
                                                <td><?php echo $item['IdAccount'] ?></td>
                                                <td><?php echo $item['FirstName'] ?></td>
                                                <td><?php echo $item['LastName'] ?></td>
                                                <td><?php echo $item['DoB'] ?></td>
                                                <td><?php echo $item['Sex'] ?></td>
                                                <td><?php echo $item['Email'] ?></td>
                                                <td><?php echo $item['Hometown'] ?></td>
                                                <td><?php echo $item['PermanentAddress'] ?></td>
                                                <td><img width="100" height="100" src="<?php echo $base_url.$item['Avatar'] ?>" alt=""></td>
                                                <td><?php echo $item['CityforCV'] ?></td>
                                                <td><?php echo $item['WorkExperience'] ?></td>
                                                </td>
                                                <td>
                                                    <span style="text-align:justify;">
                                                        <a style="margin-right:30px ;" href=""><i class="mdi mdi-magnify"></i></a>
                                                        <a style="margin-right:30px ;" href="./edit.php?id=<?php echo $item['IdInfoCV'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i> 
                                                        </a>
                                                        <a href="./delete.php?id=<?php echo $item['IdInfoCV'] ?>" onclick="if(!confirm('Delete ?')) return false; " data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
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