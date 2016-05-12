<?php

$id_imagem = 1;
$con = mysqli_connect("localhost","root","","projetorenzo");
$sql = "SELECT* FROM ANIMAIS ORDER BY ID DESC LIMIT 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $id_imagem = $row['id']+1;
    }
} else {
    //echo "0 results";
  }


if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
)  && in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("../Imagens/Animais/" . $_FILES["file"]["name"])) {
//echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable

$temp = explode(".", $_FILES["file"]["name"]);
$newfilename = $id_imagem .$_POST['nomeAnimal'] . '.' . end($temp);
$targetPath = "../Imagens/Animais/".$newfilename; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
$q=mysqli_query($con,"insert into animais (caminhoImagem, Estado, Cidade, Endereco, Nome, Tipo, Descricao, Sexo) values('".$newfilename."','".$_POST['estado']."','".$_POST ['cidade']."','".$_POST['endereco']."','".$_POST['nomeAnimal']."','".$_POST['tipoAnimal']."','".$_POST['descricao']."','".$_POST['sexo']."')");
$con = mysqli_connect("localhost","root","","projetorenzo");
$sql = "SELECT* FROM ANIMAIS ORDER BY ID DESC LIMIT 1";
$result = $con->query($sql);
$col = 0; // number of the last column filled
//echo 'success';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row['id'];

}
}
}


}
}
}

?>
