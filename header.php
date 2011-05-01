<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php
// SEO title
if (is_home()) {
    bloginfo('name'); echo ' - '; bloginfo('description'); 
} elseif (is_category()) {
    bloginfo('name'); echo ' - '; single_cat_title();
} elseif (is_single() || is_page()) {
    bloginfo('name'); echo ' - '; single_post_title();
} elseif (is_search()) {
    bloginfo('name'); echo ' - '; echo 'Search Result';
} elseif (is_404()) {
    bloginfo('name'); echo ' - '; echo 'Page Not Found';
} else {
    wp_title('', true);
}
?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
    <div id="header">
        <div id="masthead">
            <div id="branding" role="banner">
                <div id="userbar">
                </div>
            </div> <!-- #branding -->
            <div id="access" role="navigation">
                <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
            </div> <!-- #access -->
        </div>
    </div> <!-- #header -->
    <div id="wrapper">
        <div id="main">
