$(document).ready(function(){
   $(".btn_mm").click(function(){
            $(".top_menu").slideToggle("fast");
      
   });
    $(document).ready(function(){
     $(".progect_click").click(function(){
            $(".progect").slideToggle("fast");
              });
   });
        $(document).ready(function(){
     $(".news_click").click(function(){
            $(".news_block").slideToggle("fast");
              });
   });
    
    
    

    
    /*Слайдер с партнерами*/
    $(document).ready(function(){
  $('.slider_1').bxSlider({
    slideWidth:105,
    minSlides: 2,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 10,
    prevText: " " ,
    nextText: " "  
  });
});
    /*Слайдер с партнерами*/
    
    /*Слайдер с поставщиками*/
     $(document).ready(function(){
  $('.slider_2').bxSlider({
    slideWidth: 130,
    minSlides: 2,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 10,
       prevText: " " ,
    nextText: " "  
  });
});
    /*Слайдер с поставщиками*/
    
    /*Слайдер с под каталогами*/
    $(document).ready(function(){
  $('.slider_3').bxSlider({
    slideWidth:180,
    minSlides: 2,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 10,
    prevText: " " ,
    nextText: " "  
  });
});
    /*Слайдер с под каталогами*/
    
    /*Слайдер в шапке*/
    var owl3 = $(".owl_slider");
    owl3.owlCarousel({
        autoPlay: 5000,
        autoHeight : true,
        itemsCustom:[
            [0, 1],
            [450, 2],
            [600, 3],
            [700, 3],
            [1000, 4],
            [1200, 4],
            [1400, 4],
            [1600, 4]
        ]
    });
    /*Слайдер в шапке*/
});