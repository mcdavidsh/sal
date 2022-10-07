<?php
/*
Template Name: Home
Post Type: page
* @package WordPress
 *@subpackage Twenty_Fourteen
 * * @since Twenty Fourteen 1.0
*/
get_header();
?>
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-0 px-auto flex justify-between flex-col">

		<div class="sal-hero-bg-home grid grid-cols-1 md:grid-cols-2 gap-4 lg:grid-cols-2 flex flex-row items-center justify-between px-4 md:px-10 lg:px-10">
            <div class="align-middle mt-28 ">
                <div>
                    <h2 class="mt-3 sal-hero-title-home text-center md:text-justify lg:text-justify"><?php the_field('home_hero_title'); ?></h2>
                    <p class="mt-3 sal-lead-home  text-center md:text-justify lg:text-justify"><?php the_field('home_hero_sub_text'); ?></p>
                </div>
                <div class="m-0 my-5 rounded-md flex justify-center md:flex-none lg:flex-none md:justify-start lg:justify-start">
                    <a href="<?php the_field('home_hero_button_link') ?>"
                       class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600  sal-hero-btn-home"><?php the_field('home_hero_button_text') ?></a>
                </div>
                <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-3 sal-counter-wrapper">

		            <?php

		            if (have_rows("home_counter")):
			            while(have_rows("home_counter")): the_row();
				            if (get_row_layout() == "home_counter_section"):

					            $counters = get_sub_field("home_counter_item");

					            foreach ($counters as $counter):


						            ?>
                                    <div class="sal-counter-item">
                                        <div class="sal-count mb-3"><?php echo $counter["home_counter_number"]?></div>
                                        <span><?php echo $counter["home_counter_caption"]?></span>
                                    </div>

					            <?php
					            endforeach;
				            endif;
			            endwhile;
		            endif; ?>
                </div>
            </div>
            <div class="pt-8">
                    <span class="sal-hero-particle-cube-home"></span>
                    <span class="sal-hero-particle-cross-home"></span>
                    <span class="sal-hero-particle-ball-2-home"></span>
                    <span class="sal-hero-particle-ball-1-home"></span>
                    <span class="sal-hero-particle-ball-3-home"></span>
                    <span class="sal-hero-particle-triangle-home"></span>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/game-character.png"
                         class="sal-particle-game-character" alt="Game Character">
            </div>
		</div>
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 py-8 px-5 md:px-5 sm:px-5">
        <h2 class="sal-intro-title-home text-center my-6"><?php the_field("home_first_section_caption") ?></h2>
	    <?php $isec =  wp_get_attachment_image_src(get_field("home_first_section_image"), 'full'); ?>

        <img src="<?php echo $isec[0] ?>"
             class="mt-3 h-auto sal-games-home" alt="Our Games">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-8 px-5 md:px-5 sm:px-5">
        <div class="flex md:flex-none lg:flex-none md:justify-start lg:justify-start">
	        <?php $isec2 =  wp_get_attachment_image_src(get_field("home_about_image"), 'full'); ?>
            <img src="<?php echo $isec2[0] ?>" class="mx-auto md:mx-0 lg:mx-0" alt="About US">
        </div>
        <div class="px-5 md:px-0 lg:px-0 flex flex-col justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
            <div>

                <h2 class="sal-home-about-title text-center md:text-justify lg:text-justify">
		            <?php the_field("home_about_title"); ?>
                </h2>
                <p class="lead sal-lead-home my-5 text-center md:text-justify lg:text-justify">
	                <?php the_field("home_about_description"); ?></p>
            </div>
            <div class="m-0 my-5 rounded-md flex justify-center md:flex-none lg:flex-none md:justify-start lg:justify-start">
                <a href="<?php the_field( "home_about_button_link" ); ?>"
                   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 sal-hero-btn-home"><?php the_field("home_about_button_text"); ?></a>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-8 px-5 md:px-5 sm:px-5">
        <div class="px-5 md:px-5 lg:px-5 flex flex-col flex-nowrap justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
            <div>
                <h2 class="sal-home-title text-center md:text-justify lg:text-justify">
	                <?php the_field("home_card_row_title"); ?>
                </h2>
                <p class="lead sal-lead-home my-5 text-center md:text-justify lg:text-justify">
	                <?php the_field("home_card_row_description"); ?>
                </p>
            </div>
            <div class="m-0 my-5 rounded-md flex justify-center md:flex-none lg:flex-none md:justify-start lg:justify-start">
                <a href="<?php the_field("home_card_row_button_link"); ?>"
                   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600  sal-hero-btn-home"><?php the_field("home_card_row_button_text"); ?></a>
            </div>
        </div>

        <div class="flex md:flex-none lg:flex-none md:justify-start lg:justify-start">

            <div class="grid grid-flow-row-dense grid-cols-1 grid-rows-1 md:grid-cols-2 md:grid-rows-2 lg:grid-cols-2 lg:grid-rows-2 gap-4">
	            <?php



	            if (have_rows("home_cards")):
		            while(have_rows("home_cards")): the_row();
			            if (get_row_layout() == "home_card_section"):

				            $cards = get_sub_field("home_card_items");

				            foreach ($cards as $card):

					            $icon = wp_get_attachment_image_src($card["home_card_icon"], 'full');
					            ?>
                                <div class="sal-card-home">
                                    <div class="p-6 max-w-sm rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" >
                                        <img src="<?php echo $icon[0]?>"
                                             class="sal-card-icon-home" alt="Card Image">
                                        <a href="<?php echo $card["home_card_link"]?>">
                                            <h5 class="mb-2 sal-card-title-home tracking-tight text-white dark:text-white"><?php echo $card["home_card_title"]?></h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-500 sal-card-text-home  dark:text-gray-400"><?php echo $card["home_card_description"]?></p>
                                    </div>
                                </div>

				            <?php
				            endforeach;
			            endif;
		            endwhile;
	            endif; ?>
            </div>
        </div>

    </div>
    <div class="sal-parallax-home grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-8 px-5 md:px-5 sm:px-5">
        <div class="flex md:flex-none lg:flex-none md:justify-start lg:justify-start">
	        <?php $isec3 =  wp_get_attachment_image_src(get_field("home_parallax_one_image"), 'full'); ?>
            <img src="<?php echo $isec3[0] ?>" alt="Parallax Image">
        </div>
        <div class="px-5 py-5 md:py-0 lg:py-0 md:px-0 lg:px-0 flex flex-col justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
            <div>
                <h2 class="sal-title-parallax-2 text-center md:text-justify lg:text-justify">
	                <?php the_field("home_parallax_one_title"); ?>
                </h2>
                <p class="lead sal-lead-home my-5 text-center md:text-justify lg:text-justify">
	                <?php the_field("home_parallax_one_description"); ?></p>
            </div>
            <div class="m-0 my-5 rounded-md flex justify-center md:flex-none lg:flex-none md:justify-start lg:justify-start">
                <a href="<?php the_field( "home_parallax_one_button_link" ); ?>"
                   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 sal-hero-btn-home"><?php the_field( "home_parallax_one_button_text" ); ?></a>
            </div>
        </div>
    </div>
    <div class="sal-faq py-8 px-5 md:px-5 sm:px-5">
        <h2 class="sal-intro-title-home text-center my-6"><?php the_field( "home_accordion_section_header" ); ?></h2>

        <div id="accordion-collapse" class="my-6 ">
	        <?php



	        if (have_rows("home_accordion")):
		        while(have_rows("home_accordion")): the_row();
			        if (get_row_layout() == "home_accordion_section"):

				        $accordions = get_sub_field("home_accordion_item");
				        $x =1;
				        foreach ($accordions as $accordion):

					        ?>

                            <a  href="#accordion-<?php echo $x?>" class="accordion-toggle  flex flex-row justify-between w-full p-5 font-medium rounded text-white sal-bg-primary dark:text-white" >
                                    <span>
                                        <?php echo $accordion["home_accordion_title"] ?>
                                    </span>
                                    <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>

                            <div id="accordion-<?php echo $x?>" class="accordion-content">
                                <div class="p-5 font-light text-white sal-bg-primary">
                                    <p class="mb-2"><?php echo $accordion["home_accordion_description"] ?></p>
                                </div>
                            </div>
                            <br>

					        <?php
					        $x++;
				        endforeach;
			        endif;
		        endwhile;
	        endif; ?>
        </div>

    </div>
    <div class="sal-parallax-2-home grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-8 px-5 md:px-5 sm:px-5">
        <div class=" flex flex-col flex-nowrap justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
            <div>
                <h2 class="sal-hero-title-home py-3 text-black md:text-white lg:text-white">
					<?php the_field( "home_parallax_two_title" ); ?>
                </h2>
                <p class="sal-lead--parallax-2 py-3 text-neutral-900 md:text-white lg:text-white">
					<?php the_field( "home_parallax_two_description" ); ?> </p>
            </div>
        </div>

    </div>

    </div>
<?php
get_footer();