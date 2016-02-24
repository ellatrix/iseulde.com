<!doctype html>
<html ⚡ lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<meta property="og:site_name" content="Ella Iseulde Van Dorpe">
		<meta property="og:title" content="<?php single_post_title(); ?>">
		<meta property="og:type" content="article">
		<meta property="og:url" content="<?php echo esc_url( get_permalink( get_queried_object_id() ) ); ?>">
		<style amp-custom><?php $this->load_parts( array( 'style' ) ); do_action( 'amp_post_template_css', $this ); ?></style>
		<?php do_action( 'amp_post_template_head', $this ); ?>
	</head>
	<body>
		<?php while ( have_posts() ) { the_post(); ?><article><?php
			the_title( '<h1>', '</h1>' );
			echo sprintf( '<time datetime="%1$s">%2$s</time>',
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() )
			);
			echo str_replace( '&#13;', '', $this->get( 'post_amp_content' ) );
		?></article><?php } ?>
		<nav><a href="<?php echo esc_url( home_url( '/' ) ); ?>">index</a></nav>
		<?php do_action( 'amp_post_template_footer', $this ); ?>
	</body>
</html>
