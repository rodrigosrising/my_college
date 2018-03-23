<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-banner">
	<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/ocean.jpg' ); ?>);"></div>
	<div class="page-banner__content container container--narrow">
		<h1 class="page-banner__title"><?php the_title(); ?></h1>
		<div class="page-banner__intro">
			<p>Fique por dentro das últimas notícias.</p>
		</div>
	</div>
</div>

<div class="container container--narrow page-section">

	<div class="metabox metabox--position-up metabox--with-home-link">
		<p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog</a> <span class="metabox__main">
			Postado por <?php the_author_posts_link(); ?> em <?php the_time('j.m.Y'); ?> em <?php echo get_the_category_list(', '); ?>
		</span></p>
	</div>
	<div class="post-item">
		<div class="generic-content">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
