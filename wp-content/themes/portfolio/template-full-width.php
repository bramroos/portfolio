<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>
            
    <div class="content">
    
            <main class="main" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="grid-x">
                    <div class="cell large-10 mb-l">
                        <h1 class="home-intro">digitale oplossingen voor startups & bfedrijven</h1>
                    </div>
                </div>


                
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type'      => 'portfolio',
                );
                $loop = new WP_Query($args);

                $i = 1;
                
                echo '<div class="grid-container">';
                echo '<div class="grid-x grid-margin-x portfolio">';

                while ($loop->have_posts()) : $loop->the_post();

                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                ?>
                
                <!-- Full left -->
                <?php if($i % 4 == 0) { ?> 
                    <div class="cell small-12 medium-5 mb-l">
                        <a class="card" data-tilt data-tilt-perspective="5000">
                            <div class="aspect-ratio-box tall">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="card-inner pt-s pb-s">
                                <div class="content">
                                    <p><?php the_field('client'); ?></p>
                                    <?php the_title( '<h3>', '</h3>' ); ?>
                                    <p><small>Web design, Huisstijl etc</small></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Right -->
                <?php } elseif($i % 4 == 3) { ?> 
                    <div class="cell small-12 medium-5 mb-l">
                    <a class="card" data-tilt data-tilt-perspective="5000">
                            <div class="aspect-ratio-box square">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="card-inner pt-s pb-s">
                            <div class="content">
                                    <p><?php the_field('client'); ?></p>
                                    <?php the_title( '<h3>', '</h3>' ); ?>
                                    <p><small>Web design, Huisstijl etc</small></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Left -->
                <?php } elseif($i % 4 == 2) { ?>
                    <div class="cell small-12 medium-5 mb-l">
                    <a class="card" data-tilt data-tilt-perspective="5000">
                            <div class="aspect-ratio-box square">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="card-inner pt-s pb-s">
                            <div class="content">
                                    <p><?php the_field('client'); ?></p>
                                    <?php the_title( '<h3>', '</h3>' ); ?>
                                    <p><small>Web design, Huisstijl etc</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- data-tilt-scale="2" -->
                    <!-- Full right  -->
                <?php } elseif($i % 4 == 1) { ?>
                    <div class="cell small-12 medium-5 large-offset-2 mb-l">
                        <a class="card" data-tilt data-tilt-perspective="5000">
                            <div class="aspect-ratio-box tall">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="card-inner pt-s pb-s">
                                <div class="content">
                                    <p><?php the_field('client'); ?></p>
                                    <?php the_title( '<h3>', '</h3>' ); ?>
                                    <p><small>Web design, Huisstijl etc</small></p>
                                </div>
                            </div>
                        </a>
                    </div>
                        
                <?php } $i++;  endwhile;
                    echo '</div>';
                    echo '</div>';

                    ?>

                <?php wp_reset_query(); ?>


                    <?php get_template_part( 'parts/loop', 'page' ); ?>
                    
                <?php endwhile; endif; ?>                           

            </main> <!-- end #main -->
            
    
    </div> <!-- end #content -->

<?php get_footer(); ?>

