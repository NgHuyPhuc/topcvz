<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>

<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM inforecruit WHERE IdInfoRecruit=$id ";
        $userinfo = $db->fetchOne($sql);
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
                                <h4 class="card-title"><a href="./add.php">Thêm user</a></h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id Info Recruit</th>
                                                <th scope="col">Id Recruit</th>
                                                <th scope="col">FirstName</th>
                                                <th scope="col">LastName</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Avatar</th>
                                                <th scope="col">NameOfCompany</th>
                                                <th scope="col">WorkPlace</th>
                                                <th scope="col">WorkLocation</th>
                                                <th scope="col">PhoneNumber</th>
                                                <th scope="col">Sex</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php ?>
                                            <tr>
                                                <td><?php echo $item['IdInfoRecruit'] ?></td>
                                                <td><?php echo $item['IdRecruit'] ?></td>
                                                <td><?php echo $item['FirstName'] ?></td>
                                                <td><?php echo $item['LastName'] ?></td>
                                                <td><?php echo $item['Email'] ?></td>
                                                <td><?php echo $item['Avatar'] ?></td>
                                                <td><?php echo $item['Email'] ?></td>
                                                <td><?php echo $item['NameOfCompany'] ?></td>
                                                <td><?php echo $item['WorkPlace'] ?></td>
                                                <td><?php echo $item['WorkLocation'] ?></td>
                                                <td><?php echo $item['PhoneNumber'] ?></td>
                                                <td><?php echo $item['Sex'] ?></td>
                                                <!-- <td><img width="100" height="100" src="<?php echo $base_url.$userinfo['Anh'] ?>" alt=""></td> -->
                                                </td>
                                                <td>
                                                    <span>
                                                        <a style="margin-right:30px ;" href="./edit.php?id=<?php echo $userinfo['IdInfoRecruit'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i> 
                                                        </a>
                                                        <a href="./delete.php?id=<?php echo $userinfo['IdInfoRecruit'] ?>" onclick="if(!confirm('Delete ?')) return false; " data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
                                                            <i class="fa fa-close color-danger"></i>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php ?>
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