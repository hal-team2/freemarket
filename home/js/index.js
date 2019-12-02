/*============================
/*  name: Yonesho Seima
/*  date: 2019/
/*  programName: 
/*============================

/*============前処理============*/

/*------要素取得------*/

$(window).on('load resize',function(){
  var mw = $(window).width();
  var boxWidth;
  
  if(mw > 1500){
    boxWidth = (mw - 120) / 6;
  }
  else if(mw > 1000){
    boxWidth = (mw - 120) / 4;
  }
  else {
    boxWidth = (mw - 120) / 3;
  }
  
  $('.box').css('width',boxWidth);
  
  var $works_list = $('#contents');
  $works_list.masonry({
    itemSelector: '.box',
    isFitWidth: true,
    columnWidth: boxWidth,
    gutter: 15
  })
});


/*============コントロール============*/


/*==========主処理=============*/

