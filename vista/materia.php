<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administracion</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./js/funcionesMat.js"></script>
    <!--JavaScript-->

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
  <!--inicia barra de navegación -->
  <div class="container">
          <div class="navbar-header">
              <ul id="menu" class="nav navbar-nav">
                  <a href="../inicio.php" class="en"><li class="inicio"> <span class="txt">Inicio</span></li></a>
                  <a href="registro.php" class="en"><li class="Sesion"> <span class="txt">Sesión</span></li></a>
                  <a href="principal.php" class="en"><li class="Sesion"> <span class="txt">Alumnos</span></li></a>
                  <a href="profesores.php" class="en"><li class="Sesion"> <span class="txt">Profesores</span></li></a>
                  <a href="carrera.php" class="en"><li class="Sesion"> <span class="txt">Carreras</span></li></a>
                  <a href="horario.php" class="en"><li class="Sesion"> <span class="txt">Horario</span></li></a>
                  <a href="kardex.php" class="en"><li class="Sesion"> <span class="txt">Kardex</span></li></a>
                  <a href="grupo.php" class="en"><li class="Sesion"> <span class="txt">grupo</span></li></a>
                  <a href="calificacion.php" class="en"><li class="Sesion"> <span class="txt">calificación</span></li></a>
                  <!--<a href="" class="en"><li class="V"> <span class="txt"> V</span></li></a>
                  <a href="" class="en"><li class="Y"> <span class="txt"> Y</span></li></a>-->
              </ul>
            </div>    
          
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- termina barra de navegación-->

  <!--Formulario Alumno-->
<div class="container text-center">
<form class="form-horizontal" method="post" action="" name="frmCliente">
<div class="form-group" id="form1">
    <h3 id="sesion">Inicia Sesión</h3>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="id_materia">id_materia</h4>
                    <input class="form-control text-center" type="text" name="txtmat" id="txtmat" placeholder="descripción" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="nombre">nombre</h4>
                    <input class="form-control text-center" type="text" name="txtpat" id="txtpat" placeholder="id carrera" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="creditos">creditos</h4>
                    <input class="form-control text-center" type="email" name="txtemail" id="txtemail" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="semestre">semestre</h4>
                    <input class="form-control text-center" type="text" name="txtfecnac" id="txtfecnac" placeholder="Semestre" required>
            </div>
        </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="horas_teoricas">horas_teoricas</h4>
                    <input class="form-control text-center" type="text" name="txtfecnac" id="txtfecnac" placeholder="Semestre" required>
            </div>
        </div>
          <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                    <h4 for="horas_practicas">horas_practicas</h4>
                    <input class="form-control text-center" type="text" name="txtfecnac" id="txtfecnac" placeholder="Semestre" required>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2"> 
                  <input type="button" value="Insert" ng-click="postMateria()" /> <br/><br/>
            </div>
            <div class="col-lg-2">
                  <input type="button" value="show" ng-click="getMateria()" /> <br/><br/>
            </div>
            <div class="col-lg-2">
                  <input type="button" value="Update" ng-click="putMateria()" /> <br/><br/>
            </div>
            <div class="col-lg-2">
                  <input type="button" value="Delete" ng-click="deleteMateria()" /> <br/><br/>
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


<div class="container text-center">
    <div class="row"> 
        <div class="col-md-12">
          <div ng-app="myApp" ng-controller="myCtrl">
              <hr>
              <table>
              <tr ng-repeat="x in materias">
                <td>{{ x.creditos }}</td>
                <td>{{ x.idmateria }}</td>
              </tr>
            </table>
          </div>
        </div>
    </div>
  </body>
</html>