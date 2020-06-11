<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>
            
    <div class="content">
    
        <div class="inner-content grid-x grid-margin-x grid-padding-x">
    
            <main class="main small-12 medium-12 large-12 cell" role="main">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type'      => 'portfolio',
                );
                $loop = new WP_Query($args);

                $i = 1;
                
                echo '<div class="grid-container">';
                echo '<div class="grid-x grid-margin-x">';

                while ($loop->have_posts()) : $loop->the_post();
                ?>
                
                <?php 
                if($i % 4 == 0) { ?> 
                    <div class="cell small-12 full-left">
                        <?php the_title( '<h3>', '</h3>' ); ?>
                        <p>Web design, Huisstijl etc</p>
                    </div>

                <?php } elseif($i % 4 == 3) { ?> 
                    <div class="cell small-12 medium-6 right">
                        <?php the_title( '<h3>', '</h3>' ); ?>
                        <p>Web design, Huisstijl etc</p>
                    </div>

                <?php } elseif($i % 4 == 2) { ?>
                    <div class="cell small-12 medium-6 left">
                        <?php the_title( '<h3>', '</h3>' ); ?>
                        <p>Web design, Huisstijl etc</p>
                    </div>
                
                <?php } elseif($i % 4 == 1) { ?>
                    <div class="cell small-12 full-right">
                        <?php the_title( '<h3>', '</h3>' ); ?>
                        <p>Web design, Huisstijl etc</p>
                    </div>
                        
                <?php } $i++;  endwhile;
                    echo '</div>';
                    echo '</div>';
                    ?>

                <?php wp_reset_query(); ?>


                    <?php get_template_part( 'parts/loop', 'page' ); ?>
                    
                <?php endwhile; endif; ?>                           

            </main> <!-- end #main -->
            
        </div> <!-- end #inner-content -->
    
    </div> <!-- end #content -->

<?php get_footer(); ?>

