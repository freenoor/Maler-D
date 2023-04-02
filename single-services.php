<?php
/**
 * The template for displaying all single posts
 *
 *
 * @package Puzzle
 */
get_header(); ?>


<div class="welc__pages" id="sectionhome">
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

<div class="services__extra">
	<div class="container">
		<?php the_excerpt(); ?>
	</div>
	<img src="<?php the_post_thumbnail_url();?>" alt="">
</div>



<?php get_footer(); ?>