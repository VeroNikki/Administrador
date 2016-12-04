var app = angular.module('myApp', []);

app.controller('profesoresCtrl', function($scope, $http) {
  var vm=$scope;
  vm.descripcion="Es una ingenieria bla bla bla";
  vm.idcarrera="3";
  vm.nombre="ingenieria Mecanica";
  vm.semestre="9";
  vm.token="";

$scope.myWelcome ="holis"; 


$scope.getCarrera= function(){
$http.get("http://localhost:8080/PATMALUMNOS/rest/wscarreras/listacarreras/"+token)
  .then(function(response) {
  $scope.carerras = response.data.carerras;
  });
};
$scope.deleteCarrera= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/borrarprofesores/"+token)
  .then(function(response) {
  $scope.carerras = response.data.carerras;
  });
};

$scope.putCarrera= function(){
      var data = {
                descripcion: vm.descripcion,
                idcarrera: vm.idcarrera,
                nombre: vm.nombre,
                semestre: vm.semestre
          };
  $http.put("http://localhost:8080//PATMALUMNOS/rest/wscarreras/actualizacarrera/"+token,JSON.stringify(data))
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

    $scope.postCarrera= function(){
           var data = {
                descripcion: vm.descripcion,
                idcarrera: vm.idcarrera,
                nombre: vm.nombre,
                semestre: vm.semestre
          };
           var headers = {
               'Content-Type': 'application/x-www-form-urlencoded'
          };
      
    $http.post("http://localhost:8080/PATMALUMNOS/rest/wscarreras/insertarcarreras/"+token,data,config)
  .then(function(response) {
  $scope.carerras = response.data.carerras;
  });
  };
});