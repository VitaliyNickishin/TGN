$(function() {

  headerFixed();
  mobileBurger();
  initAos();
  closeAccordion();
  addActive();
  showImg();
  initCaseBoxSlider();
  initTestiomonialsSlider();
  
  // Modal
  let modalBtn = $('.openmodal'),
      modalBox = $('.modalbox'),
      modalSuccess = $('.modalsuccess'),
      body = $('body')

  modalBtn.on('click', function() {
    if($(this).hasClass('active')) {
      modalBox.removeClass('open')
      body.removeClass('no-scroll');
      setTimeout(function() {
        modalBox.removeClass('active')
      }, 350)
      
    } else {
      modalBox.addClass('active')
      body.addClass('no-scroll');
      setTimeout(function() {
        modalBox.addClass('open')
      }, 350)
    }
    modalBtn.toggleClass('active')
    
  })
  //click body hide modal
  modalBox.on('click', function(e) {
    if(!$(e.target).closest('.modal-contact-us-wrap').length) {
      
      modalBox.removeClass('open')
      body.removeClass('no-scroll');
      setTimeout(function() {
        modalBox.removeClass('active');
      }, 350)
      modalBtn.toggleClass('active');
    }
  })

  modalSuccess.on('click', function(e) {
    if($(e.target).hasClass('close_modalsuccess') || !$(e.target).closest('.info').length) {
      modalSuccess.removeClass('open')
    }
  })
  
  
});

/* added smoothness of appearance for section */ 
let initAos = () => {
  AOS.init();
}
/* sticky header */ 
let headerFixed = () => {
    let header = jQuery('.header');
    
	$(window).on('scroll', () => {
		if ($(this).scrollTop() > 50) {
			header.addClass('fixed');
		} else {
      header.removeClass('fixed');
    }

	});
}
// Mobile menu
let mobileBurger = () => {
  const menuBtn = $('.header').find('.burger'),
      menuBox = $('.header').find('ul'),
      menuLink = menuBox.find('a')
  menuBtn.on('click', function() {
    menuBtn.toggleClass('active')
    menuBox.toggleClass('active')
    $('body').toggleClass('overflow')
  })
  menuLink.on('click', function() {
    menuBtn.removeClass('active')
    menuBox.removeClass('active')
    $('body').removeClass('overflow')
  })
}


let closeAccordion = () => {
  $('input[type="checkbox"]').on('change', function() {
    let box = $(this);
    $('input[type="checkbox"]').not(box).prop('checked', false);
  });

}
//add active for akkordion
let addActive = () => {
    $('[data-action="accordion"] .tab label').on('click', function() {
    $(this).parent().siblings().removeClass('active');
    $(this).parent().toggleClass('active');
  });
}

let initParallax = () => {
  let scene = $('#banner-parallax');
  $(window).on('mousemove', (event) => {
    scene.find('.layer').each(function() {
      let transform = "translate(-" + event.pageX * parseFloat($(this).attr('data-speedX')) * 0.2 +
      "px, -" + event.pageY * parseFloat($(this).attr("data-speedY")) * 0.2 + "px)";
      $(this).css({
        "-o-transform": transform,
        "transform": transform,
        "-webkit-transform": transform,
        "-moz-transform": transform,
        "-ms-transform": transform,
      });
    });
  });
}
$(window).on('load resize', function() {
    if ($(window).width() > 991) {
      initParallax();
    } 
});

