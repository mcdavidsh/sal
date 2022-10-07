

<?php

if ( 'posts' == get_option( 'show_on_front' ) ) {
include( 'template/home.php' );
} else {
include( get_page_template() );
}
