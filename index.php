<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administracion</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/inicio.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  </head>
  <body>
    

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
                  <a href="vista/inicio.php" class='en'><li class="inicio"> <span class="txt">Inicio</span></li></a>
                  <a href="vista/registro.php" class='en'><li class="Sesion"> <span class="txt">Iniciar Sesión</span></li></a>
              </ul>
            </div>    
          </div>
        </nav>
      </div>
    </div>
  </div>

		<div class="row">	
	    	<div class="col-md-12">

	<!--slider-->
  <div class="row"> 
  <div class="col-md-12">
  <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/imagen1.png" alt="1" width="12000" height="200">
      </div>

      <div class="item">
        <img src="img/imagen1.png" alt="2" width="1200" height="200">
      </div>
    
      <div class="item">
        <img src="img/imagen2.png" alt="3" width="1200" height="200">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 </div>
    </div>

	    


  <div class="container text-center">
    <div class="row"> 
        <div class="col-md-12">
          <div ng-app="myApp" ng-controller="myCtrl">
              <hr>
               <h2 align="center" ng-click="getAlgo()">{{myWelcome}}</h2>
              <hr>
              <br>
              <table>
              <tr ng-repeat="x in alumnos">
                <td ng-click="mostrarAlerta(x.apepat)">{{ x.apepat }}</td>
                <td>{{ x.apemat }}</td>
              </tr>
            </table>

               
             </div>
        </div>
    </div>

<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $http) {
$scope.myWelcome ="holis";  

$scope.funcionOloquesea= function(){
$scope.myWelcome ="hola";  
};

$scope.mostrarAlerta= function(algo){
alert(algo);
} ; 

  $scope.getAlgo= function(){
  
  $http.get("http://192.168.1.69:8080/PATMALUMNOS/rest/wsalumnos/listaalumnos/2c7b7d64b421ca6eed900f136bdf762e",)
  .then(function(response) {
  $scope.alumnos = response.data.alumnos;
  });

};



});
</script>

		<div class="row">	
	    	<div class="col-md-12">
	         <!--slider-->
	           <div class="container">
            <br>


    <ol id='foote' class="breadcrumb">
        <li class="active">TODOS LOS DERECHOS RESERVADOS ©2016</a></li>
        <li><a href="vista/privacidad2.html">POLÍTICAS DE PRIVACIDAD </a></li>
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
	</div> 
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>