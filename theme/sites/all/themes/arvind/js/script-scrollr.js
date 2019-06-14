

 $(window).load(function() {
     $('<a class="dropDownArrow"></a>').insertAfter('.navWrapRight .navbar-nav > li .dropdownWrap');
     $('.dropDownArrow').click(function() {
             if ($(this).hasClass('active')) {
                 $(this).removeClass('active');
                 $(this).prev('.dropdownWrap').removeClass('active');
                 $(this).next('ul').slideUp();
             } else {
                 $('.dropDownArrow').removeClass('active');
                 $('.dropDownArrow').prev('.dropdownWrap').removeClass('active');
                 $('.navWrapRight ul.navbar-nav li ul').slideUp();
                 $(this).next('ul').slideDown();
                 $(this).addClass('active');
                 $(this).prev('.dropdownWrap').addClass('active');
             }
         });
     $('.navbar-nav > li >a:not(.dropDownArrow, .dropdownWrap  ) ').click(function(){
         $('.dropDownArrow').removeClass('active');
         $('.dropDownArrow').prev('.dropdownWrap').removeClass('active');
                
     });
 if ($('body').width() < 1024) {
     $('.navbar-nav > li >a:not(.dropDownArrow, .dropdownWrap  ) ').click(function(){
         $('.navWrapRight ul.navbar-nav li ul').slideUp();
     });
}

     $('.navbar-nav ul a.active').closest('ul').siblings('a.dropdownWrap').addClass('active');
     $('.navbar-nav a ').click(function() {
         $('.navbar-nav li a').removeClass('active');
         $(this).addClass('active');
         $(this).closest('ul').siblings('a.dropdownWrap').addClass('active');
     });
     if ($('body').width() < 1024) {
         $('.carousel-homepage .carousel-inner .item:not(:first-child)').remove();
     }
     $(".line-welcome i").animate({
         width: "100%"
     });
     $(".line-logoside i").animate({
         width: "100%"
     });
     $('.welcomeScreen').show().addClass('welcomeActive');
     setTimeout(function() {
        $('.welcomeScreen').fadeOut();
         $('#pageLoad').addClass('is-loaded');

     }, 3000);
     /*$(".btn-animation, .navWrapRight ul.navbar-nav li a, .playBtn, .mobileSearch, .ajax-pushPage-investor, .navbar-toggle").rippler({
         // effectClass      :  'rippler-effect'
         effectSize: 6 // Default size (width & height)
             //,addElement      :  'div'   // e.g. 'svg'(feature)
             ,
         duration: 400
     });*/

   
 
    Waves.init();
    Waves.attach('.btn-animation, .navWrapRight ul.navbar-nav li a, .mobileSearch, .ajax-pushPage-investor, .navbar-toggle');
 
 
   
 



 });
 $(document).ready(function(e) {
     


     jQuery('.navbar-nav li').each(function() {
         var spanHtml = jQuery(this).children('.nolink').text();
         jQuery(this).children('.nolink').replaceWith('<a>' + spanHtml + '</a>');
     });

     var $ui = $('.ui_element');
     $ui.find('.sb_input').bind('focus click', function() {
         $(this).parent().parent($ui).find('.sb_dropdown')
             .slideDown(150);
     });
     $ui.bind('mouseleave', function() {
         $ui.find('.sb_dropdown').slideUp(300);
     });
     $('.sb_dropdown li a').click(function() {
         var dropvalu = $(this).attr('rel');
         $(this).parent().parent().parent().parent().find('.sb_input').val(dropvalu);
         (function() {
             if (!String.prototype.trim) {
                 (function() {
                     var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                     String.prototype.trim = function() {
                         return this.replace(rtrim, '');
                     };
                 })();
             }
             [].slice.call(document.querySelectorAll('input.input__field')).forEach(function(inputEl) {
                 if (inputEl.value.trim() !== '') {
                     classie.add(inputEl.parentNode, 'input--filled');
                 }
                 inputEl.addEventListener('focus', onInputFocus);
                 inputEl.addEventListener('blur', onInputBlur);
             });

             function onInputFocus(ev) {
                 classie.add(ev.target.parentNode, 'input--filled');
             }

             function onInputBlur(ev) {
                 if (ev.target.value.trim() === '') {
                     classie.remove(ev.target.parentNode, 'input--filled');
                 }
             }
         })();
         $('.sb_dropdown').slideUp(300);
     });
     /*fashioning possibilities banner*/
     $('.fpbannerchange li').mouseenter(function() {
         var targetbg = $(this).attr('class');
         if ($('#' + targetbg).css("display") == "block") {
             $('#' + targetbg).show();
         } else {
             $('.bannerbgslides').fadeOut();
             $('#' + targetbg).fadeIn();
         }
     });
     $('#teamBannerhome').carousel({
         interval: false
     });
     $('.videotoggal').click(function(ev) {
         $('.videoPopup').addClass('opendiv');
         $('body').css({
             overflow: 'hidden'
         });
         var videoUrl = $(this).attr('href');
         $('.videoBox').html('<iframe src="https://www.youtube.com/embed/' + videoUrl + '?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>');
         ev.preventDefault();
     });
     $('.closePopup').click(function() {
         $('.videoPopup').removeClass('opendiv');
         $('.videoBox').html('');
         $('body').css({
             overflow: ''
         });
     });
     $('.maplocation ul a').click(function() {
         $('html, body').animate({
             scrollTop: $("#overview").offset().top
         });
     });

     $('select.bodmobileselect').on('change', function() {
         var selected = $('.selectpicker option:selected').val();
         $('.tab-pane').hide();
         $(selected).show();
     });
     $('.susWraopmob select.selectpicker').on('change', function() {
         var selected = $('.selectpicker option:selected').val();
         // $('.tab-pane').hide();
         $('#' + selected).trigger('click', function(e) {
             e.preventDefault();
         });
         //$(selected).show();
     });
     $('.panel-heading a').click(function() {
         $('.panel-heading').removeClass('active');
         if (!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
             $(this).parents('.panel-heading').addClass('active');
     });
     /*$(function() {
         $('.subsidiaryComp .selectpicker').on('change', function(){
                 var selected = $(this).val();
                 $('.annualReportlist li').hide();
                 $('.' + selected).show();
             });
         });*/

     //$('.navWrapRight .navbar-nav > li .dropdownWrap').append('<span class="dropDownArrow"></span>');
    
    
 });
 if ($('body').width() < 768) {
         $('.navbar-nav li a:not(.dropdownWra, .dropDownArrow)').click(function() {
             $('.navbar-toggle').trigger('click');
         });
     }
 $(document).ready(function() {

     







     $('.sustainbilityCategories').on('afterChange', function(event, slick, currentSlide, nextSlide) {
         // var dataId = $(slick.$slides[currentSlide]).data('index');  
         // $('.content').hide();
         //$('.content[data-id=' + dataId + ']').show();    
         var nextslidetext = $('.slick-current').next().find('h1').html();
         var prevslidetext = $('.slick-current').prev().find('h1').html();

         //var nextslideno = $('.slick-current').next('div').attr('data-no');
         //var prevslideno = $('.slick-current').prev('div').attr('data-no');

         $('.homePrev h3').html(prevslidetext);
         $('.homeNext h3').html(nextslidetext);


     });


     $('.bodList li').click(function() {
         var toppos = $(this).position().top;
         $('body').css({ overflow: 'hidden' });
         /*Dinesh*/
         var thisImage = $(this).find('img').attr('src');
         var thisName = $(this).find('h3').text();
         var thisPost = $(this).find('h6').text();
         var thisDesc = $(this).find('.directordescri').html();
         $('.boddetailbox .leftimg img').attr('src', thisImage);
         $('.boddetailbox .imgconten h3').text(thisName);
         $('.boddetailbox .imgconten h6').text(thisPost);
         $('.boddetailbox .imgconten p').html(thisDesc);
         /*Dinesh*/

         $('.boddetailbox').css({
             top: toppos
         });
         $('.boddetailbox').fadeIn();

         var bodimgheight = $('.leftimg').outerHeight();
         $('.imgconten').css({ height: bodimgheight });
     });
     $('.boddetailbox .closeBtn').click(function() {
         $('.boddetailbox').fadeOut();
         $('body').css({ overflow: '' });
     });
     $(".maplocation").mCustomScrollbar({
         scrollButtons: {
             enable: true
         },
     });

     $(".wrappagescroll").mCustomScrollbar({
         scrollButtons: {
             enable: true
         },
     });
     $('.navbar-toggle').click(function() {
         // alert('hello');
         $('body').toggleClass('scrollstop');
     });


     $(".maplocation").mCustomScrollbar({
         scrollButtons: {
             enable: true
         },
     });
     /* $('.slidescrolldiv').mCustomScrollbar({
          scrollButtons: {
              enable: true
          },
      });*/
     $("input[type='text']#selectwrp").click(function() {
         $(this).next('select').trigger();
     });
     $('.highlightReadmore').click(function() {
         $(this).parent('.lefthlbox').toggleClass('openhighlight');
         $(this).toggleClass('active');

     });

     // $('body').stop().animate({scrollTop:0}, '0');

     $('.gotoTopBtn').click(function(){
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
     });

     $(function() {
         var navbarWidth = $('#defaultNavbar1').innerWidth();
         var logoWidth = $('.navbar-brand').innerWidth();
         var logoHeight = $('.navbar-brand').innerHeight();
         var menuWidth = $('.navWrapRight').innerWidth();
         var totalMenuLogowidth = logoWidth + menuWidth;
         var homesliderbannerheight = $('.carousel-inner').height();
         var homesliderheight = $('.carousel-inner').height() / 2;
         var homeslidernavheight = $('.carousel-indicators').height() / 1.5;
         var logoLineWidth = navbarWidth - totalMenuLogowidth;
         var bannerleftline = homesliderheight - homeslidernavheight;
         var leftposbannertext = $('.bannerConten').position();
         var bannerconwidth = $('.bannerConten').width();
         if ($('*').hasClass('wraptitallinemt')) {
             var winWidthwrap = $(window).width();
             var conterLeftofset = $('.wraptitallinemt').offset().left;
             $('.containerWidth').css({ width: winWidthwrap - conterLeftofset - 35 });
         }
         if ($('*').hasClass('sustainpagewrap')) {
             var winWidthwrap = $(window).width();
             var conterLeftofset = $('.sustainpagewrap').offset().left;
             $('.containerWidth').css({ width: winWidthwrap - conterLeftofset - 25 });
         }

         if ($('*').hasClass('containerWidthwithbtn')) {
             var winWidthwrap = $(window).width();
             var conterLeftofset = $('.container').offset().left;
             $('.containerWidthwithbtn').css({ width: winWidthwrap - conterLeftofset - 140 });
         }
         //var bannerconrlTop = $('.carousel-indicators li.active').offset(); 
         if ($('*').hasClass('line-bannerctop')) {
             var linebannerctopleft = leftposbannertext.left + bannerconwidth;
             $('.line-bannerctop').css({
                 left: linebannerctopleft
             });
         }
         var bannerbpos = $('.line-bannerright').parent('strong').offset();
         var topSliderHeadWidth = $('.topSliderHead h1').width();

         var topSliderHead = $('.topSliderHead h1').position();
         if ($('*').hasClass('line-ourbusBr')) {
             var bannerconwidth22 = $('.bannerConten').width();
             var leftposbannertext33 = $('.bannerConten').position();
             var linebannerctopleft22 = leftposbannertext33.left + bannerconwidth22; //full linebanner
             var topSliderHeadWidth33 = $('.topSliderHead h1').width();
             var linebannerctopright = linebannerctopleft22 + $('.line-bannerctop').width() + 50;
             var topSliderHeadleft = $('.topSliderHead h1').position().left;
             var topSliderHeadright = topSliderHeadleft + topSliderHeadWidth33;
             var headlinewidth = linebannerctopright - topSliderHeadright;
             //console.log('topSliderHeadWidth33 -' + linebannerctopright);
             $('.line-ourbusBr').css({
                 width: headlinewidth
             });
         }
         if ($('*').hasClass('line-ourbusBrT')) {
             var topslidertop = $('.topslider').offset().top;
             var lineourbusBrtop = $('.line-ourbusBr').offset().top;
             var lineourbusBrToppos = lineourbusBrtop - topslidertop;
             $('.line-ourbusBrT').css({
                 height: lineourbusBrToppos + 2
             });
         }
         $('.line-logoside').css({
             width: logoLineWidth
         });
         
         $('.line-homebannerLeft').css({
             height: bannerleftline,
             top: '0'
         });
         if ($('*').hasClass('line-bannerNav')) {
             $('.line-bannerNav').css({
                 width: leftposbannertext.left - 70
             });
         }
         if ($('*').hasClass('line-bannerright')) {
             $('.line-bannerright').css({
                 height: homesliderbannerheight - bannerbpos.top + 70
             });
         }
         if ($('*').hasClass('line-ourbusRight')) {
             $('.line-ourbusRight').css({
                 width: topSliderHead.left
             });
         }
           setTimeout(function() {
         var temcaptionboxW = $('.wrapteamcaption').width();
         var temcaptionboxH = $('.wrapteamcaption').height();

         var wrapcptiontopleftW = $('.wrapcptiontopleft').width();
         var wrapcptiontopleftH = $('.wrapcptiontopleft').height();
         $('.line-carouselTop').css({
             width: temcaptionboxW - wrapcptiontopleftW
         });
         $('.line-carouselleft').css({
             height: temcaptionboxH - wrapcptiontopleftH
         });


 }, 1000);








     });
     setTimeout(function() {


         var winwidth = $('.innerpagebanner').width() / 2;
         var winh1width = $('.bodbanc h1').width() + 47.5;
         $('.line-bodbanc').css({
             width: winwidth - winh1width
         });
     }, 500);
     var widnowswith = $(window).width();
     if ($('*').hasClass('businesListCate')) {
         var businesfirsth = $('.businesListCate>li:first-child h2').offset().left;
         $('.line-inbanbottomr').css({
             width: widnowswith - businesfirsth - 340
         });
     }


     if ($('strong').hasClass('line-bllistimg')) {
         var bllistimg = $('.bllistimg').offset().left;
         $('.line-bllistimg').css({
             width: bllistimg
         });
     }


     /*fashioning possibilities sorting*/
     $('.fp-sortingmenu input[type="radio"]').change(function() {
         $('.fplist').find('li').hide();
         $('.' + $(this).val()).show();
         if ($(this).val() == 'all') {
             $('.fplist').find('li').show();
         }
     });
     if ($('body').width() < 999) {
         $('.dropdownFooter a').click(function() {

             // alert('asdf');
             if ($(this).parent().hasClass('active')) {
                 $(this).parent().removeClass('active');
                 $(this).parent().next('ul').slideUp();
             } else {

                 $('.footRight h5').removeClass('active');
                 $('.footRight ul').slideUp();
                 $(this).parent().next('ul').slideDown();
                 $(this).parent().addClass('active');

             }

             //$('this').next('ul').slideDown();
         });

         // $('<a class="dropDownArrow"></a>').insertAfter('.navWrapRight .navbar-nav > li .dropdownWrap');


         







         //alert('hello');
         // $('.navWrapRight .navbar-nav > li').insertAfter('<a class="asdf"></a>');







     }
     $('#carousel').carousel({
         interval: 5000
     });
     $('#innerpagecarousel').carousel({
         interval: false
     });
     /* if($('body').width() > 1024) {
            $('#carousel').bind('mousewheel DOMMouseScroll', function(e){ 
                if($('.homeindi li:last-child').hasClass('active')){
                    $('#carousel').carousel('pause');
                    $('body').css({overflow:'auto'});
                } else{
                    $('#carousel').carousel('cycle');
                    if(e.originalEvent.wheelDelta < 0) {
                        //scroll down
                        $(this).carousel('next');
                        console.log('Down');
                    }else {
                    //scroll up
                        console.log('Up');
                        $(this).carousel('prev');
                    }
                }
            });
        }*/
     $('#carousel').bind('slide.bs.carousel', function() {
         $(".line-bannerright > i").animate({
             height: "0%"
         }, 10, function() {
             $(".line-bannerctop > i").animate({
                 width: "0%"
             }, 5, function() {
                 $(".line-bannerNav > i").animate({
                     width: "0%"
                 }, 10, function() {});
             });
         });
     });
     $('#carousel').bind('slid.bs.carousel', function() {



         $(".carousel-indicators li.active .line-bannerNav > i").animate({
             width: "100%"
         }, function() {
             $(".carousel-indicators li.active .line-bannerctop > i").animate({
                 width: "100%"
             }, function() {
                 $(".carousel-indicators li.active .line-bannerright > i").animate({
                     height: "100%"
                 }, function() {});
             });
         });

     });


     var height_to_scroll_element = 850; // Please use descriptive names for your variables. fortyTwo tells a maintainer nothing about what the variable is actually for.
     $(window).scroll(function() {
         if ($(window).scrollTop() > height_to_scroll_element) {
             var a = 0;
             $('.count').each(function() {
                 var $this = $(this),
                     countTo = $this.attr('data-count');
                 $({
                     countNum: $this.text()
                 }).animate({
                         countNum: countTo
                     },

                     {

                         duration: 1300,
                         easing: 'swing',
                         step: function() {
                             $this.text(Math.floor(this.countNum));
                         },
                         complete: function() {
                             $this.text(this.countNum);
                             //alert('finished');
                         }

                     });
             });
             a = 1;



         }
     });


     $('.searchBtn').click(function() {
         $('nav.navbar').toggleClass('searchActive');
         $('.icon-search').toggleClass('searchbtnActive');
         $('.searchWrap input').focus();

     });

     $('.mobileSearch').click(function() {
         $('.mobilesearchWrap').toggleClass('searchActivemobile');
         $('.icon-search').toggleClass('searchbtnActive');
         $('.searchWrap input').focus();
         $('body').toggleClass('scrollstop')

     });


     $('.wrapNaviforslider a').hover(function() {
         var atitle = $(this).attr('title');
         console.log(atitle);
         $('.navPagename p').html(atitle);
         if ($(this).hasClass('prevBtn')) {
             $('.navPagename span').html('Previous');
         } else if ($(this).hasClass('nextBtn')) {
             $('.navPagename span').html('Next');
         }

     });
     // $(".descripWrapp").mCustomScrollbar();
     $('.grid__item').click(function() {

         setTimeout(function() {

             $(".description--preview .descripWrapp").mCustomScrollbar({
                 scrollButtons: {
                     enable: true
                 },
             });
         }, 500);

     });






     $('.action--close').click(function() {
         $('body').css({
             overflow: ''
         });
         //$('description--preview').removeClass('mCustomScrollbar')  ;
     });





     /*
$(window).scroll(function(){
    var st = $(this).scrollTop();
    var navheight = $('.navbar').height();
    if($(window).scrollTop() > navheight + 200){
        $('.navbar').addClass('fixedani bwFixedmenu');
        }
        else{
        $('.navbar').removeClass('fixedani bwFixedmenu').css({top: - navheight });
    }
    if (st > lastScrollTop){
        $('.navbar').css({top: - navheight });
        } else {
        $('.navbar').css({top: 0 });
    }
    lastScrollTop = st;
});
     
     */

     ////////////////////////////////

     // Hide Header on on scroll down
     var didScroll;
     var lastScrollTop = 0;
     var delta = 0;
     var navbarHeight = $('.navbar').outerHeight();
     var navbarHeightInner = $('.navbar').innerHeight();



     $(window).scroll(function(event) {
         didScroll = true;
         var navheight = $('.navbar').height();
         var innerpagebannerHeight = $('.innerpagebanner').height();

         if ($(window).scrollTop() > navheight) {
             //console.log('menu100');
             $('.navbar').addClass('bwFixedmenu');
             $('.gotoTopBtn').fadeIn();
         } else { $('.navbar').removeClass('bwFixedmenu');
                    $('.gotoTopBtn').fadeOut();
             }

         if ($(window).scrollTop() > innerpagebannerHeight) {
             //console.log('menu100');
             $('.carrerNavigation').addClass('fixedCareers');
         } else { $('.carrerNavigation').removeClass('fixedCareers'); }


     });

     setInterval(function() {
         if (didScroll) {
             hasScrolled();
             didScroll = false;
         }
     }, 50);

     function hasScrolled() {

         var st = $(this).scrollTop();

         // Make sure they scroll more than delta
         if (Math.abs(lastScrollTop - st) <= delta)
             return;

         // If they scrolled down and are past the navbar, add class .nav-up.
         // This is necessary so you never see what is "behind" the navbar.
         if (st > lastScrollTop && st > navbarHeight) {
             // Scroll Down
             $('.navbar').removeClass('nav-down').addClass('nav-up');
             $('.bannerVideoPopup').html('');
             $('.bannerVideoPopup').hide();
             $('.fixedCareers').removeClass('fixtopmar');

             //$('.stickytop').css('padding-top', '0px');
         } else {
             // Scroll Up
             if (st + $(window).height() < $(document).height()) {
                 $('.navbar').removeClass('nav-up').addClass('nav-down');
                 $('.fixedCareers').addClass('fixtopmar');


                 //$('.stickytop').css('padding-top', '87px');
             }
         }

         lastScrollTop = st;
     }
     /////////////////////////////////


 });
 $(window).load(function() {
     $('.bannerimg').addClass('startani');
     $('.innerbanBottombox').addClass('startani');
     $(function() {
         $(".line-logoside i").animate({
             width: "100%"
         }, 1000);
         $(".line-welcome i").animate({
             width: "100%"
         }, 1000);
         $(".line-homebannerLeft i").animate({
             height: "100%"
         }, 1000, function() {
             $(".carousel-indicators li.active .line-bannerNav i").animate({
                 width: "100%"
             }, 1000, function() {
                 $(".carousel-indicators li.active .line-bannerctop > i").animate({
                     width: "100%"
                 }, 400, function() {
                     $(".carousel-indicators li.active .line-bannerright > i").animate({
                         height: "100%"
                     }, 1000);
                 });
             });
         });
     });
     if ($('*').hasClass('carrerSection')) {
         
        
         
         
         
    //     var lineheightsparent = $('.line-careerTophead').offset().top;
        


         var contenLeft = $('.overviewTopconten').offset().left;
       
         var contenwidth = $('.overviewTopconten').width() / 2;
         var mainwidth = contenwidth - lineleftoffset;
         $('.line-careerTophead').css({ width: mainwidth });
         
        // console.log(tablinetop);
        
        
        
     }
      
     

 if ($('*').hasClass('line-careerTophead')) {
  var lineleftpos = $('.active .line-carrerNavigation').offset().left;
         var lineleftoffset = lineleftpos - contenLeft;
  var tablinetop = $('.active .line-carrerNavigation').offset().top;
 var lineheightsparent = $('.line-careerTophead').offset().top;
  $('.line-carrerNavigation').css({ height: lineheightsparent - tablinetop });

 }



     if ($('.navWrapRight ul li a.dropdownWrap').hasClass('active')) {
         $('.navWrapRight ul li a.active').next('.dropDownArrow').addClass('active').next('ul').slideDown();
     }

 });





 $(window).resize(function() {
     var navbarWidth = $('#defaultNavbar1').innerWidth();
     var logoWidth = $('.navbar-brand').innerWidth();
     var menuWidth = $('.navWrapRight').innerWidth();
     var totalMenuLogowidth = logoWidth + menuWidth;
     var logoLineWidth = navbarWidth - totalMenuLogowidth;
     $('.line-logoside').css({
         width: logoLineWidth
     });
 });
 if ($('body').width() > 768) {
     $('.srStorysWeaps li').hover(function() {
         $('.srStorysWeaps li').removeClass('active');
         $(this).addClass('active');
         $(this).find('.imgwraphr').css({ width: hrimgwidth + 20 });
     });
     var hrimgwidth = $('.imgwraphr').width();
     $('.imgwraphr').css({ width: hrimgwidth });
     $('.hrconten').css({ width: hrimgwidth - 10 });

     $('.srStorysWeaps li:first-child').addClass('active');
     $('.srStorysWeaps li:first-child .imgwraphr').css({ width: hrimgwidth + 20 });
 }


 (function() {
     if (!String.prototype.trim) {
         (function() {
             var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
             String.prototype.trim = function() {
                 return this.replace(rtrim, '');
             };
         })();
     }

     [].slice.call(document.querySelectorAll('input.input__field')).forEach(function(inputEl) {
         if (inputEl.value.trim() !== '') {
             classie.add(inputEl.parentNode, 'input--filled');
         }
         inputEl.addEventListener('focus', onInputFocus);
         inputEl.addEventListener('blur', onInputBlur);
     });

     function onInputFocus(ev) {
         classie.add(ev.target.parentNode, 'input--filled');
     }

     function onInputBlur(ev) {
         if (ev.target.value.trim() === '') {
             classie.remove(ev.target.parentNode, 'input--filled');
         }
     }
 })();
 if ($('*').hasClass('selectpicker')) {
     $('.selectpicker').selectpicker();

 }

 $('.leftSidebar li a').click(function() {
     $(".titalbgline span").addClass("scalediv").delay(800);
     var pagehead = $(this).html();

     function openPopup() {
         $('.titalbgline span').empty();
         $('.titalbgline span').append(pagehead);
         $(".titalbgline span").removeClass("scalediv");
     }

     setTimeout(openPopup, 600);

 });
 if ($('body').width() < 768) {
     /*$(".mobiledropdown a").click(function() {
         $(".leftSidebar  ul").toggle();
     });*/
     $(".leftSidebar ul li a").click(function() {
         var text = $(this).html();
         $(".mobiledropdown a span").html(text);
         $(".leftSidebar  ul").hide();
     });
     $(document).bind('click', function(e) {
         var $clicked = $(e.target);
         if (!$clicked.parents().hasClass("leftSidebar"))
             $(".leftSidebar  ul").hide();
     });
     $(".mobileallscroll").mCustomScrollbar();
 } else {
     $(".imgconten").mCustomScrollbar();

 }

 if ($('body').width() < 999) {
     $('.wrapNaviforslider a').each(function() {
         $(this).html('<span>ccc</span>');
         $(this).children('span').text(jQuery(this).attr('title'));
     });

 }




 $('.abLeftbox').hover(function(event) {
     $(this).css({
         width: '70%'
     });
     $('.abrightbox').css({
         width: '30%'
     });
 });

 $('.abrightbox').hover(function(event) {
     $(this).css({
         width: '70%'
     });
     $('.abLeftbox').css({
         width: '30%'
     });
 });
 $('.aboutgotimeline').mouseleave(function(event) {
     $('.abrightbox').css({
         width: '50%'
     });
     $('.abLeftbox').css({
         width: '50%'
     });
 });
 $('.wrapaboutlconten').mouseover(function(event) {
     $('.abrightbox').css({
         width: '50%'
     });
     $('.abLeftbox').css({
         width: '50%'
     });
 });

 /* $('.sliderDetailimgtextbtn').click(function() {

      $(this).parent('.scimgWrap').slideUp();
      //$('.scimgWrap').slideUp();
      $(this).parent().parent().find('.viewMoreConten').slideDown();
      $('.scSlide').addClass('expandSlide');
      console.log('300')

  });*/

 /*$('.sustainbilityCategories').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
     $('.scimgWrap').slideDown();
     $('.viewMoreConten').slideUp();
     $('.scSlide').removeClass('expandSlide');

 });*/



 $(window).load(function() {
     if ($('body').width() > 1024) {
         setTimeout(function() {
             skrollr.init({
                 forceHeight: false,
                 smoothScrolling: true
             });
         }, 700);
     }


 });

 $(".csrSliderToggle").click(function() {
     $(this).toggleClass('active');
     $('.csrsliderimgWrap').toggleClass('openslide');
     $('.csrSliderContenWrap').toggleClass('openslide');
 });
 $('.csrslidehead ').click(function() {
     if ($('.csrSliderToggle').hasClass('active')) {} else {
         $('.csrSliderToggle').toggleClass('active');
         $('.csrsliderimgWrap').addClass('openslide');
         $('.csrSliderContenWrap').addClass('openslide');
     }




 });




 /*
   $('.run-functions-button').on('click', function(event) {
     var $this = $(this);
     $this.text('...');
     var $imageSection     = $this.closest('.image-section');
     var $colorThiefOutput = $imageSection.find('.color-thief-output');
     var $targetimage      = $imageSection.find('.target-image');
     showColorsForImage($targetimage, $imageSection);
   });

   var colorThief = new ColorThief();

   // Run Color Thief functions and display results below image.
   // We also log execution time of functions for display.
   var showColorsForImage = function($image, $imageSection ) {
     var image                    = $image[0];
     var start                    = Date.now();
     var color                    = colorThief.getColor(image);
     var elapsedTimeForGetColor   = Date.now() - start;
     var palette                  = colorThief.getPalette(image);
     var elapsedTimeForGetPalette = Date.now() - start + elapsedTimeForGetColor;

     var colorThiefOutput = {
       color: color,
       palette: palette,
       elapsedTimeForGetColor: elapsedTimeForGetColor,
       elapsedTimeForGetPalette: elapsedTimeForGetPalette
     };
     var colorThiefOuputHTML = Mustache.to_html($('#color-thief-output-template').html(), colorThiefOutput);

     $imageSection.addClass('with-color-thief-output');
     $imageSection.find('.run-functions-button').addClass('hide');

     setTimeout(function(){
       $imageSection.find('.color-thief-output').append(colorThiefOuputHTML).slideDown();
       // If the color-thief-output div is not in the viewport or cut off, scroll down.
       var windowHeight          = $(window).height();
       var currentScrollPosition = $('body').scrollTop()
       var outputOffsetTop       = $imageSection.find('.color-thief-output').offset().top
       if ((currentScrollPosition < outputOffsetTop) && (currentScrollPosition + windowHeight - 250 < outputOffsetTop)) {
          $('body').animate({scrollTop: outputOffsetTop - windowHeight + 200 + "px"});
       }
     }, 300);
   };*/