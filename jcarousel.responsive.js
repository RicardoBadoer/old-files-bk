(function($) {
    $(function() {
        
             
       
        $('.jcarousel').jcarousel({          autoPlay: 0, 
        visible: 4, 
        
        
        wrap: 'null',

        initCallback: mycarousel_initCallback,
        itemLastOutCallback:function(){
            jQuery(".jcarousel-next").toggle(); 
         } });
 
     
         
        var jcarousel = $('.jcarousel');
        var x = 4;
 
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();
console.log('width - '+width);
               // carousel.jcarousel('scroll', '+=2'); 
                if (width >= 900) { 
                    width = width / 4;
                }else if ( width >= 600 ){
                    width = width / 3;
                }else if (width >= 350) {
                    width = width / 2;
                } 
                console.log('width1 - '+width);
                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'  
            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    });
})(jQuery);