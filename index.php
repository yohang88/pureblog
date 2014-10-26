<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="layout">
        <!-- Menu toggle -->
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon -->
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu pure-menu-open">
                <a class="pure-menu-heading" href="#">yohang.net</a>

                <ul>
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
        </div>

        <div id="main">
            <div class="header">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2>Code is poetry</h2>
            </div>


            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="content">
                            <header>
                                <?php if ( is_single() ) : ?>

                                <h1><?php the_title() ?></h1>

                                <?php else: ?>

                                <h1><a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title() ?></a></h1>

                                <?php endif; ?>
                            </header>

                            <?php the_content() ?>

                            <div style="margin-bottom:25px"></div>

                            <footer>
                            <?php
                                $posttags = get_the_tags();

                                foreach ($posttags as $posttag):
                            ?>
                            <a class="pure-button" href="<?php echo get_tag_link($posttag->id); ?>"><?php echo $posttag->name ?></a>
                            <?php endforeach ?>
                            </footer>

                            <div style="margin-bottom:25px"></div>



                            <?php if ( ! is_single() ) : ?>
                            <span class="comments-link"><?php comments_popup_link('Tanggapan', '1 tanggapan', '% tanggapan'); ?></span>

                            <?php else: ?>

                            <div style="float:left">
                            <?php next_post('&raquo %; ', '', 'yes'); ?>
                            </div>

                            <div style="float:right">
                            <?php previous_post('% &laquo;', '', 'yes'); ?>
                            </div>

                            <div style="clear: both; margin-bottom:25px"></div>

                            <?php comments_template(); ?>

                            <?php endif; ?>

                        </div>

                    </article>



                <?php endwhile; ?>

                <div class="content">

                <?php posts_nav_link(); ?>

                </div>

                <?php else : ?>

                <?php endif; ?>


        </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/ui.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
