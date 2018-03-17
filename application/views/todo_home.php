<!DOCTYPE html>
<html>
<head>
	<title>TODO</title>
	<link rel="shortcut icon" href="images/Sponsor-todo-288x192px.png" type="image/x-icon" >
	
	<!-- css -->
	<meta name="viewport" content="width=device-width	, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<!--  jquery  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		.glyphicon {
			  position: relative;
			  top: 1px;
			  display: inline-block;
			  font-family: 'Glyphicons Halflings';
			  font-style: normal;
			  font-weight: normal;
			  line-height: 1; 			
			  -webkit-font-smoothing: antialiased;
			  -moz-osx-font-smoothing: grayscale;
		}
		@font-face
		{	
			font-family: PUNAVUOR;
			src: "fonts/PUNAVUOR.TTF";
		}
		.menu{
			color:#ffffff;
			align:center; 
		}
		.cont{
			color:#808080;
			font-size: 18px;
		}
		.inp{
			max-width: 200px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../css/todo-home.css">
</head>
<body>
		<div class="container-fluid">
			<div class="row" style=" background-color:#E22A2A; padding:5px;">
				<div class="col-sm-2" style="border:none;">
					<div class="glyphicon glyphicon-th-list" style="font-size:35px; color:#ffffff; padding-top:5px;"></div>
				</div>
				<div class="col-sm-8" style="align:center; text-align: center; color:#ffffff; font-size: 30px; " align="center">
					<i>Vipin's</i><b>&#160&#160TODO</b>
				</div>
				<div class="col-sm-2" style="padding:0; margin:0px;" align="center">
						<div class="glyphicon glyphicon-off	" style="font-size:35px; color:#ffffff; padding-top:5px;">
						</div>
						<!--<p style="font-size:30px; display:inline; color:#ffffff; text-align:center; padding:0px 0px 10% 10%; margin: 0px; ">LOGOUT</p>-->
				</div>
			</div>
			<div class="row" style=" height:91.6vh; "> 
				<div class="col-sm-3" style="background-color:#ff3939;height:91.6vh; ">
					<div class="row" align="center" style="">	
						<p style="color:#ffffff;font-size:17px;">SELECT DATE</p>
						<input type="date" name="bday">	
					</div>
					<hr>
					<div class="row menu" align="center">
						<h4>YESTERDAY</h4>
					</div>
					<hr>
					<div class="row menu" align="center">
						<h4>TODAY</h4>
					</div>
					<hr>
					<div class="row menu" align="center">
						<h4>TOMORROW</h4>
					</div>
				</div>	
				<div class="col-sm-9"> 
					<div class="row">
						<div class="col-sm-7 cont">
							<div class="row" align="center">
								TASKS
							</div>
							<div class="row ">
								<div class="col-sm-12 bor">
									<div class="row  taskss">
							   			<div class='row' style='margin-top:2%;'>
											<div class='col-xs-10 col-sm-offset-1 display-task'>
												<div class='row'>
													<div class='col-xs-6 title pull-left'>
													</div>
													<div class='col-xs-5 pull-right time'>
													</div>	
												</div>
												<div class='row description'>
												</div>
												<div class='row '>
													<div class='col-xs-5 status'>
													</div>
													<div class='col-xs-2  pull-right'>
														<button type='button' class='btn btn-success btn-sm custom button button-s button-done'>Done</button>
													</div>
													<div class='col-xs-2 pull-right'>
														<button type='button' class='btn btn-danger btn-sm button-s button-delete'>Delete</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-5 cont" style="border-left:solid 3px #ff7a7a	; padding-top: 2vh;" align="center">
							ENTER NEW TASK
							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<hr>
								<p class="cont">Task Name</p><span><input type="text" name="name" class="form-control inp" ></span>
								<hr>
								<p class="cont">Task Description</p><span><textarea class="form-control" name="description" style="
								max-width:400px;" ></textarea></span>
								<hr>
								<p class="cont">Date</p><span><input type="date" name="date" class="form-control" style="
								max-width:120px;"	></span>
								<hr>
								<p class="cont">Time</p><span><input type="time" name="time" class="form-control" style="
									max-width:120px;"  ></span>
								<hr>
								<input type="submit" class="btn btn-success" name="Submit" value="Enter Data" >
								<!-- <hr> -->
								<!-- <div class="row" id=response>
									
								</div> -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>