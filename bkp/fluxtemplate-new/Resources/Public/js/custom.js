$(document).ready(function() {
	
	$('.col-xs-12.work-box').wrap('<div class="row"></div>');




var collection = [];
    
    $(".tx-project .col-sm-6.col-sm-12.work-box").each(function() {
        var nextBox = $(this).next().hasClass('col-sm-6');
        
        collection.push($(this));
        
        if(!nextBox)
        {
            var container = $('<div class="row"></div>');
            container.insertBefore(collection[0]);
            for(i=0;i<collection.length;i++)
            {
                collection[i].appendTo(container);
            }
            collection = [];
        }
    });

    $(".tx-project .container .row").each(function() {
    	var thisObj = $(this);
    	var count = $(this).children('.work-box').length;
    	
    	if(count >= 2){
    		var shiftHtml = "";
    		var innerObj = $(this).children('.work-box');
    		var innerCnt = 0;
    		$(innerObj).each(function() { 
    			
    			if(innerCnt >= 2) {
	    			shiftHtml += '<div class="col-sm-6 col-sm-12 work-box">'+$(this).html()+'</div>';
	    			$(this).remove();
	    		}
    			innerCnt++;
    		});
    		
            $(thisObj).after('<div class="row">'+shiftHtml+'</div>');
    		
    	}
    });

    		$(".tx-project .container").each(function() {
		    	var thisObj = $(this);
		    	var count = $(this).children('.row').length;
		    	
		    	if(count >= 3){
		    		var shiftHtml = "";
		    		var innerObj = $(this).children('.row');
		    		var innerCnt = 0;
		    		$(innerObj).each(function() { 
		    			
		    			if(innerCnt >= 3) {
			    			$(this).css('display','none');
			    		}
		    			innerCnt++;
		    		});
		    		
		    		$('#more-project').parents('.row').css('display','block');
		    		
		    	}
		    });
    	   

    		$('#more-project').click(function(e){
    			e.preventDefault();
    			var cnt = 0;
    			$(".tx-project .container .row:hidden").each(function() {

    				if(cnt <= 2) {
    					$(this).css('display','block');
    				} else {
    					
    					return false;
    				}
    				if($('#more-project').parent().parent().prev().css('display') == 'block'){
    					$('#more-project').parent().parent().css('display','none');
    				}

    				// if($(this).css('display') == 'none'){
    				// 	$(this).css('display','block');
    				// }
    				cnt++;
    			});

    		});

	$(window).scroll(function() {
	    if ($(this).scrollTop() > 1){  
	        $('header').addClass("sticky");
	    }
	    else{
	        $('header').removeClass("sticky");
	    }
	});

	$('.main-menu').click(function(){
		$(".header.main-header").toggleClass("show-menu");
    });

  //   $('.menu-wrap li a').hover(function(){
		// $(".menu-nico").toggleClass("show-nico");
  //   });

	$('.counter').counterUp({
        delay: 10,
        time: 1000
    });

	$(document).ready(function() { 

		$("#home-slider").owlCarousel({	 
		    navigation : true, // Show next and prev buttons
		    slideSpeed : 400,
		    paginationSpeed : 400,
		    singleItem:true,

	        //Autoplay
		    autoPlay : true,
		    stopOnHover : true,

		    //Pagination
		    pagination : false,
		    paginationNumbers: false
	 
	    });

	  	$("#facts").owlCarousel({	 
		    navigation : true, // Show next and prev buttons
		    slideSpeed : 300,
		    paginationSpeed : 400,
		    singleItem:true,

	        //Autoplay
		    autoPlay : true,
		    stopOnHover : true,

		    //Pagination
		    pagination : false,
		    paginationNumbers: false
	 
	    });

	  	$(".heads").owlCarousel({	 
		    navigation : true, // Show next and prev buttons
		    slideSpeed : 400,
		    paginationSpeed : 400,
		    singleItem:true,

	        //Autoplay
		    autoPlay : true,
		    stopOnHover : true,

		    //Pagination
		    pagination : false,
		    paginationNumbers: false
	 
	    });

	    $("#smartphone").owlCarousel({	 
		    navigation : true, // Show next and prev buttons
		    slideSpeed : 400,
		    paginationSpeed : 400,
		    singleItem:true,

	        //Autoplay
		    autoPlay : true,
		    stopOnHover : true,

		    //Pagination
		    pagination : false,
		    paginationNumbers: false
	 
	    });
	});

});