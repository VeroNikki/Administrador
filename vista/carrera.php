<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administracion</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
     <script src="./js/funcionesCarr.js"></script>
    <!--JavaScript-->
    <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

  </head>
  <body ng-app="myApp" ng-controller="myCtrl">
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
<div>
<div class="container text-center">
<form class="form-horizontal" method="post" action="" name="frmCliente">
<div class="form-group" id="form1">
    <h3 id="sesion">Inicia Sesión</h3>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="descripcion">descripcion</h4>
                    <input class="form-control text-center" type="text" name="txtdescripcion" ng-model="txtdescripcion"  id="txtdescripcion" placeholder="descripción" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="idcarrera">idcarrera</h4>
                    <input class="form-control text-center" type="number" name="txtidcarrera" ng-model="txtidcarrera" id="txtidcarrera" placeholder="id carrera" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="nombre">nombre</h4>
                    <input class="form-control text-center" type="text" name="txtnombre" ng-model="txtnombre" id="txtnombre" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="semestre">semestre</h4>
                    <input class="form-control text-center" type="text" name="txtsemestre" ng-model="txtsemestre" id="txtsemestre" placeholder="Semestre" required>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2"> 
                  <input type="button" value="Insert" ng-click="postCarrera()" /> <br/><br/>
            </div>
            <div class="col-lg-2">
                  <input type="button" value="show" ng-click="getCarrera()" /> <br/><br/>
            </div>
            <div class="col-lg-2">
                  <input type="button" value="Update" ng-click="putCarrera()" /> <br/><br/>
            </div>
            <div class="col-lg-2">
                  <input type="button" value="Delete" ng-click="deleteCarrera()" /> <br/><br/>
                  <button ng-click="SendData()">Submit</button>
            </div>
            <div class="col-lg-2">
            </div>
            </div>
        </div>
</div>
</div>
</div>
<!-- termina formulario Alumno-->
<button ng-click="ShowData()">Show</button>
<button ng-click="AlterData()">Alter</button>

<div class="container text-center">
    <div class="row"> 
        <div class="col-md-12">
          <div >
              <hr>
               <h2 align="center" ng-click="getAlgo()">{{myWelcome}}</h2>
              <hr>
              <br>
              <button ng-click="getAlgo()" class="btn btn-default"><img src="img/sesion.png"align="center" width="10%" height="10%" ></button>
              <table>
              <tr ng-repeat="x in carerras">
                <td>{{ x.descripcion}}</td>
                <td>{{ x.idcarrera}}</td>
              </tr>
            </table>
          </div>
        </div>
    </div>
</div>
  </body>
</html>