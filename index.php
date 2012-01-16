<?php
//create a unique id so we cachebust
$id = uniqid(rand(),true);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Media Query Test</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

	<!-- Basic formatting stuff -->
	<style type="text/css">
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
	</style>
	
	<!-- Test 1 Styles -->
	<style type="text/css">
	@media all and (max-width: 500px) {
	    #test1 {
	        display:none;
	    }
	    
	}
	</style>
	<!-- Test 2 Styles -->
	<style type="text/css">
	#test2 {background-image:url('test2.png?<?php echo $id; ?>');width:200px;height:75px;}
	@media all and (max-width: 500px) {
	    #test2 {display:none;}
	}
	</style>
	
	<!-- Test 3 Styles -->
	<style type="text/css">
	#test3 div {background-image:url('test3.png?<?php echo $id; ?>');width:200px;height:75px;}
	@media all and (max-width: 500px) {
	    #test3 {display:none;}
	}
	</style>
	
	<!-- Test 4 Styles -->
	<style type="text/css">
	#test4 {background-image:url('test4-desktop.png?<?php echo $id; ?>');width:200px;height:75px;}
	@media all and (max-width: 500px) {
	    #test4 {background-image:url('test4-mobile.png?<?php echo $id; ?>');}
	}
	</style>
	
	<!-- Test 5 Styles -->
	<style type="text/css">
	@media all and (min-width: 501px) {
	    #test5 {background-image:url('test5-desktop.png?<?php echo $id; ?>');width:200px;height:75px;}
	}
	@media all and (max-width: 500px) {
	    #test5 {background-image:url('test5-mobile.png?<?php echo $id; ?>');width:200px;height:75px;}
	}
	</style>
	
	<!-- Test 6 Styles -->
	<style type="text/css">
	#test6 {background-image:url('test6.png?<?php echo $id; ?>');width:200px;height:75px;}
	@media all and (max-device-width: 500px) {
	    #test6 {display:none;}
	}
	</style>
	
	
</head>
<body>
<h1>Media Query Image Download Test</h1>
<p><a href="http://www.browserscope.org/user/tests/table/agt1YS1wcm9maWxlcnINCxIEVGVzdBiolegMDA?v=3&layout=simple&f=Image%20Tag,BG%20Image%20Display%20None%20(max-width),BG%20Image%20Parent%20Object%20Set%20to%20Display%20None,BG%20Image%20with%20Cascade%20Override%20(Mobile),BG%20Image%20with%20Cascade%20Override%20(Desktop),BG%20Image%20Where%20Desktop%20Image%20Set%20with%20Min-Width%20(Mobile),BG%20Image%20Where%20Desktop%20Image%20Set%20with%20Min-Width%20(Desktop),BG%20Image%20Display%20None%20(max-device-width)&highlight=1">View results</a></p>
<p>Lovingly pulled from Cloud Four. <a href="http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/">Cloud Four article on media queries</a></p>

<h2 id="t1">Test One: Image Tag</h2>
<p>
    Simple image tag that will show up when page is greater than 500 pixels wide, but are hidden on smaller screens.
</p>

<div id="test1">
    <img src="test1.png?<?php echo $id; ?>"/>
</div>

<h4>HTML Code</h4>
<code>&#60;div id="imgtest"&#62;
    &#60;img src="test1.png?<?php echo $id; ?>" /&#62;
&#60;/div&#62;
</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;

@media all and (max-width: 500px) {
    #test1 {
        display:none;
    }
}
&#60;/style&#62;
</code>



<h2 id="t2">Test Two: Background Image Display None</h2>
<p>
    Two divs are assigned background images. These divs are hidden when the page is smaller than 500 pixels.
</p>

<div id="test2"></div>

<h4>HTML Code</h4>
<code>&#60;div id="test2"&#62;&#60;/div&#62;</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;
#test2 {background-image:url('test2.png?<?php echo $id; ?>');width:200px;height:75px;}
@media all and (max-width: 500px) {
    #test2 {display:none;}
}
&#60;/style&#62;
</code>

<h2 id="t3">Test Three: Background Image, Parent Object Set to Display None</h2>
<p>
    This should be no different than test #2, but I observed some strange behavior on the dConstruct site that makes me think this might work where #2 does not.
</p>

<div id="test3">
    <div id="test3result"></div>
</div>

<h4>HTML Code</h4>
<code>&#60;div id="test3"&#62;
    &#60;div&#62;&#60;/div&#62;
