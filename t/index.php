<!doctype html>
<html amp lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<meta property="og:site_name" content="Ella Iseulde Van Dorpe">
		<meta property="og:title" content="Ella Iseulde Van Dorpe">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
		<style amp-custom><?php $this->load_parts( array( 'style' ) ); do_action( 'amp_post_template_css', $this ); ?></style>
		<?php do_action( 'amp_post_template_head', $this ); ?>
	</head>
	<body>
		<section>
			<h1>Ella Iseulde Van Dorpe</h1>
		</section>
		<section id="notes">
			<h2>Notes</h2>
			<ul><?php while ( have_posts() ) { the_post();
				?><li><?php
					echo sprintf( '<time datetime="%1$s">%2$s</time> ',
						esc_attr( get_the_date( 'c' ) ),
						esc_html( get_the_date( 'Y-m-d' ) )
					);
					the_title( sprintf( '<a href="%s">', esc_url( get_permalink() ) ), '</a>' );
				?></li><?php
			} ?></ul>
		</section>
		<section id="contact">
			<h2>Contact</h2>
			<p><a href="https://twitter.com/ellaiseulde">Twitter</a>, <em>iseulde</em> on <a href="https://make.wordpress.org/chat/">Slack</a> or <em>ella</em> at this domain.</p>
		</section>
		<?php do_action( 'amp_post_template_footer', $this ); ?>
	</body>
</html>
