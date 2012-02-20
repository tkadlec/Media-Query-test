#Media Query Automated Test Suite

Demo: http://timkadlec.com/mq/

##About the tests
These tests are an attempt to determine how images are downloaded by browsers when used in combination with media queries. The initial tests are lovingly adapted from the tests run by the Cloud Four gang ([check-out Jason Grigsby's article on media queries](http://www.cloudfour.com/css-media-query-for-mobile-is-fools-gold/)). The goal is to automate the process so that more devices and browsers can be tested.

The test checks to see if a background image or img element has loaded by creating a new image in Javascript, setting the src property, and then checking immediately to see if the image has been loaded, by checking the image.complete property. The result of this test, along with the value of the screen.width and window.outerWidth properties, are passed back to Browserscope.
