<?php
get_header();
if (is_page("home")){
	get_template_part("template/home");
}else {

get_template_part( 'parts/breadcrumb' );
get_page_template();
}

get_footer();