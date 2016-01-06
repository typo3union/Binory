 jQuery(document).ready(function($) {
 
	  var sync1 = $("#sync1");
	  var sync2 = $("#sync2");
	 
	  sync1.owlCarousel({
	    singleItem : true,
	    slideSpeed : 1000,
	    navigation: true,
	    pagination:false,
	    afterAction : syncPosition,
	    responsiveRefreshRate : 200,
	  });
	 
	  sync2.owlCarousel({
	    items : 4,
	    itemsDesktop      : [1199,4],
	    itemsDesktopSmall     : [979,4],
	    itemsTablet       : [768,4],
	    itemsMobile       : [479,4],
	    pagination:false,
	    responsiveRefreshRate : 100,
	    afterInit : function(el){
	      el.find(".owl-item").eq(0).addClass("synced");
	    }
	  });
	 
	  function syncPosition(el){
	    var current = this.currentItem;
	    $("#sync2")
	      .find(".owl-item")
	      .removeClass("synced")
	      .eq(current)
	      .addClass("synced")
	    if($("#sync2").data("owlCarousel") !== undefined){
	      center(current)
	    }
	  }
	 
	  $("#sync2").on("click", ".owl-item", function(e){
	    e.preventDefault();
	    var number = $(this).data("owlItem");
	    sync1.trigger("owl.goTo",number);
	  });
	 
	  function center(number){
	    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
	    var num = number;
	    var found = false;
	    for(var i in sync2visible){
	      if(num === sync2visible[i]){
	        var found = true;
	      }
	    }
	 
	    if(found===false){
	      if(num>sync2visible[sync2visible.length-1]){
	        sync2.trigger("owl.goTo", num - sync2visible.length+2)
	      }else{
	        if(num - 1 === -1){
	          num = 0;
	        }
	        sync2.trigger("owl.goTo", num);
	      }
	    } else if(num === sync2visible[sync2visible.length-1]){
	      sync2.trigger("owl.goTo", sync2visible[1])
	    } else if(num === sync2visible[0]){
	      sync2.trigger("owl.goTo", num-1)
	    }
	    
	  }
	 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
        
        if(!jQuery('li.current').length > 0){
        	jQuery('.pagination').remove();
        	}
       
});



$(document).ready(function() {
    
    function checkValidEmail(field) {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(field.val())) {
            return false;
        }
        return true;
    }
    
    
    function trim(field){
        return jQuery.trim(field.val());    
    }
    
    $('#newContactForm').submit(function(event){
        
        var cValids = 0;
            
        $("#newContactForm .validate").removeClass("error");
        
        $("#newContactForm .validate").each(function(){
            if($(this).val()==''){
                $($(this)).addClass("error");
                $(this).attr("placeholder",$(this).attr('mendatory_message'));
                cValids = 1;
            } 
        });
        
        if($('#email.validate').length > 0){
            
            var email       = $('#email');
            if(email.val()!=""){
                if(!checkValidEmail(email)) {
                    email.attr("placeholder",email.attr('valid_message'));
                    $('#email').val("").addClass("error");                   
                    cValids = 1;
                }
            }
        }

        if(cValids == 0) { 
            return true;     
        }else {
            return false;
        }
        
    }); 
   
    
    $(".validate").keyup(function(){
        
        if(trim($(this))!=""){
            $(this).removeClass("error");
        }else{
            $(this).addClass("error");
        }
    })
    
      
    
});