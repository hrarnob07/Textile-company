/*Test Work*/
$(document).ready(function(){
window.onpopstate = function(e) {       
            goTo(e.state ? e.state.url : null);
        }
       }); 
function goTo(href) {
  var url = href;
  $.get(url, { ajax: true }, function(data) {
      try {
        // $('.content').html(data);                       
        $('#block-system-main').replaceWith(data);

        var pageTitle = jQuery(document).find('h1').first().text();
        jQuery(document).find("title").text(pageTitle + '');
        $('.wrapbusinesspage').animate({ opacity: 0 });

        $('.block-system').addClass('in-animation-start');
        setTimeout(function() {
          $('.block-system').addClass('in-animation');
        }, 50);
        setTimeout(function() {
          $('.block-system').removeClass('in-animation-start');

        }, 70);
        setTimeout(function() {
          $('body').addClass('startani');

        }, 150);


        // $(".block-system").load("/sites/all/themes/arvind/js/script-scrollr.js");
        setTimeout(function() {
          $.getScript("/sites/all/themes/arvind/js/script-scrollr.js", function(data, textStatus, jqxhr) {

          });
          $.getScript("/sites/all/themes/arvind/js/businesses.js", function(data, textStatus, jqxhr) {

          });
          $.getScript("/sites/all/modules/custom/businesses_disp/js/brand_business_sliders.js", function(data, textStatus, jqxhr) {

          });
          $('body').removeClass('bodyanimation');
          $('nav').fadeIn();

          if ($('body').width() > 1024) {
            skrollr.init({
              forceHeight: false,
            }).refresh();

          }
          $('body').css({ overflow: 'auto' });
        }, 1550);

        setTimeout(function() {
          $('.wrapbusinesspage').animate({ opacity: 1 });
        }, 3150);
      } catch (err) {
        window.location = url;
      }

    })
    .error(function() {
      window.location = url;
    });

}

/* check for support before we move ahead */
if (typeof history.pushState !== "undefined") {
  var historyCount = 0;

  $(document).on('click', '.ajax-linkPush', function(e) {
    e.preventDefault();
    var thisClick = $(this);

    //$('#block-system-main').fadeOut()
    $('.block-system').removeClass('in-animation');
    $('body').addClass('bodyanimation');
    //alert('hi');
    $('.block-system').addClass('out-animation');
    $('body').removeClass('startani');
    $('nav').fadeOut();
    $('.wrapbusinesspage').animate({ opacity: 0 });

    // $('.animationdivIn').addClass('in-animation')


    setTimeout(function() {
      var href = thisClick.attr('href');
      //console.log(href);
      goTo(href);
  //    history.pushState(null, null, href);
   window.history.pushState({url: "" + href + ""}, null, href);






    }, 700);

    return false;

  });

  /*
  window.onpopstate = function(){
      if(historyCount) {
          goTo(document.location);
      }
      historyCount = historyCount+1;
  };
  */
}



function goTo_fashion_inner(href) {
  var url = href;
  $.get(url, { ajax: true }, function(data) {
    try {
      // $('.content').html(data);                       
      $('#block-system-main').replaceWith(data);
      var pageTitle = jQuery(document).find('h2').first().text();
      jQuery(document).find("title").text(pageTitle + '');
      $(".mcustomscroll").mCustomScrollbar();
      $(".description--preview .descripWrapp").mCustomScrollbar({
        scrollButtons: {
          enable: true
        },
      });

      setTimeout(function() {
        $.getScript("/sites/all/themes/arvind/js/script-scrollr.js", function(data, textStatus, jqxhr) {});
      }, 1550);

    } catch (err) {
      console.log('err: ' + err);
      window.location = url;
    }
  }).error(function() {
    console.log('Dinesh console.log');
    window.location = url;
    // alert('Error');
  });

}

jQuery(document).on('click', '.ajax-pushPage-fashion-inner', function(e) {
  e.preventDefault();
  var thisClick = $(this);
  setTimeout(function() {
    var href = thisClick.attr('href');
    //console.log(href);

    goTo_fashion_inner(href);
    //history.pushState(null, null, href);

   window.history.pushState({url: "" + href + ""}, null, href);
  }, 600);

  return false;
});





