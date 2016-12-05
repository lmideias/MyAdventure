angular.module('myApp', []);

 angular.module('myApp').controller('userCtrl', function($scope, $http) {

  $scope.nome = "Olá mundo";

  var carregarUsuario = function(){
    $http.get("Php/UserTodos.php").success(function(data){
        $scope.usuarios = data;
    }).error(function(data, status){
      alert(data);
    });
  };

  $scope.adicionarUsuario = function(usuario){
    $http.post("Php/UserInsert.php", usuario).success(function(data){
      alert(data);
      $scope.usuarios.push(angular.copy(usuario));
      delete $scope.usuario;
        carregarUsuario();
    }).error(function(data, status){
      alert(data);
    });
  };

  carregarUsuario();
});
