$(function() {

  headerFixed();
  mobileBurger();
  initSliderRoadmap();
  initAos();
  initCoinParallax();
  closeAccordion();
  initParallax();
  addActive();
  showImg();
  
  
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

  

    // $('[data-action="accordion"] .tab').on('click', function() {
    //   $(this).addClass('active')
    //   $('[data-action="accordion"] .tab').removeClass('active');
    //   $(this).addClass('active');
    //   checkClass()
    // });
    
}
// $( "#chbBlogsLabelsList input" ).on( "click", function() {
//             if($(this).is(":checked")) { $(this).addClass("qqqq");}
//    else {$(this).removeClass("qqqq");}
// })
let addActive = () => {
  $(".accordion input").on('click', function(e) {
    if ($(this).is(":checked")) {
      $(this).parent().addClass('active');
    } else {
      $(this).parent().removeClass('active');
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

let showImg = () => {
  $('input[type="checkbox"]').on('click', () => {
    console.log('clisk');
    let value = $(this).val();
    console.log(value);
    if(value === 'paid'){
        $(this).closest('.offer').find('[data-img="paid"]').show();
        $(this).closest('.offer').find('[data-img="pr"]').hide();
    }
    // else{
    //     $('#one').hide();
    //     $('#two').show();
    // }
  })
}