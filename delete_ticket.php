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
				      <li class="nav-item active">
				        <a class="nav-link" href="index.php">Book Tickets<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="train_stas.php">Train Schedule</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="pnr.php">PNR Enquiry</a>
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
				
				
			<?php 
				$name=$_GET['name'];
			    $pnr=$_GET['pnr'];
                /*$name2=$_POST['name2'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
				/ *$n=$_GET['n'];
				$date=$_GET['date'];
				$class=$_GET['class2'];*/
				$username =$_SESSION['username'];
				///$i=1;
				//$pass_name=array();
				//$age=array();
				//$gender=array();
				$db2=mysqli_connect('localhost','root','','registration');
				//$q1="INSERT INTO `pass_details`(`Train_No`, `Fare`,`Success`,`Journey_date`,`class`,`username`) VALUES ('$id','$fare','NOT CONFIRMED','$date','$class','$username')";
				//$r1=mysqli_query($db2,$q1);	
                
                $q="DELETE from pass_details2 WHERE B_id=$pnr AND `name`='$name'";
                $r=mysqli_query($db2,$q);
				if($r)
                echo '<h1 style="margin-top: 30px; color:#e91e63;"><b>Successfully Deleted</b></h1>';
                else
                    echo "unsuccessful!";

			?>
					
		<?php include('footer.php'); ?>

			<?php else: ?>
					<?php header('location: login.php'); ?>
				<?php endif ?>
	</body>
</html>