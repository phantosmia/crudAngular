<?php
$con = mysqli_connect("localhost","root","","projetorenzo");
$data = json_decode(file_get_contents("php://input"));
$sql = "DELETE FROM Animais WHERE id=".$data->id;

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

?>
