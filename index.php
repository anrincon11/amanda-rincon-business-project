<?php get_header(); ?>

<header>
	<figure id="logo">
		<img src="<?php echo get_template_directory_uri () . '/img/logo-shadow.png'; ?>" alt="logo" />
	</figure>

	<section id="social">
		<img src="<?php echo get_template_directory_uri () . '/img/facebook-01.png'; ?>" alt="facebook" />

		<img src="<?php echo get_template_directory_uri () . '/img/twitter-01.png'; ?>" alt="twitter" />

		<img src="<?php echo get_template_directory_uri () . '/img/instagram-01.png'; ?>" alt="instagram" />

		<img src="<?php echo get_template_directory_uri () . '/img/pinterest-01.png'; ?>" alt="pinterest" />
	</section>

	<section id="arrow" class="fix">
		<img src="<?php echo get_template_directory_uri () . '/img/arrow.png'; ?>" alt="arrow" />
	</section>
</header>

<?php wp_nav_menu(); ?>

		<div id="about">
			<h1>Welcome to Love By Designs!</h1>

			<p>My name is Amanda Rincon, and I am the lead graphic and web designer. I started this business after discovering what my two passions are in life. I am a sucker for love and everything it encompasses, and I absolutely enjoy designing websites. So I figured, why not combine the two!</p>

			<p>With Love By Designs I hope to provide you with the opportunity to express your love in a way that you never thought possible. My mission is to help you create a beautifully unique website through an incredible experience that will be unforgettable. Together we can build something amazing. Your engagement and wedding day are special and should be treated as such. They are memories that will last forever and should be shared for a lifetime.</p>
		</div>

<?php get_footer(); ?>
