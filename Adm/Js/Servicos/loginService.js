'use strict';

app.factory('loginService',function($http, $location, sessionService){
    return{
      login:function(data, scope){
          var $promise = $http.post("Php/login.php", data);
          $promise.then(function(msg){

              var uid = msg.data;
              if(uid){
                 sessionService.set('user',uid);
                 $location.path('/home');
              }

              else {
                  scope.logintext = 'Error information';
                  $location.path('/login');
              }
          });
      },

      logout:function(){
          sessionService.destroy('user');
          $location.path('/login');
      },
      islogged:function(){
         if(sessionService.get('user')) return true;
      }
    }
});
