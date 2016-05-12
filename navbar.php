<body>
  <title>Adote hoje!</title>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="padding-top:23px;" href="#">Adote hoje!</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.html" style="padding-top:23px;">Home</a></li>
        <li><a href="#" style="padding-top:23px;">Contato</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <select class="form-control" style="width: 200px " id = "animalSelect">
                  <option data-image="Imagens/Icones/Paw-25.png">Todos</option>
                  <option data-image="Imagens/Icones/Dog-25.png">Cães</option>
                  <option  data-image="Imagens/Icones/Cat-25.png">Gatos </option>

          </select>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
        <a href="" style="margin-left: 20px;"><img src="Imagens/Icones/Settings-25.png"></a>

      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text" style="">Deseja logar ou criar uma conta?</p></li>
        <li class="dropdown">
          <a href="#" style="padding-top:23px;" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                Login via
                <div class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                                ou
                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Endereço de e-mail</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Senha</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha" required>
                                             <div class="help-block text-right"><a href="">Esqueceu a senha?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> Mantenha-me logado
                       </label>
                    </div>
                 </form>
              </div>
              <div class="bottom text-center">
                Novo aqui? <a href="#"><b>Junte-se a nós!</b></a>
              </div>
           </div>
        </li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--<script src="js/crud.js"></script> -->
