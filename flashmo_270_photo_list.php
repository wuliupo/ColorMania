<?php
header("Content-type: text/xml");
?>
<?xml version="1.0" encoding="utf-8"?>
<photos>
	<config
		folder="photos/"
		thumbnail_black_white="false"
		thumbnail_alpha="1"
		thumbnail_x_spacing="3"
		thumbnail_y_spacing="3"
		max_thumbnail_width="150"
		max_thumbnail_height="150"
		thumbnail_border_size="0"
		thumbnail_border_color="#FFFFFF"
		no_of_rows="4"
		no_of_columns="6"
		
		photo_border_size="5"
		photo_border_color="#FFFFFF"
		close_button="true"
		previous_button="true"
		next_button="true"
		
		description="false"
		description_bg_color="#000000"
		description_bg_alpha="0.7"
		css_file="flashmo_210_style.css"
		
		tween_effect="easeInOutQuart"
		tween_duration="0.6"
		tween_delay="0.03">
	</config>
<?php
$current_dir = opendir('photos');
while(($file = readdir($current_dir)) !== false) {
	if(strpos($file, 's_') === 0 && strpos($file, '.jpg') > 0) {
		echo '<photo><thumbnail>'.$file.'</thumbnail><filename>'.substr($file, 2).'</filename><description></description></photo>';
	}
}
?>
</photos>