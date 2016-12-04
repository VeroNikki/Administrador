var app = angular.module('myApp', []);


app.controller('profesoresCtrl', function($scope,$rootScope, $http) {
  var vm=$scope;
  vm.apemat="Vázquez";
  vm.apepat="De los Santos";
  vm.email="delossantos@sd.com";
  vm.fecNac="1985-09-19T00:00:00-06:00";
  vm.genero="M";
  vm.id_departamento="3";
  vm.id_profesor="12345617";
  vm.nombreprofe="Arturo";
  vm.telc="23218273";
  vm.tkn=$rootScope.token;
  $rootScope.enabled=true;
$scope.myWelcome ="holis"; 


$scope.getProfesores= function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/listaprofesores/f78c775982d107c4915303a73aa65daf")
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  alert(":3");
  });
};
$scope.deleteProfesores= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/borrarprofesores/12345617/f78c775982d107c4915303a73aa65daf")
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  });
};

$scope.putProfesores= function(){
      var data = {
                apemat: vm.apemat,
                apepat: vm.apepat,
                email: vm.email,
                fecNac: vm.fecNac,
                genero: vm.genero,
                id_departamento: vm.id_departamento,
                id_profesor: vm.idprofesor,
                nombreprofe: vm.nombreprofe,
                telc: vm.telc
          };
  $http.put("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/actualizaprofesores/f78c775982d107c4915303a73aa65daf",JSON.stringify(data))
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

    $scope.postProfesores= function(){
           var data = {
                apemat: vm.apemat,
                apepat: vm.apepat,
                email: vm.email,
                fecNac: vm.fecNac,
                genero: vm.genero,
                id_departamento: vm.id_departamento,
                id_profesor: vm.idprofesor,
                nombreprofe: vm.nombreprofe,
                telc: vm.telc
          };
           var headers = {
               'Content-Type': 'application/x-www-form-urlencoded'
          };
      
      $http.post("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/insertarprofesores/f78c775982d107c4915303a73aa65daf",data,headers)
      .then(function(response) {
        $scope.postDataResponse = response.data;
        alert("simonalamona");
      });
      };
});