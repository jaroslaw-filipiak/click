/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isWebkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    isOpera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    isIe     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( isWebkit || isOpera || isIe ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();

document.addEventListener("DOMContentLoaded", function() {
	var lazyloadImages;    
  
	if ("IntersectionObserver" in window) {
		lazyloadImages = document.querySelectorAll(".lazy");
	  	
		var imageObserver = new IntersectionObserver(function(entries, observer) {
			entries.forEach(function(entry) {
		  		if (entry.isIntersecting) {
					var image = entry.target;
						image.classList.remove("lazy");
						imageObserver.unobserve(image);
		  		}
			});
	  	});
  
	  	lazyloadImages.forEach(function(image) {
			imageObserver.observe(image);
	  	});
	} else {  
	  	var lazyloadThrottleTimeout;
	  		lazyloadImages = document.querySelectorAll(".lazy");
	  
	  		function lazyload () {
				if(lazyloadThrottleTimeout) {
		  			clearTimeout(lazyloadThrottleTimeout);
				}    
  
				lazyloadThrottleTimeout = setTimeout(function() {
		  			var scrollTop = window.pageYOffset;
		  
					lazyloadImages.forEach(function(img) {
			  			if(img.offsetTop < (window.innerHeight + scrollTop)) {
							img.src = img.dataset.src;
							img.classList.remove('lazy');
			  			}
		  			});
		  
					if(lazyloadImages.length == 0) { 
						document.removeEventListener("scroll", lazyload);
						window.removeEventListener("resize", lazyload);
						window.removeEventListener("orientationChange", lazyload);
		  			}
				}, 20);
			}

			document.addEventListener("scroll", lazyload);
			window.addEventListener("resize", lazyload);
			window.addEventListener("orientationChange", lazyload);
	}	
});

jQuery(function($){
    $(document).ready(function () {
		$(document).on('scroll', function() {
			if(jQuery(document).scrollTop() > 0) {
				$('#header').addClass('sticky');
			} else {
				$('#header').removeClass('sticky');
			}
		});
	
		if($(document).scrollTop() > 0) {
			$('#header').addClass('sticky');
		}

		$(".navbar-collapse #main-menu > li.dropdown span.mobile-dropdown").click(function() {
			$(this).toggleClass("active-child");

			$(this).parent("li").siblings("li").find("span.mobile-dropdown").removeClass("active-child");
			$(this).parent("li").siblings("li").find("ul.dropdown-menu").removeClass("active-child");

			$(this).parent("li").find("ul.dropdown-menu").eq(0).toggleClass("active-child");
		});

		$(".entry-content .gallery a").each(function() {
            $(this).attr("data-lightbox", "gallery-item");
		});

		$('.collapse').on('shown.bs.collapse', function () {
			$(this).parent().addClass('active');
		});
	
		$('.collapse').on('hidden.bs.collapse', function () {
			$(this).parent().removeClass('active');
		});

		$("[data-scroll]").click(function() {
			var box = $(this).attr("data-scroll");

			$("html, body").animate({
				scrollTop: $(box).offset().top - 110
			}, 1200);
		});

		$("#reviews .reviews").slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			arrows: true,
			dots: true,
			responsive: [
				{
					breakpoint: 1499,
					settings: {
					  	arrows: true
					}
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 1,
					  	arrows: true
					}
				}
			]
		});

		if('#logos') {
			$("#logos .logos__slick").slick({
				infinite: true,
				slidesToShow: 6,
				slidesToScroll: 1,
				arrows: false,
				dots: false,
				responsive: [
					{
						breakpoint: 1499,
						settings: {
							  arrows: false
						}
					},
					{
						breakpoint: 991,
						settings: {
							slidesToShow: 3,
							  arrows: false
						}
					}
				]
			});
		}

    });
});