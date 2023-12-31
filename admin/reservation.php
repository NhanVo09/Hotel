<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ĐẶT PHÒNG</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../user/index.php"><i class="fa fa-home"></i> Trang chủ</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            ĐẶT PHÒNG <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            THÔNG TIN KHÁCH HÀNG
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Chức danh*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Họ</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Tên</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Giới tính</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Nam" checked="">Nam
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Nữ ">Nữ
                                            </label>
                         
                                </div>
								<?php

                                $countries = array(
                                    "An Giang",
                                    "Bà Rịa - Vũng Tàu",
                                    "Bắc Giang",
                                    "Bắc Kạn",
                                    "Bạc Liêu",
                                    "Bắc Ninh",
                                    "Bến Tre",
                                    "Bình Định",
                                    "Bình Dương",
                                    "Bình Phước",
                                    "Bình Thuận",
                                    "Cà Mau",
                                    "Cần Thơ",
                                    "Cao Bằng",
                                    "Đà Nẵng",
                                    "Đắk Lắk",
                                    "Đắk Nông",
                                    "Điện Biên",
                                    "Đồng Nai",
                                    "Đồng Tháp",
                                    "Gia Lai",
                                    "Hà Giang",
                                    "Hà Nam",
                                    "Hà Nội",
                                    "Hà Tĩnh",
                                    "Hải Dương",
                                    "Hải Phòng",
                                    "Hậu Giang",
                                    "Hòa Bình",
                                    "Hưng Yên",
                                    "Khánh Hòa",
                                    "Kiên Giang",
                                    "Kon Tum",
                                    "Lai Châu",
                                    "Lâm Đồng",
                                    "Lạng Sơn",
                                    "Lào Cai",
                                    "Long An",
                                    "Nam Định",
                                    "Nghệ An",
                                    "Ninh Bình",
                                    "Ninh Thuận",
                                    "Phú Thọ",
                                    "Phú Yên",
                                    "Quảng Bình",
                                    "Quảng Nam",
                                    "Quảng Ngãi",
                                    "Quảng Ninh",
                                    "Quảng Trị",
                                    "Sóc Trăng",
                                    "Sơn La",
                                    "Tây Ninh",
                                    "Thái Bình",
                                    "Thái Nguyên",
                                    "Thanh Hóa",
                                    "Thừa Thiên Huế",
                                    "Tiền Giang",
                                    "TP Hồ Chí Minh",
                                    "Trà Vinh",
                                    "Tuyên Quang",
                                    "Vĩnh Long",
                                    "Vĩnh Phúc",
                                    "Yên Bái"
                                );
								?>
								<div class="form-group">
                                            <label>Tỉnh Thành*</label>
                                            <select name="country" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            THÔNG TIN ĐẶT PHÒNG
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Loại phòng*</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Guest House">GUEST HOUSE</option>
												<option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Loại giường</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
												<option value="None">None</option>
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Số phòng *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
                                            </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label>Chế độ bữa ăn</label>
                                            <select name="meal" class="form-control"required>
                                            <option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
												<option value="Half Board">Half Board</option>
												<option value="Full Board">Full Board</option>
												
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>MÃ XÁC MINH</h4>
                        <p> <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Vui lòng nhập mã xác minh phía bên dưới<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									// $con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('Bạn đã đặt phòng, Vui lòng chờ xác nhận')</script>";
										
									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Đặt phòng thành công')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Lỗi đặt phòng vui lòng kiểm tra lại')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
