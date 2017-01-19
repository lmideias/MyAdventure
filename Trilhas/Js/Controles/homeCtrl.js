'use strict';

app.controller('homeCtrl', ['$scope','loginService', function($scope, loginService){
  $scope.hometext = 'pagina home';
  $scope.logout=function(){
     loginService.logout();
  }

}])
