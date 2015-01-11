<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>
 <style type="text/css">
        hr {width: 50%}

        body {margin-top:50px;font-family: helvetica, sans-serif;}

        nav,footer {background-color: #233140 !important}
        nav .has-image a {padding: 7.5px !important}
        nav .navbar-brand > img {display: inline; margin-right: 10px}
        nav img {width:36px;height:36px;}

        header {background-color:#06635d; color:#fff;padding-bottom: 20px;padding-top: 20px;}

        section,footer {padding-top:20px; padding-bottom: 20px}

        section#photos div.img {
            background-repeat: no-repeat;
            background-position: center;
            vertical-align: middle;
            line-height: 320px;
              text-align: center;
        }

        section#meetings {background-color: #9f0a10;}
        section#meetings * {color: #fff}
        section#meetings p.next-meeting {font-weight: bolder;}


       footer {color:#fff}
    </style>
</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="page-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>" >
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" />Society Speakers</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
            </div>
        </div>
    </nav>

