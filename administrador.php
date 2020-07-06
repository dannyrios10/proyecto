<?php
	require("Conexion.php");
	require("Admin.php");
	require("funcs/funcs.php");
	session_start();

	if(isset($_SESSION["log"])){
		header("location:Registro_conferencias.php");
	}

	$con = new Conexion();
	$con = $con->getCon();

	if($con instanceof PDO){
		if (isset($_POST["usuario_ad"], $_POST["password_ad"])){

			$user = $_POST["usuario_ad"];
			$password = $_POST["password_ad"];

			if (!isNullLogin($user, $password)){
				try{
					$logueo = administrador($con, $user, $password);

					if ($logueo instanceof Admin){
						$_SESSION["log"] = $logueo;						
						header("location:Registro_conferencias.php");
					}

					else{
						resultBlock(["Usuario y/o contraseña incorrecto"]);
					}
				}
				
				catch(Exception $e){
					resultBlock(["Error: ".$e->getMessage()]);
				}
			}
			
			else{
				resultBlock(["Falta un campo"]);
			}
		}
	}

	else{
		echo $con;
	}
?>

<html>
	<head>
		<title>Login</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Iniciar Sesi&oacute;n</div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario_ad" type="text" class="form-control" name="usuario_ad" value="" placeholder="usuario" required>                                        
							</div>
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password_ad" type="password" class="form-control" name="password_ad" placeholder="password" required>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
								</div>
							</div> 
						</form>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>				