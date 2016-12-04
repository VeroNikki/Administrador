var app = angular.module('myApp', []);

app.controller('profesoresCtrl', function($scope, $http) {
  var vm=$scope;
  vm.calificacion="100";
  vm.id_alumno="12030774";
  vm.id_materia="HM19";
  
  vm.token="";

$scope.myWelcome ="holis"; 


$scope.getCalificacion= function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/listaprofesores/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  alert(":3");
  });
};
$scope.deleteCalificacion= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/borrarprofesores/12345617/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  });
};

$scope.putCalificacion= function(){
      var data = {
                calificacion: vm.calificacion,
                id_alumno: vm.id_alumno,
                id_materia: vm.id_materia
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

    $scope.postCalificacion= function(){
           var data = {
                calificacion: vm.calificacion,
                id_alumno: vm.id_alumno,
                id_materia: vm.id_materia
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