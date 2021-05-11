<?php
/*
*Template Name: Projekti page template
*/
?>

<?php get_header() ?>

<!-- header -->
 <header class="headers d-flex justify-content-center align-items-center">
     <h1><?php the_title(); ?></h1>
 </header>
 
 <!--blog -->
 <section class="blog py-5">
    <div class="container">
        <div class="row">
           
           <?php $query = new WP_Query(array('post_type' => 'projects '));
            if($query->have_posts()) : ?>
            <?php while($query->have_posts()) : $query->the_post(); ?>
           
              
            <div class="col-md-8">
                <a href="<?php the_permalink(); ?>">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </a>
                <h3 class="py-3"> <?php the_title();?> </h3>
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>" class="btn " >
                   <?php _e('Ceo tekst'); ?>
                </a>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
            <?php endwhile; else : ?>
                <?php _e('Nema unetih projekata'); ?>
            <?php endif; ?>
         
        </div>
    </div>
     
 </section>
 
 <?php get_footer() ?>