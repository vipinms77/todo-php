<!DOCTYPE html>
<html>
<head>
	<title>TODO Login</title>
	<link rel="shortcut icon" href="images/Sponsor-todo-288x192px.png" type="../image/x-icon" >
	
	<!-- css -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<!--  jquery  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- css -->
	<style type="text/css">
		.backgroun {
			background-image: url("../images/1.jpg");
			background-repeat: no-repeat;
			width: auto;
		    height: 100vh;
		    background-size: cover;
		/*	<!-- background-position: right top;
		    background-attachment: fixed;  -->*/
		}
		.heading{
			font-size: 5vh;
			color: #ffffff;
			font-family: helvetica;
			font-style: normal;
			//	font-weight: bold;
		}
		.heading-top{
			font-size:6vh;
		}
		.input-height{
			height: 50px;
		}
		.btn-primary {
		  color: #fff;
		  background-color: #33cc33;
		  border-color: #33cc33	;
		  width: 100%;
		}
	</style>

</head>
<body class="backgroun">
	<div class="container-fluid " >
		<div class="row">
			<br>
			<div class="col-sm-5 col-xs-12" style=" text-align:center;">
				<p class="heading-top heading"><i>VIPIN's</i><b>&#160&#160&#160TO DO</b></p>
			</div>
			<a href="#"><div class="col-sm-2 col-xs-8 col-xs-offset-2 col-sm-offset-4" style="margin-top:1.	5%; text-align:center;">
				<p style="color:#ffffff; outline:solid 1px #ffffff;">CREATE ACCOUNT</p>
			</div></a>
			<div class="col-xs-1"></div>
		</div>
		<div class="row" style="margin-top:10%;">
			<div class="col-md-4 col-sm-8  col-xs-10 col-xs-offset-1 col-sm-offset-2 col-md-offset-4" style="text-align:center;">
				<div class="row">
					<p class="heading">LOGIN</p>
				</div>
				<hr>
				<form method="POST" action="login">
					<div class="row">
						<p style="color: #00FFF6"><i>
							<?php
							    // echo("jai");
								if(isset($error))
									echo $error;
								if(isset($message))
									echo $message;
							 ?>
						</i></p>
						<div class="col-sm-8 col-xs-12 col-sm-offset-2 input-group">
							<span class="input-group-addon input-height">
								<i class="glyphicon glyphicon-user"></i>
							</span>
						    <input id="email" type="text" class="form-control input-height" name="username" placeholder="Email">
						</div>
					</div>	
					<div class="row" style="margin-top:5%">
						<div class="col-sm-8 col-xs-12 col-sm-offset-2 input-group">
							<span class="input-group-addon  input-height">
								<i class="glyphicon glyphicon-lock"></i>
							</span>
						    <input id="password" type="password" class="form-control input-height" name="password" placeholder="Password">
						</div>
					</div>
					<div class="row" style="margin-top:5%">
						<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 ">
						  <button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>