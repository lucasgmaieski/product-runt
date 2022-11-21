<?php 
    //Template Name: Contato
?>
<?php get_header(); ?>
</div>
</header>

    <section class="container-lg contato">
        <div class="row">
            <div class="col-md-6 contato-info">
                <h2>A mais importante,<br>primeira conversa. </h2>
                <br>
                <?php 
                    while(have_rows('nome_tipo_contato')){
                       the_row();
                       if(get_sub_field('categoria') == 'Telefone'){
                ?>
                <p>
                    <strong><i class="fa-sharp fa-solid fa-phone"></i><?php echo get_sub_field('categoria'); ?>:</strong> <?php echo get_sub_field('valor'); ?>
                </p>
                <?php } else { ?>
                <p>
                    <strong><i class="fa-solid fa-envelope"></i><?php echo get_sub_field('categoria'); ?>:</strong> <?php echo get_sub_field('valor'); ?>
                </p>

                <?php  }} ?>
                <div class="mapa-container" id="mapa">
                    <div id="mapa"></div>
                </div>
            </div>
            <div class="col-md-6 contato-form">
                <form action="">
                    <input type="text" placeholder="Nome">
                    <input type="text" placeholder="E-mail">
                    <input type="text" placeholder="Telefone">
                    <select name="" id="">
                        <option >Geral</option>
                        <option >Suporte</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit" value="Enviar">
                </form>
            </div>

            
        </div>
    </section>

<?php get_footer();?>