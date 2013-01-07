<?php
//create a unique id so we cachebust
$id = uniqid(rand(),true);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Media Query Test: Background Image with Mobile First Cascade Override</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

	<link rel="stylesheet" href="_css/style.css" />

	
	
	<!-- Test 10 Styles -->
	<style type="text/css">
	#test10 {background-image:url('images/mobile.png?<?php echo $id; ?>');width:200px;height:75px;}
	@media all and (min-width: 600px) {
	    #test10 {background-image:url('images/desktop.png?<?php echo $id; ?>');}
	}
	</style>
</head>
<body>
<h1>Media Query Image Download Test</h1>

<p>Thanks to <a href="http://thesquareplanet.com/">Jon Gjengset</a> for the suggestion!</p>

<h2 id="t10">Test Ten: Background Image with Mobile First Cascade Override</h2>
<p>
  In this test, we start with a css background image that is a mobile version of the image. Then we use a css media query to replace that background image with the desktop version using min-width.
  This is effectively the opposite of test four, and was added on the intuition that the introduction of min-width might be what is making test 5 work.
</p>

<div id="test10"></div>

<h4>HTML Code</h4>
<code>&lt;div id="test10"&gt;&lt;/div&gt;
</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;
#test10 {background-image:url('images/mobile.png?<?php echo $id; ?>');width:200px;height:75px;}
@media all and (min-width: 600px) {
    #test10 {background-image:url('images/desktop.png?<?php echo $id; ?>');}
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
		['mobile.png', 'Loaded (small screen)']
	];
	
	_bTestResults = imageTest(images);

	// Fetch the Browserscope script that sucks the results from _bTestResults
	(function() {
		var _bTestKey = 'agt1YS1wcm9maWxlcnINCxIEVGVzdBjEv-INDA';
		var _bScript = document.createElement('script');
		_bScript.src = 'http://www.browserscope.org/user/beacon/' + _bTestKey;
		_bScript.src += '?sandboxid=5a813c709f8ee42';
		_bScript.setAttribute('async', 'true');
		var scripts = document.getElementsByTagName('script');
		var lastScript = scripts[scripts.length - 1];
		lastScript.parentNode.insertBefore(_bScript, lastScript);
	})();
}

</script>
</body>
</html>
