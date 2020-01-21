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
    centerPadding: '22%'
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
  
  var $works_list = $('#contents');
  $works_list.masonry({
    itemSelector: '.box',
    isFitWidth: true,
    columnWidth: boxWidth,
    gutter: 40
  })
  
  
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
  
  $(window).scroll(function(){
    var scrollValue = $(this).scrollTop();
    var down = headerSlide(scrollValue);
    
    var objectPosition = $('#contents').offset().top;
    
    if(scrollValue > objectPosition && down == true && searchCnt % 2 == 0){
      console.log('ok');
      $('#favoriteName').slideDown(200);
    }
    else {
      $('#favoriteName').slideUp(50);
    }
  });
  
  $('.img1').hover(
    function(){
      $('.Fbutton1').fadeIn(500);
    },
    function(){
      $('.Fbutton1').fadeOut(100);
    }
  );
  

});

/*------- headerSlide関数 -------*/
function headerSlide(nowValue){
  
  //スクロール量増減判定
  if (nowValue > startValue) {
    //増
    $('#favoritName').slideUp(50);
    var down = true;
  } else {
    //減
    $('#favoritName').slideDown(500);
    var down = false
  }
  startValue = nowValue;
  
  return down;
}

