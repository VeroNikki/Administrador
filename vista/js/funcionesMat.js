var app = angular.module('myApp', []);

app.controller('profesoresCtrl', function($scope, $http) {
  var vm=$scope;
    vm.creditos="5";
    vm.horasPractica="40";
    vm.horasTeoricas="40";
    vm.idmateria="HM13 ";
    vm.nombre="PROGRAMACIÓN AVANZADA EN TECNOLOGÍAS MÓVILES";
    vm.semestre="8";
  
  vm.token="";

$scope.myWelcome ="holis"; 


$scope.getMateria= function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/listaprofesores/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  alert(":3");
  });
};
$scope.deleteMateria= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/borrarprofesores/12345617/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  });
};

$scope.putMateria= function(){
      var data = {
            creditos: vm.creditos,
            horasPractica: vm.horasPractica,
            horasTeoricas: vm.horasTeoricas ,
            idmateria: vm.idmateria ,
            nombre: vm.nombre,
            semestre: vm.semestre
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

    $scope.postMateria= function(){
           var data = {
            creditos: vm.creditos,
            horasPractica: vm.horasPractica,
            horasTeoricas: vm.horasTeoricas ,
            idmateria: vm.idmateria ,
            nombre: vm.nombre,
            semestre: vm.semestre
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