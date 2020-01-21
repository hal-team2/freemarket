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
var cntFav = $('.fav1').index();

/*============コントロール============*/


/*==========主処理=============*/

$(function(){
  
    var favListCnt = $('.favCl').length;
  
  $('.fav:eq(0)').fadeIn(200);
  
  $('.favCl ').each(function(index){
    var value = 130 * index;
    var zIndex = 10 - index;
    
    $(this).css('left', value);
    $(this).css('border-bottom', '50px solid ' + colorArray[index]);
    $(this).css('z-index',zIndex);
  });
  
  $('.fav').each(function(index){
    $(this).css('background-color', colorArray[index]);
  });
  
  
  $('.favCl').click(function(){
    var index = $('.favCl').index(this);
    $('.fav').fadeOut(100);
    $('.fav:eq(' + index + ')').fadeIn(200);
  });
  
  $('.favCl').hover(function(){
    $(this).css('cursor','pointer');
  });
});

/*====================================================*/
