<?php

$nome = $_POST['nome'];
$depoimento = $_POST['depoimento'];
$imagem = $_POST['imagem'];
$pagina = $_POST['pagina'];
$link = mysqli_connect("localhost", "root", "", "educa");

$query = "INSERT INTO depoimento (nome, depoimento, imagem, pagina) VALUES ('$nome', '$depoimento', '$imagem', '$pagina')";
echo "Experiência compartilhada com sucesso!";
echo $imagem_banco;
mysqli_query($link, $query);
mysqli_close($link);

$uploaddir = 'components/img/';
$uploadfile = $uploaddir . basename($_FILES['imagem']['name']);

?>