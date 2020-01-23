/*============================
/*  name: Yonesho Seima
/*  date: 2019/
/*  programName: 
/*============================

/*============前処理============*/

/*------要素取得------*/

$(window).on('load resize',function(){
  
});

var startValue = 1;
/*============コントロール============*/


/*==========主処理=============*/

$(function(){
  var mw = $(window).width();
  var boxWidth;
  var searchCnt = 0;
  
  $('.Bimg').slick({
   autoplay: true,
    autoplaySpeed: 2500,
    speed: 800,
    dots: true,
    arrows: false,
    centerMode: true,
    centerPadding: '22%',
    dotsClass: 'slick-button'
  });
  
  if(mw > 1500){
    boxWidth = (mw - 120) / 6;
  }
  else if(mw > 1000){
    boxWidth = (mw - 120) / 5;
  }
  else {
    boxWidth = (mw - 120) / 2;
  }
  
  $('.box img').css('width',boxWidth);
  $('.box').css('width',boxWidth);
  
  
  var $grid = $('#contents').imagesLoaded( function() {
  // 全ての画像が読み込まれてからMasonryを動作させる
    $grid.masonry({
      itemSelector: '.box',
      isFitWidth: true,
      columnWidth: boxWidth,
      gutter: 40
    });
  });
  
  //search出現
  $('.Sinput').click(function(){
    $('#favoriteName').slideUp(50);
    searchCnt++;
    if(searchCnt % 2 == 1){
      $('#search').slideDown(200);
      $('.Scontents').slick('setPosition');
      $('.sujestIn_1').slick('setPosition');
    }
    else {
      $('#search').slideUp(200);
    }
  });
  
  
//  $('#search').click(function(){
//    $(this).slideUp(200);
//    searchCnt--;
//  });
  
//  $('.img1').hover(
//    function(){
//      $('.Fbutton1').fadeIn(500);
//    },
//    function(){
//      $('.Fbutton1').fadeOut(100);
//    }
//  );
  
  $('.box').hover(
    function(){
      var index = $('.box').index(this);
      $('.Fbutton:eq(' + index + ')').fadeIn(200);
    },
    function(){
      var index = $('.box').index(this);
      $('.Fbutton:eq(' + index + ')').fadeOut(100);
    }
  );
  
});

/*------- headerSlide関数 -------*/
//function headerSlide(nowValue){
//
//  //スクロール量増減判定
//  if (nowValue > startValue) {
//    //増
//    var down = true;
//      $('#favoriteName').slideUp(50);
//  } else {
//    //減
//    var down = false
//      $('#favoriteName').slideDown(200);
//  }
//  startValue = nowValue;
//
//  return down;
//}

