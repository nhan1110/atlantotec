<?php
$file = file_get_contents('./falang.sql', FILE_USE_INCLUDE_PATH);

preg_match_all("'<a [^>]+>(.*?)</a>'si",$file, $result); 



foreach ($result[0] as $key => $value) {
	echo '<pre>';
	print_r(htmlentities($value));
	echo '</pre>';
}