<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<meta property="og:site_name" content="Ella Iseulde Van Dorpe">
		<meta property="og:title" content="Ella Iseulde Van Dorpe">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
		<style><?php
			echo str_replace( '%stylesheet_directory_uri%', get_stylesheet_directory_uri(), file_get_contents( __DIR__ . '/index.css' ) );
		?></style>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div>
				<h1><?php bloginfo( 'name' ); ?></h1>
				<p><?php bloginfo( 'description' ); ?></p>
			</div>
		</header>
		<section id="notes">
			<h2>Notes</h2>
			<ul><?php while ( have_posts() ) { the_post();
				?><li><?php
					the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' );
					echo sprintf( ' &middot;&nbsp;<time datetime="%1$s">%2$s</time>',
						esc_attr( get_the_date( 'c' ) ),
						get_the_date( 'F' ) . '&nbsp;' . get_the_date( 'j' ) . ',&nbsp;' . get_the_date( 'Y' ) . '&nbsp;'
					);
				?></li><?php
			} ?></ul>
		</section>
		<section id="contact">
			<h2>Contact</h2>
			<p><a href="https://twitter.com/ellaiseulde">Twitter</a>, <em>iseulde</em> on <a href="https://make.wordpress.org/chat/">Slack</a> or <em>ella</em> at this domain.</p>
		</section>
		<nav></nav>
		<?php wp_footer(); ?>
	</body>
</html>
