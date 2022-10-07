<?php
/*
Template Name: About
Post Type: page
*/
get_header();

?>
		<?php get_template_part( 'parts/breadcrumb' ); ?>


		<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-0 px-auto flex justify-between flex-col">
            <!--First Section-->
            <div class="">
            <article class="format lg:format-md text-justify py-5 px-5 md:px-5 sm:px-5">
				<?php the_field("about_intro_text"); ?>
            </article>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-5 px-5 md:px-5 sm:px-5">
                <div class="flex md:flex-none lg:flex-none md:justify-start lg:justify-start">
	                <?php $aimg =  wp_get_attachment_image_src(get_field("about_first_section_image"), 'full'); ?>
                    <img src="<?php echo $aimg[0] ?>" class="sal-mns-home" alt="Section Image">
                </div>
                <div class="px-5 md:px-0 lg:px-0 flex flex-col justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
                    <div>
                    <h2 class="sal-home-about-title">
		                <?php the_field("about_first_section_title"); ?>
                    </h2>
                        <p class="lead sal-lead-home my-5 ">
		                    <?php the_field("about_first_section_description"); ?> </p>
                    </div>
                        <div class="m-0 my-5 rounded-md flex md:flex-none lg:flex-none md:justify-start lg:justify-start">
                            <a href="<?php the_field("about_first_section_button_link"); ?>"
                               class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 sal-hero-btn-home"><?php the_field("about_first_section_button_text"); ?></a>
                        </div>
                </div>
            </div>

<!--Second Section-->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-5 px-5 md:px-5 sm:px-5">
                <div class="px-5 md:px-5 lg:px-5 flex flex-col flex-nowrap justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
                    <div>
                        <h2 class="sal-home-about-title ">
				            <?php the_field("about_second_section_title"); ?>
                        </h2>
                        <p class="lead sal-lead-home my-5">
				            <?php the_field("about_second_section_description"); ?>
                        </p>
                    </div>
                    <div class="m-0 my-5 rounded-md">
                        <a href="<?php the_field("about_second_section_button_link"); ?>"
                           class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600  sal-hero-btn-home"><?php the_field("about_second_section_button_text"); ?></a>
                    </div>
                </div>

                <div class="flex md:flex-none lg:flex-none md:justify-start lg:justify-start">

                    <div class="grid grid-flow-row-dense grid-cols-1 grid-rows-1 md:grid-cols-2 md:grid-rows-2 lg:grid-cols-2 lg:grid-rows-2 gap-4">

		                <?php

		                if (have_rows("about_second_section_card")):
			                while(have_rows("about_second_section_card")): the_row();
				                if (get_row_layout() == "about_second_section_card_section"):

					                $cards = get_sub_field("about_card_items");

					                foreach ($cards as $card):

						                $icon = wp_get_attachment_image_src($card["about_card_icon"], 'full');
						                ?>
                                        <div class="sal-card-home">
                                            <div class="p-6 max-w-sm rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700" >
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

			<!--Third Section -->
            <div class="sal-parallax-home grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 py-5 px-5 md:px-5 sm:px-5">
                <div class="flex md:flex-none lg:flex-none md:justify-start lg:justify-start">
	                <?php $aimg1 =  wp_get_attachment_image_src(get_field("about_first_parallax_one_image"), 'full'); ?>
                    <img src="<?php echo $aimg1[0] ?>" class="sal-mns-home" alt="Section Image One">
                </div>
                <div class="px-5 md:px-0 lg:px-0 flex flex-col justify-center md:flex md:flex-col md:justify-center lg:flex lg:flex-col lg:justify-center">
                    <div>
                    <h2 class="sal-home-about-title">
		                <?php the_field("about_parallax_one_title"); ?>
                    </h2>
                    <p class="lead sal-lead-home my-5 ">
		                <?php the_field("about_parallax_one_description"); ?> </p>
                    </div>
                    <div class="m-0 my-5 rounded-md flex md:flex-none lg:flex-none md:justify-start lg:justify-start">
                        <a href="<?php the_field("about_first_section_button_link"); ?>"
                           class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 sal-hero-btn-home"><?php the_field("about_first_section_button_text"); ?></a>
                    </div>
                </div>
            </div>


			<!--Fifth Section-->
			<div class="sal-faq container  mx-auto p-12 w-3/3">
				<h2 class="sal-intro-title-home text-center my-6"><?php the_field("about_accordion_header"); ?></h2>

				<div id="accordion-collapse" data-accordion="collapse" class="my-6 ">
					<?php



					if (have_rows("about_accordion")):
						while(have_rows("about_accordion")): the_row();
							if (get_row_layout() == "about_accordion_section"):

								$accordions = get_sub_field("about_accordion_items");
								$x =0;
								foreach ($accordions as $accordion):

									?>

                                    <h2 id="accordion-collapse-heading-<?php echo $x?>">
                                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left rounded focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 text-white sal-bg-primary dark:text-white" data-accordion-target="#accordion-collapse-body-<?php echo $x?>"<?php if ($x == 0) :?> aria-expanded="true" <?php endif; ?> aria-controls="accordion-collapse-body-<?php echo $x?>">
                                            <span><?php echo $accordion["about_accordion_title"] ?></span>
                                            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-<?php echo $x?>" class="" aria-labelledby="accordion-collapse-heading-<?php echo $x?>">
                                        <div class="p-5 font-light text-white sal-bg-primary">
                                            <p class="mb-2"><?php echo $accordion["about_accordion_description"] ?></p>
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

			<!--- Sixth Section-->

			<div class="sal-parallax-2-home px-8 py-8">
                <h2 class="sal-hero-title-home py-3">
					<?php the_field("about_parallax_two_title"); ?>
                </h2>
                <p class="lead sal-lead-home py-3 text-white" style="color:#fff !important;">
					<?php the_field("about_parallax_two_description"); ?> </p>
			</div>
		</div>

<?php

get_footer();
