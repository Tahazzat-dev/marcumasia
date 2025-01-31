<?php 
/*
Template Name: Front page
*/

get_header();

?>


            <!-- Beginning main content section 
            ==================================== -->
            <section class="main-content-wrap">
				
<?php
$hero = get_field('hero');
if (!empty($hero)) :
?>

<section class="hero-bg-wrap">
    <div class="hero-thumb">
        <img src="<?php echo $hero['hero_thumb']['url']; ?>" alt="">
    </div>
    <div class="hero-inner">
        <div class="hero-info">
            <h1><?php echo $hero['title']; ?></h1>
        </div>
    </div>
    <div class="counter-wrap">
        <?php
        $counter = $hero['counter'];
        if (!empty($counter)) :
            foreach ($counter as $counter_item) : // renamed the loop variable to avoid overwriting
        ?>
                <div class="counter-item">
                    <span><?php echo $counter_item['number']; ?></span>
                    <dfn><?php echo $counter_item['sub_text']; ?></dfn>
                </div>
        <?php endforeach; endif; ?>
    </div>
</section>

<?php endif; ?>

				
				
				
	<?php
$content_section = get_field('content_section');
if (!empty($content_section)) :
?>			
				
              
        <section class="go-brand-wrap">
            <div class="common-wrap clear">
                <div class="brand-text-inner">
                    <div class="left-content">
                        <h2><?php echo $content_section['title']; ?></h2>
                        <p><?php echo $content_section['sub_title']; ?></p>
                    </div>
                    <div class="right-content">

                        <img src="<?php echo $content_section['icon']['url']; ?>" alt="polygon icon">
                      <p><?php echo wp_kses_post($content_section['content']); ?></p>
                        <div class="cta-wrap">
<a href="<?php echo $content_section['cta_url']; ?>" class="btn why-btn">
    <img src="<?php echo $content_section['cta_icon']['url'];?>" alt="">
    <?php echo $content_section['cta']; ?>
</a>

                        </div>
                    </div>
                </div>

            </div> 

        </section>

	<?php endif; ?>			
				
				
	
				
					
	<?php
$location = get_field('location');
if (!empty($location)) :
?>					
				
        <section class="service-banner">
            <div class="banner-thumb">
                <img src="<?php echo $location['banner_img']['url'];?>" alt="">
            </div>
            <div class="common-wrap clear">
                <div class="banner-inner">
                    <div class="bullet-btn">
                        <a href="<?php echo $location['cta_url']; ?>" class="btn-tablet"><?php echo $location['cta']; ?></a>
                    </div>
                    <div class="location-info">
                        <div class="location-content">
                            <h2><?php echo wp_kses_post ($location['content']); ?></h2>
                            <div class="location-btn">
                               <a href="<?php echo $content_section['cta_url']; ?>" class="btn why-btn">
    <img src="<?php echo $content_section['cta_icon']['url'];?>" alt="">
    <?php echo $content_section['cta']; ?>
</a>
                            </div>
                        </div>
                        <div class="service-counter">
							     <?php
        $service_item = $location ['service_item'];
        if (!empty($service_item)) :
            foreach ($service_item as $service_item) : // renamed the loop variable to avoid overwriting
        ?>
                        <div class="service-item">
                            <span><?php echo $service_item['number']; ?></span>
                            <p><?php echo $service_item['text_content']; ?></p>
                        </div>
			 <?php endforeach; endif; ?>
                        
                    </div>
                    </div>

                </div>

            </div>

        </section>

				
		<?php endif; ?>					
				
				
	<?php
$slider = get_field('slider');
if (!empty($slider)) :
?>		

<section class="slider-wrap">
    <div class="slider-thubmb">
         <img src="<?php echo $slider['slider_thumb']['url'];?>" alt="">
    </div>
    <div class="common-wrap clear">
        <div class="bullet-btn">
            <a href="<?php echo $slider['cta_url']; ?>" class="btn-tablet"><?php echo $slider['cta']; ?></a>
        </div>
    </div>
    <div class="slider-inner">
        <div class="slider-wrap-info">
          <?php
