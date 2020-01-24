/*============================
/*  name: Yonesho Seima
/*  date: 2019/
/*  programName: 
/*============================

/*============前処理============*/

var cnt = 1;
const blue = '#75EEFF';
const red = '#CC5A94';
const yellow = '#FFF185';
const green = '#B3A64B';

var colorArray = [green,blue,yellow,red];

/*------要素取得------*/
//var cntFav = $('.fav1').index();

/*============コントロール============*/


/*==========主処理=============*/

$(function(){


  $('.Fcontents').slick({
    dots: true,
    arrows: false,
    initialSlide: '0',
    dotsClass: 'slickDot'
//    swipeToSlide: true,
//    centerMode: true
//    centerPadding: '0'
  });
  
/*
    var favListCnt = $('.favCl').length;
  
  $('.fav:eq(0)').fadeIn(200);
  
  $('.favCl ').each(function(index){
    var value = 130 * index;
    var zIndex = 4 - index;
    
    $(this).css('left', value);
    $(this).css('border-bottom', '80px solid ' + colorArray[index]);
    $(this).css('z-index',zIndex);
    
    
  });
  
  $('.fav').each(function(index){
    $(this).css('background-color', colorArray[index]);
  });
  
  
  $('.favCl').click(function(){
    var index = $('.favCl').index(this);
    
    $('.favCl').each(function(index2){
      var index3 = 4 - index2;
      $(this).css('z-index',index3);
    });
    
    //元
    var zIndex = 4 - index;
    
    //z-index変更
    $(this).css('z-index', '5');
    
    
    console.log(zIndex);
    $('.fav').fadeOut(100);
    $('.fav:eq(' + index + ')').fadeIn(200);
  });
  
  $('.favCl').hover(function(){
    $(this).css('cursor','pointer');
  });

*/
});

/*====================================================*/
