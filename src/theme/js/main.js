$(function() {

  headerFixed();
  mobileBurger();
  initSliderRoadmap();
  initAos();
  initCoinParallax();
  initAccordion();
  initParallax();

  
  
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
/* sleder Roadmap */
let initSliderRoadmap = () => {
  const roadmapSlider = $('.roadmap-slider');
  roadmapSlider.slick({
    variableWidth: true,
    slidesToScroll: 4,
    slidesToScroll: 1,
    initialSlide: 1,
    arrows: false,
    speed: 300,
    centerMode: true,
    infinite: false,
    responsive: [
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
          }
      },
      
      ]
    });
    
  //   roadmapSlider.on('wheel', function(e) {
  //     e.preventDefault();
  //     if (e.originalEvent.deltaX > 0) {
  //         $(this).slick('slickNext');
  //     } else {
  //         $(this).slick('slickPrev');
  //     }
  // });
};


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

let initAccordion = () => {
  // initialize accordion
				// $('#Accordion ul').each( function() {
				// 	var currentURI = window.location.href;
				// 	var links = $('a', this);
				// 	var collapse = true;
				// 	for (var i = 0; i < links.length; i++) {
				// 		var elem = links.eq(i);
				// 		var href = elem.attr('href');
				// 		var hrefLength = href.length;
				// 		var compareTo = currentURI.substr(-1*hrefLength);
						
				// 		if (href == compareTo) {
				// 			collapse = false;
				// 			$(elem).css({ 'background-color': '#a7a9ac', 'color': '#000' });
				// 			break;
				// 		}
						
						
				// 	};
					
					
				// 	if (collapse) {
				// 		$(this).hide();
						
				// 	}
				// });
				  
				
				// $('[data-action="accordion"]').on('click', 'div', function() {
        //   let title = $('[data-action="accordion"] div');
        //   let sub = $('[data-action="accordion"] .submenu');
        //   let wrap = $(this).parent();
				// 	title.removeClass( "up" );
				// 	title.addClass( "down" );
				// 	var ul = $(this).next('ul');
				// 	if (ul.is(':visible')) {
				// 		ul.slideUp(500);
        //     wrap.removeClass( 'active' );
						
				// 	} else {
				// 		$('[data-action="accordion"] ul').not(ul).slideUp(500);
				// 		ul.slideDown(500);
        //     wrap.addClass('active');
				// 		var div = $(this)
				// 	  $( this ).toggleClass( "up" );
				// 	}
          
						
					
				// });

    //   $("ul.tabs__caption").on("click", "li:not(.active)", function() {
    //   $(this)
    //     .addClass("active")
    //     .siblings()
    //     .removeClass("active")
    //     .closest("div.tabs")
    //     .find("div.tabs__content")
    //     .removeClass("active")
    //     .eq($(this).index())
    //     .addClass("active");
    // });

    $('[data-action="accordion"] .tab').on('click', function() {
      $(this).addClass('active')
      $('[data-action="accordion"] .tab').removeClass('active');
      $(this).addClass('active');
      checkClass()
    });
    
}


let checkClass = () => {
  // $('[data-action="accordion"] .tab').on('click', function() {
      
  //     if($(this).hasClass('active')) {
  //       let test = $('[data-action="accordion"] .tab-content');
  //       console.log('hasclass');
  //       test.css('display', 'none');
  //     } else {
  //       return false;
  //     }
  //   });
  $('[data-action="accordion"] .tab').on('click', function(){     
        // if($("#agree").attr("checked") == 'checked') {  
        //     $('#target').submit(function(){});
        // } else {
        //     window.alert('Дайте свое согласие на обработку данных!');
        //     $("#agree").css('border', '1px solid red');
        // }
        if ($('[type="radio"]').is(':checked')) {
           console.log('checked');
        }
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