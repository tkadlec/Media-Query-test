<?php
//create a unique id so we cachebust
$id = uniqid(rand(),true);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Media Query Test: Background Image Where Desktop Image Set with Min-Width</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

	<!-- Basic formatting stuff -->
    <style type="text/css">
	body {
		font: 100%/1.4em Georgia, serif;
	}
	h1 {
		line-height: 1.2em;
	}
	
	code {white-space:pre;background:#e1e1e1;border:1px solid #ccc;padding:10px;width:100%;display:block;margin-top:5px;}
	h4 {margin-bottom:0;}
	#loaded{
		border: 1px solid #000;
		padding: 20px;
		word-wrap:break-word;
	}
	
	.load{
		color: green;
	}
	.noload{
		color: red;
	}
	.testLinks{
		font-size: 1.2em;
	}
	.testLinks li{
		margin-bottom: .5em;
	}
	</style>

	
	<!-- Test 5 Styles -->
	<style type="text/css">
	    #test7 {background-image:url('images/test7-lowres.png?<?php echo $id; ?>');width:200px;height:75px;}
		@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
		only screen and (min--moz-device-pixel-ratio: 1.5),
		only screen and (-o-min-device-pixel-ratio: 3/2), 
		only screen and (min-device-pixel-ratio: 1.5)
		{
	    #test7 {background-image:url('images/test7-highres.png?<?php echo $id; ?>');width:200px;height:75px;}
	}
	</style>


	
	<script type="text/javascript">
	var startTime = (new Date().getTime());
	</script>
</head>
<body>
<h1>Media Query Image Download Test</h1>

<p>Lovingly pulled from Cloud Four. <a href="http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/">Cloud Four article on media queries</a></p>

<h2 id="t5">Test Seven: Cascade Override for High Resolution</h2>
<p>
    In this test, we start with a background image that is low res. Then we use a CSS media query to replace that background image if the it is a high resolution display.
</p>

<div id="test7"></div>

<h4>HTML Code</h4>
<code>&#60;div id="test7"&#62;&#60;/div&#62;</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;

    #test7 {background-image:url('images/test7-lowres.png?<?php echo $id; ?>');width:200px;height:75px;}

@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
only screen and (min--moz-device-pixel-ratio: 1.5),
only screen and (-o-min-device-pixel-ratio: 3/2), 
only screen and (min-device-pixel-ratio: 1.5) {
    #test7 {background-image:url('images/test7-highres.png?<?php echo $id; ?>');width:200px;height:75px;}
}
&#60;/style&#62;
</code>

<div id="loaded">
	<h2>Results</h2>
</div>
<?php include('includes/testLinks.inc.php'); ?>

<script type="text/javascript" charset="utf-8">
//use for browserscope
var _bTestResults = {};
//add the widths
_bTestResults['Pixel Ratio'] = window.devicePixelRatio;

window.onload = function() {

	//set the domain prefix so we can just pass image names
	var prefix = 'http://timkadlec.com/mq/';
	
	//set our suffix
    //needed because setting image.src fires request
    //this helps us avoid caching messing with the results
	var suffix = '<?php echo $id; ?>';
	
	//get the div where we'll spit out the results
	var target = document.getElementById('loaded');
	
    //now, create a new image and set it's src
    var image = new Image();
    image.src = 'http://timkadlec.com/mq/images/test7-lowres.png?' + suffix;
    
    if (image.complete || image.height > 0) {
        target.innerHTML += "<p class='load'>http://timkadlec.com/mq/images/test7-lowres.png?" + suffix + " has loaded.</p>";
        //save the result for Browserscope
        _bTestResults['Loaded (low res)'] = 1;
        
    } else {
        target.innerHTML += "<p class='noload'>http://timkadlec.com/mq/images/test7-lowres.png?" + suffix + " has not loaded.</p>";
        //save the result for Browserscope
        _bTestResults['Loaded (low res)'] = 0;
        
    }

    var imageM = new Image();
    imageM.src = 'http://timkadlec.com/mq/images/test7-highres.png?' + suffix;
    
    if (imageM.complete || imageM.height > 0) {
        target.innerHTML += "<p class='load'>http://timkadlec.com/mq/images/test7-highres.png?" + suffix + " has loaded.</p>";
        //save the result for Browserscope
        _bTestResults['Loaded (high res)'] = 1;
        
    } else {
        target.innerHTML += "<p class='noload'>http://timkadlec.com/mq/images/test7-highres.png?" + suffix + " has not loaded.</p>";
        //save the result for Browserscope
        _bTestResults['Loaded (high res)'] = 0;
        
    }

	// Fetch the Browserscope script that sucks the results from _bTestResults
	 (function() {
		var _bTestKey = 'agt1YS1wcm9maWxlcnINCxIEVGVzdBjj-d0ODA';
		var _bScript = document.createElement('script');
		_bScript.src = 'http://www.browserscope.org/user/beacon/' + _bTestKey;
		_bScript.src += '?sandboxid=44f7adc1dd3013d';
		_bScript.setAttribute('async', 'true');
		var scripts = document.getElementsByTagName('script');
		var lastScript = scripts[scripts.length - 1];
		lastScript.parentNode.insertBefore(_bScript, lastScript);
	})(); 
	
	
}

</script>
</body>
</html>
