<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Passenger Details</title>
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
				     <!-- <li class="nav-item active">
				        <a class="nav-link" href="index.php">Book Tickets<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="train_stas.php">Train Schedule</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="pnr.php">PNR Enquiry</a>
				      </li>-->
					  <li class="nav-item active">
				        <a class="nav-link" href="index.php">Add Trains<span class="sr-only">(current)</span></a>
				      </li>
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
				  <i class="fa fa-exclamation-triangle"></i> No concessional tickets allowed for this Train / Quota/Class.
				</div>-->
			<?php 
				$Train_No=$_POST['Train_No'];
				$Train_No_String=implode("",$Train_No);

			    $Train_Name=$_POST['Train_Name'];
				$Train_Name_String=implode("",$Train_Name);

				$Source_Station_Name=$_POST['Source_Station_Name'];
				$Source_Station_Name_String=implode("",$Source_Station_Name);

                $Destination_Station_Name=$_POST['Destination_Station_Name'];
				$Destination_Station_Name_String=implode("",$Destination_Station_Name);

				$days=$_POST['days'];
				$days_String=implode("",$days);

				$Station_Code=$_POST['Station_Code'];
				$Station_Code_S=implode("",$Station_Code);

				$A1=$_POST['1A'];
				$A1_S=implode("",$A1);

				$A2=$_POST['2A'];
				$A2_S=implode("",$A2);

				$A3=$_POST['3A'];
				$A3_S=implode("",$A3);

				$SL=$_POST['SL'];
				$SL_S=implode("",$SL);

				$Route_Number=$_POST['Route_Number'];
				$Route_Number_S=implode("",$Route_Number);

				$Arrival_Time=$_POST['Arrival_Time'];
				$Arrival_Time_S=implode("",$Arrival_Time);

				$Departure_Time=$_POST['Departure_Time'];
				$Departure_Time_S=implode("",$Departure_Time);

				$Distance=$_POST['Distance'];
				$Distance_S=implode("",$Distance);

				$SN=$_POST['SN'];
				$SN_S=implode("",$SN);
				
				/*$n=$_GET['n'];
				$date=$_GET['date'];
				$class=$_GET['class2'];*/
				//$username =$_SESSION['username'];
				///$i=1;
				//$pass_name=array();
				//$age=array();
				//$gender=array();
				$db2=mysqli_connect('localhost','root','','registration');
				//$q1="INSERT INTO `pass_details`(`Train_No`, `Fare`,`Success`,`Journey_date`,`class`,`username`) VALUES ('$id','$fare','NOT CONFIRMED','$date','$class','$username')";
				//$r1=mysqli_query($db2,$q1);	
                
                //$q="INSERT INTO `train_info`(`Train_No`, `Train_Name`,`Source_Station_Name`,`Destination_Station_Name`,`days`) VALUES ($Train_No,'$Train_Name','$Source_Station_Name','$Destination_Station_Name',$days)";
                $q="INSERT INTO train_info(Train_No, Train_Name,Source_Station_Name,Destination_Station_Name,days) VALUES ($Train_No_String,'$Train_Name_String','$Source_Station_Name_String','$Destination_Station_Name_String',$days_String)";
                $r=mysqli_query($db2,$q);
				$q1="INSERT INTO train_schedule VALUES ($SN_S,$Train_No_String,'$Station_Code_S',$A1_S,$A2_S,$A3_S,$SL_S,'$Destination_Station_Name_String','$Route_Number_S','$Arrival_Time_S','$Departure_Time_S',$Distance_S)";
				$r1=mysqli_query($db2,$q1);
				if($r AND $r1)
                    echo '<h1 style="margin-top: 30px; color:#e91e63;"><b>Successfully Added</b></h1>';
                else
                    echo '<h1 style="margin-top: 30px; color:#e91e63;"><b>Unsuccessful</b></h1>';

			?>
					
		<?php include('footer.php'); ?>

			<?php else: ?>
					<?php header('location: login.php'); ?>
				<?php endif ?>
	</body>
</html>