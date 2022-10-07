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
	<div class="sal-hero-bg-home relative">
		<div class="mx-auto max-w-7xl py-8 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8 h-screen">
			<div class="mt-8 flex lg:mt-0 lg:flex-shrink-0 ">
				<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
					<h2 class="mt-3 sal-hero-title-home"><?php the_field('home_hero_title'); ?></h2>
					<p class="mt-3 sal-lead-home  lead"><?php the_field('home_hero_sub_text'); ?></p>
					<div class="m-0 mt-3 inline-flex rounded-md shadow">
						<a href="<?php the_field('home_hero_button_link') ?>"
						   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600  sal-hero-btn-home"><?php the_field('home_hero_button_text') ?></a>
					</div>
					<div class="grid grid-cols-3 gap-x-0 gap-y-0 gap-4 my-8 sal-counter-wrapper w-3/5">

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
			</div>

			<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4x l ">
				<span class="sal-hero-particle-cube-home"></span>
				<span class="sal-hero-particle-cross-home"></span>
				<span class="sal-hero-particle-ball-2-home"></span>
				<span class="sal-hero-particle-ball-1-home"></span>
				<span class="sal-hero-particle-ball-3-home"></span>
				<span class="sal-hero-particle-triangle-home"></span>
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/game-character.png"
				     class="sal-particle-game-character z-10">
			</div>
		</div>
	</div>
	<div class="grid px-0">
		<!--First Section-->
		<div class="grid">
			<h2 class="sal-intro-title-home text-center my-6"><?php the_field("home_first_section_caption") ?></h2>
            <?php $isec =  wp_get_attachment_image_src(get_field("home_first_section_image"), 'full'); ?>

			<img src="<?php echo $isec[0] ?>"
			     class="mt-3 max-w-full h-auto sal-games-home" alt="Our Games">
		</div>

		<!--Second Second-->

		<div class="container md:mx-auto md:px-8">
			<div class="mx-auto max-w-7xl py-8 px-4 sm:px-6 md:flex md:items-center md:justify-between md:py-16 md:px-8 md:h-screen">
				<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4x l ">
					<?php $isec2 =  wp_get_attachment_image_src(get_field("home_about_image"), 'full'); ?>
					<img src="<?php echo $isec2[0] ?>" class="sal-mns-home" alt="About US">
				</div>
				<div class="mt-8 flex lg:mt-0 lg:flex-shrink-0 ">
					<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
						<h2 class="sal-home-about-title">
							<?php the_field("home_about_title"); ?>
						</h2>
						<p class="lead sal-lead-home my-5 ">
							<?php the_field("home_about_description"); ?></p>
						<div class="m-0 my-5 inline-flex rounded-md shadow">
							<a href="<?php the_field("home_about_button_link"); ?>"
							   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50 sal-hero-btn-home"><?php the_field("home_about_button_text"); ?></a>
						</div>
					</div>
				</div>
			</div>

			<!---Third Section-->
			<div class="mx-auto max-w-7xl py-8 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8 h-screen">
				<div class="mt-8 flex lg:mt-0 lg:flex-shrink-0 ">
					<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
						<h2 class="sal-home-about-title">
							<?php the_field("home_card_row_title"); ?>
						</h2>
						<p class="lead sal-lead-home my-5 ">
							<?php the_field("home_card_row_description"); ?> </p>
						<div class="m-0 my-5 inline-flex rounded-md shadow">
							<a href="<?php the_field("home_card_row_button_link"); ?>"
							   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50 sal-hero-btn-home"><?php the_field("home_card_row_button_text"); ?></a>
						</div>
					</div>
				</div>
				<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4x l ">


					<div class="grid grid-cols-2 gap-5 gap-y-5">


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
		</div>

		<!--Fourth Section -->

		<div class="sal-parallax-home">
			<div class="max-w-7xl py-8 px-4 sm:px-6 md:flex md:items-center lg:justify-between md:py-0">
				<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4x mr-8 ">
					<?php $isec3 =  wp_get_attachment_image_src(get_field("home_parallax_one_image"), 'full'); ?>
					<img src="<?php echo $isec3[0] ?>" alt="Parallax Image">
				</div>
				<div class="mt-8 ml-12 flex lg:flex-shrink-0 ">
					<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
						<h2 class="sal-home-about-title">
							<?php the_field("home_parallax_one_title"); ?>
						</h2>
						<p class="lead sal-lead-home my-5 ">
							<?php the_field("home_parallax_one_description"); ?></p>
						<div class="m-0 my-5 inline-flex rounded-md shadow">
							<a href="<?php the_field("home_parallax_one_button_link"); ?>"
							   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 hover:bg-indigo-50 sal-hero-btn-home"><?php the_field("home_parallax_one_button_text"); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Fifth Section-->
		<div class="sal-faq container  mx-auto p-12 w-3/4">
			<h2 class="sal-intro-title-home text-center my-6"><?php the_field("home_accordion_section_header"); ?></h2>


            <div>
                <h2 id="accordion-example-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" aria-expanded="true" aria-controls="accordion-example-body-1">
                        <span>What is Flowbite?</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-example-body-1" class="hidden" aria-labelledby="accordion-example-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-example-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" aria-expanded="false" aria-controls="accordion-example-body-2">
                        <span>Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-example-body-2" class="hidden" aria-labelledby="accordion-example-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-example-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" aria-expanded="false" aria-controls="accordion-example-body-3">
                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-example-body-3" class="hidden" aria-labelledby="accordion-example-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                            <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="accordion-collapse" data-accordion="" class="my-6 ">
				<?php



				if (have_rows("home_accordion")):
					while(have_rows("home_accordion")): the_row();
						if (get_row_layout() == "home_accordion_section"):

							$accordions = get_sub_field("home_accordion_item");
                        $x =0;
							foreach ($accordions as $accordion):

								?>

                                <h2 id="accordion-collapse-heading-<?php echo $x?>">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left rounded focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 text-white sal-bg-primary dark:text-white" data-accordion-target="#accordion-collapse-body-<?php echo $x?>"<?php if ($x == 0) :?> aria-expanded="true" <?php endif; ?> aria-controls="accordion-collapse-body-<?php echo $x?>">
                                        <span><?php echo $accordion["home_accordion_title"] ?></span>
                                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-<?php echo $x?>" class="" aria-labelledby="accordion-collapse-heading-<?php echo $x?>">
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

		<!--- Sixth Section-->

		<div class="sal-parallax-2-home">
			<div class="max-w-7xl py-8 px-4 sm:px-6 md:flex md:items-center lg:justify-between md:py-0">
				<div class="mt-8 ml-12 flex lg:flex-shrink-0 py-12">
					<div class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
						<h2 class="sal-hero-title-home">
							<?php the_field("home_parallax_two_title"); ?>
						</h2>
						<p class="lead sal-lead-home my-3 text-white" style="color:#fff !important;">
							<?php the_field("home_parallax_two_description"); ?> </p>

					</div>
				</div>
				<div>

				</div>
			</div>
		</div>
	</div>

<?php
get_footer();