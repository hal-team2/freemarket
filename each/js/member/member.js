/*============================
/*  name: Yonesho Seima
/*  date: 2019/
/*  programName: 
/*============================

/*============前処理============*/

/*------要素取得------*/

$(window).on('load resize',function(){
  
});


/*============コントロール============*/


/*==========主処理=============*/

$(function(){
  var mw = $(window).width();
  var boxWidth;
  var searchCnt = 0;
  
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
    searchCnt++;
    if(searchCnt % 2 == 1){
      $('#search').slideDown(200);
    }
    else {
      $('#search').slideUp(200);
    }
  });
  $('#search').click(function(){
    $(this).slideUp(200);
  });
  
});

