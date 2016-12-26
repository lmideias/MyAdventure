<div class="box-login-base">

    <div class="login-info">
        <h4>Usuario</h4>
        <button class="btn btn-primary" type="button"  name="button">Cadastrar</button>
    </div>

    <div class="login-form">
        <h4>{{logintext}}</h4>
      <form name="form1">
        <input type="text" class="form-control" required ng-model="usuario.celular" placeholder="Celular"><br><br>
        <input type="text" class="form-control" required ng-model="usuario.senha" placeholder="Senha"><br><br>

        <button class="btn btn-primary" type="button"ng-click="login(usuario)" ng-disabled="form1.$invalid" name="button">Logar</button><br>

      </form>

    </div>

</div>
