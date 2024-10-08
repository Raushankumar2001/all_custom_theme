<?php
$source = get_the_id();
if(have_rows('main_section', $source)) {
	while (have_rows( 'main_section', $source)) {
		the_row();
		get_template_part('NewBLock/'.get_row_layout());
	}
}
?>