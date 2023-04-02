<?php
/**
 * The template for displaying all single posts
 *
 *
 * @package Puzzle
 */
get_header(); ?>


<div class="welc__pages single__proj" id="sectionhome">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/title_bg.jpg"/>
    <div class="welc__content">
        <h1><?php the_title(); ?></h1>
        <div class="breadcrumbs">
            <a class="breadcrumbs_item home" href="/">Home</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current"><a class="breadcrumbs_item home" href="/features">Services</a></span>
			<span class="breadcrumbs_delimiter"></span>
			<span class="breadcrumbs_item current"><?php the_title(); ?></span>
        </div>
    </div>
</div>




<div class="projects__extra">
	<div class="container">
        <img src="<?php the_post_thumbnail_url();?>" alt="">
        <li>
        <i class="far fa-calendar-alt icon-date"></i><?php echo get_the_date( get_option('date_format') ); ?>
        </li>
        <div class="contentt">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content();
        endwhile;
        else:
        endif; ?>
        </div>
	</div>
	
</div>






<div class="projects__section_single">
			<div class="container">
				<div class="title-intro">
					<h5>You May Also Like</h5>
				</div>
                
				<div class="in-post">
					<?php
					$args = array(
					'post_type' => 'projects',
					'posts_per_page' => '3',
					'orderby' => 'rand'
					);
					$loop = new WP_Query($args);
					while($loop->have_posts()):
					$loop->the_post();
					?>
						<div class="col-lg-4 col-md-4 col-sm-4 klas wow animate__animated scale-hover">
                            <div class="under"> 
                                <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <i class="fas fa-link"></i>
                                </a> 
                                <img src="<?php the_post_thumbnail_url();?>" alt=""><div class="layer"></div>

                            </div>
                        </div>
					
					<?php
					endwhile;
					wp_reset_postdata();
					?>
                    
				</div>
			</div>
		</div>




<?php get_footer(); ?>