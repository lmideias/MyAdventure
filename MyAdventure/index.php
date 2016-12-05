<!DOCTYPE html>
<html ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <title>MyAdventure</title>
     <link href="Css/myadv-mobile.css" rel="stylesheet" type="text/css"/>
      <link href="Css/myadv-desktop.css" rel="stylesheet" type="text/css"/>
      <link href="../Inc/Libs/reset.css" rel="stylesheet" type="text/css"/>

      <script src="../Inc/Libs/angular-angular.js" type="text/javascript"></script>
      <script src="Js/a-user.js" type="text/javascript"></script>



  </head>
  <body>

    <div class="modal-a">
       <div class="modal-form" ng-controller="userCtrl">
             <input type="text" ng-model="usuario.celular" placeholder="Celular"><br><br>
             <input type="text" ng-model="usuario.senha" placeholder="Senha"><br><br>
             <button type="button"ng-click="adicionarUsuario(usuario)" ng-disabled="!usuario.celular || !usuario.senha" name="button">Cadastrar</button><br>

             <hr>
             <br><br>

             <table>
               <tr>
                 <th>ID</th>
                 <th>Celular</th>
                 <th>Senha</th>
                 <th>Ativo</th>
                 <th>Data Cadastro</th>
               </tr>
               <tr ng-repeat="usuario in usuarios">

                  <td>{{usuario.userid}}</td>
                 <td>{{usuario.celular}}</td>
                 <td>{{usuario.senha}}</td>
                  <td>{{usuario.ativo}}</td>
                   <td>{{usuario.datacad | date:dd/mm/yyyy}}</td>

               </tr>
             </table>



       </div>
    </div>


   <div class="barra-full">
      <div class="barra-full-center">
        <div class="bx-1">

        </div>
        <div class="bx-2">

        </div>
        <div class="bx-3">
          <h4>Sair</h4>
        </div>
     </div>
   </div>

    <div class="body-container">
      <div class="a-container" >
        <h1 class="">{{nome}}</h1>
      </div>
    </div>
  </body>
</html>
