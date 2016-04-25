/**
 *  Morda
 *  version 0.1.2
 *  by Andrey Yermolaev <a.yermolaev@hotmail.com>
 */
 
(function(factory) {
	
    "use strict";
    
    if (typeof define === "function" && define.amd) {
	    
        define(["jquery"], factory);
        
    } else if (typeof exports !== "undefined") {
	    
        module.exports = factory(require("jquery") );
        
    } else {
	    
        factory(jQuery);
        
    }

}(function($) {
	
	//  Morda need JQuery.
	if(!$) {
		
		return;
		
	}
	
	//  Default options
	var defaults = {
		
		//  Animation speed in ms
		speed: 600,
		
		//  Navigation visible
		navigation: true,
		
		//  Arrows visible
		arrows: true,
		
		//  Autoplay slides
		autoplay: false,
		
		//  Autoplay delay (ms)
		autoplayDelay: 5000,
		
		//  Autoplay pause on cursor over slider
		autoplayPause: false,
		
		//  Arrays color
		arraysColor: "#fff",
		
		//  Active navigation item color
		navColor: "#fff",
		
		//  Active navigation item color
		activeNavColor: "#fff"
		
	};
	
	//  Options
	var options;
	
	$.fn.Morda = function(params, callback) {
		
		//  Set options
		options = $.extend({}, defaults, options, params);
		
		//  Slider container
		var m = this;
		
		//  Container ID
		var containerId = m.attr("id");
		
		//  Regular javascript container element
		var container = document.getElementById(containerId);
		
		//  Prefix. Need to create new elements
		var m_ = containerId + "_";
		
		//  Slider container width
		var mWidth = m.width();
		
		//  Slider container height
		var mHeight = m.height();
		
		//  Slider items. All children elements
		var mItems = m.children();
		
		//  Slider items count
		var mItemsCount = m.children().length;
		
		//  Need to stop or pause autoplay
		var autoPlay;
		
		//  Active item index
		m.data("index", 0);
				 
		//  Puts styles after <body> tag open
		//  if you need to change CSS, do it here
		$("body").prepend(
			
			"<style>"
			+ "#" + containerId + " {position: relative; overflow: hidden; padding: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);}\n"
			+ "#" + m_ + "wrap {width: " + mWidth * mItemsCount + "px; height: " + mHeight + "px; position: absolute; margin: 0; padding: 0; transition: transform " + options.speed / 1000 + "s cubic-bezier(0.215,0.61,0.355,1);}\n"
			+ "." + m_ + "item {float: left; width:" + mWidth + "px; height: " + mHeight + "px; margin: 0; background-size: cover; background-position: center center; background-repeat: no-repeat; -webkit-transform: translate3d(0,0,0);}\n"
			+ "." + m_ + "arrows {position: absolute; top: 50%; margin-top: -45px; padding: 15px 20px; z-index: 1100; cursor: pointer; opacity: 0; transition: opacity 0.2s; outline: none;}\n"
			+ "#" + containerId + ":hover > ." + m_ + "arrows {opacity: 0.85;}\n"
			+ "#" + containerId + ":hover > ." + m_ + "arrows:hover {opacity: 1;}\n"
			+ "#" + m_ + "prev {display: none; left: 0px; background: none; border: none;}\n"
			+ "#" + m_ + "next {right: 0px; background: none; border: none;}\n"
			+ "#" + m_ + "nav {position: absolute; width: 100%; bottom: 30px; height: 10px; text-align: center; z-index: 1100; -webkit-user-select: none;}\n"
			+ "." + m_ + "nav_item {display: inline-block; width: 8px; height: 8px; margin: 0 8px; border-radius: 8px; background: " + options.navColor + "; cursor: pointer; opacity: 0.5; transition: opacity 0.2s;}\n"
			+ "." + m_ + "nav_item:hover {opacity: 1;}\n"
			+ "." + m_ + "nav_item_active {background: " + options.activeNavColor + "; box-shadow: 0 0 0 1px " + options.activeNavColor + "; cursor: default; opacity: 1;}\n"
			+ "</style>"
			
		);
		
		//  Resize elements size on change window size
		$(window).resize(function() {

			mWidth = m.width();
			mHeight = m.height();
			
			var index = m.data("index");
			
			$("#" + m_ + "wrap").css({width: mWidth * mItemsCount, height: mHeight, transform: "translateX(-" + mWidth * m.data("index") + "px)", left: 0});
			$("." + m_ + "item").css({width: mWidth, height: mHeight});
			
		});
		
		//  Set slider item class
		mItems.addClass(m_ + "item");
		
		//  Set slider items wrapper
		mItems.wrapAll("<div id='" + m_ + "wrap'></div>");
		
		//  Set active class to first slider item
		mItems.first().addClass(m_ + "active");
		
		//  Set background images
		for (var i = 0; i < mItemsCount; i++) {
			
			var bg = mItems[i].getAttribute("data-bg");
			
			mItems[i].setAttribute("style", "background-image: url(" + bg + ")");

		}
		
		//  If slider contains 1 item - stop it
		if (mItemsCount == 1) {
			
			return;
			
		}
		
		//  Insert arrows
		if (options.arrows !== false) {
			
			m.append(
				
			    "<button id='" + m_ + "prev' class='" + m_ + "arrows' aria-label='Previous'></button>"
			    + "<button id='" + m_ + "next' class='" + m_ + "arrows' aria-label='Next'></button>"
			    
			);
			
			//  if you want to change prev or next images, do it here
			//  recommended using SVG images
			//  selector "fill" get option "arraysColor"
			
			//  SVG prev image
			$("#" + m_ + "prev").html(
							
			    "<svg width='24' height='60' viewBox='0 0 24 60'><defs><style>.c{fill:" + options.arraysColor + ";fill-rule:evenodd;}</style></defs><path id='l' class='c' d='M281,249s-22.559,29.432-22.569,29.438a0.993,0.993,0,0,0,.032,1.165S281.031,309,281,309a0.979,0.979,0,0,0,1-1l-21.589-28.458a0.894,0.894,0,0,1,0-1.087C260.415,278.471,282,250.021,282,250A0.979,0.979,0,0,0,281,249Z' transform='translate(-258.25 -249)'/></svg>"
			    
			);
			
			//  SVG next image
			$("#" + m_ + "next").html(
				
			    "<svg width='24' height='60' viewBox='0 0 24 60'><defs><style>.c{fill:" + options.arraysColor + ";fill-rule:evenodd;'}</style></defs><path id='r' class='c' d='M259,249s22.559,29.432,22.569,29.438a0.993,0.993,0,0,1-.032,1.165S258.969,309,259,309a0.979,0.979,0,0,1-1-1l21.589-28.458a0.894,0.894,0,0,0,0-1.087C279.585,278.471,258,250.021,258,250A0.979,0.979,0,0,1,259,249Z' transform='translate(-258 -249)'/></svg>"
			    
			);
			
			//  Next arrow click event
			m.delegate("#" + m_ + "next", "click", function() {
				
				Start("next");
			    
			});
			
			//  Prev arrow click event
			m.delegate("#" + m_ + "prev", "click", function() {
				
				Start("prev");
			    
			});
		
		}
				
		//  Insert dots navigation
		if (options.navigation !== false) {
			
			m.append("<div id='" + m_ + "nav'></div>");
			
			for (var i = 0; i < mItemsCount; i++) {
				
				$("#" + m_ + "nav").append("<span class='" + m_ + "nav_item'></span>");
				
			}
			
			$("." + m_ + "nav_item").first().addClass(m_ + "nav_item_active");
					
			//  Navigation item click event
			m.delegate("." + m_ + "nav_item", "click", function() {
				
				if ($(this).hasClass(m_ + "nav_item_active") ) {
					return;
				}
				
				var index = $(this).index();
				
				Start(index);
				
			});
			
		}
				
		//  Swip events support
		var xStart = 0;
		var yStart = 0;
		var xMove = 0;
		var yMove = 0;
		var xStop = 0;
		var yStop = 0;
		var xTrack = 0;
		var xWay = 0;
		
		m.bind("touchstart", function(e) {
			
			var index = m.data("index");
			
			$("#" + m_ + "wrap").css({left: 0, transform: "translateX(-" + (mWidth * index) + "px)", transition: "transform 0s"});
			
		    var orig = e.originalEvent;
		    
		    xStart = orig.changedTouches[0].pageX;
		    yStart = orig.changedTouches[0].pageY;
		    
		    //  Remove arrows			    
			$("." + m_ + "arrows").css("display", "none");
		    		    
		});
		
		m.bind("touchmove", function(e) {
			
			m.data("touche", true);
			
			$("#" + m_ + "wrap").css({left: 0, transform: "translateX(-" + (mWidth * m.data("index") ) + "px)", transition: "transform " + (options.speed / 1000) + "s cubic-bezier(0.215,0.61,0.355,1)"});
		    
		    var orig = e.originalEvent;
		    
		    xMove = orig.changedTouches[0].pageX;
		    yMove = orig.changedTouches[0].pageY;
		    
			xTrack = xMove - xStart;
			yTrack = yMove - yStart;
			
			if (Math.abs(xTrack) > Math.abs(yTrack) ) {
				
				e.preventDefault();
				
				$("#" + m_ + "wrap").css({left: xTrack});
				
			}
		    		    
		});
		
		m.bind("touchend", function(e) {
			
			var orig = e.originalEvent;
			
			xStop = orig.changedTouches[0].pageX;
			yStop = orig.changedTouches[0].pageY;
			
			xWay = xStart - xStop;
			yWay = yStart - yStop;
			
			if (Math.abs(xWay) > Math.abs(yWay) ) {
				
				e.preventDefault();
				
				if (xWay > 0) {
					
					Start("next");
					
				} else {
					
					Start("prev");
	
				}
				
			}
			
		});
				
		//  Keyboard arrows key press
		document.onkeydown = checkKey;
	
		function checkKey(e) {
		
		    e = e || window.event;
	
		    if (e.keyCode == '37') {
			    
		        //  left arrow
		        Start("prev");
		       
		    }  else if (e.keyCode == '39') {
			    
		        //  right arrow
		        Start("next");
		       
		    }
		    
		    return false;
		    
		}
				
		//  Set autoplay		
		if (options.autoplay !== false) {
			
			AutoPlay();
			
		}
		
		//  Events on cursor over container
		m.mouseenter(function() {
			
			//  Pause autoplay
			if ( (options.autoplay !== false) && (options.autoplayPause !== false) ) {
				
			    clearInterval(autoPlay);
			    
		    }
		    
		});
		
		//  Events on cursor out container
		m.mouseleave(function() {
			
			//  Renew autoplay
			if ( (options.autoplay !== false) && (options.autoplayPause !== false) ) {
				
			    AutoPlay();
			    
		    }
		    
		});
		
		function AutoPlay() {
			
			autoPlay = setInterval(
				
			    function() {
				    
				    Start("next");
				    
				}, options.autoplayDelay
				
			);
			
		}
				
		//  Start animation
		function Start(side) {
			
			//  Next case
			if (side == "next") {
				
				//  If active item last of items
				if ( (m.data("index") + 1) == mItemsCount) {
					
					//  Stop autoplay
					if (options.autoplay !== false) {
						
					    clearInterval(autoPlay);
					    
				    }
					
					//  Set active item index
					m.data("index", mItemsCount - 1);
										
					//  Animation
					$("#" + m_ + "wrap").css({transform: "translateX(-" + ( (mWidth * (mItemsCount - 1) ) - xWay) + "px)"});
					
				} else {
					
					//  Set active item index
					var index = m.data("index");
					
					m.data("index", index + 1);

                    //  Animation
                    $("#" + m_ + "wrap").css({transform: "translateX(-" + ( (mWidth * (index + 1) ) - xWay) + "px)"});
										
				}
				
			}
			
			//  Prev case
			else if (side == "prev") {
				
				//  If active item first of items
				if (m.data("index") == 0) {
					
					//  Set active item index
					m.data("index", 0);			
					
					//  Animation
					$("#" + m_ + "wrap").css({transform: "translateX(-" + -xWay + "px)"});
					
				} else {
					
					//  Set active item index
					var index = m.data("index");
					
					m.data("index", index - 1);
					
					//  Animation
					$("#" + m_ + "wrap").css({transform: "translateX(-" + ( (mWidth * (index - 1) ) - xWay) + "px)"});
					
				}
				
			} else {
				
				// Navigation case
				
				//  Set active item index
				var index = m.data("index");
				
				m.data("index", side);
				
				//  Animation
				$("#" + m_ + "wrap").css({transform: "translateX(-" + (mWidth * side) + "px)"});
				
			}
			
			//  Active item index
			var index = m.data("index");
			
			$("." + m_ + "nav_item").removeClass(m_ + "nav_item_active");
			
			$("." + m_ + "nav_item").eq(index).addClass(m_ + "nav_item_active");
			
			//  Hide arrows
			if (m.data("touche") !== true) {
				
				if (index == 0) {
	
					$("#" + m_ + "prev").css("display", "none");
					$("#" + m_ + "next").css("display", "block");
					
				} else if (index + 1 == mItemsCount) {
					
					$("#" + m_ + "next").css("display", "none");
					$("#" + m_ + "prev").css("display", "block");
					
				} else {
					
					$("#" + m_ + "prev").css("display", "block");
					$("#" + m_ + "next").css("display", "block");
					
				}
			
			}
			
			//  Callback index of active item
			if (callback) {
				
				callback(index);
				
			}	
			
		}
		
		return this;
		
	}
	
}));