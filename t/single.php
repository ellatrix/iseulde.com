<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<meta property="og:site_name" content="Ella Iseulde Van Dorpe">
		<meta property="og:title" content="<?php single_post_title(); ?>">
		<meta property="og:type" content="article">
		<meta property="og:url" content="<?php echo esc_url( get_permalink( get_queried_object_id() ) ); ?>">
		<style><?php
			echo str_replace( '%stylesheet_directory_uri%', get_stylesheet_directory_uri(), file_get_contents( __DIR__ . '/index.css' ) );
		?></style>
		<?php wp_head(); ?>
	</head>
	<body>
		<?php while ( have_posts() ) { the_post(); ?><article><?php
			echo '<header><div>';
			the_title( '<h1>', '</h1>' );
			echo '<p>' . strip_tags( $post->post_excerpt ) . '</p>';
			echo '</div></header>';
			echo sprintf( '<p><time datetime="%1$s">%2$s</time></p>',
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() )
			);
			the_content();
		?></article><?php } ?>
		<nav><div><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a> / Notes</div></nav>
		<?php wp_footer(); ?>
	</body>
</html>
