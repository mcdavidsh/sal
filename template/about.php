<?php
/*
Template Name: About
Post Type: page
*/
get_header();

get_template_part( 'parts/breadcrumb' ); ?>


    <div class="container mx-auto">
        <!--First Section-->
        <div class="">
            <article class="format lg:format-md text-justify py-8 px-5 md:px-5 sm:px-5">
				<?php the_field( "about_intro_text" ); ?>
            </article>
        </div>
<!-- About Us -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-8 px-5 md:px-5 sm:px-5">
            <div class="flex justify-center md:flex-none lg:flex-none md:justify-start lg:justify-start">
				<?php $isec2 =  wp_get_attachment_image_src(get_field("about_first_section_image"), 'full'); ?>
                <!--            <img src="--><?php //echo $isec2[0] ?><!--" class="mx-auto object-center" alt="About US">-->
                <img src="<?php echo get_template_directory_uri()?>/assets/img/monster.png" class="mx-auto object-center" alt="About US">
            </div>
            <div class="px-5 md:px-0 lg:px-0 flex flex-col justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
                <div>

                    <h2 class="sal-home-about-title text-center md:text-justify lg:text-justify sal-section-title">
						<?php the_field("about_first_section_title"); ?>
                    </h2>
                    <p class="lead sal-section-text my-5 text-center md:text-justify lg:text-justify">
						<?php the_field("about_first_section_description"); ?></p>
                </div>
                <div class="m-0 my-5 rounded-md flex justify-center md:flex-none lg:flex-none md:justify-start lg:justify-start">
                    <a href="<?php the_field( "about_first_section_button_link" ); ?>"
                       class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 sal-hero-btn-home"><?php the_field("about_first_section_button_text"); ?></a>
                </div>
            </div>
        </div>
<!--Second Section-->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-8 px-5 md:px-5 sm:px-5">
            <div class="px-5 md:px-5 lg:px-5 flex flex-col flex-nowrap justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
                <div >
                    <h2 class="text-center md:text-justify lg:text-justify sal-section-title">
						<?php the_field("about_second_section_title"); ?>
                    </h2>
                    <p class="lead sal-section-text my-5 text-center md:text-justify lg:text-justify">
						<?php the_field("about_second_section_description"); ?>
                    </p>
                </div>
                <div class="m-0 my-5 rounded-md flex justify-center md:flex-none lg:flex-none md:justify-start lg:justify-start">
                    <a href="<?php the_field("about_second_section_button_link"); ?>"
                       class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600  sal-hero-btn-home"><?php the_field("about_second_section_button_text"); ?></a>
                </div>
            </div>

            <div class="flex justify-center md:flex lg:flex md:justify-center lg:justify-center">

                <div class="grid grid-flow-row-dense grid-cols-1  grid-rows-1 md:grid-cols-2 md:gap-8 md:grid-rows-2 lg:grid-cols-2 lg:grid-rows-2 lg:gap-8 gap-8 ">
					<?php



					if (have_rows("about_second_section_card")):
						while(have_rows("about_second_section_card")): the_row();
							if (get_row_layout() == "about_second_section_card_section"):

								$cards = get_sub_field("about_card_items");

								foreach ($cards as $card):

									$icon = wp_get_attachment_image_src($card["about_card_icon"], 'full');
									?>
                                    <div class="sal-card-home">
                                        <div class="p-2  rounded-lg dark:bg-gray-800 dark:border-gray-700" >
                                            <img src="<?php echo $icon[0]?>"
                                                 class="sal-card-icon-home" alt="Card Image">
                                            <a href="<?php echo $card["about_card_link"]?>">
                                                <h5 class="mb-2 sal-card-title-home tracking-tight text-white dark:text-white"><?php echo $card["about_card_title"]?></h5>
                                            </a>
                                            <p class="mb-3 font-normal text-gray-500 sal-card-text-home  dark:text-gray-400"><?php echo $card["about_card_description"]?></p>
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
    </div>
<!--First Parallax-->
    <div class="sal-parallax-home grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 px-8 md:px-8 sm:px-8">
        <div class="flex md:flex-none lg:flex-none md:justify-start lg:justify-start ">
			<?php $isec3 =  wp_get_attachment_image_src(get_field("about_first_parallax_one_image"), 'full'); ?>
            <img src="<?php echo $isec3[0] ?>" class="sal-parallax-one-image-lg sal-parallax-one-image" alt="Parallax Image">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/social-icons-mobile.png" class="sal-parallax-one-image-sm sal-parallax-one-image mx-auto" alt="Parallax Image">
        </div>
        <div class="my-4 md:py-0 lg:py-0 md:px-0 lg:px-0 flex flex-col justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
            <div>
                <h2 class="sal-section-title text-center md:text-justify lg:text-justify mt-2">
					<?php the_field("about_parallax_one_title"); ?>
                </h2>
                <p class="lead sal-section-text my-5 text-center md:text-justify lg:text-justify">
					<?php the_field("about_parallax_one_description"); ?></p>
            </div>
            <div class="m-0 my-5 rounded-md flex justify-center md:flex-none lg:flex-none md:justify-start lg:justify-start">
                <a href="<?php the_field( "about_parallax_one_button_link" ); ?>"
                   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 sal-hero-btn-home"><?php the_field( "about_parallax_one_button_text" ); ?></a>
            </div>
        </div>
    </div>
<!--Accordion-->
    <div class="container mx-auto">
        <div class="sal-faq py-8 px-5 md:px-5 sm:px-5">
            <h2 class="sal-section-title text-center my-6"><?php the_field( "home_accordion_section_header" ); ?></h2>

            <div id="accordion-collapse" class="my-6">
				<?php



				if (have_rows("about_accordion")):
					while(have_rows("about_accordion")): the_row();
						if (get_row_layout() == "about_accordion_section"):

							$accordions = get_sub_field("about_accordion_items");
							$x =1;
							foreach ($accordions as $accordion):

								?>
                                <div class="sal-accordion-container">
                                    <div  data-target="#accordion-<?php echo $x?>" class="cursor-pointer accordion-toggle rounded-xl accordion-header flex flex-row justify-between w-full p-5 font-medium text-white sal-bg-primary dark:text-white" >
                                    <span>
                                        <?php echo $accordion["about_accordion_title"] ?>
                                    </span>
                                        <svg data-accordion-icon="" class="w-6 h-6 accordion-arrow rotate-90 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </div>

                                    <div id="accordion-<?php echo $x?>" class="accordion-content rounded-b">
                                        <div class="p-5 sal-bg-primary rounded-b">
                                            <p class="mb-2"><?php echo $accordion["about_accordion_description"] ?></p>
                                        </div>
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
    </div>
<!--Last Parallax-->
    <div class="sal-parallax-2-home grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-8 px-8 md:px-8 sm:px-8">
        <div class=" flex flex-col flex-nowrap justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
            <div>
                <h2 class="sal-title-parallax-2 md:py-3 lg:py-3 py-0 text-black md:text-white lg:text-white">
	                <?php the_field( "about_parallax_two_title" ); ?>
                </h2>
                <p class="sal-lead--parallax-2 md:py-3 lg:py-3 py-0 text-neutral-900 md:text-white lg:text-white">
	                <?php the_field( "about_parallax_two_description" ); ?></p>
            </div>
        </div>

    </div>

<?php

get_footer();
