<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<meta http-equiv="Content-Language" content="th">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #F4C70C;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #F41E0C;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		</style>
		
		<title>แบบฟอร์มลงทะเบียนบัตร</title>
	</head>
	
	<body>

		<h2 align="center">BPK Smart Work Shop</h2>
		<ul class="topnav">
			<li><a href="home.php">หน้าแรก</a></li>
			<li><a href="user data.php">ข้อมูลผู้ใช้งาน</a></li>
			<li><a class="active"  href="registration.php">ลงทะเบียนบัตร</a></li>
			<li><a href="read tag.php">อ่านการ์ด ID</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID-Card</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="กรุณาแตะการ์ดที่เครื่องแสกน" rows="1" cols="1" required></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">รหัสพนักงาน</label>
						<div class="controls">
							<textarea name="empNo" id="empNo" placeholder="กรุณาใส่รหัสพนักงาน" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">ชื่อ</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">เพศ</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">ชาย</option>
								<option value="Female">หญิง</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">egatMail</label>
						<div class="controls">
							<input name="email" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">เบอร์โทรศัพท์มือถือ</label>
						<div class="controls">
							<input name="mobile" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">บันทึก</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>