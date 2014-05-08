<?php
/**
* bundle css to make it load faster
*
* @param array $files
* @param str $type
*/
function bundle_css($files){
	header('Content-type: text/css');
	$output = '';
	foreach($files as $file){
		$output .= "\n\n". file_get_contents($file);
	}
	/* remove comments */
	$output = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $output);

	/* remove tabs, spaces, newlines, etc. */
	$output = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $output);
	header('Content-type: text/css');
	echo $output;
}

/**
* bundle javascript to make it load faster
*
* @param array $files
* @param str $type
*/
function bundle_js($files){
	$output = '';
	foreach($files as $file){
		$output .= "\n\n". file_get_contents($file);
	}

	header('Content-Type: application/javascript');
	echo $output;
}
?>