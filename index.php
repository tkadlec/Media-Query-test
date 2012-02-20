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
</head>
<body>
<h1>Media Query Image Download Test Suite</h1>
<p>Lovingly pulled from Cloud Four. <a href="http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/">Cloud Four article on media queries</a></p>

<h2 id="t1">Running the tests</h2>
<p>
    Please click through each test listed below. The results will be collected by Browserscope.
</p>
<h2>About these tests</h2>
<p>These tests are an attempt to determine how images are downloaded by browsers when used in combination with media queries. The initial tests are lovingly adapted from the tests run by the Cloud Four gang (<a href="http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/">check-out Jason Grigsby's article on media queries</a>). The goal is to automate the process so that more devices and browsers can be tested.</p>
<p>The test uses the image.complete property to determine if an image has been downloaded. The result of this test, along with the value of the screen.width and window.outerWidth properties, are passed back to Browserscope.</p>
<p>If you have a suggestion for another test to include in the suite, or find a bug, please send an email to <a href="mailto:tim@timkadlec.com">tim@timkadlec.com</a> or submit a pull request on <a href="https://github.com/tkadlec/Media-Query-test">Github</a>.</p>

<?php include('includes/testLinks.inc.php'); ?>
</body>
</html>
