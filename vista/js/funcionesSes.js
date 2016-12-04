var app = angular.module('myApp', []);

app.controller('sesionCtrl', function($scope, $http) {
	var vm=$scope;
	vm.pass="e10adc3949ba59abbe56e057f20f883e";
$scope.estatus="status";
$scope.resultado="estatus";
$scope.validar=function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/usuarios/validar/"+vm.usuario+"/"+vm.pass)
  .then(function(response) {
  $scope.resultado = response.data.estatus;
  });
};
/*app.controller('sesionCtrl', function($scope,$rootScope,$http) {
	var vm=$scope;
	vm.pass="e10adc3949ba59abbe56e057f20f883e";
$scope.estatus="status";
$scope.resultado="estatus";
$rootScope.token = 'asdf';
$rootScope.enabled=true;

$scope.validar=function(){
	console.log("http://localhost:8080/PATMALUMNOS/rest/wsusuarios/validar/"+vm.usuario+"/"+vm.pass);
  $http.get("http://localhost:8080/PATMALUMNOS/rest/wsusuarios/validar/"+vm.usuario+"/"+vm.pass)
  .then(function(response) {
  $scope.resultado = response.data.estatus;
  $rootScope.token = response.data.strTokenUsr;
  vm.res=$rootScope.token;
  });
};*/

// app.controller('sesionCtrl', function($scope,$window) {
//     $scope.redirect = function(){
//     $window.location.href ="./principal.php"
});

app.factory('radio',function() {
  return 10;
});


// var angularRoutingApp = angular.module('angularRoutingApp', ['ngRoute']);
// angularRoutingApp.config(function($routeProvider) {

//     $routeProvider
//         .when('/', {
//             templateUrl : 'pages/home.html',
//             controller  : 'mainController'
//         })
//         .when('/contacto', {
//             templateUrl : 'vista/principal.php',
//             controller  : 'contactController'
//         })
//         .when("/login", {
// 		templateUrl : "vista/principal.php",
// 		controller : "loginController"
// 		})
//         .otherwise({
//             redirectTo: '/'
//         });
// });

// angularRoutingApp.controller('contactController', function($scope) {
//     $scope.message = 'Bienvenido';
// });
