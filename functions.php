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
add_action('wp_enqueue_scripts', 'pr_theme_styles');

// Menu dinamico
function MenuPrincipal() {
    $out = '';
    $menuitems = wp_get_nav_menu_items(2);
    $count = 0;

    if($menuitems):
        $out .= '<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0" >';
            foreach ($menuitems as $item) :
                $link = $item->url;
                $title = $item->title;

                if (!$item->menu_item_parent) :
                    $parent_id = $item->ID;
                    // $out .= '<li><a href="'. $link .'" title="'. $title .'">'. $title .'</a></li>';
                    $out .= '<li class="nav-item"><a class="nav-link"  href="'. $link .'" title="'. $title .'">'. $title .'</a></li>';
        
                endif;
                   
                $count++;
            endforeach;
        $out .= '</ul>';
    endif;

    return $out;
}