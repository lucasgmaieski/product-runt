<?php  
    // Template Name: Helper
?>

<?php get_header(); ?>
</div>
</header>
<div class="fun-wp container">
<?php 
    //search
    get_search_form(); 

    if(have_posts()){
        while(have_posts()) {
            the_post();
?>          
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>->retorna o título da página atual</span></h2>
            <p><?php the_time('F jS, Y'); ?>  <span>->retorna a data </span></p>
            <p><?php echo get_theme_root_uri(); ?> <span>->Retorna o diretório do tema sem incluir o tema </span></p>
            <p><?php echo get_bloginfo('stylesheet_directory'); ?> <span>Retorna Diretório completo </span></p>
            <p><?php bloginfo(); ?> <span>Exibe informações sobre o site fornecidas no painel adminstrativo</span></p>
            <p> wp_head(); e wp_footer  ->Retorna o conteúdo do wordpress referente ao Head e ao Footer</p>
            <p>get_header(); get_footer(); ->Utilizamos para puxar o topo e o rodapé</p>
            <p><?php global $post; 
                     $post_slug = $post->post_name;
                     echo $post_slug; ?>  <span>->Retorna o slug da página</span></p>
            <p>Para usar os subcampos
                <span> while(have_row('nome_tipo_contato'))  <br> { the_row(); <br> echo get_sub_field('name');</span>
            </p>
            <p>Para usar os campos  the_field('nome');</p>
            <h3>shortcode do meu plugin</h3>
            <?php the_content(); ?>
            <p>array_keys($array); -> cria um array só com as chaves</p>
            <p>array_values($array); -> cria um array só com os valores</p>
            <p>array_pop($array); -> remove o ultimo elemento do array</p>
            <p>array_shift($array); -> remove o primeiro elemento do array</p>
            <p>array_asort($array); -> ordena o array mas mantem a associação entre indices e valores </p>
            <p>array_arsort($array); -> ordena o array decrescente mas mantem a associação entre indices e valores </p>
            <p>.count($array); -> conta os elementos do array</p>
            <p>inarray("Lucas", $array); -> verifica se existe Lucas no array </p>
    
<?php   }
    }

?>
</div>
<?php get_footer(); ?>