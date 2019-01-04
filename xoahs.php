<?php
    
    include 'connect.php';
    $id = $_POST['id'];
    $sql = "select * from hocsinh where MaHS = '$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $sql= "delete from hocsinh where MaHS = '$id'";
        mysqli_query($conn,$sql);
        echo "Xóa thành công";
    }
    else{
        echo "Không tìm thấy học sinh cần xóa";
    }
   
    mysqli_close($conn);
?>