<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="quanly.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body style="background-color: 	#B7EFF2">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<img src="image/logo1.png" id="logo"/>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3">
                <a href="quanlynhatre.php">
					<button type="button" class="btn btn-primary">
						Trang chủ
					</button>
                </a>
				</div>
				<div class="col-md-3">
					<div class="dropdown">
						 
						<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
							Tính năng
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							 <a href="#">Quản lý học sinh</a><br><a href="#">Theo dõi đánh giá</a><br><a href="#">Khẩu phần dinh dưỡng</a><br><a href="#">Hoạt động vui chơi</a><br><a href="#">Quản lý thu chi</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
				<a href="lienhe.php">
				    <button type="button" class="btn btn-primary">
				        Liên hệ-Góp ý
			        </button>
				</a>
				</div>
				<div class="col-md-3">
					 
					<button type="button" class="btn btn-primary">
						Đăng nhập
					</button>
				</div>
			</div>
		</div>
	</div>
</div><br><br><br><br><br><br>
   <form id="dangnhap"><br><br>
        <b><p id="dn">ĐĂNG NHẬP HỆ THỐNG</p></b><br>
         Username: 
         <input type="text"><br><br><br>
         Password:
         <input type="password"><br><br><br>
         <input type="button" value="Đăng nhập">
   </form>

<?php
 $conn = mysqli_connect('localhost','root','','quanlynhatre');
 //cu phap viet tat cua php
 $sql = "select * from hocsinh"; 
    $result = mysqli_query($conn,$sql);
    //xu ly ket qua: hien thi ban ghi
    while($row = mysqli_fetch_assoc($result))
    {
        echo '<h2>'.$row['newTitle'].'</h2>';

    }
    //dong ket noi
    mysqli_close($conn);
?>

</body>
</html>