//change img for akkordion
let showImg = () => {
  $('.accordion input[type="checkbox"]').on('click', (e) => {
    let valueInput = $(e.target).val();
    if(valueInput === 'solutions'){
        $(e.target).closest('.offer').find('[data-img="solutions"]').show();
        $(e.target).closest('.offer').find('[data-img="paid"]').hide();
        $(e.target).closest('.offer').find('[data-img="software"]').hide();
        $(e.target).closest('.offer').find('[data-img="collaboration"]').hide();
        $(e.target).closest('.offer').find('[data-img="video"]').hide();
        $(e.target).closest('.offer').find('[data-img="paper"]').hide();
    }
    if(valueInput === 'paid'){
        $(e.target).closest('.offer').find('[data-img="paid"]').show();
        $(e.target).closest('.offer').find('[data-img="solutions"]').hide();
        $(e.target).closest('.offer').find('[data-img="software"]').hide();
        $(e.target).closest('.offer').find('[data-img="collaboration"]').hide();
        $(e.target).closest('.offer').find('[data-img="video"]').hide();
        $(e.target).closest('.offer').find('[data-img="paper"]').hide();
    }
    if(valueInput === 'software'){
        $(e.target).closest('.offer').find('[data-img="software"]').show();
        $(e.target).closest('.offer').find('[data-img="paid"]').hide();
        $(e.target).closest('.offer').find('[data-img="solutions"]').hide();
        $(e.target).closest('.offer').find('[data-img="collaboration"]').hide();
        $(e.target).closest('.offer').find('[data-img="video"]').hide();
        $(e.target).closest('.offer').find('[data-img="paper"]').hide();
    }
    if(valueInput === 'collaboration'){
        $(e.target).closest('.offer').find('[data-img="collaboration"]').show();
        $(e.target).closest('.offer').find('[data-img="paid"]').hide();
        $(e.target).closest('.offer').find('[data-img="solutions"]').hide();
        $(e.target).closest('.offer').find('[data-img="software"]').hide();
        $(e.target).closest('.offer').find('[data-img="video"]').hide();
        $(e.target).closest('.offer').find('[data-img="paper"]').hide();
    }
    if(valueInput === 'video'){
        $(e.target).closest('.offer').find('[data-img="video"]').show();
        $(e.target).closest('.offer').find('[data-img="paid"]').hide();
        $(e.target).closest('.offer').find('[data-img="solutions"]').hide();
        $(e.target).closest('.offer').find('[data-img="collaboration"]').hide();
        $(e.target).closest('.offer').find('[data-img="software"]').hide();
        $(e.target).closest('.offer').find('[data-img="paper"]').hide();
    }
    if(valueInput === 'paper'){
        $(e.target).closest('.offer').find('[data-img="paper"]').show();
        $(e.target).closest('.offer').find('[data-img="paid"]').hide();
        $(e.target).closest('.offer').find('[data-img="solutions"]').hide();
        $(e.target).closest('.offer').find('[data-img="collaboration"]').hide();
        $(e.target).closest('.offer').find('[data-img="video"]').hide();
        $(e.target).closest('.offer').find('[data-img="software"]').hide();
    }
    
  })
}

//sleder cases
let initCaseBoxSlider = function () {
  jQuery('.case-box-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    speed: 500,
    arrows: false,
    dots: true,
    fade: true,
    cssEase: 'linear'
  });
};

//sleder testimonials
let initTestiomonialsSlider = function () {
  //main
  $('.testimonials-lists-slider').slick({
 	slidesToShow: 2,
 	slidesToScroll: 1,
 	arrows: true,
  prevArrow: '<button type="button" class="prev arrow"></button>',
  nextArrow: '<button type="button" class="next arrow"></button>',
 	infinite: true,
	useTransform: true,
  variableWidth: true,
 	speed: 400,
 	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
   responsive: [{
 			breakpoint: 991,
 			settings: {
 				slidesToShow: 1,
 				slidesToScroll: 1,
        // arrows: false,
 			}
 		}, 
  ]
 });
 //avatar
 $('.testimonials-avatars-slider')
 	.on('init', function(event, slick) {
 		$('.testimonials-avatars-slider .slick-slide.slick-current').addClass('is-active');
 	})
 	.slick({
 		slidesToShow: 6,
 		slidesToScroll: 1,
 		dots: false,
 		focusOnSelect: true,
 		infinite: false,
    variableWidth: true,
 		
 	});

 $('.testimonials-lists-slider').on('afterChange', function(event, slick, currentSlide) {
 	$('.testimonials-avatars-slider').slick('slickGoTo', currentSlide);
 	var currrentNavSlideElem = '.testimonials-avatars-slider .slick-slide[data-slick-index="' + currentSlide + '"]';
 	$('.testimonials-avatars-slider .slick-slide.is-active').removeClass('is-active');
 	$(currrentNavSlideElem).addClass('is-active');
 });

 $('.testimonials-avatars-slider').on('afterChange', function() {
 	$('.testimonials-avatars-slider .slick-slide').removeClass('slick-current');
 });

 $('.testimonials-avatars-slider').on('click', '.slick-slide', function(event) {
 	event.preventDefault();
 	var goToSingleSlide = $(this).data('slick-index');

 	$('.testimonials-lists-slider').slick('slickGoTo', goToSingleSlide);
 });
};

//list-logo-slider mobile
$(window).on('load resize', function() {
  if ($(window).width() < 991) {
    $('.list-logo-slider:not(.slick-initialized)').slick({
      variableWidth: true,
      rows: 2,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false
    });
  } else {
    $(".list-logo-slider.slick-initialized").slick("unslick");
  }
});