<?php
$con = mysqli_connect("localhost","root","","projetorenzo");
$sql = "SELECT* FROM ANIMAIS ORDER BY ID DESC";
$result = $con->query($sql);
define('COLS', 4); // number of columns
$col = 0; // number of the last column filled
$data = "";
if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
            if($data != ""){
              $data .=",";
            }
            $data .='{"id":"'.$row["id"].'",';
            $data .='"descricao":"'.$row["Descricao"].'",';
            $data .='"caminhoImagem":"'.$row["caminhoImagem"].'",';
            $data .='"nomeAnimal":"'.$row["Nome"].'"}';
    }
    $data='{"records":['.$data.']}';
    echo $data;
} else {
  //  echo "0 results";
  }
      ?>
