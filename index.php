<?php
/**
 * The template for displaying blog posts
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();

get_template_part( 'parts/breadcrumb' );
if (have_posts()):
    while (have_posts()): the_post();
?>

<div class="container mx-auto">
	<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 py-14">

		<div class="max-w-sm sal-secondary-dark-bg rounded-lg bg-dark">
			<a href="<?php echo get_permalink() ?>">
				<img class="rounded-t-lg w-full mx-auto" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full')?>" alt="<?php echo get_the_title() ?>">
			</a>
			<div class="p-5">
				<a href="<?php echo get_permalink() ?>" class="text-center">
					<h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white"><?php echo get_the_title() ?></h5>
				</a>
				<p class="mb-3 font-normal text-center text-text dark:text-white"><?php echo get_the_excerpt() ?></p>
				<a href="<?php echo get_permalink() ?>" class="  flex justify-center py-2 px-16 text-sm font-medium text-center text-white bg-blue-700 rounded-lg sal-bg-primary mx-auto">
					Read more
					<svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
				</a>
			</div>
		</div>

	</div>
</div>
<?php
endwhile;
endif;
get_footer();
