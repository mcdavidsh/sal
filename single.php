<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  // Start the loop.

get_header();
get_template_part( 'parts/breadcrumb' );
// Start the loop.
while ( have_posts() ) : the_post();

?>



    <div class="container mx-auto">
        <main id="main" class="site-main grid grid-cols-1 flex flex-col px-8 py-8" role="main">

            <article class="format lg:format-md text-justify py-8 px-5 md:px-5 sm:px-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3">
                    <h6 class="text-lg font-bold dark:text-white text-white">
                    <?php echo the_date() ?>
                    </h6>
                    <h6 class="text-lg font-bold dark:text-white"><?php  the_category() ?></h6>
                    <h6 class="text-lg font-bold dark:text-white"><?php  the_author() ?></h6>
                </div>
                <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div>
                <p class="text-lg font-normal text-white lg:text-xl dark:text-gray-400">
                    <?php
                     the_content();
                    ?>
                </p>
                </div>
            </article>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php
endwhile;

get_footer(); ?>