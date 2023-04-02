<?php
/**
 * Template Name: About Us
 */
get_header(); 
$mypost= $post;
?>

<div class="welc__pages" id="sectionhome">
    <img src="<?php echo the_post_thumbnail_url();?>" alt="">
    <div class="welc__content">
        <h1>About Us</h1>
        <div class="breadcrumbs">
            <a class="breadcrumbs_item home" href="/">Home</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">About Us</span>
        </div>
    </div>
</div>




<div class="welcome__section_aboutus">
    <div class="container">
    <div class="welcome__content col-lg-6">
        <h1><?php the_field('welcome1');?></h1>
        <h2><?php the_field('welcome2');?></h2>
        <h3><?php the_field('welcome3');?></h3>
    </div>
    </div>
</div>


<div class="whyus__section_about">
    <div class="container">
        <div class="whyus__section__titleaboutus">
            <h2>Why Choose Us!</h2>
            <i class="fas fa-paint-roller"></i>
        </div>
        <div class="whyus__content">
            <div class="row">
            <div class="left col-lg-4">
               <div class="onea">
                <div class="lefts">
                <h2>Professionalism</h2>
                <h3>We produce a higher level of residential and commercial professional painting services.</h3>
                </div>
                <div class="rights">
                    <div class="circle"></div>
                </div>
               </div>
               <div class="twoa">
                <div class="lefts">
                <h2>Customer Service</h2>
                <h3>Customer service will help you answer any questions before, during and after painting.</h3>
                </div>
                <div class="rights">
                <div class="circle"></div>
                </div>
               </div>
            </div>
            <div class="center col-lg-4">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/colorr.png"/>
            </div>
            <div class="right col-lg-4">
            <div class="threea">
            <div class="rights">
                <div class="circle"></div>
                </div>
                <div class="lefts">
                <h2>Quality Assurance</h2>
                <h3>We afford Quality Assurance services that approach each engagement as a partnership.</h3>
                </div>
               </div>
               <div class="foura">
               <div class="rights">
                <div class="circle"></div>
                </div>
                <div class="lefts">
                <h2>Upfront Pricing</h2>
                <h3>We provide honest upfront pricing so that you know the real cost of your painting projects.</h3>
                </div>
               </div>
            </div>
            </div>
        </div>
    </div>
</div>






<div class="team__section_about">
    <div class="container">
    <div class="team__titletab">
            <h2><?php $obj=get_post_type_object('ourteam'); echo $obj->labels->singular_name; ?></h2>
            <i class="fas fa-paint-roller"></i>
        </div>
        <div class="team__content">
            <div class="row">
            <?php
            $args = array(
            'post_type' => 'ourteam',
            'posts_per_page' => '3',
            );
            $loop = new WP_Query($args);
            while($loop->have_posts()):
            $loop->the_post();
            ?>
            
                <div class="col-lg-4">

                <div class="inner__col_img scale-hover">
                <img src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <div class="inner__col_titt">
                <h2><?php the_title(); ?></h2>
                <h3><?php the_content(); ?></h3>
                </div>
                </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>
            </div>
        </div> 
    </div>
</div>



<?php get_footer(); ?>

