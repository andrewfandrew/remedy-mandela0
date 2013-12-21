<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
			<h1><?php single_cat_title(); ?></h1>
			<div class="title-description"><?php echo category_description(); ?></div>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h1><?php single_tag_title(); ?></h1>
			<div class="title-description">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</div>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1>Archive for <?php the_time('F, Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h1>Archive for <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
			<div class="title-description">Posts by <?php wp_title(''); ?></div>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
 	  <?php } ?>

			<?php sm_page_navigation('archive', 'top'); ?>

		<?php $count = count($posts); $i=0; while (have_posts()) : the_post(); $i++; ?>
			<div class="post">

				<div class="post-title" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>

				<div class="post-date">
					<div class="left"><?php the_time('F jS, Y') ?> in <?php the_category(' / ') ?><?php edit_post_link('Edit', ' <span class="text-separator">|</span> ', ''); ?></div>
					<div class="right"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;', 'icon icon-comment'); ?></div>
					<div class="clearer">&nbsp;</div>
				</div>

			</div>

			<?php if ( $i != $count ) : ?>

			<div class="archive-separator"></div>
			<?php endif; ?>

		<?php endwhile; ?>

			<?php sm_page_navigation('archive', 'bottom'); ?>

	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		// get_search_form();

	endif;
?>
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
