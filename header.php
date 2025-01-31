<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>Marcumasia | Home</title>

        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    </head>

    <body>
        <main class="main-wrap">
            <!--  Beginning header section 
            ===============================  -->
            <header class="main-header-section">
                <div class="common-wrap clear ">
                    <div class="header-inner">
                    <div class="logo-wrap">
						 <?php
                           $header_logo = get_field( 'logo', 'option');
                            if($header_logo) :
                        ?>
                        <div class="main-logo">
                             <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo $header_logo; ?>" alt="logo"></a>
                        </div>
						  <?php endif; ?>
                        <div class="phone-nav" id="phone-nav">
                            <div></div>
                        </div>
                    </div>
          <div class="nav-menu">
                <div class="top-menu">
                    <ul class="socila-link">
                        <li> <a href="#">OFFICES</a></li>
                        <li> <a href="#">GLOBAL-EN <img src="img/global-lang.png" alt=""></a></li>
                        <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png" alt=""></a></li>
                    </ul>
                </div>        
                    <div class="nav-wrap">
                        <nav class="main-nav">
							<?php wp_nav_menu(array(
									'theme_location' => 'main-menu',
									'menu_container' => ' ',
									'container' => false,
								));?>
							
							<li class="search-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon.png" alt="">Search</a></li>
                        </nav>
                    </div>
                </div>
                    </div>
                </div>
            </header>
            <!-- //End header section -->