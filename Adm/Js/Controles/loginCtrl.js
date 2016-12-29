'use strict';

app.controller('loginCtrl',function($scope, loginService){
  $scope.logintext = '';
  $scope.login = function(usuario){
    loginService.login(usuario, $scope);

  }
});
