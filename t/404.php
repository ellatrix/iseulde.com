<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<style><?php $this->load_parts( array( 'style' ) ); do_action( 'amp_post_template_css', $this ); ?></style>
		<?php wp_head(); ?>
	</head>
	<body>
		<section>
			<h1>Not found</h1>
			<p>Maybe try the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">index</a> page?</p>
		</section>
		<?php wp_footer(); ?>
	</body>
</html>
