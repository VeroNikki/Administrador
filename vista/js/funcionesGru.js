var app = angular.module('myApp', []);

app.controller('profesoresCtrl', function($scope, $http) {
  var vm=$scope;
  vm.id_grupo="";
  vm.id_materia="";
  vm.id_profesor="";
  vm.token="";

$scope.myWelcome ="holis"; 


$scope.getGrupo= function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/listaprofesores/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  alert(":3");
  });
};
$scope.deleteGrupo= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/borrarprofesores/12345617/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  });
};

$scope.putGrupo= function(){
      var data = {
                id_grupo: vm.id_grupo,
                id_materia: vm.id_materia,
                id_profesor: vm.id_profesor
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

    $scope.postGrupo= function(){
           var data = {
                id_grupo: vm.id_grupo,
                id_materia: vm.id_materia,
                id_profesor: vm.id_profesor
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