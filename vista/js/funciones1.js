var app = angular.module('myApp', []);

app.controller('profesoresCtrl', function($scope, $http) {
  var vm=$scope;
  vm.apemat="Vázquez";
  vm.apepat="De los Santos";
  vm.email="delossantos@sd.com";
  vm.fecNac="1985-09-19T00:00:00-06:00";
  vm.genero="M";
  vm.idprofesor="12345617";
  vm.nombreprofe="Arturo";
  vm.telc="23218273";

$scope.myWelcome ="holis"; 


$scope.getProfesores= function(){
  $http.get("http://localhost/wssii/controlador/wsprofesores.php?token=f78c775982d107c4915303a73aa65daf")
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  alert(":3");
  });
};
$scope.deleteProfesores= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/borrarprofesores/12345617/43f74bc1e0d8867ef14fe6841c9a9a93")
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
                idprofesor: vm.idprofesor,
                nombreprofe: vm.nombreprofe,
                telc: vm.telc
          };
  $http.put("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/actualizaprofesores/43f74bc1e0d8867ef14fe6841c9a9a93",JSON.stringify(data))
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
                idprofesor: vm.idprofesor,
                nombreprofe: vm.nombreprofe,
                telc: vm.telc
          };
           var headers = {
               'Content-Type': 'application/x-www-form-urlencoded'
          };
      
      $http.post("http://localhost/wssii/controlador/wsprofesores.php?token=f78c775982d107c4915303a73aa65daf",data,headers)
      .then(function(response) {
        $scope.postDataResponse = response.data;
        alert("simonalamona");
      });
      };


$scope.postProfesores1= function(){
  var req = {
    method: 'POST',
    url: 'http://localhost:8080/PATMALUMNOS/rest/wsprofesores/insertarprofesores/1eee7a7bcef1d84cf5da68fbfd7f9826',
    headers: {
         'Content-Type': 'application/json'
    },
    data: {
    'apemat': vm.apemat,
                'apepat': vm.apepat,
                'email': vm.email,
                'fecNac': vm.fecNac,
                'genero': vm.genero,
                'idprofesor': vm.idprofesor,
                'nombreprofe': vm.nombreprofe,
                'telc': vm.telc}
  }
  
 $http(req).success(function(response) {$scope.postDataResponse = response.data;
 });
      };


});