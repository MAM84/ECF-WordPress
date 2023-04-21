<?php 
    get_header(); 
?>

<main id="main-content" class="post">
    <div class="container container-narrow">
        <?php
            if(have_posts()){
                while(have_posts()){
                the_post();  	
        ?>
                <h1><?php the_title() ?></h1>
                <?php the_content() ?>
        <?php }
            } ?>
    </div>
</main>

<?php 
    get_footer(); 
?>