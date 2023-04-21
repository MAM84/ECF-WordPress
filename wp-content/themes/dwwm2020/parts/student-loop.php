<article class="student">
    <?php echo wp_get_attachment_image(get_field('avatar'),'medium', "", ["class" => "student-img"]);?>
    <h2 class="student-name"><?php the_title() ?></h2>
    <a href="<?php the_permalink() ?>" class="student-link">En savoir plus</a>
</article>