var x = 0;
var y = 0;
var z = 0;
function RegisterDeviceMotionListener() {	
	window.addEventListener("devicemotion", function(e) {
		deviceMotionCallbackHandler(e);
    }, true);
	
	function deviceMotionCallbackHandler(e) {		
		 //Calculate the acceleration due to gravity
      x = e.accelerationIncludingGravity.x;
      y = e.accelerationIncludingGravity.y;
      z = e.accelerationIncludingGravity.z;
	} // deviceMotionCallbackHandler ends	
} // deviceMotion ends

function getX() {
	return x;
}
function getY() {
	return y;
}
function getZ() {
	return z;
}