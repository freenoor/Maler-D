<?php
/**
 * Template Name: Home
 */
get_header(); 
$mypost= $post;
?>
<section class="homestart">
    <div class="slidersection" id="sectionhome">
        <div class="swiper-container1">
            <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'sliserhome',
                'posts_per_page' => '-1',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide">	
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                    <div class="slider__content">
                        <div class="container">
                            <h1><?php the_title();?></h1>
                            <h2><?php the_content();?></h2>
                            <!-- <h3><?php the_excerpt();?></h3> -->
                            <div class="button_welcomesection">
                                <a href="/contact">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>


<div class="intro">
    <div class="row">
        <?php
        $args = array(
        'post_type' => 'services',
        'posts_per_page' => '-1',
        );
        $loop = new WP_Query($args);
        while($loop->have_posts()):
        $loop->the_post();
        ?>
        <div class="col-lg-4 inside-col noHover">
            <a href="<?php the_permalink(); ?>">
                <div class="content-cat">
                <h3 class="text_title"><?= the_title(); ?></h3>
                <h5 class="text_title"><?= the_content(); ?></h3>
                </div>
            </a>
            <img src="<?php the_post_thumbnail_url();?>" alt="">
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>

<div class="welcome__section"> 
    <div class="container">
    <div class="welcome__content col-lg-6">
        <h1><?php the_field('welcome1');?></h1>
        <h2><?php the_field('welcome2');?></h2>
        <h3><?php the_field('welcome3');?></h3>
    </div>
    </div>
</div>

<div class="whyus__section">
    <div class="container">
        <div class="whyus__content">

            <div class="left">
                <div class="forback" style="background-image: url('<?php the_field('whyusimg');?>');"></div>
            </div>

            <div class="right">
                <h1><?php the_field('whyus1');?></h1>
                <h2><?php the_field('whyus2');?></h2>
                <div class="button_welcomesection extrastyle">
                <a href="<?php the_field('whyus3'); ?>">REVIEWS</a>
                </div>
            </div>

        </div>
    </div>
</div>







