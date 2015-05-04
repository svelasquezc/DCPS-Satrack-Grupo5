<form action="{$gvar.l__global}login.php?option=validarlogin" method="post">
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/alertify/lib/alertify.min.js"></script>
<script src="js/app.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/ensayo_login.css">
<link rel="stylesheet" type="text/css" href="js/alertify/themes/alertify.default.css">
<link rel="stylesheet" type="text/css" href="js/alertify/themes/alertify.core.css">
<body {if isset($alerta)} onload="{$alerta}"{/if}>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			
		</div>
		<div class="col-lg-6">
			
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-4">
			
		</div>
		<div class="col-lg-4">
			<div class="login row">
				<div class="row login_header">
					<div class="row satrack">
						Satrack
					</div>
					<div class="row logo">
						<div class="col-lg-3 logo1">
							
						</div>
						<div class="col-lg-6 logo2">
							<img src="images/perro.jpg" class="image-circle"/>
						</div>
						<div class="col-lg-3 logo1">
							
						</div>
					</div>
					<div class="row bienvenido">
						Bienvenido
					</div>
				</div>
				<div class="row login_input">
					<div class="row row_login1">
						
					</div>
					<div class="row row_login_center">
						<input type="text" class="form-control" name="Usuario" placeholder="Usuario"/>
						<input type="password" class="form-control" name="Contrasena" placeholder="Contraseña"/>
					</div>
					<div class="row row_login">
						<button class="btn btn-orange">Ingresar</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
		
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			
		</div>
		<div class="col-lg-6">
			
		</div>	
	</div>
</div>
</body>