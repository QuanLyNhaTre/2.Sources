<?php
    
    include 'connect.php';
    $mahs = $_POST['mahs'];
    $phuhuynh = $_POST['phuhuynh'];
    $hoten = $_POST['hoten'];
    $lop = $_POST['lop'];
    $ngaysinh = $_POST['ngaysinh'];
    $chieucao = $_POST['chieucao'];
    $cannang = $_POST['cannang'];
    $gioitinh = $_POST['gioitinh'];
    $nhaphoc = $_POST['nhap'];
    $giaovien = $_POST['giaovien'];
    $sql2 ="select * from hocsinh where MaHS='$mahs'";
    $result = mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result)==0)
    {
    $sql = "insert into hocsinh values('$mahs','$phuhuynh','$hoten','$lop','$ngaysinh','$chieucao','$cannang','$gioitinh','$nhaphoc','$giaovien')";
    mysqli_query($conn,$sql);
    echo('ban them thanh cong');
    }
    else{
        echo"Trùng mã học sinh";
    }
    
    
    
    
    mysqli_close($conn);
?>