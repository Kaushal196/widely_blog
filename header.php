<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Gazette
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gazette' ); ?></a>

	<div class="container-fluid">
        <nav class="navbar navbar-fixed-top js-nav" style="background-color: #eee;">
<div class="container pull-xs-none text-xs-center">
    <div class="col-xs-12 col-lg-4">

        <a class="navbar-brand logo  ph_scroll_tosection" href="#main"
            data-redirect="#main" data-url="/">
            <img src="https://widely.io/resource/image/logo.png" alt="Widely Progressive Web App tool"/>
        </a>
        <span class="pull-xs-right">
                        <a href="#addPopup" class="hidden-sm-up" id="addToHome" style="text-decoration:none;padding: 5px;">
<span class="fa fa-plus-square-o"></span>
</a>
<!--<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#CollapsingNavbar">-->
<button class="navbar-toggler hidden-lg-up js-sidemenu-show" type="button">
                           <span class="fa fa-bars"></span>
                        </button>
</span>
</div>
<div class="col-xs-12 col-lg-8 ">
    <!--<div class="collapse navbar-toggleable-md col-xs-12" id="CollapsingNavbar">-->
    <div class="navbar-toggleable-md col-xs-12 pt-sidemenu-container js-sidemenu-container" id="CollapsingNavbar">
        <div class=" pt-sidemenu js-sidemenu">
            <header class="navbar hidden-lg-up pt-header">
                <button class="pt-navbar-toggler js-sidemenu-hide " href="#"><span class="fa fa-times"></span></button>
            </header>
            <ul class="nav navbar-nav p-t-1 pull-lg-right " style="display:none!important">
<li class="nav-item p-r-1">
    <a href="/terms-of-use" class="nav-link">Terms of Use</a>
</li>
<li class="nav-item p-r-1">
    <a href="/privacy-policy" class="nav-link">Privacy Policy</a>
</li>
</ul>
<ul class="nav navbar-nav p-t-1 pull-lg-right " style="display:">
<li class="nav-item p-r-2">
    <a class=" ph_scroll_tosection nav-link" href="#What" data-redirect="#What"
        data-url="/">Features</a>
</li>
<li class="nav-item p-r-2">
    <a class=" ph_scroll_tosection nav-link" href="#How" data-redirect="#How"
        data-url="/">Product</a>
</li>
<li class="nav-item p-r-2">
    <a href="/faqs" class=" nav-link">FAQs</a>
</li>
<li class="nav-item p-r-2">
    <a class="nav-link" href="/about">About</a>
</li>
<li class="nav-item divider">
    <a class="nav-link p-r-1"></a>
</li>
<li class="nav-item p-r-1">
    <a class="nav-link" href="/pricing">Pricing</a>
</li>

<li class="nav-item p-r-1" id="inquire">
    <a class="nav-link btn btn-inquire btn-sm" href="/tool/#/register">Sign Up</a>
</li>
<li class="nav-item p-r-1 nav-item--themeRed">
    <a class="nav-link nav-link--themeRed" href="/tool">Login</a>
</li>
</ul>
</div>

</div>
</div>

</div>
</nav>

</div>

	<?php if ( get_header_image() ) : ?>
		<?php if ( ( is_front_page() && 1 == get_theme_mod( 'gazette_header_image' ) ) || 1 != get_theme_mod( 'gazette_header_image' ) ) : ?>
		<div class="header-image">
			<div class="header-image-inner">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt=""></a>
			</div><!-- .header-image-inner -->
		</div><!-- .header-image -->
		<?php endif; ?>
	<?php endif; // End header image check. ?>

	<div id="content" class="site-content">
