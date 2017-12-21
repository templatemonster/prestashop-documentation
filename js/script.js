$(document).ready(function() {
		// hide #back-top first
			  $("#back-top").hide();
			  
			  // fade in #back-top
			  $(function () {
				$(window).scroll(function () {
				  if ($(this).scrollTop() > 100) {
					$('#back-top').fadeIn();
				  } else {
					$('#back-top').fadeOut();
				  }
				});
			
				// scroll body to 0px on click
				$('#back-top a').click(function () {
				  $('body,html').animate({
					scrollTop: 0
				  }, 400);
				  return false;
				});
			  });
			  
		if ($(location).attr('href').indexOf("http://info.template-help.com")+1)
		{
			$('#copyright').text('Template-Help.com');
		}	

		// current year
			  var date = new Date();
			  $("#date").html(date.getFullYear());

 		// slide-down-box-------------------------------  
      var idArray = [],
          click_scroll = false;
      $("#nav a").each(function(index){
        idArray[index]=$(this).attr("href");
      });
      
      $('ul.list li a').prepend('<i class="icon-sample"></i>');
      $('li:first-child', "#nav").addClass('first');
      $('li:last-child', "#nav").addClass('last');

      $("#affect_all").toggle(
        function(){
          $("#nav>li").not(".act_item").addClass("open_item").find("dd").stop(true).slideDown(200);
          $(this).find('.expand').hide();
          $(this).find('.close').show();
        },
        function(){
          $("#nav>li").not(".act_item").removeClass("open_item").find("dd").stop(true).slideUp(200);
          $(this).find('.expand').show();
          $(this).find('.close').hide();
        }
      );
      $(".slide-down dt i").click(function(){
        $(this).parents("li").toggleClass("open_item").find('dd').slideToggle(300);
        return false;
      });
      $(".slide-down a").click(function(){
        click_scroll = true;
        $(window).scrollTo($(this).attr("href"), 800, function(){
          click_scroll = false;
          change_menu_item();
        });
        return false;
      });
      $(window).scroll(change_menu_item).trigger("scroll");
      function change_menu_item(){
        if(!click_scroll){
          $(".current").removeClass("current");
          $(".act_item").removeClass("act_item");
          $(".open_item").removeClass("open_item");
          for(var i=0, lenghtArray = idArray.length; i<lenghtArray; i++){
            if($(idArray[i]).offset().top-$(window).scrollTop()<=(($(window).height()/2)-100) && $(idArray[i]).offset().top-$(window).scrollTop()>=0 || $(window).scrollTop()+(($(window).height()/2)-100)>$(idArray[i]).offset().top && $(idArray[i]).offset().top+$(idArray[i]).height()>$(window).scrollTop()+(($(window).height()/2))){
              $("a[href="+idArray[i]+"]").parent("li").addClass("current");
              $("a[href="+idArray[i]+"]").parents("li").addClass("act_item open_item");
            }
          }
          $(".act_item").find("dd").slideDown(200);
          $("li", '#nav').not(".act_item").find("dd").stop().slideUp(200);
        }
      }
	  /*Language switcher*/

			  /*$('#lang_icon').toggle(function(){
				$('#lang_icon > i').find('i').removeClass('icon-angle-down').addClass('icon-angle-up');
				$('#lang_list').slideDown(200);
			  }, function(){
				$('#lang_list').slideUp(200);
				$('#lang_icon > i').find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
			  })
		
			  $('#lang_list li').click(function(){
				$('#lang_list').slideUp(200);
				$('#lang_icon > i').find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
			  })
			  $(document).click(function() { 
				$('#lang_list').slideUp(200);
				$('#lang_icon > i').find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
			   }); 
			  $('#lang_icon').click(function(e){ 
				  e.stopPropagation(); 
			  });*/
			  
function select_menu(id){
        var icon = $(id).find('.select-menu_icon');
        var list = $(id).find('.select-menu_list');

        $(icon).toggle(function(){
          console.log('clicked');
          $(icon).find('i').removeClass('icon-angle-down').addClass('icon-angle-up');
          $(list).slideDown(200);
        }, function(){
          $(list).slideUp(200);
          $(icon).find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
        })

        $(list).find('li').click(function(){
          $(list).slideUp(200);
          $(icon).find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
        })

        $(document).click(function() {
          $(list).slideUp(200);
          $(icon).find('i').addClass('icon-angle-down').removeClass('icon-angle-up');
        })

        $(icon).click(function(e){
          e.stopPropagation();
        });
      }

      select_menu("#languages");
      select_menu("#versions");

			  
			  
			  
    })  
    !function ($) {
      $(function(){	
        var $window = $(window)
        // side bar
        $('#nav_container').affix({
          offset: {
            top: 80		
          }
        })
      })
    }(window.jQuery)

/* Chat
 ========================================================*/

function showChat() {

    var zemezchat = document.getElementById("zemez-chat");
    zemezchat.classList.add("zemez-chat-shown");
}

function closeChat() {

    var zemezchat = document.getElementById("zemez-chat");
    zemezchat.classList.remove("zemez-chat-shown");
}

function startChat() {

    var uname = document.getElementById("uname");
    var umail = document.getElementById("umail");

    isValid = true;

    if ( ! uname.value ) {
        isValid = false;
        uname.classList.add("zemez-chat-error");
    } else {
        uname.classList.remove("zemez-chat-error");
    }

    if ( ! umail.value || ! umail.validity.valid) {
        isValid = false;
        umail.classList.add("zemez-chat-error");
    } else {
        umail.classList.remove("zemez-chat-error");
    }

    if ( ! isValid ) {
        return;
    }

    jQuery.ajax({
        url:     'chat.php',
        type:     "GET",
        dataType: "html",
        async:false,
        data: jQuery('#zemez-chat').serialize(),
        success: function(response) {
            window.open(response, '_blank', 'height=700,width=800');

        },
        error: function(response) {
            window.location = 'http://chat.template-help.com/';
        }
    });

}