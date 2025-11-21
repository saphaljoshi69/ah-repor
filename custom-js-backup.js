(function ($) {
	window.addEventListener("message", function (event) {
		if (event.data) {
			// Get the current height from the event data
			const newHeight = event.data;

			// Add a static 30px to the height (you can change this value as needed)
			const addedHeight = 30;

			// Wait for the iframe(s) to load, then adjust their height(s)
			setTimeout(function () {
				// Select all relevant iframes with a specific class (e.g., 'iframe-home')
				const iframes = document.querySelectorAll(".iframe-home iframe");

				iframes.forEach((iframe) => {
					// Ensure the iframe's contentWindow matches the event source
					if (iframe.contentWindow === event.source) {
						// Apply the new height to the current iframe, including the static value
						const iframeHeight = newHeight + addedHeight;
						iframe.style.height = `${iframeHeight}px`; // Set the iframe's height

						console.log(
							"Iframe height adjusted to:",
							iframeHeight,
							"for iframe:",
							iframe
						); // Optional logging for debugging
					}
				});
			}, 1000); // Delay of 1000ms (1 second) after the iframe is loaded
		}
	});

	$(".close-bar").on("click", function () {
		$("body").addClass("remove-bar");
	});

	// $( window ).resize(function() {

	//   if ($(window).width() < 767) {

	//     $( "<p>Test</p>" ).insertBefore( ".feature-item .common-button");

	//   }

	// });

	$(".dropdown-item").on("click", function () {
		$(this).parent().toggleClass("menu-open");
	});

	$(".client-testimonial-main").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		prevArrow: "<span class='left-arrow arrow-common arrow-new'></span>",

		nextArrow: "<span class='right-arrow arrow-common arrow-new'></span>",

		responsive: [
			{
				breakpoint: 1199,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".policy-slider").slick({
		slidesToShow: 8,

		slidesToScroll: 1,

		arrows: false,
		
		dots: false,

		autoplay: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		centerMode: true,

		//prevArrow: "<span class='left-arrow arrow-common arrow-new'></span>",

		//nextArrow: "<span class='right-arrow arrow-common arrow-new'></span>",

		responsive: [
			{
				breakpoint: 1600,

				settings: {
					slidesToShow: 6,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 1440,

				settings: {
					slidesToShow: 5,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 1199,

				settings: {
					slidesToShow: 4,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 457,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},
			
		],
	});

	$(".testimonial-slider-main").slick({
		slidesToShow: 2,

		slidesToScroll: 1,

		autoplay: true,

		autoplaySpeed: 2000,

		arrows: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: true,

		prevArrow: "<span class='left-arrow arrow-common arrow-new'></span>",

		nextArrow: "<span class='right-arrow arrow-common arrow-new'></span>",

		responsive: [
			{
				breakpoint: 1199,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					dots: true,

					arrows: false,

					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".recommended-slider").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		prevArrow: "<span class='left-arrow arrow-common arrow-new'></span>",

		nextArrow: "<span class='right-arrow arrow-common arrow-new'></span>",

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			{
				breakpoint: 767,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	//cluster-page-slider

	$(".slider-wrapper").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		prevArrow: "<span class='left-arrow arrow-common arrow-new'></span>",

		nextArrow: "<span class='right-arrow arrow-common arrow-new'></span>",

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			{
				breakpoint: 991,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 567,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".industry-slider-one").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		// fade: true,

		infinite: true,

		autoplay: true,

		autoplaySpeed: 2000,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			{
				breakpoint: 1922,

				settings: {
					slidesToShow: 3,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 991,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".industry-slider-two").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			{
				breakpoint: 1922,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".feature-slide").slick({
		slidesToShow: 5,

		slidesToScroll: 1,

		arrows: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			{
				breakpoint: 767,

				settings: {
					slidesToShow: 3,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".quote-slider").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			{
				breakpoint: 1199,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".grid-type-slider").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			// {

			//   breakpoint: 9999,

			//   settings: "unslick"

			// },

			{
				breakpoint: 991,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".blog-slider").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			{
				breakpoint: 1950,

				settings: {
					slidesToShow: 4,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 1922,

				settings: {
					slidesToShow: 3,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 1199,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	$(".member-slider").slick({
		slidesToShow: 3,

		slidesToScroll: 1,

		arrows: true,

		// fade: true,

		infinite: true,

		adaptiveHeight: true,

		variableWidth: false,

		responsive: [
			{
				breakpoint: 1950,

				settings: {
					slidesToShow: 4,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 1922,

				settings: {
					slidesToShow: 3,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 991,

				settings: {
					slidesToShow: 2,

					slidesToScroll: 1,
				},
			},

			{
				breakpoint: 767,

				settings: {
					slidesToShow: 1,

					slidesToScroll: 1,
				},
			},
		],
	});

	//map-section-mobile-slider

	// $( window ).resize(function() {

	$(".country-listing-wrapper").slick({
		responsive: [
			{
				breakpoint: 9999,

				settings: "unslick",
			},

			{
				breakpoint: 768,

				settings: {
					centerMode: true,

					centerPadding: "0",

					slidesToShow: 3,

					slidesToScroll: 1,

					infinite: true,
				},
			},
		],
	});

	$(window).on("load resize", function () {
		$(".agency-logo-slider .agency-logo-wrap")
			.not(".slick-initialized")
			.slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				arrows: false,
				dots: false,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 2000,
				variableWidth: false,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							settings: "slick",
							slidesToShow: 3,
							slidesToScroll: 1,
						},
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						},
					},
					{
						breakpoint: 500,
						settings: {
							slidesToShow: 1,
						},
					},
				],
			});
		// $('.agency-logo-wrap').slick('refresh');
	});

	// $( window ).resize(function() {
	//   $('.page-template-tpl-home-page-revised .agency-logo-wrap').slick('refresh');
	// });
	// $('.page-template-tpl-home-page-revised .agency-logo-wrap').slick({
	//   slidesToShow: 5,
	//   slidesToScroll: 1,
	//   arrows: false,
	//   dots: false,
	//   infinite: true,
	//   autoplay: true,
	//   responsive: [
	//     {
	//       breakpoint: 992,
	//       settings: {
	//         settings: "slick",
	//         slidesToShow: 3,
	//         slidesToScroll: 1
	//       }
	//     },
	//     {
	//       breakpoint: 578,
	//       settings: {
	//         slidesToShow: 2,
	//         slidesToScroll: 1
	//       }
	//     },
	//     {
	//       breakpoint: 500,
	//       settings: {
	//         slidesToShow: 1,
	//       }
	//     },
	//   ]
	// });

	/* hamburger menu */

	$(".hamburger").on("click", function () {
		$("body").toggleClass("ham-open");
	});

	/* mobile menu hamburger submenu */

	$(".menu-item-has-children:not(.icon-class.menu-item-has-children)").on(
		"click",

		function (e) {
			$(".menu-item-has-children:not(.icon-class.menu-item-has-children)")
				.not(this)
				.removeClass("et-show-dropdown");
			$(this).toggleClass("et-show-dropdown");
		}
	);

	// match height

	$(".industry-slider-one .item").matchHeight();
	$(".cluster-news-slider .slider-item .details").matchHeight();
	$(".industry-slider-two .item").matchHeight();

	$(".scoring-section .grid-layout").matchHeight();

	$(".scoring-section .grid-layout h3").matchHeight();

	$(".scoring-section .grid-layout p").matchHeight();

	$(".member-slider .item h3").matchHeight();

	$(".blog-slider .item").matchHeight();

	$(".blog-slider .blog-lead h3").matchHeight();

	$(".blog-slider .blog-lead h3").matchHeight();

	// $('.industry-section .blog-lead p').matchHeight();

	$(".industry-section .blog-lead h3").matchHeight();

	$(".client-testimonial .client-testimonial-main .item").matchHeight();

	$(".client-testimonial .client-testimonial-main .item p").matchHeight();

	$(".recommended-slider .item").matchHeight();

	$(".card-bg").matchHeight();

	$(".left-right-content.zick-zak-left-container .custom-container-right .col-md-6").matchHeight();

	$(".card-panel").matchHeight();

	$(".card-border-only").matchHeight();
	// fixed header

	// $(window).scroll(function () {
	// 	if ($(window).scrollTop() >= 100) {
	// 		$("header").addClass("fixed-header");

	// 		// $("header div").addClass("visible-title");
	// 	} else {
	// 		$("header").removeClass("fixed-header");

	// 		// $("header div").removeClass("visible-title");
	// 	}
	// });

	// accordion custom

	$(".accordion-list > li > .answer").hide();

	$(".accordion-list > li").on("click", function (event) {
		if (event.target.tagName.toLowerCase() === "a") {
			//Open in New Window if The Clicked Element is Tag

			window.open(event.target.href, "_blank");
		}

		if (
			$(this).hasClass("active") &&
			event.target.tagName.toLowerCase() !== "a"
		) {
			$(this).removeClass("active").find(".answer").slideUp();
		} else {
			if (event.target.tagName.toLowerCase() !== "a") {
				$(".accordion-list > li.active .answer").slideUp();

				$(".accordion-list > li.active").removeClass("active");

				$(this).addClass("active").find(".answer").slideDown();
			}
		}

		return false;
	});

	/* Tab Active class toggle */

	$(".industry-section li a").on("click", function (e) {
		e.preventDefault();

		$(".industry-slider-one").slick("refresh");

		$(".industry-slider-two").slick("refresh");

		$(".industry-section li a").addClass("active");

		$(".industry-section li a").not(this).removeClass("active");

		$(this.hash).addClass("active-tab-content");

		$(".common-slider").not(this.hash).removeClass("active-tab-content");

		$(".industry-slider-one .item").matchHeight();

		$(".industry-slider-two .item").matchHeight();

		$(".member-section .member-slider .item").matchHeight();
	});
	$(".industry-slider-one").on(
		"beforeChange",
		function (event, slick, currentSlide, nextSlide) {
			$(".industry-section .blog-lead h3").matchHeight();
		}
	);
	$(".industry-slider-two").on(
		"beforeChange",
		function (event, slick, currentSlide, nextSlide) {
			$(".industry-section .blog-lead h3").matchHeight();
		}
	);
	$(".industry-slider-one").on(
		"afterChange",
		function (event, slick, currentSlide, nextSlide) {
			$(".industry-section .blog-lead h3").matchHeight();
		}
	);
	$(".industry-slider-two").on(
		"afterChange",
		function (event, slick, currentSlide, nextSlide) {
			$(".industry-section .blog-lead h3").matchHeight();
		}
	);

	$(".recommended-section .item").matchHeight();

	/* Google Location API */

	// function initialize() {

	//   var input = document.getElementById('search-by');

	//   var options = {

	//     //types: ['(cities)'],

	//     componentRestrictions: { country: "us" }

	//   };

	//   new google.maps.places.Autocomplete(input, options);

	// }

	// google.maps.event.addDomListener(window, 'load', initialize);

	// tabs

	// Show the first tab and hide the rest

	$("#tabs-nav li:first-child").addClass("active");

	$(".tab-content").hide();

	$(".tab-content:first").show();

	// Click function

	// $('#tabs-nav li').on("click",function () {

	//   $('#tabs-nav li').removeClass('active');

	//   $(this).addClass('active');

	//   $('.tab-content').hide();

	//   var activeTab = $(this).find('a').attr('href');

	//   $(activeTab).fadeIn();

	//   return false;

	// });
	$(".hero-head-tabs #tabs-nav li").each(function () {
		$(this).on("click", function (e) {
			$(".hero-head-tabs #tabs-nav li").removeClass("active");

			$(e.currentTarget).addClass("active");

			$(".tab-content").not($(e.currentTarget)).hide();

			var activeTab = $(e.currentTarget).find("a").attr("href");

			$(activeTab).fadeIn();

			return false;
		});
	});

	// svg

	$(".svg").each(function () {
		var img = $(this);

		var image_uri = img.attr("src");

		$.get(
			image_uri,
			function (data) {
				var svg = $(data).find("svg");

				svg.removeAttr("xmlns:a");

				img.replaceWith(svg);
			},
			"xml"
		);
	});

	//Comment Button Disable if empty input

	$(".form-submit input#submit").prop("disabled", true);

	$(".comment-form-comment #comment").keyup(function () {
		if (!$.trim($("#comment").val())) {
			// textarea is empty or contains only white-space

			$(".form-submit #submit").prop("disabled", true);
		} else {
			$(".form-submit #submit").prop("disabled", false);
		}
	});

	//Copy URL on Click

	let $temp = $("<input>");

	let $url = $(location).attr("href");

	$(".box").on("click", function () {
		$("body").append($temp);

		$temp.val($url).select();

		document.execCommand("copy");

		$temp.remove();

		$(".text").text("Link Copied!");
	});

	/* Sidebar Navigation with Active State Start */
		const navLinks = document.querySelectorAll('.topics a');
        const sections = document.querySelectorAll('h2');
		console.log(navLinks);
        
        // Create intersection observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Remove active class from all nav items
                    navLinks.forEach(link => {
                        link.parentElement.classList.remove('active');
                    });
                    
                    // Add active class to corresponding nav item
                    const activeLink = document.querySelector(`a[href="#${entry.target.id}"]`);
                    if (activeLink) {
                        activeLink.parentElement.classList.add('active');
                    }
                }
            });
        }, {
            // Adjust these values to control when sections are considered "active"
            rootMargin: '-20% 0px -80% 0px', // Section becomes active when 20% visible from top
            threshold: 0
        });

        // Observe all sections
        sections.forEach(section => {
            observer.observe(section);
        });

        // Set initial active state
        window.addEventListener('load', () => {
            // Check which section is currently visible
            const scrollPosition = window.scrollY + window.innerHeight / 2;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition <= sectionBottom) {
                    const activeLink = document.querySelector(`a[href="#${section.id}"]`);
                    if (activeLink) {
                        activeLink.parentElement.classList.add('active');
                    }
                }
            });
        });
		/* Sidebar Navigation with Active State End*/

		/*Popup CTA bottom */
window.addEventListener('scroll', function() {
    var section = document.querySelector('.bottom-sticky-cta');
	var footer = document.querySelector('#colophon');
    var scrollPosition = window.scrollY;

    // Show the section once the user scrolls 500px or more
    if (scrollPosition >= 1350) {  
		// Show the section
		console.table('Scrolled 1350px');
        section.classList.add('section-scrolled-sticky');   // Make it sticky
    } else {
  		// Hide the section again
        section.classList.remove('section-scrolled-sticky');   // Remove sticky behavior
    }
	var footerTop = footer.getBoundingClientRect().top;
	if (footerTop <= window.innerHeight) {
        section.classList.remove('section-scrolled-sticky');
		section.classList.add('reached-bottom'); // Remove sticky behavior when footer is in view
    } else {
        section.classList.remove('reached-bottom'); // Remove "reached-bottom" when footer is not in view
    }
});

//Toggle Button to collapse content
document.querySelector('.toggle-button').addEventListener('click', function() {
    var collapsibleContent = document.querySelector('.collapsible-content');
	var imageIcon = document.querySelector('.icon');
	var button = document.querySelector('.toggle-button');
	//var hiddenCTA = document.querySelector('.hiddenCTA');
    
    if (collapsibleContent.style.display === "none" || collapsibleContent.style.display === "") {
        collapsibleContent.style.display = "block"; 
		button.classList.remove('rotate');
		//hiddenCTA.style.display = "none";
		// Show content
		if (imageIcon) {
            imageIcon.style.display = "block";
        }
    } else {
        collapsibleContent.style.display = "none";
		button.classList.add('rotate');
		//hiddenCTA.style.display = "inline-block" ;
		// Hide content
		if (imageIcon) {
            imageIcon.style.display = "none";
        }
    }
});
/*Popup CTA bottom End */
})(jQuery);
