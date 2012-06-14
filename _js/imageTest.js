var prefix, suffix, target;
var results = [];
function imageTest(imgs) {
	for (var i = 0; i < imgs.length; i++) {
		test(imgs[i][0], imgs[i][0]);
	};
	return results;
}
function test (img, testName) {
	var image = new Image();
    image.src = prefix  + img + '?' + suffix;
    console.info(image);
    if (image.complete || image.height > 0) {
        target.innerHTML += "<p class='load'>" + prefix  + img + '?' + suffix + " has loaded.</p>";
        //save the result for Browserscope
        results[testName] = 1;
        
    } else {
        target.innerHTML += "<p class='noload'>" + prefix  + img + '?' + suffix + " has not loaded.</p>";
        //save the result for Browserscope
        results[testName] = 0;
        
    }
}