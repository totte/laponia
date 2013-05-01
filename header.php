<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Laponia
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="assorted ramblings and creations">
        <meta name="author" content="totte">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="bootstrap/js/html5shiv.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
        <div class="container-narrow">
            <div class='navbar'>
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-right">
                                <li class="active"><a href="#">blog</a></li>
                                <li><a href="#">drawings</a></li>
                                <li><a href="#">photographs</a></li>
                                <li><a href="#">code</a></li>
                                <li><a href="#">books</a></li>
                                <li><a href="#">links</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumbotron">
                <p class="lead"><?php bloginfo( 'description' ); ?></p>
            </div>
            <hr>
            <div class="row-fluid">
<?php
/**
* <nav id="site-navigation" class="navigation-main" role="navigation">
* <h1 class="menu-toggle"><?php _e( 'Menu', 'laponia' ); ?></h1>
* <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'laponia' ); ?>"><?php _e( 'Skip to content', 'laponia' ); ?></a></div>
* <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
* </nav><!-- #site-navigation -->
*/