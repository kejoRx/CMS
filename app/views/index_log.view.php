<?php 
if(isset($_SESSION['email_user'])){
  redirect('dashboard');
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>CMS admin panel</title>
		  <link rel="stylesheet" href="../libs/assets/animate.css/animate.css" type="text/css" />
		  <link rel="stylesheet" href="../libs/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
		  <link rel="stylesheet" href="../libs/assets/simple-line-icons/css/simple-line-icons.css" type="text/css" />
		  <link rel="stylesheet" href="../libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />

		  <link rel="stylesheet" href="css/font.css" type="text/css" />
		  <link rel="stylesheet" href="css/app.css" type="text/css" />
	</head>
	<body>
		<div class="z2 wrapper-md" ng-controller="FormDemoCtrl">
		  <div class="row">
		    <div class="col-sm-4"></div>
		    <div class="col-sm-4">
		      <div class="panel panel-default">
		        <div class="text-center font-size1 panel-heading font-bold">Log In Panel</div>
		        <div class="panel-body">

		          <form action="" method="POST">

		            <div class="font-size2 form-group">

		              <strong><label>Email address</label></strong>

		              <input name="email_user" type="email" class="font-size2 form-control" placeholder="Enter email">
		            </div>
		            <div class="font-size2 form-group">

		              <strong><label>Password</label></strong>
		              <input name="password_user" type="password" class="font-size2 form-control" placeholder="Password">
		            
		            </div>
		            <div name = "error" class="errorMsg"> <?php echo $error ?> </div>
		            <div class="font-size2 text-center font-bold">
		            <a href="" >I forgot my password<br></a>
		            <a href="" >Register here</a>
		            </div>
		            </div>
		            <div class="row">
		            
		          
		              <input name="submit" type="Submit" class="font-size2 btn btn-primary btn-lg btn-block">
	           
		            </div>
		             
		          </form>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</body>
</html>