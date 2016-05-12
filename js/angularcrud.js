var myApp = angular.module('app', ['ngFileUpload']);
myApp.controller('animalsCtrl',['$scope','Upload','$timeout','$http', function($scope, Upload,$timeout,$http) {
  var closeModal = function()
  {
    modalWrapper.className = "";

  };
  $scope.clearForm = function(){
  $scope.endereco = "";
  $scope.nomeAnimal = "";
  $scope.descricao = "";
  $scope.file = "";
  $scope.tipoAnimal = "";
  $scope.sexo = "";

}

$scope.createAnimal = function(file){
  file.upload = Upload.upload({
    url: 'php/insertAnimais.php',
    data: {endereco: $scope.endereco,nomeAnimal:$scope.nomeAnimal,descricao:$scope.descricao,tipoAnimal:$scope.tipoAnimal,sexo:$scope.sexo, estado:$scope.estado,cidade:$scope.cidade, file: file},
  });
  $("#wait").css("display", "block");
  file.upload.then(function (response) {
    $scope.getAll();

    $timeout(function () {
      file.result = response.data;
    });
  }, function (response) {
    //if (response.status > 0)
      //$scope.errorMsg = response.status + ': ' + response.data;
  }, function (evt) {

    // Math.min is to fix IE which reports 200% sometimes
    //file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
  });


closeModal();
setTimeout( "jQuery('#wait').hide();", 1000 );

}
$scope.getAll = function(){
  $http.get("php/lerAnimais.php").success(function(response){
      $scope.idAnimal = response.records;
  });
}
// delete product
$scope.atualizarAnimal = function(d){


a = document.getElementById("nomeAnimal"+d.id).innerHTML;
b = document.getElementById("descricao"+d.id).innerHTML;
$http.post('php/atualizarAnimal.php', {
    'id' : d.id,
    'nomeAnimal' : a,
    'descricao' : b

})
.success(function (data, status, headers, config){

    $scope.getAll();
});
}
$scope.deletarAnimal = function(id){

swal({   title: "Você tem certeza?",
       text: "Este animal será excluido permanentemente!",
       type: "warning",   showCancelButton: true,
       confirmButtonColor: "#DD6B55",
       confirmButtonText: "Sim!",
       cancelButtonText: "Cancelar",
       closeOnConfirm: false,
       closeOnCancel: false },
       function(isConfirm){
       if (isConfirm) {
        // if(confirm("Are you sure?")){
// post the id of product to be deleted
           $http.post('php/removerAnimais.php', {
               'id' : id
           }).success(function (data, status, headers, config){

               swal("Deletado!", "O Animal foi removido.", "success");
               $scope.getAll();
           });
        //}


            }
               else {
                      swal("Cancelado", "O animal não foi removido.", "error");   }
                     }
                   );
}
}]);