function goTo_investor(href) {
  var url = href;
  $.get(url, { ajax: true }, function(data) {
    try {
      // $('.content').html(data);                       
      $('#block-system-main').replaceWith(data);
      var pageTitle = jQuery(document).find('h1').first().text();
      jQuery(document).find("title").text(pageTitle + '');

      $('.block-system').addClass('in-animation-start');
      setTimeout(function() {
        $('.block-system').addClass('in-animation');
      }, 50);
      setTimeout(function() {
        $('.block-system').removeClass('in-animation-start');

      }, 70);
      setTimeout(function() {
        $('body').addClass('startani');

      }, 150);
      // $(".block-system").load("/sites/all/themes/arvind/js/script-scrollr.js");
      setTimeout(function() {
        $.getScript("/sites/all/themes/arvind/js/script-scrollr.js", function(data, textStatus, jqxhr) {});
        $.getScript("/sites/all/modules/custom/arvind_common/js/investor_common.js", function(data, textStatus, jqxhr) {});
        var nodeId = 'Dinesh';
        nodeId = jQuery('.node_nid_hide').text();
        console.log('nodeId: ' + nodeId);
        if (nodeId == '94') {
          $.getScript("/sites/all/modules/custom/arvind_common/js/whoweare.js", function(data, textStatus, jqxhr) {
            console.log('94 added');
          });
        }
        if (nodeId == '563') {
          if ($('body').width() > 1024) {
            AOS.init({
              easing: 'ease-in-out-sine'
            });
          }
        }

        $('body').removeClass('bodyanimation');
        $('nav').fadeIn();

        if ($('body').width() > 1024) {
          skrollr.init({
            forceHeight: false,
          }).refresh();

        }
        $('body').css({ overflow: 'auto' });

        $(".mcustomscroll").mCustomScrollbar();
        $(".description--preview .descripWrapp").mCustomScrollbar({
          scrollButtons: {
            enable: true
          },
        });
      }, 1550);



    } catch (err) {
      // alert(err);
      window.location = url;
    }
  }).error(function() {
    // alert('Error');
    window.location = url;





    // alert('Error');
  });

}





jQuery(document).on('click', '.ajax-pushPage-investor', function(e) {
  e.preventDefault();
  var thisClick = $(this);
  setTimeout(function() {
    var href = thisClick.attr('href');
    //console.log(href);
    $('body').addClass('bodyanimation');
    //alert('hi');
    $('.block-system').addClass('out-animation');
    $('body').removeClass('startani');
    $('nav').fadeOut();
    goTo_investor(href);
    //history.pushState(null, null, href);

   window.history.pushState({url: "" + href + ""}, null, href);
  }, 600);

  return false;
});









/*function goTo_investor(href) {
  var url = href;
  $.get(url, { ajax: true }, function (data) {
    try {
      // $('.content').html(data);                       
      $('#block-system-main').replaceWith(data);
      var pageTitle = jQuery(document).find('h1').first().text(); 
      jQuery(document).find("title").text(pageTitle+'');

       $('.block-system').addClass('in-animation-start');
      setTimeout(function(){
           $('.block-system').addClass('in-animation');
      }, 50); 
      setTimeout(function(){
           $('.block-system').removeClass('in-animation-start');
         
      }, 70); 
            setTimeout(function(){
            $('body').addClass('startani');

        }, 150); 
      // $(".block-system").load("/sites/all/themes/arvind/js/script-scrollr.js");
             setTimeout(function(){
            $.getScript( "/sites/all/themes/arvind/js/script-scrollr.js", function( data, textStatus, jqxhr ) {});
            $.getScript( "/sites/all/modules/custom/arvind_common/js/investor_common.js", function( data, textStatus, jqxhr ) {});
      var nodeId = 'Dinesh';
      nodeId = jQuery('.node_nid_hide').text();
      console.log('nodeId: '+nodeId);
      if(nodeId == '94'){
        $.getScript( "/sites/all/modules/custom/arvind_common/js/whoweare.js", function( data, textStatus, jqxhr ) {
          console.log('94 added');
        });
      }
        if(nodeId == '563'){
          if ($('body').width() > 1024) {
            AOS.init({
                easing: 'ease-in-out-sine'
              });
          }
        }
            
              $('body').removeClass('bodyanimation');
              $('nav').fadeIn();

              if ($('body').width() > 1024) {
                skrollr.init({
              forceHeight: false,
                }).refresh(); 
            
             } 
             $('body').css({overflow: 'auto'});

             $(".mcustomscroll").mCustomScrollbar();
      $(".description--preview .descripWrapp").mCustomScrollbar({
      scrollButtons: {
        enable: true
      },
    });
      }, 1550);  



    }
    catch (err) {
      // alert(err);
      window.location = url;
    }
  }).error(function () {
    // alert('Error');
    window.location = url;





    // alert('Error');
  });
    
}


jQuery(document).on('click', 'a', function(e){
  if(jQuery(this).hasClass('ajax-pushPage-investor') || jQuery(this).hasClass('ajax-linkPush') || jQuery(this).hasClass('ajax-pushPage-fashion-inner')){

  }else{

    e.preventDefault();
    var thisClick = $(this);
    setTimeout(function(){
      var href = thisClick.attr('href');
      if(href == '#' || href == ''){

      }else{
        //console.log(href);
        $('body').addClass('bodyanimation');
        //alert('hi');
            $('.block-system').addClass('out-animation');
            $('body').removeClass('startani');
            $('nav').fadeOut();
        goTo_investor(href);
        history.pushState(null, null, href);
      }
    }, 600);      

    return false; 

  }
});


*/


