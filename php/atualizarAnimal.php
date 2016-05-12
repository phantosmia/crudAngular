<?php
$con = mysqli_connect("localhost","root","","projetorenzo");
$data = json_decode(file_get_contents("php://input"));
$sql = "UPDATE  ANIMAIS SET Nome='" . $data->nomeAnimal ."', Descricao='". $data->descricao. "' WHERE id=".$data->id;

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo $data->nomeAnimal;
    echo $data->descricao;
} else {
    echo "Error updating record: " . $con->error;
}
?>
