<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="alumnosCtrl">
<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administracion</title>

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    <script src="./js/funcionesAl.js"></script>
    <!--JavaScript-->
    <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

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
<form class="form-horizontal" name="frmCliente" ng-submit="postProfesores()">
<div class="form-group" id="form1">
    <h3 id="sesion">Inicia Sesión</h3>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="apemat">apemat</h4>
                    <input ng-model="apemat" class="form-control text-center" type="text" name="txtmat" id="txtmat" placeholder="Apellido Materno" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="apepat">apepat</h4>
                    <input ng-model="apepat" class="form-control text-center" type="text" name="txtpat" id="txtpat" placeholder="apellido paterno" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="email">email</h4>
                    <input ng-model="email" class="form-control text-center" type="email" name="txtemail" id="txtemail" placeholder="Email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="fecnac">fecNac</h4>
                    <input ng-model="fecNac" class="form-control text-center" type="text" name="txtfecnac" id="txtfecnac" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="genero">genero</h4>
                    <input  ng-model="genero" class="form-control text-center" type="text" name="txtgen" id="txtgen" placeholder="genero" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="id_alumno">id_alumno</h4>
                    <input  ng-model="idalumno" class="form-control text-center" type="text" name="txtidal" id="txtidal" placeholder="id Alumno" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="nombre">nombre</h4>
                    <input  ng-model="nombre" class="form-control text-center" type="text" name="txtcarr" id="txtcarr" placeholder="id Carrera" required>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                     
                     <p>Output Message : {{msg}}</p>
<p>StatusCode: {{statusval}}</p>
<p>Status: {{statustext}}</p>
<p>Response Headers: {{headers}}</p>
<input type="button" value="Insert" ng-click="postAlumnos()" /> <br/><br/>
<input type="button" value="show" ng-click="getAlumnos()" /> <br/><br/>
<input type="button" value="Update" ng-click="putAlumnos()" /> <br/><br/>
<input type="button" value="Delete" ng-click="deleteAlumnos()" /> <br/><br/>
            </div>
        </div>
</div>
</div>
</div>
<!-- termina formulario Alumno-->


<div class="container text-center">
    <div class="row"> 
        <div class="col-md-12">
          <div>
              <hr>
              <table align="center">
              <tr ng-repeat="x in alumnos" align="left">
                <td ng-click="mostrarAlerta(x.apepat)">{{ x.apepat }}</td>
                <td>{{ x.apemat }}</td>
              </tr>
            </table>
          </div>
        </div>
    </div>
  </body>
</html>