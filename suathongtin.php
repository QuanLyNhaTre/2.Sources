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
    
    
    $sql = "update hocsinh set MaHS='$mahs',MaPH='$phuhuynh',HoTen='$hoten',TenLop='$lop',NgaySinh='$ngaysinh',Chieucao='$chieucao',Cannang='$cannang',GT='$gioitinh',NgayNH='$nhaphoc',GiaoVien='$giaovien' where MaHS='$mahs'";
    mysqli_query($conn,$sql);
    echo"da sua";
    $sql2="select*from hocsinh where MaHS='$mahs',MaPH='$phuhuynh',HoTen='$hoten',TenLop='$lop',NgaySinh='$ngaysinh',Chieucao='$chieucao',Cannang='$cannang',GT='$gioitinh',NgayNH='$nhaphoc',GiaoVien='$giaovien'where MaHS='$mahs'";
    $kq=mysqli_query($conn,$sql2);
    if(mysqli_num_rows($kq)==0)
    {
        echo"Không sửa được";
    }
    else
    {
        echo"Sửa Thành Công";
    }
    mysqli_close($conn);
?>