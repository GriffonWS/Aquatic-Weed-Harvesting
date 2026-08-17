<?php
/**
 * Fallback template.
 *
 * WordPress requires this file to exist or the theme is reported as broken.
 * The site itself is a single page (front-page.php); this only ever renders if
 * someone hits a post, an archive or a bad URL.
 *
 * @package aquatic-weed
 */

get_header();
?>

<main id="main" class="section on-dark" style="padding-top:calc(var(--sec) + 90px)">
  <div class="wrap">

	<?php if ( have_posts() ) : ?>

	  <div class="section__head reveal">
		<p class="eyebrow"><?php echo esc_html( is_search() ? 'Search results' : get_the_archive_title() ); ?></p>
	  </div>

	  <?php
		while ( have_posts() ) :
			the_post();
		?>
		<article <?php post_class( 'reveal' ); ?> style="margin-bottom:48px">
		  <h2 class="h2" style="font-size:clamp(24px,3vw,38px)">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		  </h2>
		  <div class="lead"><?php the_excerpt(); ?></div>
		</article>
		<?php
		endwhile;

		the_posts_pagination();

	else :
		?>
	  <div class="section__head reveal">
		<p class="eyebrow">Not found</p>
		<h2 class="h2">That page isn't here.</h2>
		<p class="lead">Head back to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">main page</a>,
		or call us on <a href="tel:+15184417742">(518) 441-7742</a>.</p>
	  </div>
	<?php endif; ?>

  </div>
</main>

<?php
get_footer();
