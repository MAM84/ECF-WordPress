<?php 
    get_header(); 
?>

<main id="main-content">
    <?php 
        $photo = get_field('front_page_picture', 'options'); 
        $url_photo = wp_get_attachment_image_src($photo, $size = 'full'); ?>
    <section class="home-hero inverted" style="background-image: url('<?php echo $url_photo[0];?>')">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"><?php echo get_field('front_page_title', 'option');?></h1>
                <a href="<?php echo get_field('link_student_page');?>" class="hero-link"><?php echo get_field('title_link_student_page');?></a>
            </div>
        </div>
    </section>
    <section class="last-news">
        <div class="container">
            <h2 class="section-title"><?php echo get_field('actuality_sub_title', 'option');?></h2>
            <?php
                $option = array(
                    'post_type'     => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' =>'ASC',
                );
                $requete = new WP_Query($option);
                if ($requete->have_posts()){
                    while ($requete->have_posts()){
                        $requete->the_post(); 
                        get_template_part('parts/actuality-loop');
                    }
                }
                wp_reset_postdata();
            ?>         
        </div>
    </section>
    <section class="students inverted">
        <div class="container">
            <h2 class="section-title"><?php echo get_field('student_sub_title', 'option');?></h2>
            <?php
                $option = array(
                    'post_type'     => 'student',
                    'posts_per_page' => 4,
                    'orderby' => 'rand',
                );
                $requete = new WP_Query($option);
                if ($requete->have_posts()){
                    while ($requete->have_posts()){
                        $requete->the_post(); 
                        get_template_part('parts/student-loop');
                    }
                }
                wp_reset_postdata();
            ?>    
        </div>
    </section>
    <section class="modules">
        <div class="container">
            <h2 class="section-title"><?php echo get_field('formation_sub_title', 'option');?></h2>
            <?php
                $option = array(
                    'post_type'     => 'formation',
                    'posts_per_page' => 2,
                    'orderby' => 'rand',
                );
                $requete = new WP_Query($option);
                if ($requete->have_posts()){
                    while ($requete->have_posts()){
                        $requete->the_post(); 
                        get_template_part('parts/formation-loop');
                    }
                }
                wp_reset_postdata();
            ?> 
        </div>
    </section>
</main>

<?php 
    get_footer(); 
?>