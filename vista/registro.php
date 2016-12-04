<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="sesionCtrl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administracion</title>
      <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--JavaScript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    <script src="./js/funcionesSes.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
  </head>
  <body>
  <div class="container-fluid text-center" withd="100%">
  <!--primera barra-->
   <div class="container text-justify">
     <div class="row">   
        <div class="col-md-12"> 
            <nav id='barran' class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="img/HeaderBanner.png" alt="imagen" id="imgtitulo" width="100%"> 
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Buscar" id="barrabusq">
                                        </div>
                                         <button type="submit" class="btn btn-default"><img src="img/buscar.png" id="btnbuscar" align="center"></button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                     <img src="img/iniciarsesion.png" id="btnisesion">
                                </div>-->
                            </div>
                        </form>
                    </div>                          
                </div>
            </nav>              
        </div>
     </div>
    </div>
  <!--termina -->
    
<div class="container text-center">
    <div class="row"> 
      <div class="col-md-12"> 
        <nav  id='mnu' class="navbar navbar-default" role="navigation"> 
          <div class="navbar-header">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul id="menu" class="nav navbar-nav">
                  <a href="inicio.php" class="en"><li class="inicio"> <span class="txt">Inicio</span></li></a>
                  <!--<a href="ProyectosGral.php" class="en"><li class="Proyectos"> <span class="txt">Proyectos</span></li></a>-->
                  <a href="registro.php" class="en"><li class="Sesion"> <span class="txt">Sesión</span></li></a>
                  <!--<a href="" class="en"><li class="V"> <span class="txt"> V</span></li></a>
                  <a href="" class="en"><li class="Y"> <span class="txt"> Y</span></li></a>-->
              </ul>
            </div>    
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>


        <div class="col-md-6">
            <h1 class="headerprincipal"></h1>
        </div>

    </div>   
</div>
    <h1 id ="tit" class="text-center"></h1>
	
    <div class="container text-center">
    <br>
    <br>
<form class="form-horizontal" name="frmUsuario">
    	    <div class="row">
    	    	<div class="col-md-3">
    	    	</div>
    	    	<div class="col-md-6">
    	    		<button class="btnComprar" id="btn1" value="Registrarse">	Registrarse</button>    
    	    		<button class="btnComprar" id="btn2" value="Iniciar Sesion" ng-click="validar()"> Iniciar Sesion </button>
              <a href="#profesores">Red</a>
    	    	</div>

    	    	<div class="col-md-3">
    	    		
    	    	</div>
    	    </div>
    	    <!--Renglon para poner el formulario de inicio de sesion-->
    	    <div class="row">
    	    	<div class="col-md-4">
    	    	</div>
    	    	<div class="col-md-5">
    	    	<br>
    	    		<!-- <form id="form1" class="form-horizontal" method="post" action="registro.php" name="frmCliente"> -->
    	    			<br>
    	    			<div class="form-group" id="form1">
    	    			<h3 id="sesion">Inicia Sesión</h3>
                	<div class="row">
	    						<div class="col-lg-2">
	    						</div>
		    					<div class="col-lg-8">
		    						<h4 for="usuario">Usuario</h4>
		    						<input  ng-model="usuario" class="form-control text-center" type="text" name="txtusu" id="txtusu" placeholder="Usuario" required>
		    					</div>
	    					</div>
	    					<div class="row">
	    						<div class="col-lg-2">
	    							
	    						</div>
		    					<div class="col-lg-8">
		    						<h4 for="contrasenia">Contraseña</h4>
		    						<input  ng-model="pass" class="form-control text-center" type="password" name="txtcontr" id="txtcontr" placeholder="Contraseña" required>
		    					</div>
	    					</div>
	    					<br>
	    					<div class="row">
	    						<div class="col-lg-2">
	    							
	    						</div>
		    					<div class="col-lg-8">
		    						 
		    					   <h2 align="center" ng-click="validar()">{{estatus}}</h2>
                     <h2 align="center">{{resultado}}</h2>
                     <h2 align="center">{{token}}</h2>   
                     <h2 align="center">{{res}}</h2>         
                     
                  </div>
	    					</div>
	    					<br>
	    					<br>
    					</div>
    	    		
    	    	</div>
    	    </div>

  
    	    </form>
    <ol id='foote' class="breadcrumb">
        <li class="active">TODOS LOS DERECHOS RESERVADOS © 2015</a></li>
        <li><a href="sobrenosotros.html" class="en"> ACERCA DE VEYAJU</a></li>
        <li><a href="privacidad.html" class="en">POLÍTICAS DE PRIVACIDAD </a></li>
    </ol>
 <!--redes sociales-->
    <div class="caja-redes">
      <a href="http://fortawesome.github.io/Font-Awesome/icon/linkedin/" class="icon-button linkedin"><i class="icon-linkedin"></i><span></span></a>
      <a href="http://fortawesome.github.io/Font-Awesome/icon/pinterest/" class="icon-button pinterest"><i class="icon-pinterest"></i><span></span></a>
      <a href="https://twitter.com/?lang=es" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
      <a href="https://www.facebook.com/gestionproyectos?fref=ts" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
    </div>
  <!-- termina redes sociales-->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  </body>
</html>