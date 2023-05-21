<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Add Train Details</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		h1{
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;
			margin-bottom: 0px;
			text-align: center;
			padding: 10px;
			color: #1457a7;
		}
	</style>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
		<?php if(isset($_SESSION['username'])): ?>	
				  <div class="collapse navbar-collapse" id="navbarText">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				       <!-- <a class="nav-link" href="index.php">Book Tickets<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="train_stas.php">Train Schedule</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="pnr.php">PNR Enquiry</a>
				      </li>
					  <li class="nav-item">
				        <a class="nav-link" href="view_booked.php">View Tickets</a>
				      </li>
                      <li class="nav-item active">-->
				        <a class="nav-link" href="index.php">Add Trains<span class="sr-only">(current)</span></a>
				      </li>
				      <!--<li class="nav-item">
				        <a class="nav-link" href="train_stas.php">Train Schedule</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="pnr.php">PNR Enquiry</a>
				      </li>
					  <li class="nav-item">-->
                      <li class="nav-item">
				        <a class="nav-link" href="view_admin_trains.php">View All Trains</a>
				      </li>
				        <a class="nav-link" href="view_admin_tickets.php">View All Tickets</a>
				      </li>
				    </ul>		   
						<span class="navbar-text" class="nav-item">
						    Welcome <strong><?php echo $_SESSION['username']; ?></strong>
						</span>
					    <span class="navbar-text" class="nav-item">
					      <a class="nav-link" href="index.php?logout='1'">Logout</a>
					    </span>
					</div>
				</nav>
				<!--<div class="alert alert-warning" role="alert">
				  <i class="fa fa-exclamation-triangle"></i> No concessional tickets allowed for this Train / Quota / Class.
				</div>-->
				<h1>Train Details</h1>
			<?php 
				//$Train_No=$_GET['Train_No'];
			    //$Train_Name=$_GET['Train_Name'];
				//$Source_Station_Name=$_GET['Source_Station_Name'];
                //$Destination_Station_Name=$_GET['Destination_Station_Name'];
				//$days=$_GET['days'];
				//$class=$_GET['class2'];
				//$username =$_SESSION['username'];
				$i=1;
				/*$Train_Name=array();
				$Train_No=array();
				$Source_Station_Name=array();
                $Destination_Station_Name=array();
                $Source_Station_Name=array();
                $days=array();
				$db2=mysqli_connect('localhost','root','','registration');
				$q1="INSERT INTO `train_info`(`Train_No`, `Train_Name`,`Source_Station_Name`,`Destination_Station_Name`,`days`) VALUES ('$Train_No','$Train_Name','$Source_Station_Name','$Destination_Station_Name','$days')";
				$r1=mysqli_query($db2,$q1);	*/			
				//while($n!=0){
			?>
					<form class="container block" style="margin-top: 10px;" action="train_details_handler.php" method="post">
					<div style="border: 1px solid grey; padding: 8px 30px;	background:#F8F8FF; margin-top: 30px;">
					<div class="form-row" style="margin-bottom:10px">
						<i class="fa fa-address-card w3-xlarge"></i><div style="margin-left: 20px;"><?php echo $i;?></div>
					</div>
			  <div class="form-row" >
			    <div class="col-md mb-3">
			      <label for="validationDefault01">Train Name</label>
			      <input type="text" class="form-control" id="validationDefault01" name="Train_Name[<?php echo $i;?>]" value="<?php if (isset($_POST['Train_Name'])) echo $_POST['Train_Name']; ?>" required>
			    </div>
			    <div class="col-md mb-3">
			      <label for="validationDefault02">Train No</label>
			      <input type="number" class="form-control" id="validationDefault02" name="Train_No[<?php echo $i;?>]" value="<?php if (isset($_POST['Train_No'])) echo $_POST['Train_No']; ?>" required>
			    </div>
			    <!--<div class="col-md mb-3">
			      <label for="validationDefault02">Gender</label>
			      <select name="gender[<?php echo $i;?>]" class="form-control">
			      			<option value="<?php if (isset($_POST['gender'])) echo $_POST['gender']; ?>" selected><?php if (isset($_POST['gender'])) echo $_POST['gender']; ?></option>
						    <option value="Male">Male</option>
						    <option value="Female">Female</option>
						    <option value="Other">Other</option>
					</select>
			    </div>-->
                <div class="col-md mb-3">
			      <label for="validationDefault02">Source Station</label>
			      <input type="text" class="form-control" id="validationDefault02" name="Source_Station_Name[<?php echo $i;?>]" value="<?php if (isset($_POST['Source_Station_Name'])) echo $_POST['Source_Station_Name']; ?>" required>
			    </div>
                <div class="col-md mb-3">
			      <label for="validationDefault02">Destination Station</label>
			      <input type="text" class="form-control" id="validationDefault02" name="Destination_Station_Name[<?php echo $i;?>]" value="<?php if (isset($_POST['Destination_Station_Name'])) echo $_POST['Destination_Station_Name']; ?>" required>
			    </div>
                <div class="col-md mb-3">
			      <label for="validationDefault02">Days</label>
			      <input type="number" class="form-control" id="validationDefault02" name="days[<?php echo $i;?>]" value="<?php if (isset($_POST['days'])) echo $_POST['days']; ?>" required>
			    </div>
				</div>
				<div class="form-row" >
				<div class="col-md mb-3">
			      <label for="validationDefault02">Station Code</label>
			      <input type="text" class="form-control" id="validationDefault02" name="Station_Code[<?php echo $i;?>]" value="<?php if (isset($_POST['Station_Code'])) echo $_POST['Station_Code']; ?>" required>
			    </div>
				<div class="col-md mb-3">
			      <label for="validationDefault02">Fare of 1st AC Seats</label>
			      <input type="number" class="form-control" id="validationDefault02" name="1A[<?php echo $i;?>]" value="<?php if (isset($_POST['1A'])) echo $_POST['1A']; ?>" required>
			    </div>
				<div class="col-md mb-3">
			      <label for="validationDefault02">Fare of 2nd AC Seats</label>
			      <input type="number" class="form-control" id="validationDefault02" name="2A[<?php echo $i;?>]" value="<?php if (isset($_POST['2A'])) echo $_POST['2A']; ?>" required>
			    </div>
				<div class="col-md mb-3">
			      <label for="validationDefault02">Fare of 3rd AC Seats</label>
			      <input type="number" class="form-control" id="validationDefault02" name="3A[<?php echo $i;?>]" value="<?php if (isset($_POST['3A'])) echo $_POST['3A']; ?>" required>
			    </div>
				<div class="col-md mb-3">
			      <label for="validationDefault02">Fare of Sleeper Class</label>
			      <input type="number" class="form-control" id="validationDefault02" name="SL[<?php echo $i;?>]" value="<?php if (isset($_POST['SL'])) echo $_POST['SL']; ?>" required>
			    </div>
				</div>
				<div class="form-row" >
				<div class="col-md mb-3">
			      <label for="validationDefault02">Route Number</label>
			      <input type="number" class="form-control" id="validationDefault02" name="Route_Number[<?php echo $i;?>]" value="<?php if (isset($_POST['Route_Number'])) echo $_POST['Route_Number']; ?>" required>
			    </div>
				<div class="col-md mb-3">
			      <label for="validationDefault02">Serial Number</label>
			      <input type="number" class="form-control" id="validationDefault02" name="SN[<?php echo $i;?>]" value="<?php if (isset($_POST['SN'])) echo $_POST['SN']; ?>" required>
			    </div>
				<div class="col-md mb-3">
			      <label for="validationDefault02">Distance</label>
			      <input type="number" class="form-control" id="validationDefault02" name="Distance[<?php echo $i;?>]" value="<?php if (isset($_POST['Distance'])) echo $_POST['Distance']; ?>" required>
			    </div>
				<div class="col-md mb-3">
			      <label for="validationDefault02">Departure Time</label>
			      <input type="time" step = "1" class="form-control" id="validationDefault02" name="Departure_Time[<?php echo $i;?>]" value="<?php if (isset($_POST['Departure_Time'])) echo $_POST['Departure_Time']; ?>" required>
			    </div>
				<div class="col-md mb-3">
			      <label for="validationDefault02">Arrival Time</label>
			      <input type="time" step = "1" class="form-control" id="validationDefault02" name="Arrival_Time[<?php echo $i;?>]" value="<?php if (isset($_POST['Arrival_Time'])) echo $_POST['Arrival_Time']; ?>" required>
			    </div>

			</div>
		</div>
		
			<div class="col-md" style="margin-top: 35px">
			  		<center><button class="btn btn-info" type="submit" name="details">Submit</button></center>
			 </div>
		</form>
		<?php include('footer.php'); ?>

			<?php else: ?>
					<?php header('location: login.php'); ?>
				<?php endif ?>
	</body>
</html>