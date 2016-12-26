'use strict';

var app = angular.module('myApp',['ngRoute']);

app.config(['$routeProvider', function($routeProvider){
  $routeProvider.when('/login', { templateUrl: 'Views/loginform.php',  controller:'loginCtrl' });
  $routeProvider.when('/home', {  templateUrl: 'Views/home.php',  controller:'homeCtrl' });
  $routeProvider.otherwise({redirectTo: '/login'});
}]);

app.run(function($rootScope, $location, loginService){

  var routespermission = ['/home'];

  $rootScope.$on('$routeChangeStart', function(){
    if( routespermission.indexOf($location.path()) !=-1 && !loginService.islogged())
    {
        $location.path('/login');
    }
  });
});
