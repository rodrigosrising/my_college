<?php get_header(); ?>

<div class="page-banner">
	<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/ocean.jpg' ); ?>);"></div>
	<div class="page-banner__content container container--narrow">
		<h1 class="page-banner__title">Bem vindo ao nosso Blog!</h1>
		<div class="page-banner__intro">
			<p>Fique por dentro das últimas notícias.</p>
		</div>
	</div>
</div>

<div class="container container--narrow page-section">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="post-item">
		<h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="metabox">
			<p>Postado por <?php the_author_posts_link(); ?> em <?php the_time('j.m.Y'); ?> em <?php echo get_the_category_list(', '); ?></p>
		</div>
		<div class="generic-content">
			<?php the_excerpt(); ?>
			<p><a href="<?php the_permalink(); ?>" class="btn btn--blue">Leia mais &raquo;</a></p>
		</div>
	</div>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	<?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>
