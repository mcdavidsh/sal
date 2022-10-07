<?php
get_header();
 get_template_part( 'parts/breadcrumb' );
 ?>


<main
	aria-labelledby="pageTitle"
	class="flex items-center sal-secondary-dark-bg justify-center h-screen bg-gray-100 dark:bg-dark dark:text-light"
>
	<div class="p-4 space-y-4">
		<div class="flex flex-col items-start space-y-3 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-3">
			<p class="font-semibold sal-text-primary text-9xl dark:text-red-600">404</p>
			<div class="space-y-2">
				<h1 id="pageTitle" class="flex items-center space-x-2">

                        <span class="text-xl font-medium text-gray-600 sm:text-2xl dark:text-light">
                  Oops! Page not found.
                </span>
				</h1>
				<p class="text-base font-normal text-gray-600 dark:text-gray-300">
					<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'sal' ); ?>
				</p>
				<p class="text-base font-normal text-gray-600 dark:text-gray-300">
					You may return to
					<a href="<?php echo site_url() ?>"
					   class="text-blue-600 hover:underline dark:text-blue-500">home page</a> or try
					using the search form.
				</p>
			</div>
		</div>

		<form action="#" method="POST">
			<div class="flex items-center justify-center">
				<input
					type="text"
					name="search"
					placeholder="What are you looking for?"
					class="w-full px-4 py-2 rounded-l-md focus:outline-none focus:ring focus:ring-blue-400 dark:bg-darker dark:focus:ring-blue-800"
				/>
				<button
					class="p-2 text-white rounded-r-md sal-bg-primary dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 focus:outline-none focus:ring focus:ring-primary-light dark:focus:ring-primary-darker"
				>
					<span class="sr-only">Search</span>
					<svg
						aria-hidden="true"
						class="w-6 h-6 "
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke="currentColor"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
						/>
					</svg>
				</button>
			</div>
		</form>
	</div>
</main>

<?php
get_footer();