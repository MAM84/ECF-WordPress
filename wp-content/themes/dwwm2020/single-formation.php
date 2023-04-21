<?php 
    get_header(); 
?>

<main id="main-content" class="post">
    <?php 
        $photo = get_field('picture'); 
        $url_photo = wp_get_attachment_image_src($photo, $size = 'full');
        if(have_posts()){
            while(have_posts()){
            the_post(); ?>
    <section class="module-hero" style="background-image: url('<?php echo $url_photo[0];?>')">
        <div class="container">
            <h1><?php the_title() ?></h1>
        </div>
    </section>
    <section class="module-desc">
        <div class="container container-narrow">
            <p><?php the_content() ?></p>
        </div>
    </section>
    <?php }
    } ?>
</main>

<?php 
    get_footer(); 
?>