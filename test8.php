<?php
//create a unique id so we cachebust
$id = uniqid(rand(),true);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Media Query Test: Background Image with Cascade Override and Media Query Overlap</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

	<link rel="stylesheet" href="_css/style.css" />

	
	<!-- Test 4 Styles -->
	<style type="text/css">
	#test8 {background-image:url('images/desktop.png?<?php echo $id; ?>');width:200px;height:75px;}
	@media all and (max-width: 599px) {
	    #test8 {background-image:url('images/test8-599.png?<?php echo $id; ?>');}
	}
	@media all and (max-width: 600px) {
	    #test8 {background-image:url('images/test8-600.png?<?php echo $id; ?>');}
	}
	</style>
</head>
<body>
<h1>Media Query Image Download Test</h1>

<p>Thanks to <a href="http://zomigi.com/">Zoe Gillenwater</a> for the suggestion!</p>

<h2 id="t4">Test Eight: Background Image with Cascade Override and Media Query Overlap</h2>
<p>
    In this test, we start with a css background image that is a desktop version of the image. Then we use a css media query (max-width: 599px) to replace that background image with a mobile version of the image. We also have another media query (max-width: 600px) that overlaps. The goal is to discover if one, two or all three images are download when both media queries apply.
</p>

<div id="test8"></div>

<h4>HTML Code</h4>
<code>&lt;div id="test8"&gt;&lt;/div&gt;
</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;
#test8 {background-image:url('images/desktop.png?<?php echo $id; ?>');width:200px;height:75px;}
@media all and (max-width: 599px) {
    #test8 {background-image:url('images/test8-599.png?<?php echo $id; ?>');}
}
@media all and (max-width: 600px) {
    #test8 {background-image:url('images/test8-600.png?<?php echo $id; ?>');}
}
&#60;/style&#62;
</code>




<div id="loaded">
	<h2>Results</h2>
</div>
<?php include('includes/testLinks.inc.php'); ?>

<script type="text/javascript" src="_js/imageTest.js"></script>
<script type="text/javascript" charset="utf-8">
var _bTestResults = {};
window.onload = function() {

	//set the domain prefix so we can just pass image names
	prefix = 'images/';

	//set our suffix
    //needed because setting image.src fires request
    //this helps us avoid caching messing with the results
	suffix = '<?php echo $id; ?>';
	
	//get the div where we'll spit out the results
	target = document.getElementById('loaded');

	var images = [
		['desktop.png', 'Loaded (large screen)'],
		['test8-599.png', 'Loaded (599)'],
		['test8-600.png', 'Loaded (600)']
	];
	
	_bTestResults = imageTest(images);
	_bTestResults['Screen Width'] = screen.width;
	_bTestResults['Outer Width'] = window.outerWidth;
	
	// Fetch the Browserscope script that sucks the results from _bTestResults
	(function() {
		var _bTestKey = 'agt1YS1wcm9maWxlcnINCxIEVGVzdBiWvt0QDA';
		var _bScript = document.createElement('script');
		_bScript.src = 'http://www.browserscope.org/user/beacon/' + _bTestKey;
		_bScript.src += '?sandboxid=6830885b48af78b';
		_bScript.setAttribute('async', 'true');
		var scripts = document.getElementsByTagName('script');
		var lastScript = scripts[scripts.length - 1];
		lastScript.parentNode.insertBefore(_bScript, lastScript);
	})(); 
}

</script>
</body>
</html>
