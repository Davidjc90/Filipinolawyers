<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes();?>>  <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset');?>>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description');?>">
	<meta name="keywords" content="">

    <title><?php bloginfo('name');?></title>

    <link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri();?>/css/aos.css">
    <link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri();?>/css/animate.css">
    <link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri();?>/css/bootsnav.css">
    <link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri();?>/css/font-awesome.css">
    <link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri();?>/css/master.css">
    <link rel="stylesheet"  href="<?php echo get_stylesheet_directory_uri();?>/css/style.css">

<?php wp_head();?>
    
</head>
<body <?php body_class();?>>     
        
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav navbar-scrollspy" data-minus-value-desktop="0" data-minus-value-mobile="0" data-speed="1000""> <!--navbar navbar-default navbar-fixed white no-background bootsnav--> <!--navbar navbar-default bootsnav-->

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">        

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <!--load logo in navbar-->
                    <?php if(function_exists('the_custom_logo')){the_custom_logo();}?>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#experience">Our Experience</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="#equip">Expert Team</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>   

        
    </nav>
    <!-- End Navigation -->