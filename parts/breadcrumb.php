<?php
if(!is_front_page()):

	$desc = (is_page("about"))?get_field("about_breadcrumb"):get_field("careers_breadcrumb");
	?>
	<div class="sal-hero-bg relative">
		<span class="sal-hero-particle-cube"></span>
		<span class="sal-hero-particle-triangle"></span>
		<span class="sal-hero-particle-cross"></span>
		<span class="sal-hero-particle-ball-1"></span>
		<span class="sal-hero-particle-ball-2"></span>
		<div class="mx-auto max-w-7xl py-40 px-4 sm:px-6 lg:flex lg:items-center lg:justify-center lg:py-16 lg:px-8 flex flex-col items-center justify-center" style="height: 70vh">
			<h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
				<?php if (is_404()){ ?>
					<span class="block sal-breadcrumb-title"><?php echo "404" ?> </span>
					<p class="lead sal-lead mt-2 text-center">Page not found</p>
				<?php }else { ?>
					<span class="block sal-breadcrumb-title"><?php the_title() ?> </span>
					<p class="lead sal-lead mt-2 text-center"><?php echo $desc ?></p>
				<?php } ?>
			</h2>
		</div>
	</div>

<?php
endif;