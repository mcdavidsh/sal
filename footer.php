<?php wp_footer() ?>
<footer class="sal-secondary-dark-bg dark:bg-gray-900 px-20">
    <div class="grid grid-cols-2 gap-8 py-8 px-6 md:grid-cols-3">
        <div class="flex flex-col">
            <a href="<?php echo get_site_url()?>" class="flex items-center">
                <?php $footlogo = wp_get_attachment_image_src( get_field( "home_page_logo" ,"options" ), 'full' ); ?>
                <img src="<?php echo $footlogo[0]?>" class="h-8 sm:h-9" alt="Social Ads Limited" />
            </a>
            <p class="sal-lead-footer mt-2 mb-3"><?php the_field("footer_about_description","options" )?></p>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-white capitalize dark:text-white">Contact Us</h2>
            <p class="sal-lead-footer mt-2 mb-3"><?php the_field("footer_contact_description","options" ) ?></p>
            <form>
                <div class="mb-6">
                    <input type="text" id="name" class="sal-input-bg text-gray-900 text-sm rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:bg-gray-700 " name="name" placeholder="Name" required="">
                </div>
                <div class="mb-6">
                    <input type="email" id="email" class="sal-input-bg text-gray-900 text-sm rounded-lg focus:ring-blue-500  block w-full p-2.5 dark:bg-gray-700 " name="email" placeholder="Email" required="">
                </div>
                <div class="mb-6">
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 sal-input-bg rounded-lg dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white " placeholder="Message"></textarea>
                </div>
                <button type="submit" class="text-white sal-bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-white capitalize dark:text-white">Social Media</h2>
            <p class="sal-lead-footer mt-2 mb-3"><?php the_field("footer_social_media_description","options" )?></p>
            <div class="flex mt-4 space-x-2 sm:justify-start md:mt-2">
                <a href="<?php the_field("facebook_link","options")?>" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" rx="24" fill="#343538"/>
                        <path d="M25.6667 21.75V24.1667H27.8333C28 24.1667 28.0833 24.3333 28.0833 24.5L27.75 26.0833C27.75 26.1667 27.5833 26.25 27.5 26.25H25.6667V32.3333H23.1667V26.3333H21.75C21.5833 26.3333 21.5 26.25 21.5 26.0833V24.5C21.5 24.3333 21.5833 24.25 21.75 24.25H23.1667V21.5C23.1667 20.0833 24.25 19 25.6667 19H27.9167C28.0833 19 28.1667 19.0833 28.1667 19.25V21.25C28.1667 21.4167 28.0833 21.5 27.9167 21.5H25.9167C25.75 21.5 25.6667 21.5833 25.6667 21.75Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M26.5 32.3332H21.5C17.3334 32.3332 15.6667 30.6665 15.6667 26.4998V21.4998C15.6667 17.3332 17.3334 15.6665 21.5 15.6665H26.5C30.6667 15.6665 32.3334 17.3332 32.3334 21.4998V26.4998C32.3334 30.6665 30.6667 32.3332 26.5 32.3332Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="<?php the_field("youtube_link","options")?>" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" rx="24" fill="#343538"/>
                        <path d="M28.1666 30.6668H19.8333C17.3333 30.6668 15.6666 29.0002 15.6666 26.5002V21.5002C15.6666 19.0002 17.3333 17.3335 19.8333 17.3335H28.1666C30.6666 17.3335 32.3333 19.0002 32.3333 21.5002V26.5002C32.3333 29.0002 30.6666 30.6668 28.1666 30.6668Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.5 21.9168L25.5833 23.1668C26.3333 23.6668 26.3333 24.4168 25.5833 24.9168L23.5 26.1668C22.6667 26.6668 22 26.2501 22 25.3334V22.8334C22 21.7501 22.6667 21.4168 23.5 21.9168Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <span class="sr-only">Youtube</span>
                </a>
                <a href="<?php the_field("dribble_link","options")?>" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" rx="24" fill="#343538"/>
                        <path d="M29.4167 17.9917C27.25 21.7834 23.075 23.9584 18.725 23.5667L16.0834 23.325" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.5834 30.1417C20.75 26.3501 24.925 24.1751 29.275 24.5667L31.9167 24.8084" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M24 32.3332C28.6023 32.3332 32.3333 28.6022 32.3333 23.9998C32.3333 19.3975 28.6023 15.6665 24 15.6665C19.3976 15.6665 15.6666 19.3975 15.6666 23.9998C15.6666 28.6022 19.3976 32.3332 24 32.3332Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.3583 16.5L23.0083 19.7917C24.7833 21.9917 26.0416 24.55 26.7083 27.2917L27.7166 31.45" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <span class="sr-only">Dribble</span>
                </a>
                <a href="<?php the_field("whatsapp_link","options")?>" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" rx="24" fill="#343538"/>
                        <path d="M19.75 31.1665C21 31.9165 22.5 32.3332 24 32.3332C28.5833 32.3332 32.3333 28.5832 32.3333 23.9998C32.3333 19.4165 28.5833 15.6665 24 15.6665C19.4166 15.6665 15.6666 19.4165 15.6666 23.9998C15.6666 25.4998 16.0833 26.9165 16.75 28.1665L16.1071 30.6392C15.9123 31.3881 16.6056 32.0649 17.3496 31.8523L19.75 31.1665Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M27.75 26.3737C27.75 26.5087 27.72 26.6475 27.6561 26.7825C27.5923 26.9175 27.5096 27.045 27.4007 27.165C27.2167 27.3675 27.0139 27.5138 26.7848 27.6075C26.5595 27.7013 26.3153 27.75 26.0525 27.75C25.6694 27.75 25.26 27.66 24.8281 27.4763C24.3962 27.2925 23.9643 27.045 23.5362 26.7338C23.1043 26.4188 22.6949 26.07 22.3043 25.6837C21.9175 25.2937 21.5682 24.885 21.2565 24.4575C20.9485 24.03 20.7007 23.6025 20.5204 23.1788C20.3401 22.7513 20.25 22.3425 20.25 21.9525C20.25 21.6975 20.2951 21.4538 20.3852 21.2288C20.4753 21 20.6181 20.79 20.8171 20.6025C21.0575 20.3663 21.3204 20.25 21.5983 20.25C21.7034 20.25 21.8086 20.2725 21.9025 20.3175C22.0001 20.3625 22.0865 20.43 22.1541 20.5275L23.0254 21.7538C23.093 21.8475 23.1418 21.9338 23.1756 22.0163C23.2094 22.095 23.2282 22.1738 23.2282 22.245C23.2282 22.335 23.2019 22.425 23.1493 22.5112C23.1005 22.5975 23.0292 22.6875 22.939 22.7775L22.6536 23.0737C22.6123 23.115 22.5935 23.1638 22.5935 23.2238C22.5935 23.2538 22.5973 23.28 22.6048 23.31C22.616 23.34 22.6273 23.3625 22.6348 23.385C22.7024 23.5087 22.8189 23.67 22.9841 23.865C23.1531 24.06 23.3334 24.2588 23.5287 24.4575C23.7315 24.6563 23.9268 24.84 24.1258 25.0087C24.3211 25.1737 24.4826 25.2862 24.6103 25.3537C24.6291 25.3612 24.6516 25.3725 24.6779 25.3837C24.7079 25.395 24.738 25.3987 24.7718 25.3987C24.8356 25.3987 24.8845 25.3763 24.9258 25.335L25.2112 25.0538C25.3051 24.96 25.3952 24.8887 25.4816 24.8438C25.568 24.7912 25.6544 24.765 25.7482 24.765C25.8196 24.765 25.8947 24.78 25.9773 24.8138C26.06 24.8475 26.1463 24.8963 26.2402 24.96L27.4834 25.8412C27.581 25.9087 27.6486 25.9875 27.6899 26.0812C27.7275 26.175 27.75 26.2687 27.75 26.3737Z" stroke="white" stroke-miterlimit="10"/>
                    </svg>

                    <span class="sr-only">Twitter</span>
                </a>
            </div>
        </div>
    </div>
    <div class="py-6 px-4 bg-dark dark:bg-gray-700 md:flex md:items-center md:justify-between">

		<?php
		$menuLocations = get_nav_menu_locations();
		$footermenu = $menuLocations['secondary'];
		$footerNav = wp_get_nav_menu_items($footermenu);
		?>
        <nav class="bg-dark border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
            <div class="container flex flex-wrap justify-between items-center mx-auto">

                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="flex flex-col p-4 mt-4 bg-dark rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-dark dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
						<?php
						if (wp_get_nav_menu_items($footermenu) !== false){

							foreach ( $footerNav as $navItem ):
								?>
                                <li>
                                    <a href="<?php echo $navItem->url ?>" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><?php echo $navItem->title ?></a>
                                </li>
							<?php endforeach;
						}else {

							?>
                            <li>
                                <a href="/about" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About Us</a>
                            </li>
                            <!--                        aria-current=""-->
                            <li>
                                <a href="/careers" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Careers</a>
                            </li>

						<?php }?>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2022 <a href="<?php echo get_site_url() ?>"><?php echo get_bloginfo() ?></a>. All Rights Reserved.
        </span>
    </div>
</footer>
</body>
</html>
