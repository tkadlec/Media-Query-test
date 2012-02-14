<?php
//create a unique id so we cachebust
$id = uniqid(rand(),true);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Media Query Test: Background Image with Cascade Override</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

	<!-- Basic formatting stuff -->
    <style type="text/css">
	body {
		font: 100%/1.4em Georgia, serif;
	}
	code {white-space:pre;background:#e1e1e1;border:1px solid #ccc;padding:10px;width:100%;display:block;margin-top:5px;}
	h4 {margin-bottom:0;}
	#loaded{
		border: 1px solid #000;
		padding: 20px;
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
	
	
	<!-- Test 4 Styles -->
	<style type="text/css">
	#test4 {background-image:url('test4-desktop.png?<?php echo $id; ?>');width:200px;height:75px;}
	@media all and (max-width: 600px) {
	    #test4 {background-image:url('test4-mobile.png?<?php echo $id; ?>');}
	}
	</style>

	
	<script type="text/javascript">
	var startTime = (new Date().getTime());
	</script>
</head>
<body>
<h1>Media Query Image Download Test</h1>

<p>Lovingly pulled from Cloud Four. <a href="http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/">Cloud Four article on media queries</a></p>

<h2 id="t4">Test Four: Background Image with Cascade Override</h2>
<p>
    In this test, we start with a css background image that is a desktop version of the image. Then we use a css media query to replace that background image with a mobile version of the image.
</p>

<div id="test4"></div>

<h4>HTML Code</h4>
<code>&lt;div id="test4"&gt;&lt;/div&gt;
</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;
#test4 {background-image:url('test4-desktop.png?<?php echo $id; ?>');width:200px;height:75px;}
@media all and (max-width: 600px) {
    #test4 {background-image:url('test4-mobile.png?<?php echo $id; ?>');}
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
_bTestResults['Screen Width'] = screen.width;
_bTestResults['Outer Width'] = window.outerWidth;

window.onload = function() {

	//set our suffix
    //needed because setting image.src fires request
    //this helps us avoid caching messing with the results
	var suffix = '<?php echo $id; ?>';
	
	//get the div where we'll spit out the results
	var target = document.getElementById('loaded');
	
    //now, create a new image and set it's src
    var image = new Image();
    image.src = 'http://timkadlec.com/mq/test4-desktop.png?' + suffix;
    
    if (image.complete) {
        target.innerHTML += "<p class='load'>http://timkadlec.com/mq/test4-desktop.png?" + suffix + " has loaded.</p>";
        //save the result for Browserscope
        _bTestResults['Loaded (large screen)'] = 1;
        
    } else {
        target.innerHTML += "<p class='noload'>http://timkadlec.com/mq/test4-desktop.png?" + suffix + " has not loaded.</p>";
        //save the result for Browserscope
        _bTestResults['Loaded (large screen)'] = 0;
        
    }

    var imageM = new Image();
    imageM.src = 'http://timkadlec.com/mq/test4-mobile.png?' + suffix;
    
    if (imageM.complete) {
        target.innerHTML += "<p class='load'>http://timkadlec.com/mq/test4-mobile.png?" + suffix + " has loaded.</p>";
        //save the result for Browserscope
        _bTestResults['Loaded (small screen)'] = 1;
        
    } else {
        target.innerHTML += "<p class='noload'>http://timkadlec.com/mq/test4-mobile.png?" + suffix + " has not loaded.</p>";
        //save the result for Browserscope
        _bTestResults['Loaded (small screen)'] = 0;
        
    }

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
