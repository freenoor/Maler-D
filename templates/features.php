<?php
/**
 * Template Name: Features
 */
get_header(); 
$mypost= $post;
?>

<div class="welc__pages" id="sectionhome">
    <img src="<?php echo the_post_thumbnail_url();?>" alt="">
    <div class="welc__content">
        <h1>Our Services</h1>
        <div class="breadcrumbs">
            <a class="breadcrumbs_item home" href="/">Home</a>
            <span class="breadcrumbs_delimiter"></span>
            <span class="breadcrumbs_item current">Our Services</span>
        </div>
    </div>
</div>


<div class="servicesdescription__section" style="background-image: url('<?php the_field('imgservicesdescription');?>');">
<div class="container">
    <div class="row">
<div class="left col-lg-6 col-md-6"></div>
<div class="right col-lg-6 col-md-6">
    <h1><?php the_field('title');?></h1>
    <h2><?php the_field('subtitle');?></h2>
</div>
</div>
</div>
</div>



<div class="numbers">
    <div class="container">
        <div class="row">
        <?php
        $args = array(
        'post_type' => 'countdown',
        'posts_per_page' => '-1',
        );
        $loop = new WP_Query($args);
        while($loop->have_posts()):
        $loop->the_post();
        ?>
        <div class="three-cat">
            <div class="one sc_skills_item_wrap">
            <img src="<?php the_post_thumbnail_url();?>" alt="">
            <div class="counter-body">
                <h2><?php the_content();?></h2>
                <h1><?php the_title();?></h1>
            </div>
            </div>
        </div>
        <?php
        endwhile; 
        wp_reset_postdata();
        ?>
        </div>
    </div>
</div>

<section class="blog__section blog__section__onlytopmargin">
<div class="container">
    <div class="blog__title">
        <h2><?php $obj=get_post_type_object('blogpost'); echo $obj->labels->singular_name; ?></h2>
        <i class="fas fa-paint-roller"></i>
    </div>

    <div class="row">
        <?php
        $args = array(
        'post_type' => 'blogpost',
        'posts_per_page' => '3',
        );
        $loop = new WP_Query($args);
        while($loop->have_posts()):
        $loop->the_post();
        ?>
        <div class="col-lg-4 col-md-4 klas wow animate__animated">
            <div class="under"> 
                <a href="<?php the_permalink(); ?>" style="width: 100%; height: 100%;">
                <!-- <i class="fas fa-link"></i> -->
                <span></span>
                <span></span>
                <span></span>
                </a> 
                <img src="<?php the_post_thumbnail_url();?>" alt=""><div class="layer"></div>
            </div>
            <div class="entry-content">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <a href="<?php the_permalink(); ?>">
                <li>
                <i class="far fa-calendar-alt icon-date"></i><?php echo get_the_date( get_option('date_format') ); ?>
                </li>
            </a>
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>

</div>

</section>

<?php get_footer(); ?>