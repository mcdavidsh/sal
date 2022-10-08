<?php
/*
Template Name: Careers
Post Type: page
*/
get_header();


get_template_part( 'parts/breadcrumb' );
?>

		<div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-0 px-auto flex justify-between flex-col">
            <!--Second Second-->
			<?php
            if (have_rows("careers_cards")):
				while(have_rows("careers_cards")): the_row();
					if (get_row_layout() == "careers_card_section"):

						$cards = get_sub_field("careers_card_item");

						foreach ($cards as $card):

							$icon = wp_get_attachment_image_src($card["careers_card_image"], 'full');
							?>
                            <div class="container md:mx-auto py-8 px-5 md:px-5 sm:px-5">
                                <div class="grid grid-cols-1 gap-5 gap-y-5 md:grid-cols-1 sm:grid-cols-1">
                                    <div class="sal-card-home-wide rounded-lg shadow-md">
                                        <div class="lg:p-8 md:p-4 sm:p-4 px-12 dark:bg-gray-800">
                                            <div class="sal-card-header py-5">
                                                <img src="<?php echo $icon[0]?>"
                                                     class="sal-card-icon" alt="card image">
                                                <a href="#" class="ml-2">
                                                    <h5 class="sal-card-title tracking-tight text-white dark:text-white"><?php echo $card["careers_card_title"] ?>
                                                    </h5>
                                                    <small class="mt-0"><?php echo $card["careers_card_sub_text"] ?></small>
                                                </a>
                                            </div>

                                            <p class="py-5 font-normal text-gray-500 sal-card-text  dark:text-gray-400"><?php echo $card["careers_card_description"] ?></p>
                                            <div class="py-5 rounded-md flex items-center justify-center lex items-center justify-center">
                                                <a href="<?php echo $card["careers_card_button_link"] ?>"
                                                   class="inline-flex items-center justify-center rounded-md border border-transparent px-5 py-3 text-base font-medium text-indigo-600 sal-hero-btn-home"><?php echo $card["careers_card_button_text"] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php
						endforeach;
					endif;
				endwhile;
			endif; ?>
			<!--Fourth Section -->

		</div>


<?php
get_footer();
