<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:site_name" content="Ella Iseulde Van Dorpe">
		<meta property="og:title" content="<?php single_post_title(); ?>">
		<meta property="og:type" content="article">
		<meta property="og:url" content="<?php echo esc_url( get_permalink( get_queried_object_id() ) ); ?>">
		<?php if ( has_site_icon() ) { ?><meta property="og:image" content="<?php site_icon_url(); ?>">
		<?php } wp_head(); ?>
	</head>
	<body>
		<?php while ( have_posts() ) { the_post(); ?><article><?php
			the_title( '<h1>', '</h1>' );
			echo sprintf( '<time datetime="%1$s">%2$s</time>',
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() )
			);
			the_content();
		?></article><?php } ?>
		<nav><a href="<?php echo esc_url( home_url( '/' ) ); ?>">index</a></nav>
		<?php wp_footer(); ?>
	</body>
</html>
