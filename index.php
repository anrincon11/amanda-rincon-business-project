<?php get_header(); ?>

<figure id="hero">
	<img src="<?php echo get_template_directory_uri () . '/img/proposal.png'; ?>" alt="proposal" />
</figure>

<figure id="logo">
	<img src="<?php echo get_template_directory_uri () . '/img/logo-shadow.png'; ?>" alt="logo" />
</figure>

<div id="social">
	<img src="<?php echo get_template_directory_uri () . '/img/facebook.png'; ?>" alt="logo" />
	<img src="<?php echo get_template_directory_uri () . '/img/twitter.png'; ?>" alt="logo" />
	<img src="<?php echo get_template_directory_uri () . '/img/instagram.png'; ?>" alt="logo" />
	<img src="<?php echo get_template_directory_uri () . '/img/pinterest.png'; ?>" alt="logo" />
</div>

<?php wp_nav_menu(); ?>

<div class="container">
	<section class="row">

		<div id="about" class="twelve columns">

			<h1>Welcome to Love By Designs</h1>

			<p>My name is Amanda Rincon, and I am the lead graphic and web designer. I started this business after discovering what my two passions are in life. I am a sucker for love and everything it encompasses, and I absolutely enjoy designing websites. So I figured, why not combine the two!</p>

			<p>With Love By Designs I hope to provide you with the opportunity to express your love in a way that you never thought possible. My mission is to help you create a beatuifully unique website through an incredible experience that will be unforgetable. Together we can build something amazing. Your engagement and wedding day are special and should be treated as such. They are memories that will last forever and should be shared for a lifetime.</p>
		</div>

	</section>

<?php get_footer(); ?>
