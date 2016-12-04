var app = angular.module('myApp', []);

app.controller('profesoresCtrl', function($scope, $http) {
  var vm=$scope;
   vm.dia1="";
   vm.dia2="";
   vm.dia3="";
   vm.dia4="";
   vm.dia5="";
   vm.hora_final1="";
   vm.hora_final2="";          
   vm.hora_final3="";
   vm.hora_final4="";
   vm.hora_final5="";
   vm.hora_inicial1="";
   vm.hora_inicial2="";
   vm.hora_inicial3="";
   vm.hora_inicial4="";
   vm.hora_inicial5="";
   vm.id_grupo="";
   vm.id_materia="";
   vm.id_profesor="";
   vm.salon="";
  vm.token="";
 

$scope.myWelcome ="holis"; 


$scope.getHorario= function(){
  $http.get("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/listaprofesores/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  alert(":3");
  });
};
$scope.deleteHorario= function(){
  $http.delete("http://localhost:8080/PATMALUMNOS/rest/wsprofesores/borrarprofesores/12345617/"+token)
  .then(function(response) {
  $scope.profesores = response.data.profesores;
  });
};

$scope.putHorario= function(){
      var data = {
            dia1: vm.dia1,
            dia2: vm.dia2,
            dia3: vm.dia3,
            dia4: vm.dia4,
            dia5: vm.dia5,
            hora_final1: vm.hora_final1,
            hora_final2: vm.hora_final2,          
            hora_final3: vm.hora_final3,
            hora_final4: vm.hora_final4,
            hora_final5: vm.hora_final5.
            hora_inicial1: vm.hora_inicial1,
            hora_inicial2: vm.hora_inicial2,
            hora_inicial3: vm.hora_inicial3,
            hora_inicial4: vm.hora_inicial4,
            hora_inicial5: vm.hora_inicial5,
            id_grupo: vm.id_grupo,
            id_materia: vm.id_materia,
            id_profesor: vm.id_profesor,
            salon: vm.salon
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

    $scope.postHorario= function(){
           var data = {
            dia1: vm.dia1,
            dia2: vm.dia2,
            dia3: vm.dia3,
            dia4: vm.dia4,
            dia5: vm.dia5,
            hora_final1: vm.hora_final1,
            hora_final2: vm.hora_final2,          
            hora_final3: vm.hora_final3,
            hora_final4: vm.hora_final4,
            hora_final5: vm.hora_final5.
            hora_inicial1: vm.hora_inicial1,
            hora_inicial2: vm.hora_inicial2,
            hora_inicial3: vm.hora_inicial3,
            hora_inicial4: vm.hora_inicial4,
            hora_inicial5: vm.hora_inicial5,
            id_grupo: vm.id_grupo,
            id_materia: vm.id_materia,
            id_profesor: vm.id_profesor,
            salon: vm.salon
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