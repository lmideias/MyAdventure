
    <div class="modal-a">
       <div class="modal-form" ng-controller="userCtrl">

         <br>
         <h3>Usuario</h3> <h3>{{id}}</h3>
         <hr>
         <br>
             <input type="text" class="form-control" ng-model="usuario.celular" placeholder="Celular"><br>
             <input type="text" class="form-control" ng-model="usuario.senha" placeholder="Senha"><br>
             <button class="btn btn-primary" type="button"ng-click="adicionarUsuario(usuario)" ng-disabled="!usuario.celular || !usuario.senha" name="button">Cadastrar</button><br>
             <button class="btn btn-primary" type="button"ng-click="logarUsuario(usuario)" ng-disabled="!usuario.celular || !usuario.senha" name="button">Logar</button><br>

             <hr>
             <br><br>

             <table class="table">
               <tr>
                 <th>ID</th>
                 <th>Celular</th>
                 <th>Senha</th>
                 <th>Ativo</th>
                 <th>DataCadastro</th>
               </tr>
               <tr ng-repeat="usuario in usuarios">

                  <td>{{usuario.userid}}</td>
                 <td>{{usuario.celular}}</td>
                 <td>{{usuario.senha}}</td>
                  <td>{{usuario.ativo}}</td>
                   <td>{{usuario.datacad | date:d-m-y}}</td>

               </tr>
             </table>

             <br>   <hr><br>
           </div>


        <div class="modal-form" ng-controller="pessoaCtrl">
              <br>
              <h3>Pessoa</h3>
              <hr>
              <br>

              <h3>Meu ADV: {{userid}}</h3> <h3>Meu Celular : {{celular}}</h3>
               <br>
               <hr>
               <br>

             <input type="text" class="form-control" ng-model="pessoa.nome" placeholder="Nome Completo"><br>
             <input type="text" class="form-control" ng-model="pessoa.email" placeholder="Apelido"><br>
             <input type="text" class="form-control" ng-model="pessoa.email" placeholder="Data Nascimento"><br>
             <input type="text" class="form-control" ng-model="pessoa.email" placeholder="Email"><br>
             <button class="btn btn-primary" type="button"ng-click="adicionarPessoa(pessoa)" ng-disabled="!pessoa.nome || !pessoa.email" name="button">Cadastrar</button><br>

             <hr>
             <br><br>

             <table>
               <tr>
                 <th>Nome</th>
                 <th>Email</th>

               </tr>
               <tr ng-repeat="pessoa in pessoas">

                 <td>{{pessoa.nome}}</td>
                 <td>{{pessoa.email}}</td>


               </tr>
             </table>

       </div>

         <div class="modal-form" >
           <h3>Endereço</h3>
           <hr>
<p>Endereço básico, para saber a distancia e o tempo de transporte ate os pontos de encontros das trilhas</p>
            <hr>
            <input type="text" class="form-control" placeholder="Bairro" ><br>
            <input type="text" class="form-control" placeholder="Cidade" ><br>
            <input type="text" class="form-control" placeholder="Estado" ><br>
            <button class="btn btn-primary" type="button" name="button">Salvar</button>
           <hr>
         </div>

         <div class="modal-form" >
           <h3>Experiencia</h3>
           <hr>
<p>cadastre o nome de cada uma trilha que fez para poder ter o seu nível de experiência em trilhas</p>
            <hr>
               <input class="form-control" type="text" placeholder="Nome da trilha" ><br>
               <button class="btn btn-primary" type="button" name="button">Salvar Trilha</button>
           <hr>
         </div>

         <div class="modal-form" >
           <h3>Identificação</h3>
           <hr>
<p>Estes dados seram usados para preencher o cadastro de seguro das empresas de viagens, em caso de participação</p>
            <hr>
            <input class="form-control" type="text" placeholder="Número" ><br>
            <input class="form-control" type="text" placeholder="Tipo" ><br>
            <input class="form-control" type="text" placeholder="Estado" ><br>
            <input class="form-control" type="text" placeholder="Orgão expedidor" ><br>
            <button class="btn btn-primary" type="button" name="button">Salvar</button>
           <hr>
         </div>

         <div class="modal-form" >
           <h3>Contatos</h3>
           <hr>
<p>Estes dados seram usados para preencher o cadastro de seguro das empresas de viagens, em caso de participação</p>
            <hr>
            <input class="form-control" type="text" placeholder="Nome" ><br>
            <input class="form-control" type="text" placeholder="Telefone" ><br>
            <input class="form-control" type="text" placeholder="Descrição" ><br>
            <button class="btn btn-primary" type="button" name="button">Salvar</button>
           <hr>
         </div>

         <div class="modal-form" >
           <h3>Saúde</h3>
           <hr>
<p>Estes dados seram usados para preencher o cadastro de seguro das empresas de viagens, em caso de participação</p>
            <hr>
            <div class="checkbox">
   <label>
     <input type="checkbox"> Check me out
   </label>
   <br>
   <label>
     <input type="checkbox"> Check me out
   </label>
   <br>
   <label>
     <input type="checkbox"> Check me out
   </label>
   <br>
   <label>
     <input type="checkbox"> Check me out
   </label>

 </div>
            <input type="text" placeholder="Número" ><br><br>
            <input type="text" placeholder="Tipo" ><br><br>
            <input type="text" placeholder="Estado" ><br><br>
              <input type="text" placeholder="Orgão expedidor" ><br><br>
            <button type="button" name="button">Salvar</button>
           <hr>
         </div>

    </div>
