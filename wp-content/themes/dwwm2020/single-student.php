<?php 
    get_header(); 
?>

<main id="main-content" class="student-post">
    <div class="container">
    <?php 
        if(have_posts()){
            while(have_posts()){
            the_post();
        echo wp_get_attachment_image(get_field('avatar'),'medium', "", ["class" => "student-post-img"]);?>
        <h1 class="student-post-title"><?php the_title() ?></h1>
        <div class="field">
            <div class="field-title"><?php echo get_field('film_field')?></div>
            <div class="field-content"><?php echo get_field('film_title')?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field('serie_field')?></div>
            <div class="field-content"><?php echo get_field('serie_title')?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field('video_game_field')?></div>
            <div class="field-content"><?php echo get_field('video_game_title')?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field('language_field')?></div>
            <div class="field-content"><?php echo get_field('language_title')?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field('book_field')?></div>
            <div class="field-content"><?php echo get_field('book_title')?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field('song_field')?></div>
            <div class="field-content"><?php echo get_field('song_title')?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field('description_field')?></div>
            <div class="field-content"><?php echo get_field('description')?></div>
        </div>
    <?php }
        } ?>
    </div>
</main>

<?php 
    get_footer(); 
?>