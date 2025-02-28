$(document).ready(function() { 

    $('.main-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.main-slider-nav'
    });
    
    $('.main-slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.main-slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    autoplay: false,
    autoplaySpeed: 2000,
    centerPadding: '0',

    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            centerPadding: '20',
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerPadding: '20',
            centerMode: false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            centerPadding: '20',
            centerMode: false,
          }
        }
  
      ]

    });


    var swiper = new Swiper('.team-slider .swiper-container', {
        slidesPerView: 3,
        centeredSlides: false,
        spaceBetween: 20,
        grabCursor: false,
        pagination: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });



    var swiper = new Swiper('.team-slider-leader .swiper-container-leader', {
        slidesPerView: 3,
        centeredSlides: false,
        spaceBetween: 20,
        grabCursor: false,
        pagination: false,
        navigation: {
            nextEl: '.swiper-button-next-leader',
            prevEl: '.swiper-button-prev-leader',
        },        
      });


      var swiper = new Swiper('.respons-row-slider .swiper-container', {
        slidesPerView: 3,
        //centeredSlides: true,
        spaceBetween: 30,
        //grabCursor: true,
        pagination: false,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },        
      });   
      
      
      var swiper = new Swiper('.about-slider', {
        slidesPerView: 1,
        spaceBetween: 13,
        pagination: false,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },        

        breakpoints: {
          414: {
            slidesPerView: 1,
            spaceBetween: 13,
          },
          640: {
            slidesPerView: 1,
            spaceBetween: 13,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 13,
          },       
        }

      });         


      var swiper = new Swiper('.supplying-slider', {
        slidesPerView: 2,
        spaceBetween: 0,
        pagination: false,
        loop: true,
        loopFillGroupWithBlank: true,        
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },            

        breakpoints: {
          414: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 0,
          },
          1025: {
            slidesPerView: 8,
            spaceBetween: 0,
          },          
        }

      });   
      
      
      var swiper = new Swiper('.image-slider-carousel', {
        slidesPerView: 2,
        spaceBetween: 20,
        pagination: false,
        loop: true,
        loopFillGroupWithBlank: true,        
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },  
        
        breakpoints: {
          414: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          1025: {
            slidesPerView: 3,
            spaceBetween: 20,
          },          
        }

      });         


      $(".question-acc-btn").on("click",function(){

        var thisAcc = $(this);

        thisAcc.parent().before().find(".question-list-container").slideToggle();

        if($(".question-acc-btn").hasClass("active")){
          $(this).removeClass("active")
        }else{
          $(this).addClass("active")
        }
    
    });      


    $(".pow-accordion-menu-list-container h3").on("click",function(){

      var thisAcc = $(this);

      thisAcc.next().slideToggle();

      if($(".pow-accordion-menu-list-container h3").hasClass("active")){
        $(this).removeClass("active")
      }else{
        $(this).addClass("active")
      }
  
  });          



    $(".video-btn").YouTubePopUp({ autoplay: 1 });
    $(".video-btn-default").YouTubePopUp({ autoplay: 1 });
    $(".video-btn-press").YouTubePopUp( { autoplay: 1 } );
    $(".video-btn-text").YouTubePopUp( { autoplay: 1 } );
    





$(".map-c-list a").on({
  mouseenter: function () {
      var thisName = $(this);

      thisName.addClass("hover");

      list_name = thisName.attr("data-name");

      $('svg polygon[name=' + list_name + ']').addClass("hover");
      $('svg path[name=' + list_name + ']').addClass("hover");
  },
  mouseleave: function () {

      var thisName = $(this);

      thisName.removeClass("hover");

      $('svg polygon[name=' + list_name + ']').removeClass("hover");
      $('svg path[name=' + list_name + ']').removeClass("hover");
      
  }
});

$("svg polygon, svg path").on({
  mouseenter: function () {
      var thisName = $(this);

      thisName.addClass("hover");

      pol_name = thisName.attr("name");

      $('.map-c-list a[data-name='+pol_name+']').addClass("hover");
  },
  mouseleave: function () {

      var thisName = $(this);

      pol_name = thisName.attr("name");

      thisName.removeClass("hover");

      $('.map-c-list a[data-name=' + pol_name + ']').removeClass("hover");
      
    },
});


$("svg polygon, svg path").click(function () {
   var thisName = $(this);

   thisName.addClass("active");

   pol_name = thisName.attr("name");

  
   //map div content hidden, visible
   $('.mapContent').css('display', 'none');
   $('.' + pol_name + 'Content').css('display', 'flex');

   //map list remove,add active class
   $(".map-c-list a").removeClass("active");
   $('.map-c-list a[data-name=' + pol_name + ']').addClass("active");

   //polygon remove,add active class
   $('svg polygon').removeClass("active");
   $('svg path').removeClass("active");  
   $('svg polygon[name=' + pol_name + ']').addClass("active");
   $('svg path[name=' + pol_name + ']').addClass("active");



});


$(".map-c-list a").click(function () {
    var thisName = $(this);

    thisName.addClass("active");

    pol_name = thisName.attr("data-name");


    //map div content hidden, visible
    $('.mapContent').css('display', 'none');
    $('.' + pol_name + 'Content').css('display', 'flex');

    //map list remove,add active class
    $(".map-c-list a").removeClass("active");
    $('.map-c-list a[data-name=' + pol_name + ']').addClass("active");

    //polygon remove,add active class
    $('svg polygon').removeClass("active");
    $('svg path').removeClass("active");
    $('svg polygon[name=' + pol_name + ']').addClass("active");
    $('svg path[name=' + pol_name + ']').addClass("active");



});



$('[data-toggle="tooltip"]').tooltip()


if ($(window).width() < 1025) {

  $("a.dropdown-toggle").on("click",function(e){


    e.preventDefault();

    $(this).parent().find("ul.dropdown-menu").slideToggle();


  });

}




/****** RESPONSIBILITY CODES *****/



var swiper = new Swiper('.responsibility_grid_imgs', {
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },   
  autoplay: false,
  //autoplaySpeed: 1100,
  loop: true,
 


});   





});



