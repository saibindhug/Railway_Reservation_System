
 <html>
	<head>
		<title>Forgot Password</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title>Login page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			body {
			background-image: url('https://www.irctc.co.in/nget/swach_banner2.391192cab480269195cd.jpg');
			background-repeat: no-repeat;
			background-size: cover;

			}
			button .btn{
				padding: 10px;
				margin: 10px auto;
				font-size: 15px;
				border: none;
				border-radius: 5px;
			}
		</style>
	</head>
	<body>
		<h1>Forgot Password</h1>
		<form method="post" action="mail.php">

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn" style="color: white; background: #5F9EA0;">  Send mail </button>
			</div>
	    </form>
	  <?php include('footer.php'); ?>
		</body>
</html>

