<article class="card">
    <?php echo wp_get_attachment_image(get_field('picture'),'medium', "", ["class" => "card-img"]);?>
    <div class="card-content">
        <h2 class="card-title"><?php the_title() ?></h2>
        <p class="card-excerpt"><?php the_excerpt() ?></p>
    </div>
    <a href="<?php the_permalink() ?>" class="card-link">Lire la suite <img loading="lazy"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-arrow-right.svg" alt="" aria-hidden="true"></a>
</article>