<div class="projects__section">
    <div class="container">
        <div class="projects__titletab">
            <h2><?php $obj=get_post_type_object('projects'); echo $obj->labels->singular_name; ?></h2>
            <i class="fas fa-paint-roller"></i>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 tabbb">
            <nav>
                <ul class="nav nav-tabs1" id="nav-tab" role="tablist">
                <?php 
                $args = array(
                    'orderby' => 'ID',
                    'order' => 'DESC' 
                );
                $terms = get_terms('categorytwo', $args );   
                $count = 0;
                foreach($terms as $term){ 
                    ?>
                    <li class="nav-item ">
                        <a class="nav-link <?php echo $count == 0 ? 'active' : ''?>" data-toggle="tab" href='#<?php echo $term->slug;?>' id="<?php echo $term->slug;?>-tab" role="tab" aria-controls="<?php echo $term->slug;?>" aria-selected="true">
                           
                        <?php 
                        echo $term->name;  
                        ?>

                        </a>
                    </li>
                <?php
                $count++; }  
                ?>
                </ul>
            </nav>
        </div>
 
    <div class="row">
        <div class="col-12 "> 
            <div class="tab-content">
                <?php $termstwo = get_terms('categorytwo', $args ); 
                $count = 0;
                foreach($termstwo as $term): 
                ?>

                <div class="tab-pane fade <?php echo $count == 0 ? 'active show' : ''?>" id="<?php echo $term->slug;?>" role="tabpanel" aria-labelledby="<?php echo $term->slug;?>-tab">
                    <div class="all">
                    <div class="row">
                    <?php
                        $args = array(
                        'post_type' => 'projects',
                        'posts_per_page' => '6',
                        'order' => 'ASC',
                        'categorytwo' => $term->slug,
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                        $loop->the_post();
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 klas wow animate__animated scale-hover">
                            <div class="under"> 
                                <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <i class="fas fa-link"></i>
                                </a> 
                                
                                <img src="<?php the_post_thumbnail_url();?>" alt=""><div class="layer"></div>

                            </div>
                        </div>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                </div>      

                <?php 
                $count++;
                endforeach;
                ?>
            </div>
            </div>
            </div>
    </div>
</div>


<div class="tooltip__section" style="background-image: url('<?php the_field('tooltipimg'); ?>');">
<div class="container">
<div class="one col-lg-4 col-md-4">
    <h1><?php the_field('tool1');?></h1>
    <h2><?php the_field('tool2');?></h2>
</div>
<div class="two col-lg-8 col-md-8">
    <div class="hotspot-item onee" style="" >
    <div class="item-hints">
        <div class="hint" data-position="4">
            <span class="hint-radius"></span>
            <span class="hint-dot"></span>
            <div class="hint-content do--split-children">
            <h5>Paint Removal and Cleaning</h5>
            <p>Complements trim, floors or cabinetry.</p>
            </div>
        </div>
        </div>
    </div>
    <div class="hotspot-item twoo" style="">
    <div class="item-hints">
  <div class="hint" data-position="4">
    <span class="hint-radius"></span>
    <span class="hint-dot"></span>
    <div class="hint-content do--split-children">
        <h5>Special Finishes</h5>
      <p>Complements trim, floors or cabinetry.</p>
    </div>
  </div>
</div>
    </div>
</div>
<div class="three col-lg-12">
<div class="hotspot-item three" style="" >
<div class="item-hints">
  <div class="hint" data-position="4">
    <span class="hint-radius"></span>
    <span class="hint-dot"></span>
    <div class="hint-content do--split-children">
        <h5>Paint Preparation</h5>
      <p>Complements trim, floors or cabinetry.</p>
    </div>
  </div>
</div>
</div>
<div class="hotspot-item fourr" style="">
<div class="item-hints">
  <div class="hint" data-position="4">
    <span class="hint-radius"></span>
    <span class="hint-dot"></span>
    <div class="hint-content do--split-children">
        <h5>Professional Stained Interiors</h5>
      <p>Complements trim, floors or cabinetry.</p>
    </div>
  </div>
</div>
</div>
<div class="hotspot-item fivee" style="" >
<div class="item-hints">
  <div class="hint" data-position="4">
    <span class="hint-radius"></span>
    <span class="hint-dot"></span>
    <div class="hint-content do--split-children">
        <h5>Wallpapering</h5>
      <p>Complements trim, floors or cabinetry.</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>


    <section class="testimonials__section" style="background-image: url(<?php the_field('background-image');?>);">
        <div class="container">
            <div class="row">
            <div class="left col-lg-5 col-md-4"></div>
            <div class="right col-lg-7 col-md-8">
            <div class="row text">
            <?php
            $args = array(
                'post_type' => 'testim',
                'posts_per_page' => '-1',
            );
            $loop = new WP_Query($args);
            while($loop->have_posts()):
                $loop->the_post();
            ?> 
                <div class="operations_item">
                    <div class="teamimage text-center ">
                    <h5><?php the_content(); ?></h5>
                    </div>
                    <div class="title"><?php the_title(); ?></div>
                    <div class="subtitle"><?php the_excerpt(); ?></div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
            </div>
            <div class="row responsive only_img">
            <?php
            $args = array(
                'post_type' => 'testim',
                'posts_per_page' => '3',
            );
            $loop = new WP_Query($args);
            while($loop->have_posts()):
                $loop->the_post();
            ?>
                <div class="operations_item">
                    <div class="teamimage text-center ">
                    <?php the_post_thumbnail();?>
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
    </section>


    



<section class="blog__section">
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




<div class="latestexample__section">
    <div class="container">
        <div class="latestexample__content">

            <div class="left">
                <h1><?php the_field('latest1');?></h1>
                <h2><?php the_field('latest2');?></h2>
                <div class="button_welcomesection extrastyle">
                <a href="<?php the_field('latest3'); ?>">VIEW MORE</a>
                </div>
            </div>


            <div class="right">
                <div class='img background-img'></div>
                <div class='img foreground-img'></div>
                <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
                <div class='slider-button'>
                <i class="fas fa-caret-left"></i>
                <i class="fas fa-caret-right"></i>
                </div>
            </div>

        </div>
    </div>
</div>




<section class="freequote__section">
    <div class="row">
        <div class="left col-lg-4 col-md-6" style="padding: 0">
        <div class="bgrimg" style="background-image: url(<?php the_field('freequoteimg');?>);">></div>
        </div>
        <div class="right col-lg-8 col-md-6">
        <div class="blog__title">
        <h2><?php the_field('title');?></h2>
        </div>
        <?php the_field('contact');?>
        </div>
    </div>
</section>
<?php get_footer(); ?>