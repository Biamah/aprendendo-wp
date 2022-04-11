<?php
$estiloPagina = '/blocks/_about.css';
require_once 'header.php';

if(have_posts()):
    ?>
    <main class="b-about">
        <?php
        while(have_posts()): the_post();
            the_post_thumbnail('post-thumbnail', array('class' => 'c-about__image')); 
            echo '<div class="c-about__conteudo container">';
            the_title('<h2 class="c-about__title">', '</h2>');
            the_content();
            echo '</div>';
        endwhile;
        ?>
    </main>
<?php  
endif;

require_once 'footer.php';
?>