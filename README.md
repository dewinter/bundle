minifier
========

Minify css and javascript output

Example

	$css_files = array(
		'bootstrap.css',
		'main.css'
	);
	bundle_css($css_files);

	$js_files = array(
		'jquery.min.js',
		'jquery.validate.min.js',
		'bootstrap-select.js',
		'bootstrap.min.js',
		'mootool.min.js',
		'bootstrap-datepicker.js',
		'jquery.complexify.min.js'
	);
	bundle_js($js_files);
