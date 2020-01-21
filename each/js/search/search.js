/*============================
/*  name: Yonesho Seima
/*  date: 2019/
/*  programName: 
/*============================

/*============前処理============*/


/*------要素取得------*/
var maxWidth = $(window).innerWidth;

/*============コントロール============*/


/*==========主処理=============*/

$(function(){
  $('.sujestIn_1').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 800,
    dots: false,
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });
  $('.Scontents').slick({
    dots: true,
    arrows: false,
    initialSlide: '0',
    dotsClass: 'slickDot'
//    swipeToSlide: true,
//    centerMode: true
//    centerPadding: '0'
  });
});

/*====================================================*/
