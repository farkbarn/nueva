<?php
$to = "frankb2320@gmail.com";
$subject = "Learning how to send an Email in WordPress";
$content = "WordPress <b>knowledge<b>";
add_filter( 'wp_mail_content_type', 'set_html_content_type' );
$status = wp_mail($to, $subject, $content);
// Reset content-type to avoid conflicts -- http://core.trac.wordpress.org/ticket/23578
remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
function set_html_content_type() {
	return 'text/html';
}

echo 'done';
?>
