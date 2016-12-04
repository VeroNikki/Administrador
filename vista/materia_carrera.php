<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administracion</title>

    <!-- Bootstrap -->
     <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    <!--JavaScript-->
	<script src="js/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

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
                            </div>
                        </form>
                    </div>                          
                </div>
            </nav>              
        </div>
     </div>
    </div>
  <!--termina -->

  <!--Formulario Alumno-->
<div class="container text-center">
<form class="form-horizontal" method="post" action="" name="frmCliente">
<div class="form-group" id="form1">
    <h3 id="sesion">Inicia Sesión</h3>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="id_carrera">id_carrera</h4>
                    <input class="form-control text-center" type="text" name="txtmat" id="txtmat" placeholder="descripción" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="id_materia">id_materia</h4>
                    <input class="form-control text-center" type="text" name="txtpat" id="txtpat" placeholder="id carrera" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                     <button type="submit" class="btn btn-default"><img src="img/sesion.png" id="btncomprar" align="center" width="10%" height="10%" onclick="Enviar(2)"></button>
            </div>
        </div>
</div>
</div>
</div>
<!-- termina formulario Alumno-->


<div class="container text-center">
    <div class="row"> 
        <div class="col-md-12">
          <div ng-app="myApp" ng-controller="myCtrl">
              <hr>
               <h2 align="center" ng-click="getAlgo()">{{myWelcome}}</h2>
              <hr>
              <br>
              <button ng-click="getAlgo()" class="btn btn-default"><img src="img/sesion.png"align="center" width="10%" height="10%" ></button>
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

 /*$scope.getAlgo= function(){
    var data = $.param({
                descripcion: $scope.descripcion,
                idcarrera: $scope.idcarrera,
                nombre: $scope.nombre,
                semestre: $scope.semestre,
            });
        
            var config = {
                headers : {
                    'Content-Type': 'application/json;'
                }
            }
  
  $http.post("http://192.168.1.69:8080/PATMALUMNOS/rest/wsalumnos/insertaralumno/e136acf61457d5eb74a41580ea7f02d0",data,config)
  .then(function(response) {
  $scope.alumnos = response.data.alumnos;
  });
*/

  $scope.getAlgo= function(){
  
  $http.get("http://192.168.1.69:8080/PATMALUMNOS/rest/wsalumnos/listaalumnos/2c7b7d64b421ca6eed900f136bdf762e")
  .then(function(response) {
  $scope.alumnos = response.data.alumnos;
  });

};
});
</script>
<!--<script src="js/fun.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  </body>
</html>