$(window).on("popstate", function(e) {
  if (e.originalEvent.state !== null) {
    goTo_menu_nav(location.href);
  }
});


function goTo_menu_nav(href) {
  var url = href;
  console.log('url: '+url);
  $.get(url, { ajax: true }, function(data) {
    try {
      // $('.content').html(data);                       
      $('#block-system-main').replaceWith(data);

      var pageTitle = jQuery(document).find('h1').first().text();
      jQuery(document).find("title").text(pageTitle + '');

      var gMenuLoop = 0;

      function displayMenu() {
        var menuList = $('.navbar-nav > li >a');
        $('.navbar-brand').animate({ top: '0' });
        $('.line-logoside i').animate({ opacity: '1' });
        menuList.eq(gMenuLoop++).animate({
          top: "0",
          opacity: '1'
        }, "fast", function() {
          displayMenu();
        });
      };


      $('#pageChange').addClass('is-loaded');
      if ($('body').width() > 768) {
        displayMenu();
      }

      jQuery('.selectAjaxLoad select').change(function() {
        var redirectPage = jQuery(this).val();
console.log(redirectPage);
// window.location.href = redirectPage;
setTimeout(function() {
$('#pageChange').removeClass('is-loaded');
//jQuery('.navbar.navbar-default').removeClass('blackNavigation');
if ($('body').width() > 768) {


$('.navbar-nav > li >a').css({ top: '-70px' });
$('.navbar-brand').css({ top: '-70px' });
$('.line-logoside i').animate({ opacity: '0%' });
}
goTo_menu_nav(redirectPage);
history.pushState(null, null, redirectPage);
}, 600);
      });
      // if(url == 'contact-us'){
        if (url.indexOf("contact-us") >= 0){
      if (typeof initialize !== 'undefined' && $.isFunction(initialize)) {
        initialize();
      }
    }

      setTimeout(function() {
        $('body').addClass('startani');

      }, 150);

      setTimeout(function() {

        AOS.init({
          easing: 'ease-in-out-sine'
        });
      }, 1150);

      // $(".block-system").load("/sites/all/themes/arvind/js/script-scrollr.js");
      setTimeout(function() {
        $.getScript("/sites/all/themes/arvind/js/script-scrollr.js", function(data, textStatus, jqxhr) {});
        $.getScript("/sites/all/modules/custom/arvind_common/js/investor_common.js", function(data, textStatus, jqxhr) {});
        var nodeId = 'Dinesh';
        nodeId = jQuery('.node_nid_hide').text();
        console.log('nodeId: ' + nodeId);
        if (nodeId == '94') {
          $.getScript("/sites/all/modules/custom/arvind_common/js/whoweare.js", function(data, textStatus, jqxhr) {
            console.log('94 added');
          });
        }

        if (url.indexOf("jobs-career") >= 0){         
          $.getScript(Drupal.settings.basePath+"misc/jquery.form.js", function(data, textStatus, jqxhr) {});
          $.getScript(Drupal.settings.basePath+"misc/ajax.js", function(data, textStatus, jqxhr) {});
          $.getScript(Drupal.settings.basePath+"sites/all/modules/contrib/better_exposed_filters/better_exposed_filters.js", function(data, textStatus, jqxhr) {});
          $.getScript(Drupal.settings.basePath+"sites/all/modules/contrib/views/js/base.js", function(data, textStatus, jqxhr) {});
          $.getScript(Drupal.settings.basePath+"misc/progress.js", function(data, textStatus, jqxhr) {});
          $.getScript(Drupal.settings.basePath+"sites/all/modules/contrib/views/js/ajax_view.js", function(data, textStatus, jqxhr) {});
          // alert();
        }

        if (nodeId == '563') {
          if ($('body').width() > 1024) {
            AOS.init({
              easing: 'ease-in-out-sine'
            });
          }
        }


        if ($('body').width() > 1024) {
          skrollr.init({
            forceHeight: false,
          }).refresh();

        }


        $(".mcustomscroll").mCustomScrollbar();
        $(".description--preview .descripWrapp").mCustomScrollbar({
          scrollButtons: {
            enable: true
          },
        });
      }, 1550);



    } catch (err) {
      console.log('err: ' + err);
      window.location = url;
    }
  }).error(function() {
   // alert('Error');
    window.location = url;

  });
}




