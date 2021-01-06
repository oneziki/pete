<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <!-- SEO Metatag -->
        <meta name="description" content="Free Web tutorials" />
        <meta name="keywords" content="HTML,CSS,XML,JavaScript" />

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
    </head>

    <body>
        <!-- Header Start -->
        <?php
            include 'template-parts/covid_banner.php';
        ?>
        <header class="header">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-logo">
                        <a href="#">

							<img src="./wp-content/themes/mytheme/webfx/assets/images/logo.png" alt="University Animal Clinic" />
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="header-content">
                            <div class="call-us"><span><?php the_field('call_us_today');?></span> <a href="tel:9413557707"><?php the_field('tell_number');?></a></div>
                            <div class="online-request">
                                <a href="#" class="btn btn-secondary"><?php the_field('online_phamarcy');?></a>
                                <a href="#" class="btn btn-primary"><?php the_field('request_an_appointment');?></a>
                            </div>
                        </div>
                        <div class="header-bottom">
                            <nav class="site-nav site-header">
                                <?php $args = [
         						'theme_location' =>
                                'primary', ]; ?>

                                <?php wp_nav_menu($args); ?>

                                <div class="header-search">
                                    <a href="javascript:void(0);" class="icon-search"></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="searchbar">
                <div class="container">
                    <div class="searchbar-inner">
                        <input type="text" class="form-control" placeholder="Search here..." />
                        <button type="submit" class="btn search-btn icon-search"></button>
                    </div>
                </div>
            </div>

            <div class="mobile-bottom-header">
                <div class="call-us">
                    <span><?php the_field('call_us');?></span>
                    <a href="tel:9413557707"><?php the_field('tell_number');?></a>
                </div>
            </div>
        </header>
        <!-- Header End -->
    </body>
</html>
