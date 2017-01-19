angular.module('myApp', ['ngRoute']);


//==== ROTEADOR DE PAGINAS ====================================

 angular.module('myApp').config(function($routeProvider){
     $routeProvider
     .when('/',{ templateUrl:'Views/Login.php'
   })
      .when('/myadv',{
        resolve:{
          "check": function($location, $rootScope){
            if(!$rootScope.loggedIn){
              $location.path('/');
            }
          }
        },
        templateUrl:'Views/myadv.php'
    })

       .otherwise({redirectTo:'/'
     });

 });



//==== CONTROLLER "userCtrl" ====================================


 angular.module('myApp').controller('userCtrl', function($scope, $http, $location, $rootScope) {

  $scope.nome = "Olá mundo";

//=== CARREGAR DADOS DO USUARIO ===============================

  var carregarUsuario = function(){
    $http.get("Php/UserTodos.php").success(function(data){
        $scope.usuarios = data;
    }).error(function(data, status){
      alert(data);
    });
  };

//=== CADASTRAR USUARIO ===============================


  $scope.adicionarUsuario = function(usuario){
    $http.post("Php/UserInsert.php", usuario).success(function(data){
      alert(data);
      $scope.mycod=data;
      $scope.usuarios.push(angular.copy(usuario));
      delete $scope.usuario;
        carregarUsuario();
    }).error(function(data, status){
      alert(data);
    });
  };



  //=== LOGAR COM O USUARIO ===============================

  $scope.logarUsuario = function(usuario){
    $http.post("Php/LoginUser.php", usuario).success(function(data){

      var validar = data;
      //$scope.validar = validar;
    //  $scope.celular = usuario.celular;

      if(validar = null){
        $rootScope.loggedIn = true;
        $location.path('/myadv');
      }else{
        alert("Erro ao logar");
      }
      $scope.usuarios.push(angular.copy(usuario));
      delete $scope.usuario;

    }).error(function(data, status){
      alert(data);
    });
  };




  //===========================================================
    carregarUsuario();
  });

//===========================================================



//-------------------------------------------------------------------------

  angular.module('myApp').controller('pessoaCtrl', function($scope, $http) {

   $scope.userid = 10;
   $scope.celular = "983173530";


});
