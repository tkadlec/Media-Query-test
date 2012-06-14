<?php
//create a unique id so we cachebust
$id = uniqid(rand(),true);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Media Query Test: Background Image Display None (max-device-width)</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

	<link rel="stylesheet" href="_css/style.css" />

	
	<!-- Test 6 Styles -->
	<style type="text/css">
	#test6 {background-image:url('images/test6.png?<?php echo $id; ?>');width:200px;height:75px;}
	@media all and (max-device-width: 600px) {
	    #test6 {display:none;}
	}
	</style>
</head>
<body>
<h1>Media Query Image Download Test</h1>

<p>Lovingly pulled from Cloud Four. <a href="http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/">Cloud Four article on media queries</a></p>

<h2 id="t6">Test Six: Background Image Display None (max-device-width)</h2>
<p>
    Should be same as test two, but testing it anyway out of curiousity.
</p>

<div id="test6"></div>

<h4>HTML Code</h4>
<code>&#60;div id="test6"&#62;&#60;/div&#62;</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;
#test6 {background-image:url('images/test6.png?<?php echo $id; ?>');width:200px;height:75px;}
@media all and (max-device-width: 600px) {
    #test6 {display:none;}
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
		['test6.png', 'Loaded']
	];
	
	_bTestResults = imageTest(images);

	// Fetch the Browserscope script that sucks the results from _bTestResults
	(function() {
		var _bTestKey = 'agt1YS1wcm9maWxlcnINCxIEVGVzdBj1teQNDA';
		var _bScript = document.createElement('script');
		_bScript.src = 'http://www.browserscope.org/user/beacon/' + _bTestKey;
		_bScript.src += '?sandboxid=ff40f9d9982889a';
		_bScript.setAttribute('async', 'true');
		var scripts = document.getElementsByTagName('script');
		var lastScript = scripts[scripts.length - 1];
		lastScript.parentNode.insertBefore(_bScript, lastScript);
	})();
}

</script>
</body>
</html>
