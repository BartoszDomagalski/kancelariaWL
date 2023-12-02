<?php
/**
 * Template Name: Blog
 */
 
 get_header(); ?>

<section id="blog-baner">
  <div class="container-fluid">
    <div class="row">
      <div class="col page-header-col">
        <h2 class="page-header"><strong>Blog</strong></h2>
        <hr>
      </div>
    </div>
  </div>
</section>


<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'blog',
    'posts_per_page' => 20,
);
$arr_posts = new WP_Query( $args );
 
if ($arr_posts->have_posts() ): 
    ?>

    <section id="blog">
        <div class="container-fluid">
            <div class="row blog-row">

    <?php 
    while ($arr_posts->have_posts() ):
        $arr_posts->the_post();
        
        ?>
            <div class="col-12 col-md-6 col-lg-4 blog-col">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="blog-content-box">
                <div class="kategoria-wpisu">
                    <?php 
                        $categories = get_the_category();

                        if ( ! empty( $categories ) ) {
                            echo esc_html( $categories[array_key_last($categories)]->name );
                            // echo esc_html( $categories[0]->name );
                        }
                    ?>
                </div>
            <?php
            if (has_post_thumbnail() ): ?>
            
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'blog-lista' ); ?>
            </a>
        
            <!-- <div class="blog-text-box"> -->
                <header class="entry-header blog-title-box">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </a>
                </header>
                <div class="entry-content">
                    <a href="<?php the_permalink(); ?>">Czytaj dalej...</a>
                </div>
                <div class="entry-date">
                    <?php echo get_the_date(); ?>
                </div>
            </div>
	        <?php
            // endif;
            else:
            ?>
            <div class="blog-text-box">
                <header class="entry-header blog-title-box">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </a>
                </header>
                <div class="entry-content">
                    <a href="<?php the_permalink(); ?>">Czytaj dalej...</a>
                </div>
                <div class="entry-date">
                    <?php echo get_the_date(); ?>
                </div>
            </div>
            <?php
            endif;
            ?>
            
            </article>
            </div>
        <?php
    endwhile;
    ?>
        </div>
        </div>
    </section>
    
    <?php
endif;

?>



<?php get_footer(); ?>