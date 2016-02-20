<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:site_name" content="Ella Iseulde Van Dorpe">
		<meta property="og:title" content="Ella Iseulde Van Dorpe">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php if ( has_site_icon() ) { ?><meta property="og:image" content="<?php site_icon_url(); ?>">
		<?php } wp_head(); ?>
	</head>
	<body>
		<section>
			<h1>Ella Iseulde Van Dorpe</h1>
			<p><img class="alignright" src="https://iseulde.com/uploads/ella.jpg" alt="Ella Iseulde Van Dorpe" width="200" height="200" srcset="https://iseulde.com/uploads/ella-150x150.jpg 150w, https://iseulde.com/uploads/ella-300x300.jpg 300w, https://iseulde.com/uploads/ella.jpg 852w" sizes="(max-width: 852px) 100vw, 852px">Hi, I’m Ella. I’m a WordPress Core Comitter and I work at <a href='https://www.siteground.com'>SiteGround</a>.</p>
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
		<?php wp_footer(); ?>
	</body>
</html>
