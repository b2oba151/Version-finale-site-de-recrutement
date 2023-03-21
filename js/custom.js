jQuery(function($) {

	'use strict';
	
	$(".loader").delay(1000).fadeOut("slow");
	$("#overlayer").delay(1000).fadeOut("slow");	

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
			$('.site-mobile-menu .has-children').each(function(){
				var $this = $(this);

				$this.prepend('<span class="arrow-collapse collapsed">');

				$this.find('.arrow-collapse').attr({
					'data-toggle' : 'collapse',
					'data-target' : '#collapseItem' + counter,
				});

				$this.find('> ul').attr({
					'class' : 'collapse',
					'id' : 'collapseItem' + counter,
				});

				counter++;

			});

		}, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
			var $this = $(this);
			if ( $this.closest('li').find('.collapse').hasClass('show') ) {
				$this.removeClass('active');
			} else {
				$this.addClass('active');
			}
			e.preventDefault();  

		});

		$(window).resize(function() {
			var $this = $(this),
			w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
			var container = $(".site-mobile-menu");
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		});
	}; 
	siteMenuClone();


	var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	// sitePlusMinus();

	var siteIstotope = function() {
		/* activate jquery isotope */
		var $container = $('#posts').isotope({
			itemSelector : '.item',
			isFitWidth: true
		});

		$(window).resize(function(){
			$container.isotope({
				columnWidth: '.col-sm-3'
			});
		});

		$container.isotope({ filter: '*' });

	    // filter items on button click
	    $('#filters').on( 'click', 'button', function(e) {
	    	e.preventDefault();
	    	var filterValue = $(this).attr('data-filter');
	    	$container.isotope({ filter: filterValue });
	    	$('#filters button').removeClass('active');
	    	$(this).addClass('active');
	    });
	}

	siteIstotope();

	var counterInit = function() {
		if ( $('.section-counter').length > 0 ) {
			$('.section-counter').waypoint( function( direction ) {

				if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

					var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
					$('.number').each(function(){
						var $this = $(this),
						num = $this.data('number');
						console.log(num);
		 				$this.animateNumber(
						{
							number: num,
							numberStep: comma_separator_number_step
						}, 7000
						);
					});
					
				}

			} , { offset: '95%' } );
		}

	}
	counterInit();

	var selectPickerInit = function() {
		$('.selectpicker').selectpicker();
	}
	selectPickerInit();

	var owlCarouselFunction = function() {
		$('.single-carousel').owlCarousel({
			loop:true,
			margin:0,
			dots: true,
			nav:true,
			autoplay: true,
			items:1,
			nav: false,
			smartSpeed: 1000
		});

	}
	owlCarouselFunction();

	var quillInit = function() {

		var toolbarOptions = [
		  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
		  ['blockquote', 'code-block'],

		  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
		  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
		  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
		  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
		  [{ 'direction': 'rtl' }],                         // text direction

		  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
		  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

		  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
		  [{ 'font': [] }],
		  [{ 'align': [] }],

		  ['clean']                                         // remove formatting button
		  ];

		  if ( $('.editor').length > 0 ) {
		  	var quill = new Quill('#editor-1', {
		  		modules: {
		  			toolbar: toolbarOptions,
		  		},
		  		placeholder: 'Compose an epic...',
			  theme: 'snow'  // or 'bubble'
			});
		  }

		}
		quillInit();

	});

  // Initiate venobox lightbox
  $(document).ready(function() {
    $('.venobox').venobox();
  });


//Item Carousel
if ($('.item-carousel').length) {
	$('.item-carousel').owlCarousel({
		loop: true,
		margin: 0,
		smartSpeed: 1000,
		autoplay: 5000,
		dots: true,
		navText: ['<span class="icon icon-angle-left"></span>', '<span class="icon icon-angle-right"></span>'],
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			800: {
				items: 2
			},
			1024: {
				items: 3
			},
			1200: {
				items: 3
			},
		}
	});
}

var carousel = function() {

	$('.companies-carousel').owlCarousel({
		navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
		responsive:{
			0:{
				items: 1
			},
			600:{
				items: 3
			},
			1000:{
				items: 4
			}
		}
	});

	$('.candidates-carousel').owlCarousel({
		navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
		responsive:{
			0:{
				items: 1
			},
			600:{
				items: 3
			},
			1000:{
				items: 4
			}
		}
	});

};
carousel();
    //------- Niceselect  js --------//  

    if (document.getElementById("default-select")) {
    	$('select').niceSelect();
    };
    if (document.getElementById("service-select")) {
    	$('select').niceSelect();
    };
	/*------------------------------------------------------------------
           Client slider
           ------------------------------------------------------------------*/
	// Sponsors Carousel
	if ($('.sponsors-carousel').length) {
		$('.sponsors-carousel').owlCarousel({
			loop: true,
			margin: 20,
			nav: true,
			smartSpeed: 1000,
			autoplay: 5000,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				767: {
					items: 3
				},
				1024: {
					items: 4
				},
				1200: {
					items: 5
				}
			}
		});
	}


	/* ============= Percentage Slider ============= */

	if ($('#skills').length) {

		var skillsDiv = $('#skills');

		$(window).on('scroll', function() {
			var winT = $(window).scrollTop(),
			winH = $(window).height(),
			skillsT = skillsDiv.offset().top;
			if (winT + winH > skillsT) {
				$('.skillbar').each(function() {
					$(this).find('.skillbar-bar').animate({
						width: $(this).attr('data-percent')
					}, 2000);
				});
			}
		});

	}  




	window.onscroll = function() {myFunction()};

var navbar = document.getElementById("mynavbarst");
var sticky = navbar.offsetTop;
console.log(sticky);
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

//Masonary
	function enableMasonry() {
		if($('.masonry-items-container').length){
	
			var winDow = $(window);
			// Needed variables
			var $container=$('.masonry-items-container');
	
			$container.isotope({
				itemSelector: '.masonry-item',
				 masonry: {
					columnWidth : 1
				 },
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});
	
			winDow.bind('resize', function(){

				$container.isotope({ 
					itemSelector: '.masonry-item',
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
			});
		}
	}
	
	enableMasonry();