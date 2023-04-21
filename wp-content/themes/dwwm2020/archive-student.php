<?php 
    get_header(); 
?>

<main id="main-content" class="students">
    <div class="container">
        <h1 class="section-title"><?php echo get_field('student_page_title', 'option');?></h1>
        <?php if(have_posts()){
            while(have_posts()){
                the_post(); 
                get_template_part('parts/student-loop');
            }
            the_posts_pagination([
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;'
            ]); 
        } else{?>  
            <p>Aucun contenu disponible</p>
        <?php } ?>  
    </div>
</main>

<?php
    get_footer(); 
?>