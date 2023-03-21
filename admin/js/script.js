(function($) {
	
	"use strict";
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}
	
	//Open Main Menu
	if($('.main-header .nav-toggler .toggler-btn').length){
		$('.main-header .nav-toggler .toggler-btn').on('click', function(e) {
			e.preventDefault();
			$(this).toggleClass('active');
			$('body').toggleClass('side-content-visible');
		});

		//Hide Form
		$('.hidden-bar .cross-icon').on('click', function(e) {
			e.preventDefault();
			$('body').removeClass('side-content-visible');
			$(".main-header .nav-toggler .toggler-btn").removeClass('active');
		});
	}

	//Custom Seclect Box
	if($('.custom-select-box').length){
		$('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
	}

	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}

	 // Dropzone initialization
    Dropzone.autoDiscover = false;
    $(function () {
        $("div#myDropZone").dropzone({
            url: "/file-upload",
            addRemoveLinks:true
        });
    });

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

/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
	});	

})(window.jQuery);