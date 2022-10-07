<?php
get_header();
if (is_page("home")){
	get_template_part("template/home");
}

get_footer();