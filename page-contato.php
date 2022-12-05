<?php 
    //Template Name: Contato
?>

<?php get_header(); ?>
<?php ?>
</div>
</header>

    <section class="container-lg contato">
        <div class="row">
        <?php 
            // com require se der um erro ele para todo o processamento da página
            require "receiver.php";
            //com include se der erro ele só mostra uma mensagem de aviso
            include "receiver.php";
        ?>
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
                <form method="POST">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="email" placeholder="E-mail">
                    <input type="text" name="telefone" placeholder="Telefone">
                    <select name="" id="">
                        <option >Geral</option>
                        <option >Suporte</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit" value="Enviar">
                </form>
                <?php criptografarNome($_POST['nome']) ?>
            </div>

            
        </div>
    </section>

<?php get_footer();?>