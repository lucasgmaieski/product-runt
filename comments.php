<?php 
    if(post_password_required()){
        return;
    }

    if(have_comments()){
        foreach ($comments as $comment) {
            ?>
            <div class="comentario">
                <div class="commentario_foto">
                    <?php echo get_avatar($comment, 60); ?>
                </div>
                <div class="comentario_area">
                    <strong><?php comment_author(); ?> </strong> - <?php  comment_date(); ?> <br><br>
                    <?php comment_text(); ?>
                </div>
            </div>
            <?php
        }
        the_comments_pagination();
    }

    comment_form();
    // comment_form(array(
    //     'comment_field' => 'Comentário: <br/><textarea name"comment"></textarea> <br/>',
    //     'fields' => array(
    //         'author' => 'Nome: <input type="text" name="author" placeholder="Digite seu nome"/> <br/>',
    //         'email' => 'E-mail: <input type="email" name="email" placeholder="Digite seu e-mail"/> <br/>',
    //         'url' => 'Url: <input type="text" name="url" placeholder="Digite seu site"/>'
    //     ),
    //     'class_submit' => 'botao',
    //     'label_submit' => 'Envie seu comentário',
    //     'title_reply' => 'Deixe um comentário'
    // ));

?>