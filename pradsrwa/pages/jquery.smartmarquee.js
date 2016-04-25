/*!
 * jquery.smartmarquee
 * 
 * Copyright 2014 stemizer.net ~ nestisamet<a>gmail<d>com
 * Licensed under the MIT license
 * http://opensource.org/licenses/mit
 * 
 * @author Samet TEMIZER
 * @version 1.0
 */

$.fn.smartmarquee = function(vars) {
	alert("hello gullu");
	var defaults = {
	    duration: 1000,      // animate duration
	    loop : true,         
	    interval : 2000,     // interval duration
	    axis : "vertical", 
	    easing : "linear"    // (next ver)
	};
	var options = $.extend(defaults, vars);
	function marquee(obj) {
	    var self = this;
	    var timer, indexHandle, marginHandle;
	    var container1 = $(".container1",obj);
	    obj.hover(
			function() { self.stop(); },
			function() { self.play(indexHandle,marginHandle);}
	    );
	    this.play = function(i,margin)
		{
			if (!i) i = 0;
			var _vertical = function() {
				if (i < container1.children().length-1) {
					var len = container1.children().eq(i).height(); // .outerHeight(true)
					len += (container1.children().eq(i).outerHeight(true)-len)/2;
					if (!margin) {
						margin = parseInt(container1.css("margin-top")) - len;
						marginHandle = margin;
					}
					container1.animate({"margin-top":margin+"px"}, options.duration, "linear", function() {
						timer = setTimeout(function() {
							self.play(++i);
						},options.interval);
					});
					indexHandle = i;
				}
				else if (options.loop) {
					container1.animate({"margin-top":"0px"}, "linear", function() {
						setTimeout(function() { self.play(0); },options.interval);
					});
				}
			};
			var _horizontal = function() {
				if (i < container1.children().length-1) {
					var len = container1.children().eq(i).outerWidth(true);
					if (!margin) {
						margin = container1.css("margin-left").split("px")[0] - len;
						marginHandle = margin;
					}
					container1.animate({"margin-left":margin+"px"}, options.duration, "linear", function() {
						timer = setTimeout(function() {
							self.play(++i);
						},options.interval);
					});
					indexHandle = i;
				}
				else if (options.loop) {
					container1.animate({"margin-left":"0px"}, "linear", function() {
						setTimeout(function() { self.play(0); },options.interval);
					});
				}
			};
			(options.axis == "vertical") ? _vertical() : _horizontal();
	    };
	    this.stop = function() {
			clearTimeout(timer);
			if (container1.is(":animated")) container1.stop();
	    };
	};
	return this.each(function() {
		var slide = new marquee($(this));
		setTimeout(function() { slide.play(); }, options.interval);
	});
};
