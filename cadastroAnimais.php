    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <head>
      <script src="js/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

      <script src="js/modal-code.js"></script>
      <script src="js/index.js"></script>
      <script src="js/jsmin2.0.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.dd.min.js"></script>
      <script src="js/angular.min.js"></script>
      <script src="js/ng-file-upload-shim.min.js"></script>
      <script src="js/ng-file-upload.min.js"></script>
      <script src="js/loadFile.js"></script>
      <script src="js/modalListener.js"></script>
      <script src="js/angularcrud.js"></script>

    </head>
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <?php include("navbar.php");?>
      <link rel='stylesheet prefetch' href='css/bootstrap2.3.1.css'>
      <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/editarDiv.css" />
        <link rel="stylesheet" type="text/css" href="css/fancy.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="css/dd.css" />
      <!-- fim da navbar-->
      <!-- comeco do form -->
      <div class="container-fluid1">
      <div class="row-fluid">
      <div class="span12">
        <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#menu1">Animais Cadastrados</a></li>
      </ul>
      <br>
    <div ng-app="app" ng-controller="animalsCtrl">
    <div id="modal_wrapper">
    <div id="modal_window" >
    <div style="text-align: right;"><a id="modal_close" href="#">close <b>X</b></a></div>
      <form  id="modal_feedback" name="modal_feedback" novalidate ng-submit="modal_feedback.$valid && modal_feedback.submit()" method="post"  action="insertAnimais.php" enctype="multipart/form-data" width ="80px" height="100px">
        <fieldset class="form-group">
          <label for="exampleInputFile">Imagem do Animal</label>
          <input type="file" ngf-select ng-model="file" class="form-control-file" onchange="loadFile(event)" name="file" id="file">
          <div id ="outputdiv"><img id = "output" width="360px" height="240px"/> </div>
        </fieldset>
      <fieldset class="form-group">
          <label for="exampleSelect1">Estado</label>
          <select class="form-control" ng-model="estado" name="estado" id="estado" required="true">
          </select>
          <span id="noStateSupplied" ng-show="(modal_feedback.estado.$touched && modal_feedback.estado.$invalid) || (submitted && modal_feedback.estado.$error.required)"> <font color='red'> * Você precisa informar o estado que o animal se encontra!</font></label>
        </fieldset>
        <fieldset class="form-group">
          <label for="exampleSelect1">Cidade</label>
          <select class="form-control"  ng-model="cidade" name="cidade" id="cidade" required="true">
          </select>
          <span id="noCitySupplied" ng-show="modal_feedback.cidade.$touched && modal_feedback.cidade.$invalid"> <font color='red'> * Você precisa informar a cidade que o animal se encontra!</font></label>
        </fieldset>
        <fieldset class="form-group">
          <label>Endereço</label>
          <input type="" class="form-control"ng-model="endereco" id="endereco" name="endereco" placeholder="Endereço" required="true">
          <span id="noAddressSupplied" ng-show="modal_feedback.endereco.$touched && modal_feedback.endereco.$invalid"> <font color='red'> * Você precisa fornecer um endereço!</font></label>
        </fieldset>
        <fieldset class="form-group">
          <label >Se o animal possuir um nome, digite-o no campo abaixo</label>
          <input type="" class="form-control" ng-model="nomeAnimal" id="nomeAnimal" name="nomeAnimal" placeholder="Sem Nome">
        </fieldset>
        <fieldset class="form-group">
          <label for="exampleSelect1">O animal é um</label>
          <select class="form-control" ng-model="tipoAnimal" name="tipoAnimal" id="animalSelectCadastro">
            <option value="Cão" data-image="Imagens/Icones/Dog-25.png">Cão</option>
            <option  value="Gato" data-image="Imagens/Icones/Cat-25.png">Gato </option>
          </select>
        </fieldset>
        <fieldset class="form-group">
          <label for="exampleTextarea">Descreva o animal:</label>
          <textarea class="form-control" ng-model="descricao" name="descricao" id="descricao" rows="3" required="true"></textarea>
          <span id="noDescriptionSupplied" ng-show="modal_feedback.descricao.$touched && modal_feedback.descricao.$invalid"> <font color='red'> Você precisa fornecer uma descrição sobre o animal!</font> </label>
        </fieldset>
        <div class="radio" ng-bind-html="sexo">
          <label>
            <input type="radio" id="optionsRadios1" name="sexo" value="Fêmea" checked>
            Fêmea <img src="Imagens/Icones/Femea-25.png">
          </label>
        </div>
        <div class="radio" ng-bind-html="sexo">
          <label>
            <input type="radio" id="optionsRadios2" name="sexo" value="Macho">
            Macho <img src="Imagens/Icones/Macho-25.png">
          </label>
        </div>
        <button type="button" ng-click="createAnimal(file)"  ng-disabled="modal_feedback.$invalid" name="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
    </div>

    <div id="menu1">
        <button type="button"  id="modal_open" class="btn btn-success btn-lg">Cadastrar novo animal</button> <!-- id="modal_open"-->
        <div class="container-fluid1">

    <div class="row-fluid">
    <div class="span12">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div id="carousel" ng-init="getAll()"  class="item active">
                      <li  ng-repeat="d in idAnimal" class="span3">
                        <div class="thumbnail">
                        <a href="#"><img width="360" height="240"src="Imagens/Animais/{{d.caminhoImagem}}"   alt=""></a>
                        <div class="caption" width="360" height="240">
                          <div  id="name" class="resultContainer" style="width: 100%; overflow: hidden;"> <div class="textBoxContainer"  id="nomeAnimal{{d.id}}"style ="float: left; width:200px;" type="text" value = "text"name = "nomeAnimal{{d.id}}" ng-model="nomeAnimal1" contentEditable="true" >  {{d.nomeAnimal}} </div><div class="viewThisResult" style="marginLeft:20px;"contentEditable="false"><img data-ng-click="atualizarAnimal(d)" style="cursor: pointer;" src="Imagens/Icones/edit-12.png" style="
    margin: 5px;"></div></div>
                      <div  id="description2" class="resultContainer" style="width: 100%; overflow: hidden;"> <div  class="textBoxContainer" id="descricao{{d.id}}"  style ="float: left; width:200px;" type="text" value ="text"name="descricao{{d.id}}"  ng-model ="descricao1" contenteditable="true">     {{d.descricao}} </div><div class="viewThisResult" style="marginLeft:20px;"contentEditable="false"><img data-ng-click="atualizarAnimal(d)" style="cursor: pointer;"src="Imagens/Icones/edit-12.png" style="
    margin: 5px;"></div></div>
          <button type="submit" name="remover" ng-click="deletarAnimal(d.id)" class="btn btn-danger btn-mini" >&raquo; REMOVER</a>
                      </li>
                      </div>
                  </div>
                  <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"><img src='Imagens/Icones/loadingcat.gif' width="64" height="64" /><br>Carregando..</div>
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
      <script type="text/javascript" src="js/cidades-estados.js"></script>
      <script src="js/modal-code.js"></script>
      <script type="text/javascript">
      window.onload = function() {

        cidadeEstado = new dgCidadesEstados({
          estado: document.getElementById('estado'),
          cidade: document.getElementById('cidade'),
           estadoVal: '<%=Request("estado") %>',
           cidadeVal: '<%=Request("cidade") %>'
        });

      }
      </script>
      <script language="javascript">
      $(document).ready(function(e) {
      try {
      $('#animalSelect').msDropDown();
      } catch(e) {
      alert(e.message);
      }
      try {
      $('#animalSelectCadastro').msDropDown();
      } catch(e) {
      alert(e.message);
      }
      });
      </script>
      <style type="text/css">

      #modal_wrapper.overlay:before {
        content: " ";
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 100;
        top: 0;
        left: 0;
        background: #000;
        background: rgba(0,0,0,0.7);
      }

      #modal_window {
        display: none;
        z-index: 200;
        position: absolute;
        left: 50%;
        top: 50%;
        width: 360px;
        overflow: auto;
        padding: 10px 20px;
        background: #fff;
        border: 5px solid #999;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
      }

      #modal_wrapper.overlay #modal_window {
        display: block;
      }

      </style>
      <script>
    $(document).ready(function(){
        $(document).ajaxStart(function(){
            $("#wait").css("display", "block");
        });
        $(document).ajaxComplete(function(){
            setTimeout( "jQuery('#wait').hide();", 1000 );
        });

    });
    $('#name').on('keydown', function(e) {
      if (e.which == 13) {
        //Prevent insertion of a return
        //You could do other things here, for example
        //focus on the next field
        return false;
      }
    });
    </script>
      <!-- fim do form -->
