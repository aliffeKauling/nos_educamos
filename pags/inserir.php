<?php

$nome = $_POST['nome'];
$depoimento = $_POST['depoimento'];
$imagem = $_POST['imagem'];
$pagina = $_POST['pagina'];
$link = mysqli_connect("localhost", "root", "", "educa");

$query = "INSERT INTO depoimento (nome, depoimento, imagem, pagina) VALUES ('$nome', '$depoimento', '$imagem', '$pagina')";
echo "Experiência compartilhada com sucesso!";
mysqli_query($link, $query);
mysqli_close($link);



//$uploaddir = 'components/img/';
//$uploadfile = $uploaddir . basename($_FILES['imagem']['name']);

//echo '<pre>';
//if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
   // echo "Arquivo válido e enviado com sucesso.\n";
//} else {
  //  echo "Possível ataque de upload de arquivo!\n";
//}

//echo 'Aqui está mais informações de debug:';
//print_r($_FILES);

//print "</pre>";

?>