<!DOCTYPE html>

<html>

<head>
    <title><?php bloginfo('name'); ?><?php wp_title();?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="alternate" type="application/rss+xml" title="RSS.2.0" href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="alternate" type="text/xml" title="RSS.92" href="<?php bloginfo('rss_url'); ?>"/>
    <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>"/>
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon"/>
</head>


<?php wp_head(); ?>
<body>
<h1><a href="<?php bloginfo('url'); ?>"title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
<h2><p><?php bloginfo('description'); ?></p></h2>

<header>

</header>
<!--Inicio del wrapper-->
<div id="wrapper">
    <div id="container" class="group">
        <header class="group">
            <h1>
                <img src="<?php print IMAGES; ?>/logo.jpg" alt="<?php bloginfo('name'); ?>" />
            </h1>
            <?php get_search_form(); ?>
        </header>
    </div>
</div>
<!--Fin del wrapper-->

<!--Inicio del footer-->
<footer class="group">
</footer>
<!--fin del footer-->

</body>


</html>