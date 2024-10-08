<?php
get_header();
get_template_part('MainPage');
// the_title();
the_content();

get_footer();
$pageId = get_the_ID();
// echo $pageId;
?>

