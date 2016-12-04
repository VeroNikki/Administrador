var app = angular.module('myApp', []);
app.controller('sesionCtrl', function($scope, $http) {
$scope.estatus="status";
$scope.resultado="sts";
$scope.validar=function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/usuarios/validar/niki117/e10adc3949ba59abbe56e057f20f883e")
  .then(function(response) {
  $scope.resultado = "valido";
  });
};
});