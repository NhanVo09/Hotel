<?php
    include("./partials/head.php");
    include("./partials/navhome.php");
?>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           CHI TIẾT THỐNG KÊ<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
			
				<?php 
				//index.php
				//$connect = mysqli_connect("localhost", "root", "", "hotel");
				include('db.php');
				
					
					$query = "SELECT * FROM payment";
					$result = mysqli_query($con, $query);
					$chart_data = '';
					$tot = 0;
					while($row = mysqli_fetch_array($result))
					{
					 $chart_data .= "{ date:'".$row["cout"]."', profit:".$row["fintot"] *1000 ."}, ";
					 $tot = $tot + $row["fintot"] *1000;
					}
					$chart_data = substr($chart_data, 0, -2);
				
?>
				 
				<br>
				<br>
				<br>
				<br><div id="chart"></div>
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>ID</th>
                                            <th>Họ tên</th>
                                            <th>Check in</th>
											<th>Check out</th>
                                            <th>Tiền phòng</th>
											<th>Tiền giường</th>
											<th>Tiền ăn </th>
											<th>Tổng cộng</th>
											<th>Thống kê</th>
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										
										$sql="select * from payment";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['id']." </td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													
													
													<td>".$row['ttot']*1000 ."VND</td>
													<td>".$row['mepr']*1000 ."VND</td>
													<td>".$row['btot']*1000 ."VND</td>
													<td>".$row['fintot']*1000 ."VND</td>
													<td>".$row['fintot']*1000 ."VND</td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['id']." </td>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													
													
													<td>".$row['ttot']*1000 ."VND</td>
													<td>".$row['mepr']*1000 ."VND</td>
													<td>".$row['btot']*1000 ."VND</td>
													<td>".$row['fintot']*1000 ."VND</td>
													<td>".$row['fintot']*1000 ."VND</td>
													</tr>";
											
											}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['profit'],
 labels:['Profit'],
 hideHover:'auto',
 stacked:true
});
</script>