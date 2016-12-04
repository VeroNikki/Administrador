var app = angular.module('myApp', []);

app.controller('alumnosCtrl', function($scope, $http) {
  var vm=$scope;
          vm.apemat= "Rodriguez";
          vm.apepat= "Joya";
          vm.email= "Joya@gmail.com";
          vm.fecnac= "1994-02-18T00:00:00-06:00";
          vm.genero= "M";
          vm.id_alumno= "12030775";
          vm.id_carrera= "1";
          vm.nombre= "Omar";
  
  vm.token="";

$scope.myWelcome ="holis"; 


$scope.getAlumnos= function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/wsalumnos/listaalumnos/4206d73c3d4ef175aa47b31c8438631d")
  .then(function(response) {
  $scope.alumnos = response.data.alumnos;
  });
};
$scope.deleteAlumnos= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsalumnos/borraralumno/12030775/4206d73c3d4ef175aa47b31c8438631d")
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  });
};

$scope.putAlumnos= function(){
      var data = {
            apemat: vm.apemat,
            apepat: vm.apepat,
            email: vm.email,
            fecnac: vm.fecnac,
            genero: vm.genero,
            id_alumno: vm.id_alumno,
            id_carrera: vm.id_carrera,
            nombre: vm.nombre
          };
  $http.put("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/actualizaprofesores/"+token,JSON.stringify(data))
  .then(function(response) {
    if (response.data)
        $scope.msg = "Put Data Method Executed Successfully!";
    }, function(response) {
        $scope.msg = "Service not Exists";
        $scope.statusval = response.data;
        $scope.statustext = response.statusText;
        $scope.headers= response.headers();
  });
};

    $scope.postAlumnos= function(){
           var data = {
            apemat: vm.apemat,
            apepat: vm.apepat,
            email: vm.email,
            fecnac: vm.fecnac,
            genero: vm.genero,
            id_alumno: vm.id_alumno,
            id_carrera: vm.id_carrera,
            nombre: vm.nombre
          };
           var headers = {
               'Content-Type': 'application/x-www-form-urlencoded'
          };
      
      $http.post("http://localhost:8080/PATMALUMNOS/rest/wsalumnos/insertaralumno/4206d73c3d4ef175aa47b31c8438631d"+token,data,headers)
      .then(function(response) {
        $scope.postDataResponse = response.data;
        alert("simonalamona");
      });
      };
});