//jQuery('.navbar-nav').doubleTapToGo();

/*jQuery(document).on('click', '.navbar-nav > li  > a', function(e){
  var clicks = $(this).data('clicks');
  if (clicks) {
     // odd clicks
    console.log('Tesatt');
  } else {
    new_push_state(jQuery(this), e);
 }
 $(this).data("clicks", !clicks);
}); 
*/



jQuery(document).on('click', '.navbar-nav li a:not(.dropDownArrow)', function(e) {
  //alert('hello');
  new_push_state(jQuery(this), e);



});






jQuery(document).on('click', '.footer li a, .newAjaxLoad a, .q, .ajaxLoadToGo', function(e) {
  new_push_state(jQuery(this), e);
});

/*jQuery(document).on('click', '.navbar-nav ul li a', function(e){
  
    e.preventDefault();    
    var thisClick = $(this);
    setTimeout(function(){
      var href = thisClick.attr('href');
      if(href == '#' || href == ''){

      }else{
        //console.log(href);
          $('.preLoader').removeClass('is-loaded');


        goTo_menu_nav(href);
        history.pushState(null, null, href);
      }
    }, 600);

    return false; 
}); */

function new_push_state(thisClick, e) {
  e.preventDefault();
  // var thisClick = $(this);
  if($('body').width() > 1070){
    $('.navbar-toggle ').trigger( "click" );
   $('body').removeClass('scrollstop');

  };
   
  setTimeout(function() {
    var href = thisClick.attr('href');
    if (href == '#' || href == '') {

    } else {
      

     

      $('html,body').animate({scrollTop:0},800);
      $('#pageChange').removeClass('is-loaded');
      

     // jQuery('.navbar.navbar-default').removeClass('blackNavigation');
      $('.searchBtn').click(function() {
         $('nav.navbar').toggleClass('searchActive');
         $('.icon-search').toggleClass('searchbtnActive');
         $('.searchWrap input').focus();

     });

     $('.mobileSearch').click(function() {
         $('.mobilesearchWrap').toggleClass('searchActivemobile');
         $('.icon-search').toggleClass('searchbtnActive');
         $('.searchWrap input').focus();

     });

     
      if ($('body').width() > 768) {
        $('.navbar-nav > li >a').css({ top: '-70px' });
        $('.navbar-brand').css({ top: '-70px' });
        $('.line-logoside i').animate({ opacity: '0%' });
      }

      goTo_menu_nav(href);
     // history.pushState(null, null, href);
     
   window.history.pushState({url: "" + href + ""}, null, href);
    }
  }, 600);

  return false;
}



jQuery('.selectAjaxLoad select').change(function() {
  var redirectPage = jQuery(this).val();
  console.log(redirectPage);
  // window.location.href = redirectPage;
  setTimeout(function() {
    $('#pageChange').removeClass('is-loaded');
  //  jQuery('.navbar.navbar-default').removeClass('blackNavigation');
    if ($('body').width() > 768) {

      
      $('.navbar-nav > li >a').css({ top: '-70px' });
      $('.navbar-brand').css({ top: '-70px' });
      $('.line-logoside i').animate({ opacity: '0%' });
    }
    goTo_menu_nav(redirectPage);
    history.pushState(null, null, redirectPage);
  }, 600);
});
