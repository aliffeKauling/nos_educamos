<?php

$uploaddir = 'components/img/';
$uploadfile = $uploaddir . basename($_FILES['imagem']['name']);

//echo '<pre>';
if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)) {
   // echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

//echo 'Aqui está mais informações de debug:';
//print_r($_FILES);

//print "</pre>";

?>