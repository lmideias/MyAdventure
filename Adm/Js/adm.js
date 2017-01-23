var app = angular.module("myApp", ['ngRoute']);

//-------------------------------------------------

app.config(['$routeProvider', function($routeProvider){
  $routeProvider.when('/',
  { templateUrl: 'Views/home.php',
  controller:'aCtrl' }
);
  $routeProvider.when('/cTrilha',
  {  templateUrl: 'Views/ctrilha.php',
  controller:'aCtrl' }
);
  $routeProvider.otherwise({redirectTo: '/'});
}]);

//-------------------------------------------------
app.controller('aCtrl', function($scope) {
  $scope.msntexto = "Olá mundo";
});
//-------------------------------------------------
