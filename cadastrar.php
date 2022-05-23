<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if (empty ($nome) || empty ($email) || empty($telefone)) {
    echo "Preecha todos os campos";
}else{
    echo "Obrigado por enviar seus dados! <br/>" .
         "Seus nome é:" . $nome; 
}
?>