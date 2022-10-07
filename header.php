<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<header class="relative z-50">
	<?php
	$logo1 = wp_get_attachment_image_src( get_field( "home_page_logo" ,"options" ), 'full' );
	$logo2 = wp_get_attachment_image_src( get_field( "other_page_logo"  ,"options"), 'full' );
	$logo = ( is_front_page())? $logo1[0]:$logo2[0];
	$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
	// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

	$menuID = $menuLocations['primary']; // Get the *primary* menu ID

	$primaryNav = wp_get_nav_menu_items($menuID);
	?>
    <nav class="bg-transparent bg-opacity-0 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="<?php echo get_site_url()?>" class="flex items-center">
                <img src="<?php echo $logo?>" class="mr-3 h-6 sm:h-9" alt="Social Ads Limited" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-4 mt-4 bg-dark rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-dark dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
					<?php

					if (wp_get_nav_menu_items($menuID) !== false){

						foreach ( $primaryNav as $navItem ):

							?>

                            <li>
                                <a href="<?php echo $navItem->url ?>" class="block py-2 pr-4 pl-3 text-white text-white bg-white rounded md:bg-transparent md:text-white md:p-0 dark:text-white"><?php echo $navItem->title ?></a>
                            </li>
						<?php endforeach;
					}else {
						$args = array(
							'sort_order' => 'ASC',
							'sort_column' => 'menu_order',
							'hierarchical' => 1,
							'exclude' => '',
							'child_of' => 0,
							'parent' => -1,
							'exclude_tree' => '',
							'number' => '',
							'offset' => 0,
							'post_type' => 'page',
							'post_status' => 'publish'
						);
						$pages = get_pages($args);
						foreach ($pages as $page):
							?>

                            <li>
                                <a href="<?php echo get_page_link( $page->ID ) ?>" class="block py-2 pr-4 pl-3 text-white bg-white rounded md:bg-transparent md:text-white md:p-0 dark:text-white"><?php echo $page->post_title ?></a>
                            </li>
						<?php

						endforeach;
					}
					?>
                </ul>
            </div>
        </div>
    </nav>

</header>
