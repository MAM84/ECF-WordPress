<?php 
    get_header(); 
?>

<main id="main-content" class="post">
    <div class="container container-narrow">
        <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                echo wp_get_attachment_image(get_field('photo'),'full', "", ["class" => "featured-img"]);?>
                <h1><?php the_title() ?></h1>
                <p class="post-date"><?php echo get_field('date') ?></p>
                <p><?php the_content() ?></p>
    <?php }
        } ?>
    </div>
</main>

<?php 
    get_footer(); 
?>