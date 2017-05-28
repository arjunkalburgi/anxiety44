<?php get_header(); ?>

	<header>
		<div style="height: 40vh;"></div>
		<a id="logo" href="#">
			<img src="http://www.anxiety44.com/wp-content/uploads/2017/05/ANXIETYbar.png">
		</a>
		<div id="trigga" class="spacer s0"></div>
		<div style="height: 50vh;"></div>
	</header>
	<div class="spacer s2"></div>
	<content>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post-header">
						<!-- <div class="date"><?php the_time( 'M j y' ); ?></div> -->
						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<!-- <div class="author"><?php the_author(); ?></div> -->
					</div><!--end post header-->
					<div class="entry clear">
						<!-- <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?> -->
						<?php the_content(); ?>
						<!-- the_content() -->
						<?php edit_post_link(); ?>
						<!-- edit_post_link() -->
						<?php wp_link_pages(); ?>
						<!-- wp_link_pages() -->
					</div><!--end entry-->
				</div><!--end post-->
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			<div class="navigation index">
			<!-- <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div> -->
			<!-- <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div> -->
			</div><!--end navigation-->
		<?php else : ?>
		<?php endif; ?>

	</content>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
