<?php 
    get_header(); 
?>

<main id="main-content" class="modules">
    <div class="container container-narrow">
        <h1 class="modules-title"><?php echo get_field('formation_page_title', 'option');?></h1>
        <div class="module-desc">
            <p><?php echo get_field('formation_page_content', 'option');?></p>
        </div>
    </div>
    <div class="container">
        <?php if(have_posts()){
            while(have_posts()){
                the_post();
                get_template_part('parts/formation-loop');    
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