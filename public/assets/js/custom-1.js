(function ($) {
	"use strict";

	// When the user scrolls the page, execute myFunction 
	window.onscroll = function () { myFunction() };
	function myFunction() {
		var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		var scrolled = (winScroll / height) * 100;
		document.getElementById("myBar").style.width = scrolled + "%";
	}

	// ______________Active Class
	$(window).on("load", function (e) {
		$(".horizontalMenu-list li a").each(function () {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
		$(".horizontal-megamenu li a").each(function () {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
		$(".horizontalMenu-list .sub-menu .sub-menu li a").each(function () {
			var pageUrl = window.location.href.split(/[?#]/)[0];
			if (this.href == pageUrl) {
				$(this).addClass("active");
				$(this).parent().addClass("active"); // add active to li of the current link
				$(this).parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().prev().click(); // click the item to make it drop
			}
		});
	});

	// ______________ Back to Top
	$(window).on("scroll", function (e) {
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$("#back-to-top").on("click", function (e) {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});



	// ______________Quantity-right-plus
	var quantitiy = 0;
	$('.quantity-right-plus').on('click', function (e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		$('#quantity').val(quantity + 1);
	});
	$('.quantity-left-minus').on('click', function (e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		if (quantity > 0) {
			$('#quantity').val(quantity - 1);
		}
	});

	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function () {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: '#f9faff',
				lineCap: ''
			});
		});
	}

	const DIV_CARD = 'div.card';

	// ______________Card Remove
	$('[data-bs-toggle="card-remove"]').on('click', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});

	// ______________Card Collapse
	$('[data-bs-toggle="card-collapse"]').on('click', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});

	// ______________Card Full Screen
	$('[data-bs-toggle="card-fullscreen"]').on('click', function (e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});

	// ___________TOOLTIP
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl)
	})

	// __________POPOVER
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl)
	})
	// By default, Bootstrap doesn't auto close popover after appearing in the page
	$(document).on('click', function (e) {
		$('[data-bs-toggle="popover"]').each(function () {
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				(($(this).popover('hide').data('bs.popover') || {}).inState || {}).click = false  // fix for BS 3.3.6
			}

		});
	});

	// ______________ Modal
	$(document).ready(function () {
		$("#myModal").modal('show');
	});

	$(window).on("scroll", function (e) {
		if ($(window).scrollTop() >= 66) {
			$('app-header1').addClass('fixed-header');
		}
		else {
			$('.app-header1').removeClass('fixed-header');
		}
	});
})(jQuery);



/*-----------Start Switcher js--------------*/