&#60;/div&#62;
</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;
#test3 div {background-image:url('test3.png?<?php echo $id; ?>');width:200px;height:75px;}
@media all and (max-width: 500px) {
    #test3 {display:none;}
}
&#60;/style&#62;
</code>

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
@media all and (max-width: 500px) {
    #test4 {background-image:url('test4-mobile.png?<?php echo $id; ?>');}
}
&#60;/style&#62;
</code>

<h2 id="t5">Test Five: Background Image Where Desktop Image Set with Min-Width</h2>
<p>
    In this test, I'm trying to isolate the desktop image by using min-width declaration in addition to the max-width for the mobile image.
</p>

<div id="test5"></div>

<h4>HTML Code</h4>
<code>&#60;div id="test5"&#62;&#60;/div&#62;</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;
@media all and (min-width: 501px) {
    #test5 {background-image:url('test5-desktop.png?<?php echo $id; ?>');width:200px;height:75px;}
}
@media all and (max-width: 500px) {
    #test5 {background-image:url('test5-mobile.png?<?php echo $id; ?>');width:200px;height:75px;}
}
&#60;/style&#62;
</code>

<h2 id="t6">Test Six: Background Image Display None (max-device-width)</h2>
<p>
    Should be same as test two, but this appears to be the only difference between one test that apparently works, and one that does not.
</p>

<div id="test6"></div>

<h4>HTML Code</h4>
<code>&#60;div id="test6"&#62;&#60;/div&#62;</code>

<h4>CSS Code</h4>
<code>&#60;style type="text/css"&#62;
#test6 {background-image:url('test6.png?<?php echo $id; ?>');width:200px;height:75px;}
@media all and (max-device-width: 500px) {
    #test6 {display:none;}
}
&#60;/style&#62;
</code>


<div id="loaded">
	<h2>Results</h2>
</div>
<script type="text/javascript" charset="utf-8">
//use for browserscope
var _bTestResults = {};
//add the widths
_bTestResults['Screen Width'] = screen.width;
_bTestResults['Outer Width'] = window.outerWidth

//we'll use this to check background images
//accepts an array of imageNames
function checkImages(images) {
	//set the domain prefix so we can just pass image names
	var prefix = 'http://timkadlec.com/mq/';
	
	//set our suffix
	//needed because setting image.src fires request
	var suffix = '<?php echo $id; ?>';
	
	//get the div where we'll spit out the results
	var target = document.getElementById('loaded');
	
	for (var i = 0; i <= images.length - 1; i++){
		
		//now, create a new image and set it's src
		var image = new Image();
		image.src = prefix + images[i][0] + "?" + suffix;
		
		//check to see if image is loaded using image.height
		//was using image.complete, but Opera was misreporting
		if (image.height) {
			target.innerHTML += "<p class='load'>" + prefix + images[i][0] + "?" + suffix + " has loaded.</p>";
			//save the result for Browserscope
			_bTestResults[images[i][1]] = 1;
			
		} else {
			target.innerHTML += "<p class='noload'>" + prefix + images[i][0] + "?" + suffix + " has not loaded.</p>";
			//save the result for Browserscope
			_bTestResults[images[i][1]] = 0;
			
		}
		
		
	}

	
}
window.onload = function() {
	var toCheck = [
		['test1.png', 'Image Tag'],
		['test2.png', 'BG Image Display None (max-width)'],
		['test3.png', 'BG Image Parent Object Set to Display None'],
		['test4-mobile.png', 'BG Image with Cascade Override (Mobile)'],
		['test4-desktop.png', 'BG Image with Cascade Override (Desktop)'],
		['test5-mobile.png', 'BG Image Where Desktop Image Set with Min-Width (Mobile)'],
		['test5-desktop.png', 'BG Image Where Desktop Image Set with Min-Width (Desktop)'],
		['test6.png', 'BG Image Display None (max-device-width)'],
	];
	checkImages(toCheck);


	
	// Fetch the Browserscope script that sucks the results from _bTestResults
	(function() {
		var _bTestKey = 'agt1YS1wcm9maWxlcnINCxIEVGVzdBiolegMDA';
		var _bScript = document.createElement('script');
		_bScript.src = 'http://www.browserscope.org/user/beacon/' + _bTestKey;
		_bScript.src += '?sandboxid=a7bdc19a806b456';
		_bScript.setAttribute('async', 'true');
		var scripts = document.getElementsByTagName('script');
		var lastScript = scripts[scripts.length - 1];
		lastScript.parentNode.insertBefore(_bScript, lastScript);
	})();
}
</script>
</body>
</html>
