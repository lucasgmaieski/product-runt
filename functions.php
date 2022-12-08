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

function pr_theme_styles(){
    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/style.css');
    // 3º parametro são as dependendicas para esse arquivo possa funcionar(coisas que o arquivo usa)
    // depois vem a versão
    // 5º parametro se for true o arquivo vai ser adicionada só la no final
    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0', true);
}


//Hooks
add_action('wp_enqueue_scripts', 'tt_theme_styles');