$slider_item = $slider['slider_item'];
if (!empty($slider_item)) :
    foreach ($slider_item as $item) : // Renamed the loop variable to $item
        ?>
        <div class="slide">
            <div class="content">
                <h3><?php echo $item['title']; ?></h3>
                <div class="bio-contact-content">
                    <p><?php echo wp_kses_post ($item['content']); ?></p>
                    <div class="learn-btn">
                        <a href="<?php echo $item['url_cta']; ?>" class="btn why-btn">
                         <img src="<?php echo $item['btn_icon']['url'];?>" alt="">
                       <?php echo $item['learn_cta']; ?>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; endif; ?>
   
        </div>
    </div>
</section>

<?php endif; ?>	
				
				

<section class="blog-wrap">
    <div class="common-wrap clear">
        <div class="blog-inner">
            <!-- Display the most recent blog post as large-item -->
            <div class="large-item">
                <?php 
                // Query the most recent blog post
                $args = array(
                    'post_type' => 'post', // Make sure you are querying posts
                    'posts_per_page' => 1, // Get only the most recent post
                );
                $recent_posts = new WP_Query($args);
                if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                        // Get ACF fields
                        $post_url = get_field('post_url'); // ACF field for post URL
                ?>
                    <div class="feature-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <!-- Display the featured image using the_post_thumbnail_url() -->
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="blog-item">
                        <?php endif; ?>
                    </div>
                    <div class="blog-content">
                        <!-- Display dynamic post date -->
                        <span><?php echo get_the_date('M d, Y'); ?></span> <!-- Dynamic date -->
                        <h3><?php the_title(); ?></h3>
                        <!-- Display excerpt -->
                        <p><?php echo get_the_excerpt(); ?></p> <!-- Display the excerpt -->
                        <div class="read-btn">
                            <a href="<?php the_permalink(); ?>">READ MORE <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ic-arrow-colored-right_2x.png" alt=""></a>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>

            <!-- Display other recent blog posts in grid-item -->
            <div class="grid-item">
                <?php
                // Query for the next 3 most recent blog posts
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4, // Get 4 posts for grid
                    'offset' => 1, // Skip the first post (already displayed as large-item)
                );
                $recent_posts = new WP_Query($args);
                if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                        // Get ACF fields
                        $post_url = get_field('post_url'); // ACF field for post URL
                ?>
                    <div class="blog-item">
                        <div class="tag-btn">
                            <a href="#" class="btn-tag">INSIGHTS</a>
                        </div>
                        <div class="blog-content">
                            <!-- Display dynamic post date -->
                            <span><?php echo get_the_date('M d, Y'); ?></span> <!-- Dynamic date -->
                            <h3><?php the_title(); ?></h3>
                          
                          
                            <div class="read-btn">
                                <a href="<?php the_permalink(); ?>">READ MORE <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ic-arrow-colored-right_2x.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>



	<?php
$career = get_field('career');
if (!empty($career)) :
?>	
				
<section class="career-cta-wrap">
<div class="cta-banner">
    <img src="<?php echo $career['banner_thumb']['url'];?>" alt="">
</div>
<div class="common-wrap clear">
<div class="career-inner">
    <div class="bullet-btn">
        <a href="<?php echo $career['cta_url']; ?>" class="btn-tablet"><?php echo $career['cta']; ?></a>
    </div>

    <div class="banner-text">
        <h2><?php echo $career['title']; ?></h2>
        <p><?php echo $career['content']; ?>
    <div class="banner-btn">
        <a href="<?php echo $career['career_url']; ?>" class="btn"><?php echo $career['career_text']; ?></a>
    </div>
   </div>
</div>
</div>
</section>
         
<?php endif; ?>					
				
				
				
<section class="footer-nav-wrap">
    <div class="common-wrap clear">
        <div class="footer-nav-info">
            <nav class="main-nav">
                	<?php wp_nav_menu(array(
									'theme_location' => 'footer-menu',
									'menu_container' => ' ',
									'container' => false,
								));?>
            </nav>
            <div class="lang-nav">
                <a href="#">US-EN <img src="<?php echo get_template_directory_uri(); ?>/assets/img/global.png" alt=""></a>
            </div>
        </div>
    </div>
</section>
				
				
				
				
				
				
				
				
 </section>
            <!-- //End main content section -->
    
        





<?php 
get_footer();
?>




