<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['vpmsaid']==0)) {
  header('location:logout.php');
  } else{ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
        <?php include 'includes/navigation.php' ?>
	
        <?php
		$page="dashboard";
		include 'includes/sidebar.php'
		?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php include 'includes/greetings.php'?></h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-car color-blue"></em>
							<div class="large"><?php include 'counters/parking-count.php'?></div>
							<div class="text-muted">Total Vehicles Parked</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-toggle-on color-orange"></em>
							<div class="large"><?php include 'counters/invehicles-count.php'?></div>
							<div class="text-muted">Vehicles IN</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-toggle-off color-teal"></em>
							<div class="large"><?php include 'counters/outvehicles-count.php'?></div>
							<div class="text-muted">Vehicles OUT</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-clock-o color-red"></em>
							<div class="large"><?php include 'counters/current-parkingCount.php'?></div>
							<div class="text-muted">Parking Done within 24 hrs</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>

		
		
		
		<?php 

		include 'includes/dbconn.php';
		 $ret=mysqli_query($con,"SELECT count(ID) id1 from vehicle_info where Status=''");
		 $row5=mysqli_fetch_array($ret);
		 
		 $ret=mysqli_query($con,"SELECT count(ID) id2 from vehicle_info where Status='Out'");
		  $row6=mysqli_fetch_array($ret);

		  $ret=mysqli_query($con,"SELECT count(ID) as id1 from vehicle_info where VehicleCategory='Two Wheeler'");
		$row=mysqli_fetch_array($ret);  
             
		$ret=mysqli_query($con,"SELECT count(ID) as id2 from vehicle_info where VehicleCategory='Four Wheeler'");
		$row2=mysqli_fetch_array($ret); 

		$ret=mysqli_query($con,"SELECT count(ID) as id4 from vehicle_info where VehicleCategory='Three Wheeler'");
		$row4=mysqli_fetch_array($ret);
		
		?>

        <?php include 'includes/footer.php'?>
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js'></script>
	
		
</body>
</html>

<?php } ?>