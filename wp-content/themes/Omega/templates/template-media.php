<?php /* Template Name: Media */ ?>
<?php global $post; ?>
<?php get_header(); ?>
<section class="banner-container banner-container-inner clearfix">
    <article class="banner-slider">
        <div class="flexslider bannersider">
            <ul class="slides">
                <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg); ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg" alt="" width="2000" height="376" />
                </li>
                <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg); ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg" alt="" width="2000" height="376" />
                </li>
                <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg); ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg" alt="" width="2000" height="376" />
                </li>
                <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg); ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/banner-slider-inner.jpg" alt="" width="2000" height="376" />
                </li>
            </ul>
        </div>
    </article>
</section>

<section class="main-container main-page-container clearfix">
    <section class="wrapper clearfix">
        <article class="page-container clearfix">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post();?>
            <header class="page-heading">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <h4 class="page-caption"><?php echo get_field('page_caption');?></h4>
                <p class="page-caption-text"><?php echo get_field('page_caption_text');?></p>
            </header>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php endif; ?>
            <div class="page-text clearfix">
                <div class="grid-row media-grid">
                    <?php query_posts(array('post_type' => 'media', 'posts_per_page' => -1));?>
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post();?>
                    <?php $video_id = get_field('you_tube_video_id');?>
                    <div class="grid-row2">
                        <div class="grid-row-block">
                            <div class="media-grid-video">
                                 <iframe width="695" height="391" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowfullscreen></iframe> 
                            </div>
                            <h4 class="media-grid-title"><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    </section>
</section>
<?php get_footer(); ?>