<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>burger html5 landing page</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/flaticon.css" />

        <!-- Animate -->
        <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/animate.css">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/bootsnav.css">
        <!-- Color style -->
        <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/color.css">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/custom.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

        <!-- Preloader --> 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <!--End Preloader -->
        <!-- Navbar -->
        <nav class="navbar navbar-default bootsnav no-background navbar-fixed black">
            <div class="container">  

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="<?php bloginfo("template_directory"); ?>/images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
            </div>   

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h6 class="title">Menu</h6>
                    <ul class="link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>

        <!-- Header -->
        <header id="hello" style="background: url(<?php the_field('home_banner_image')?>)no-repeat;background-size: 100% auto; color: #f1f1f1;overflow: hidden; background-position: center;">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner">
                            <h3>-introducing-</h3>
                            <h1><?php the_field('home_banner_text')?></h1>

                            <div class="inner_banner">
                                <div class="banner_content">
                                    <p><?php the_field('home_banner_description')?></p>
                                    <p>*<?php the_field('home_banner_note')?></p>							
                                </div>
                                <div class="stamp">
                                    <img src="<?php bloginfo("template_directory"); ?>/images/stamp.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container end -->
            <?php if( get_field('home_banner_limited_option') ): ?>
                
                <p class="caption">*Limited Time Only</p>
                
            <?php endif; ?>  
        </header><!-- Header end -->

        <!-- Block Content -->
        <section id="block">
            <div class="container">

                <!-- First section -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="feature">
                            <div class="shack_burger">
                                <div class="chicken">
                                    <img src="<?php bloginfo("template_directory"); ?>/images/chicken.png" alt="Chicken" />
                                </div>

                                <h2>Shack Burger </h2>
                                <p>Black Angus beef patty topped with American cheese, tomato, lettuce, and “Shack Sauce,” served in a grilled potato bun</p>
                            </div>
                            <p class="caption">*Limited Time Only</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="signature">
                            <div class="shape">
                                <span class="flaticon flaticon-burger"></span>
                                <p>signature</p>
                            </div>
                            <div class="signature_content">
                                <p>It used to be a Secret but not any more! Our tribute to the King is a Cheddar Beef Patty,</p>
                            </div>
                        </div>
                    </div>
                </div><!-- first section end -->

                <!-- Second section -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="classic">
                            <a href="" class="classic_btn">classic</a>

                            <div class="overlay">
                                <h3>House-ground hamburger</h3>
                                <p>(served in a grilled rosemary focaccia).</p>

                                <p class="overlay_content">Instead of traditional cucumber pickles, legendary chef-owner Judy Rodgers accents her burgers with thin-cut zucchini strips pickled in apple cider vinegar, mustard seeds and turmeric.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Carousel -->
                        <div id="small_carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#small_carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#small_carousel" data-slide-to="1"></li>
                                <li data-target="#small_carousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-caption">
                                <h3>The Original Burger</h3>
                                <hr />

                                <ul class="list-unstyled nutrition">
                                    <li><a href=""><span class="flaticon flaticon-protein"></span><p>Protein - 33g</p></a></li>
                                    <li><a href=""><span class="flaticon flaticon-carbohydrate"></span><p>Carbohydrates - 46gm</p></a></li>
                                    <li><a href=""><span class="flaticon flaticon-calories"></span><p>Calories - 750 kcal</p></a></li>
                                </ul>
                                <div class="info_btn_shadow">
                                    <a href="" class="info_btn">info & nutrition</a>
                                </div>
                            </div>

                            <!-- carousel inner -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="<?php bloginfo("template_directory"); ?>/images/small_slider_bg.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?php bloginfo("template_directory"); ?>/images/small_slider_bg.jpg" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?php bloginfo("template_directory"); ?>/images/small_slider_bg.jpg" alt="" />
                                </div>
                            </div><!-- carousel inner end -->
                        </div><!-- Carousel end-->
                    </div>
                </div><!-- second section end -->

                <!-- Third section -->
                <!-- Carousel -->
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- carousel inner -->
                    <div class="carousel-inner" role="listbox">
                        <?php if( have_rows('home_slider_1') ): 

                            while( have_rows('home_slider_1') ): the_row(); 
                                
                                
                                ?>
                                <div class="item active">
                                    <img src="<?php get_sub_field('slider_image'); ?>" alt="Burger">

                                    <div class="carousel-caption">
                                        <h2><?php get_sub_field('slider_heading'); ?></h2>
                                        <h3><?php get_sub_field('slider_sub_heading'); ?></h3>

                                        <p><?php get_sub_field('slider_description'); ?></p>

                                        <div class="info_btn_shadow">
                                            <a href="" class="info_btn">info & nutrition</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>

                        <?php if( have_rows('home_slider_2') ): 

                            while( have_rows('home_slider_2') ): the_row(); 
                                
                               
                                
                                ?>
                                <div class="item">
                                    <img src="<?php get_sub_field('slider_image'); ?>" alt="Burger">

                                    <div class="carousel-caption">
                                        <h2><?php get_sub_field('slider_heading'); ?></h2>
                                        <h3><?php get_sub_field('slider_sub_heading'); ?></h3>

                                        <p><?php get_sub_field('slider_description'); ?></p>

                                        <div class="info_btn_shadow">
                                            <a href="" class="info_btn">info & nutrition</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>

                        <?php if( have_rows('home_slider_3') ): 

                            while( have_rows('home_slider_3') ): the_row(); 
                                
                                
                                
                                ?>
                                <div class="item">
                                    <img src="<?php get_sub_field('slider_image'); ?>" alt="Burger">

                                    <div class="carousel-caption">
                                        <h2><?php get_sub_field('slider_heading'); ?></h2>
                                        <h3><?php get_sub_field('slider_sub_heading'); ?></h3>

                                        <p><?php get_sub_field('slider_description'); ?></p>

                                        <div class="info_btn_shadow">
                                            <a href="" class="info_btn">info & nutrition</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>
                        
                        
                    </div><!-- carousel inner end -->
                </div><!-- Carousel end-->

                <!-- Forth section -->
                <div class="row forth_sec">
                    <div class="col-sm-4">
                        <div class="menu">
                            <div class="inner_content">
                                <span class="flaticon flaticon-burger"></span>
                                <h2>menu</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="drinks">
                            <div class="inner_content">
                                <span class="flaticon flaticon-drink"></span>
                                <h2>drinks</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="sides">
                            <div class="inner_content">
                                <span class="flaticon flaticon-food"></span>
                                <h2>sides</h2>
                            </div>
                        </div>
                    </div>
                </div><!-- forth section end -->
            </div>
        </section><!-- Block Content end-->

        <!-- Lock -->
        <section id="lock">
            <h2>SERVING MORE THAN JUST BURGERS SINCE 1998</h2>
            <p>Check out our opening hours and location address below.</p>
        </section>

        <!-- Map -->
        <div id="ourmaps"></div>

        <!-- Footer -->
        <footer>
            <!-- Container -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="subscribe">
                            <h4>Subscribe now</h4>
                            <p>Subscribe to the newsletter and
                                get some crispy stuff every week.</p>

                            <form role="form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="em" placeholder="Enter your e-mail here">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn send_btn">
                                                <i class="glyphicon glyphicon-send"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="contact_us">
                            <h4>Contact Us</h4>
                            <a href="">info@junkyburget.com</a>

                            <address>
                                Jalan Awan Hijau, Taman OUG<br />
                                58200 Kuala Lumpur <br />
                                Malaysia <br />
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-xs-12 pull-right">
                        <div class="basic_info">
                            <a href=""><img class="footer_logo" src="<?php bloginfo("template_directory"); ?>/images/footer_logo.png" alt="Burger" /></a>

                            <ul class="list-inline social">
                                <li><a href="" class="fa fa-facebook"></a></li>
                                <li><a href="" class="fa fa-twitter"></a></li>
                                <li><a href="" class="fa fa-instagram"></a></li>
                            </ul>

                            <div class="footer-copyright">
                                <p class="wow fadeInRight" data-wow-duration="1s">
                                    Made with 
                                    <i class="fa fa-heart"></i>
                                    by 
                                    <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a> <br /> 
                                    2016. All Rights Reserved
                                </p>
                            </div>					
                        </div>
                    </div>

                </div>
            </div><!-- Container end -->
        </footer><!-- Footer end -->


        <!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div><!-- End off scroll up->

        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Bootsnav js -->
        <script src="<?php bloginfo("template_directory"); ?>/js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php bloginfo("template_directory"); ?>/js/gmaps.min.js"></script>

        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#ourmaps',
                    lat: 3.139003,
                    lng: 101.686855,
                    scrollwheel: false
                });

                //locations request
                map.getElevations({
                    locations: [[3.139003, 101.686855]],
                    callback: function (result, status) {
                        if (status == google.maps.ElevationStatus.OK) {
                            for (var i in result) {
                                map.addMarker({
                                    lat: result[i].location.lat(),
                                    lng: result[i].location.lng(),
                                    infoWindow: {
                                        content: '<address class="tooltip_address"><b>Junky Burger</b><br />Jalan Awan Hijau, Taman OUG<br />58200 Kuala Lumpur <br />Malaysia <br /></address>'
                                    }
                                });
                            }
                        }
                    }
                });

            });
        </script>


        <!--main js-->
        <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/main.js"></script>
    </body>	
</html>	