// JavaScript Document Written BY: Jim Hooper


//Navigation
function checkHash(here){
 
	var ans = here.split("#");
    var path =  ans[1];
    var prev_hash = window.location.hash;
    var hash  =  prev_hash.split("#");
		   
		if(hash != path){
			
			fadePicsIn(path);
		  
		  }
		
		if(path == 'home'){
			  
			$('#text_box').slideDown(2000);  
		  }
}

function fadePicsIn(path){
	 var prev_hash = window.location.hash;
	 
	 
	 if(prev_hash !== ''){
		  
		  var hash  =  prev_hash.split("#");
		  
		  fadePicsOut(hash[1]);
		
	 }
	 
    var str =  '#outside_area_'+path+' > img';
 
	var class_path = 'transform_'+path; 
	
	$(str).fadeOut(2000,function(){
	  
	    $('#scroll').prepend($(str));
	    $('#scroll > img').removeClass('picture_style');
	    $('#scroll > img').removeClass(class_path);
		$('#scroll > img').css({'top':'0px','position':'relative','z-index':'0' });
	    $('#text_box').slideUp(2000);
	    $('#scroll > img').fadeIn(2000);
 	  
		
	 
	 $('#scroll > img').hover(
          
		  function(){
	 		  
	         $(this).clone().appendTo($('#main_pic'));
			 $('#main_pic').children( 'img:not(:first)' ).remove();
			 $('#main_pic > img').addClass('picture_style');
		  },
		  function(){
			 
			  $('#main_pic > img').remove();
		  }
); 
      
	});
 
}  

function fadePicsOut(path){
	   
	   var str =  '#outside_area_'+path;
	   var str_img =  '#outside_area_'+path+' > img';
       var class_path = 'transform_'+path; 
	 
	    $('img').unbind('mouseenter').unbind('mouseleave');
	 
	    $('#scroll > img').fadeOut(2000,function(){
        
		$(str).prepend($('#scroll > img'));
		
    /* Add Random Positioning back*/
	   $(str_img).each(function(i) {
			var rand_num = Math.ceil(Math.random()*300);
			var z_index_num = Math.ceil(Math.random()*5) - 6; 
			var top_num = rand_num+'px';
			
			$(this).css({'top':top_num,'position':'relative','z-index':z_index_num });
      	});
		
		$(str_img).addClass('picture_style');
	    $(str_img).addClass(class_path);
	    $(str_img).fadeIn(2000);
      
	});	
}