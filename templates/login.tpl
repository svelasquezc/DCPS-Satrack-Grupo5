
<link rel="stylesheet" href="css/login.css">
<form action="{$gvar.l__global}login.php?option=validarlogin" method="post">

<div class="container">
    <div class="row login_box">
        <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h1>Satrack</h1></div>
            <div class="outter"><img src="images/perro.jpg" class="image-circle"/></div>   
            <h3>Bienvenido</h3>
        </div>
      
        <div class="col-md-12 col-xs-12 login_control">
                
                <div class="control">
                    <input type="text" class="form-control" name="Usuario" placeholder="Usuario"/>
                </div>
                
                <div class="control">
                    <input type="password" class="form-control" name="Contrasena" placeholder="Contraseña"/>
                </div>
                <div align="center">
                    
                    <a href="analista.tpl"><button class="btn btn-orange">Login</button></a>
                     {if $lo->auxiliars['tipo'] == 1}
                     <form action="{$gvar.l__global}analista.php" method="post">
                     {/if}
                </div>
                
        </div>
        
        
            
    </div>
</div>