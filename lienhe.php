<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liên hệ</title>
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
				    <button type="button" class="btn btn-primary">
				        Liên hệ-Góp ý
			        </button>
				</div>
				<div class="col-md-3">
				<a href="dangnhap.php">	 
					<button type="button" class="btn btn-primary">
						Đăng nhập
					</button>
				</a>
				</div>
			</div>
		</div>
	</div>
</div><br><br>
<!-- liên hệ- góp ý -->
<p style="text-align: center"><b>Cảm ơn sự quan tâm của bạn dành cho chúng tôi, xin vui lòng gửi thông tin liên hệ theo mẫu bên dưới,</b></p>
<p style="text-align: center"><b>chúng tôi sẽ phản hồi lại thông tin cho bạn trong thời gian sớm nhất.</b></p>
<br>
<form id="gopy" >
   <h3 style="color: red">HÒM THƯ GÓP Ý</h3><br>
	Họ tên: 
	<input type="text" style=" margin: 0px 0px 0px 30px"><br><br>
	Địa chỉ:
	<input type="text" style=" margin: 0px 0px 0px 30px" ><br><br>
	Điện thoại:
	<input type="text"style=" margin: 0px 0px 0px 10px" ><br><br>
	Email: 
	<input type="text" style=" margin: 0px 0px 0px 37px" ><br><br>
	Nội dung: 
	<input type="text" style="margin: 0px 0px 0px 15px"><br><br>
	<input type="button" value="Gửi">
</form><br><br>
<div id="lienhe">
		<h3 style="color: red">Trường mầm non LoveKids</h3><br><br>
		<p>Địa chỉ: Số 36, ngõ 218, Tây Sơn, Đống Đa, Hà Nội</p><br>
	    <p>Hotline: 0376288325</p><br>
		<p>Email: nguyenhoanthao7@gmail.com</p>
		
</div>

</body>
</html>