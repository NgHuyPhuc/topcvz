<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once(__DIR__ . '/layouttuyendung/head.php')
    ?>

    <title>Thông tin NTD</title>
</head>
<?php
    $id=$_SESSION['IdRecruit'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // upload file
        $check = false;
        if (isset($_FILES['file'])) {
            $errors = array();
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            if ($file_size >0 ) {
                move_uploaded_file($file_tmp, './public/recruitimg/' . $file_name);
                $check = true;
            }
        }

        //

        $data =
        [
            // "IdInfoCV" => $_POST['IdInfoCV'] ? $_POST['IdInfoCV'] : '',
            // "IdAccount" => $_POST['IdAccount'] ? $_POST['IdAccount'] : '',
            "FirstName" => $_POST['FirstName'] ? $_POST['FirstName'] : '',
            "LastName" => $_POST['LastName'] ? $_POST['LastName'] : '',
            "Sex" => $_POST['Sex'] ? $_POST['Sex'] : '',
            "Email" => $_POST['Email'] ? $_POST['Email'] : '',
            "NameOfCompany" => $_POST['NameOfCompany'] ? $_POST['NameOfCompany'] : '',
            "WorkPlace" => $_POST['WorkPlace'] ? $_POST['WorkPlace'] : '',
            // "Avatar" => $_POST['Avatar'] ? $_POST['Avatar'] : '',
            "WorkLocation" => $_POST['WorkLocation'] ? $_POST['WorkLocation'] : '',
            "PhoneNumber" => $_POST['PhoneNumber'] ? $_POST['PhoneNumber'] : '',
            
        ];
        if($check){
            $data["Avatar"] = "public/recruitimg/" . $file_name;
        }
        $update = $db->update('inforecruit', $data, array('Idrecruit' => $id));
        if ($update > 0) {
            $_SESSION['error'] = "sửa thành công";
            header('Location: ./thongtinNTD.php');
        } else
            $_SESSION['error'] = "không thành công";
    }

?>

<body>
    <div class="full_web">
        <?php
        require_once(__DIR__ . '/layouttuyendung/header.php')
        ?>

        <div style="background-color: #f1f2f6;height:95vh;">
            <div class="grid">
                <div class="row">
                    <?php
                    require_once(__DIR__ . '/layouttuyendung/nav.php')
                    ?>

                    <div class="infomation">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="self">
                            <h3>Cập nhật thông tin cơ bản</h3>
                            <div class="self-flex">
                                <div class="grid__column-5">
                                    <div class="form-group">
                                        <img src="<?php echo $userrecruit['Avatar']?>" width="100" height="100" alt="">
                                        <input type="file" name="file" class="form-control-file">
                                    </div>
                                    <div class="self-name">
                                        <p style="margin: 10px  10px 0 0; font-size: 1.4rem;">FirstName</p>
                                        <input type="text" value="<?php echo $userrecruit['FirstName']?>" name="FirstName" id="">
                                    </div>
                                    <div class="self-name">
                                        <p style="margin: 10px  10px 0 0; font-size: 1.4rem;">LastName</p>
                                        <input type="text" value="<?php echo $userrecruit['LastName']?>" name="LastName" id="">
                                    </div>

                                    <div class="self-name">
                                        <p style="margin: 10px  10px 0 0; font-size: 1.4rem;">Tên công ty</p>
                                        <input type="text" value="<?php echo $userrecruit['NameOfCompany']?>" name="NameOfCompany" id="">
                                    </div>

                                    <div class="self-name">
                                        <p style="margin: 10px  10px 0 0; font-size: 1.4rem;">Số điện thoại</p>
                                        <input type="text" value="<?php echo $userrecruit['PhoneNumber']?>" name="PhoneNumber" id="">
                                    </div>
                                    
                                </div>

                                <div class="grid__column-5" style="margin-left:10px ;margin-top: 85px;">
                                    <div class="self-name" style="margin-top: 46px;">
                                        <p style="margin: 10px  10px 0 0; font-size: 1.4rem;">Email</p>
                                        <input type="email" value="<?php echo $userrecruit['Email']?>" name="Email" id="">
                                    </div>
                                    <div class="self-name">
                                        <p style="margin: 10px  10px 0 0; font-size: 1.4rem;">Nơi làm việc</p>
                                        <input type="text" value="<?php echo $userrecruit['WorkPlace']?>" name="WorkPlace" id="">
                                    </div>
                                    
                                    <div class="self-name">
                                        <p style="margin: 10px  10px 0 0; font-size: 1.4rem;">Địa chỉ</p>
                                        <input type="text" value="<?php echo $userrecruit['WorkLocation']?>" name="WorkLocation" id="">
                                    </div>
                                    <div class="self-name">
                                        <p style="margin: 10px  10px 0 0; font-size: 1.4rem;">Giới tính</p>
                                        <select style="font-size: 16px;" id="inputState" name="Sex" required class="form-control">
                                        
                                            <option value="<?php $userrecruit['Sex']?>"><?php echo $userrecruit['Sex']?></option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Không">Không</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-sumit">
                                <button type="">Hủy</button>
                                <button type="submit">Lưu</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        var check = function ktmatkhau(){
            if(document.getElementById('lan1').value==document.getElementById('lan2').value)
            {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Hai mật khẩu giống nhau';
                document.getElementById('subm').disabled = false;
            }
            else{
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'HAI MẬT KHẨU KHÔNG GIỐNG NHAU';
                document.getElementById('subm').disabled = true;
            }
        }
    </script>
    <!-- bt navbar -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>