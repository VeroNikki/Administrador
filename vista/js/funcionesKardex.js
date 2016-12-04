var app = angular.module('myApp', []);

app.controller('profesoresCtrl', function($scope, $http) {
  var vm=$scope;
   calificacion1= "90";
   calificacion2= "90";
   calificacion3= "88";
   calificacion4= "87";
   id_alumno= "12030816";
   id_grupo= "1";
   id_materia= "HM15 ";
   id_oportunidad= "1";
   id_profesor= "12345678";
   id_semestre= "9";
   promedio= "0";

  vm.token="";

$scope.myWelcome ="holis"; 


$scope.getKardex= function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/listaprofesores/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  alert(":3");
  });
};
$scope.deleteKardex= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/borrarprofesores/12345617/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  });
};

$scope.putKardex= function(){
      var data = {
            calificacion1: vm.calificacion1 ,
            calificacion2: vm.calificacion2 ,
            calificacion3: vm.calificacion3,
            calificacion4: vm.calificacion4 ,
            id_alumno: vm.id_alumno,
            id_grupo: vm.id_grupo,
            id_materia: vm.id_materia,
            id_oportunidad: vm.id_oportunidad ,
            id_profesor: vm.id_profesor,
            id_semestre: vm.id_semestre ,
            promedio: vm.promedio
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

    $scope.postKardex= function(){
           var data = {
            calificacion1: vm.calificacion1 ,
            calificacion2: vm.calificacion2 ,
            calificacion3: vm.calificacion3,
            calificacion4: vm.calificacion4 ,
            id_alumno: vm.id_alumno,
            id_grupo: vm.id_grupo,
            id_materia: vm.id_materia,
            id_oportunidad: vm.id_oportunidad ,
            id_profesor: vm.id_profesor,
            id_semestre: vm.id_semestre ,
            promedio: vm.promedio
          };
           var headers = {
               'Content-Type': 'application/x-www-form-urlencoded'
          };
      
      $http.post("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/insertarprofesores/"+token,data,headers)
      .then(function(response) {
        $scope.postDataResponse = response.data;
        alert("simonalamona");
      });
      };
});