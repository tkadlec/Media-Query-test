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
</head>
<body>
<h1>Media Query Image Download Test Suite</h1>
<p>Lovingly pulled from Cloud Four. <a href="http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/">Cloud Four article on media queries</a></p>

<h2 id="t1">Running the tests</h2>
<p>
    Please click through each test listed below. The results will be collected by Browserscope.
</p>
<h2>About these tests</h2>
<p>These tests are an attempt to determine how images are downloaded by browsers when used in combination with media queries. If you have a suggestion for another test to include in the suite, or find a bug, please send an email to <a href="mailto:tim@timkadlec.com">tim@timkadlec.com</a> or submit a pull request on <a href="https://github.com/tkadlec/Media-Query-test">Github</a>.</p>

<h2>The tests</h2>
<ul>
    <li>
        <a href="test1.php">Test One: Image Tag</a>
    </li>
    <li>
        <a href="test2.php">Test Two: Background Image Display None</a>
    </li>
    <li>
        <a href="test3.php">Test Three: Background Image, Parent Object Set to Display None</a>
    </li>
    <li>
        <a href="test4.php">Test Four: Background Image with Cascade Override</a>
    </li>
    <li>
        <a href="test5.php">Test Five: Background Image Where Desktop Image Set with Min-Width</a>
    </li>
    <li>
        <a href="test6.php">Test Six: Background Image Display None (max-device-width)</a>
    </li>
</ul>
</body>
</html>