// ---------------Start LTR-----------------//
$('#myonoffswitch23').on("click", function () {
	if (this.checked) {
		$("#global-loader").fadeOut("slow");
		$('body').addClass('ltr');
		$("html[lang=en]").attr("dir", "ltr");
		$('body').removeClass('rtl');
		localStorage.setItem("ltr", "True");
		$("head link#style").attr("href", $(this));
		(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.min.css"));
		//carousel//
		var carousel = $('.owl-carousel');
		$.each(carousel, function (index, element) {
			// element == this
			var carouselData = $(element).data('owl.carousel');
			carouselData.settings.rtl = false; //don't know if both are necessary
			carouselData.options.rtl = false;
			$(element).trigger('refresh.owl.carousel');
			//select2 flags//
			function formatState(state) {
				if (!state.id) { return state.text; }
				var $state = $(
					'<span><img src="../assets/images/flags/' + state.element.value.toLowerCase() +
					'.svg" class="img-flag" /> ' +
					state.text + '</span>'
				);
				return $state;
			};

			$(".select2-flag-search").select2({
				templateResult: formatState,
				templateSelection: formatState,
				escapeMarkup: function (m) { return m; }
			});
		});
	} else {
		$('body').removeClass('ltr');
		$('body').addClass('rtl');
		localStorage.setItem("ltr", "false");
		$("head link#style").attr("href", $(this));
		(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.rtl.min.css"));
	}
});
// ---------------End LTR-----------------//

// ---------------Start RTL-----------------//
$('#myonoffswitch24').on("click", function () {
	if (this.checked) {
		$("#global-loader").fadeOut("slow");
		$('body').addClass('rtl');
		$("html[lang=en]").attr("dir", "rtl");
		$('body').removeClass('ltr');
		localStorage.setItem("rtl", "True");
		$("head link#style").attr("href", $(this));
		(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.rtl.min.css"));

		//carousel//
		var carousel = $('.owl-carousel');
		$.each(carousel, function (index, element) {
			// element == this
			var carouselData = $(element).data('owl.carousel');
			carouselData.settings.rtl = true; //don't know if both are necessary
			carouselData.options.rtl = true;
			$(element).trigger('refresh.owl.carousel');
		});

		//select2 flags//
		function formatState(state) {
			if (!state.id) { return state.text; }
			var $state = $(
				'<span><img src="../assets/images/flags/' + state.element.value.toLowerCase() +
				'.svg" class="img-flag" /> ' +
				state.text + '</span>'
			);
			return $state;
		};

		$(".select2-flag-search").select2({
			templateResult: formatState,
			templateSelection: formatState,
			escapeMarkup: function (m) { return m; }
		});
		// directionCheck('rtl');
	} else {
		$('body').removeClass('rtl');
		$('body').addClass('ltr');
		localStorage.setItem("rtl", "false");
		$("head link#style").attr("href", $(this));
		(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.min.css"));
	}
});
// ---------------End RTL-----------------//

// ---------------Start Light-mode-----------------//
$(document).on("click", '#myonoffswitch1', function () {
	if (this.checked) {
		$('body').addClass('light-mode');
		$('body').removeClass('dark-mode');
		$('body').removeClass('transparent-mode');

		// remove dark theme properties	
		localStorage.removeItem('darkPrimary')
		localStorage.removeItem('darksecondary')
		// remove transparent theme properties	
		localStorage.removeItem('transparentPrimary')
		localStorage.removeItem('transparentsecondary')

		// remove light theme properties
		localStorage.removeItem('primaryColor')
		localStorage.removeItem('primaryHoverColor')
		localStorage.removeItem('primaryBorderColor')
		localStorage.removeItem('primaryTransparent')
		localStorage.removeItem('secondaryColor')
		localStorage.removeItem('secondaryHoverColor')
		localStorage.removeItem('secondaryTransparentColor')
		localStorage.removeItem('transparentcolor')
		localStorage.removeItem('transparentcolor2')


		// $('#myonoffswitch1').prop('checked', true);
		// $('#myonoffswitch2').prop('checked', false);
		// $('#myonoffswitch3').prop('checked', false);

		const root = document.querySelector(':root');
		root.style = "";
		names()
	} else {
		$('body').removeClass('light-mode');
		localStorage.removeItem("light-mode");
	}
	localStorageBackup();
});
// ---------------End Light-mode-----------------//

// ---------------Start Dark-mode-----------------//
$(document).on("click", '#myonoffswitch2', function () {
	if (this.checked) {
		$('body').addClass('dark-mode');
		$('body').removeClass('light-mode');
		$('body').removeClass('transparent-mode');

		// remove dark theme properties	
		localStorage.removeItem('darkPrimary')
		localStorage.removeItem('darksecondary')
		// remove transparent theme properties	
		localStorage.removeItem('transparentPrimary')
		localStorage.removeItem('transparentsecondary')

		// remove light theme properties
		localStorage.removeItem('primaryColor')
		localStorage.removeItem('primaryHoverColor')
		localStorage.removeItem('primaryBorderColor')
		localStorage.removeItem('primaryTransparent')
		localStorage.removeItem('secondaryColor')
		localStorage.removeItem('secondaryHoverColor')
		localStorage.removeItem('secondaryTransparentColor')
		localStorage.removeItem('transparentcolor')
		localStorage.removeItem('transparentcolor2')


		// $('#myonoffswitch1').prop('checked', false);
		// $('#myonoffswitch2').prop('checked', true);
		// $('#myonoffswitch3').prop('checked', false);
		const root = document.querySelector(':root');
		root.style = "";
		names()
	} else {
		$('body').removeClass('dark-mode');
		localStorage.removeItem("dark-mode");
	}
	localStorageBackup()
});
// ---------------End Dark-mode-----------------//

// ---------------Start Transparent -mode-----------------//
// $('body').addClass('transparent-mode');
$(document).on("click", '#myonoffswitch3', function () {
	if (this.checked) {
		$('body').addClass('transparent-mode');
		$('body').removeClass('dark-mode');
		$('body').removeClass('light-mode');

		// remove dark theme properties	
		localStorage.removeItem('darkPrimary')
		localStorage.removeItem('darksecondary')
		// remove transparent theme properties	
		localStorage.removeItem('transparentPrimary')
		localStorage.removeItem('transparentsecondary')

		// remove light theme properties
		localStorage.removeItem('primaryColor')
		localStorage.removeItem('primaryHoverColor')
		localStorage.removeItem('primaryBorderColor')
		localStorage.removeItem('primaryTransparent')
		localStorage.removeItem('secondaryColor')
		localStorage.removeItem('secondaryHoverColor')
		localStorage.removeItem('secondaryTransparentColor')
		localStorage.removeItem('transparentcolor')
		localStorage.removeItem('transparentcolor2')


		// $('#myonoffswitch1').prop('checked', false);
		// $('#myonoffswitch2').prop('checked', false);
		// $('#myonoffswitch3').prop('checked', true);
		const root = document.querySelector(':root');
		root.style = "";
		names()
	} else {
		$('body').removeClass('transparent-mode');
		localStorage.removeItem("transparent-mode");
	}
	localStorageBackup()
});
// ---------------End Transparent-mode-----------------//

/*-----------End Switcher js--------------*/
// $('body').addClass('rtl');
(function checkRtl() {
	let bodyRtl = $('body').hasClass('rtl');
	if (bodyRtl) {
		$('body').addClass('rtl');
		$('body').removeClass('ltr');
		$("html[lang=en]").attr("dir", "rtl");
		$(".horizontalMenu-list span").attr("dir", "rtl");
		$(".top-bar li a .fe").attr("dir", "rtl");
		localStorage.setItem("rtl", "True");
		$("head link#style").attr("href", $(this));
		(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.rtl.min.css"));
		var carousel = $('.owl-carousel');
		$.each(carousel, function (index, element) {
			// element == this
			var carouselData = $(element).data('owl.carousel');
			carouselData.settings.rtl = true; //don't know if both are necessary
			carouselData.options.rtl = true;
			$(element).trigger('refresh.owl.carousel');
		});
	} else {
		$('body').addClass('ltr');
		$('body').removeClass('rtl');
		$("html[lang=en]").attr("dir", "ltr");
		$(".horizontalMenu-list span").attr("dir", "ltr");
		$(".top-bar li a .fe").attr("dir", "ltr");
		localStorage.setItem("rtl", "false");
		$("head link#style").attr("href", $(this));
		(document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.min.css"));
	};
})();


function resetData() {
	$('#myonoffswitch1').prop('checked', true);
	$('#myonoffswitch2').prop('checked', false);
	$('#myonoffswitch3').prop('checked', false);
	names();
	$('body')?.removeClass('light-mode');
	$('body')?.removeClass('dark-mode');
	$('body')?.removeClass('transparent-mode');
	names();
}