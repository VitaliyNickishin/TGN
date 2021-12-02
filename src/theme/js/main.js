$(function() {

  headerFixed();
  mobileBurger();
  initAos();
  initCoinParallax();
  closeAccordion();
  initParallax();
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



/* use parallax for coin in roadmap section */ 
let initCoinParallax = () => {
  const image = document.getElementsByClassName('coin-parallax');
  new simpleParallax(image, {
    delay: 5,
    transition: 'cubic-bezier(0,0,0,1)',
    maxTransition: 60,
    overflow: true,
    scale: 1.5
  });
}

let closeAccordion = () => {
  //var 1
//   $("input:checkbox").on('click', function() {
//   // in the handler, 'this' refers to the box clicked on
//   var $box = $(this);
//   if ($box.is(":checked")) {
//     // the name of the box is retrieved using the .attr() method
//     // as it is assumed and expected to be immutable
//     var group = "input:checkbox[name='" + $box.attr("name") + "']";
//     // the checked state of the group/box on the other hand will change
//     // and the current value is retrieved using .prop() method
//     $(group).prop("checked", false);
//     $box.prop("checked", true);
//   } else {
//     $box.prop("checked", false);
//   }
// });

//var 2
  $('input[type="checkbox"]').on('change', function() {
    let box = $(this);
    $('input[type="checkbox"]').not(box).prop('checked', false);
    // if (box.is(":checked")) {
    //   let tab = $('[data-action="accordion"] .tab');
    //   $(tab).addClass('active');
    // } else {
    //   $(tab).removeClass('active');
    // }
  });

}

let addActive = () => {
  // let numOfClicks = 0;
    $('[data-action="accordion"]').on('click', '.tab', function() {
    $(this).addClass('active').siblings().removeClass('active');
    // ++numOfClicks;
    // if(numOfClicks % 2 !== 0) {
    //   $(this).addClass('active');
    //   console.log('Odd Click!');
    // } else {
    //   $(this).removeClass('active');
    //   console.log('Even Click!');
    // } 
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
  // $('.testimonials-avatars-slider').slick({
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   arrows: false,
  //   fade: true,
  //   asNavFor: '.testimonials-lists-slider'
  // });
  // $('.testimonials-lists-slider').slick({
  //   slidesToShow: 2,
  //   slidesToScroll: 1,
  //   asNavFor: '.testimonials-avatars-slider',
  //   dots: false,
  //   focusOnSelect: true
  // });
  $('.testimonials-lists-slider').slick({
 	slidesToShow: 2,
 	slidesToScroll: 1,
 	arrows: true,
 	fade: false,
 	adaptiveHeight: true,
 	infinite: true,
	useTransform: true,
 	speed: 400,
 	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
 });

 $('.testimonials-avatars-slider')
 	.on('init', function(event, slick) {
 		$('.testimonials-avatars-slider .slick-slide.slick-current').addClass('is-active');
 	})
 	.slick({
 		slidesToShow: 7,
 		slidesToScroll: 7,
 		dots: false,
 		focusOnSelect: false,
 		infinite: false,
 		responsive: [{
 			breakpoint: 1024,
 			settings: {
 				slidesToShow: 5,
 				slidesToScroll: 5,
 			}
 		}, {
 			breakpoint: 640,
 			settings: {
 				slidesToShow: 4,
 				slidesToScroll: 4,
			}
 		}, {
 			breakpoint: 420,
 			settings: {
 				slidesToShow: 3,
 				slidesToScroll: 3,
		}
 		}]
 	});

 $('.testimonials-lists-slider').on('afterChange', function(event, slick, currentSlide) {
 	$('.testimonials-avatars-slider').slick('slickGoTo', currentSlide);
 	var currrentNavSlideElem = '.testimonials-avatars-slider .slick-slide[data-slick-index="' + currentSlide + '"]';
 	$('.testimonials-avatars-slider .slick-slide.is-active').removeClass('is-active');
 	$(currrentNavSlideElem).addClass('is-active');
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