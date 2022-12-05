<?php 
function criptografarNome($nome){
    // $nome = "Lucas";
    // $nome2 = md5($nome);
    // criptografia md5 é irreversível por isso recomendável para senhas
    $nome2 = base64_encode($nome);
    //criptografia base64_encode é reversível
    echo "Nome Original: ".$nome."<br/>";
    echo "Nome Cripto.: ".$nome2."<br/>";
    echo "Descriptografando nome: ".base64_decode($nome2);
}
?>