<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
   "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:article="http://ogp.me/ns/article#" xmlns:book="http://ogp.me/ns/book#" xmlns:profile="http://ogp.me/ns/profile#" xmlns:video="http://ogp.me/ns/video#" xmlns:product="http://ogp.me/ns/product#" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#" xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#" xmlns:xsd="http://www.w3.org/2001/XMLSchema#" prefix="og:http://ogp.me/ns#">
   <head profile="http://www.w3.org/1999/xhtml/vocab">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <link rel="shortcut icon" href="images/icon.ico">
      <!--[if IE]><![endif]-->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Angel Group. | Sustainability</title>
      <link type="text/css" rel="stylesheet" href="sites\default\files\advagg_css\css__shnCnXZ2tjGqW7a7lq6jsELELH0x1SI2uoKsXZu4WkU.css" media="all">
      <script type="text/javascript" src="sites\default\files\advagg_js\js__hmsLiWQy7_MWIcSy2PiZerYyrrpHdckk_f4_kttfEpI__KS0Z9kT0BMwcnMyXmLloU8q3uIO6sOVO9axlw4IlC-M__0dZbW07o82CEyRoKXBr8O6rzRPEMoxQrKnG2euXni0E.js"></script>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->  
      
      <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-700 node-type-page ">
  
  <!-- <div class="preLoader white is-loaded" id="pageChange">
    <div class="loaderWithtext">
      <div class="loaderA">
        <img src="sites\all\themes\arvind\images\loagoAw.svg" alt="">
        <span class="loaderInner"><img src="sites\all\themes\arvind\images\loagoA.svg" width="100px" alt=""></span>
      </div>
      <div class="loadfp">
        <h2>Fashioning <br> Possibilities</h2>
      </div>

    </div>
    
  </div>
  <div class="preLoader" id="pageLoad">
    
     <div class="welcomeScreen">
       <div class="logowrap">
         <span>
             <img src="sites\all\themes\arvind\images\arvindLogot.svg" alt="">
             <i></i>
         </span><span>
             <img src="sites\all\themes\arvind\images\arvindLogob.svg" alt="">
             <i></i>
         </span>
         
       </div>
     </div>
      
 </div> --> 
 <?php include('include/navbar.php');?>
  <a href="javascript:void(0)" class="gotoTopBtn"></a><div id="content" class="column">
  <div class="section">
        <a id="main-content"></a>
    <div class="tabs"></div>              </div>
</div>
  <!-- <div class=""> -->
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    


<section class="innerpageBannerWrap" >
  <div class="innerpagebanner">
    <div class="bannerimg" style="background-image: url(images/how-sustainable-are-your-clothes.jpg)"></div>
  </div>
</section>

<section class="wrapper">
  <div class="container">
    <div class="productTopconten">
      <div class="wrapper">
        <h2 class="hclass">Sustainability
         <strong class="line-susTophead"><em></em></strong></h2>
      </div>
      <div class="otpWraptext" >
        <p>
          Our vision is to be 100% sustainable in manufacturing and value enriching across the supply chain and clientage.
        </p>
      </div>
     
    </div>
    
  </div>
</section>

<footer class="footer">
<?php include('include/footer.php');?>
</footer>
<script>  
     $(window).load(function(){
 
    AOS.init({
        easing: 'ease-in-out-sine'
      });
   
 
  });  
  
 $.scrollTo = $.fn.scrollTo = function(x, y, options){
    if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);

    options = $.extend({}, {
        gap: {
            x: 0,
            y: 0
        },
        animation: {
            easing: 'swing',
            duration: 600,
            complete: $.noop,
            step: $.noop
        }
    }, options);

    return this.each(function(){
        var elem = $(this);
        elem.stop().animate({
            scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
            scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y
        }, options.animation);
    });
};
    $(document).ready(function(){
        
        /** 
         * This part does the "fixed navigation after scroll" functionality
         * We use the jQuery function scroll() to recalculate our variables as the 
         * page is scrolled/
         */
        
        
        
        /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
        $(".timelineNavbar a").click(function(evn){
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash); 
        });
        
        
        
        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and 
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $(".timelineNavbar li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i=0; i < aChildren.length; i++) {    
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values
        
        $(window).scroll(function(){
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();
            
            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top ; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("nav-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("nav-active");
                }
            }
            
            if(windowPos + windowHeight == docHeight) {
                if (!$(".timelineNavbar li:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $(".timelineNavbar li:last-child a").addClass("nav-active");
                }
            }
        });
    });</script>  

<script type="text/javascript">
  
  jQuery('.searchIcon').siblings('input').attr('id', 'xyz');
jQuery('#xyz').keyup(function(e){
  jQuery('.searchCareer #edit-populate').val($(this).val());
  if (e.keyCode == 13) {
        window.location = '/jobs-career?search='+$(this).val();
    }
});
</script>
<script>
$('.overviewSlidenav').slick({
   
  slidesToShow: 5,
   asNavFor: '.slideConten',
  arrows: false,
  autoplay: true,
    responsive: [
       
       
      {
        breakpoint:800,
        settings: {
         slidesToShow: 3,
         
      }
      },
      {
        breakpoint:567,
        settings: {
         slidesToShow: 2,
         
      }
      }

    ] 
});
  $('.slideConten').slick({
   
  slidesToShow: 1,
    infinite: true,
  speed: 300,
  slidesToShow: 1,
    autoplay: true,
    
   asNavFor: '.overviewSlidenav',
  arrows: false,
     
});
  $('.ljoSlider').slick({
   
    infinite: false,
    autoplay: false,
    variableWidth: true,
    slidesToShow: 5,
    prevArrow: $('.ljoPrev'),
    nextArrow: $('.ljoNext'),
    responsive: [
      {
        breakpoint: 1450,
        settings: {
        centerPadding: '160px',
      }
      },
      {
        breakpoint:1200,
        settings: {
        centerPadding: '70px',
      }
      },
      {
        breakpoint:800,
        settings: {
         centerPadding: '20px',
        centerMode: true,
      }
      }

    ] 
});
  
  //   if ($('body').width() > 1024) {
  //   skrollr.init({
  //     easing: {
  //       vibrate: function (p) {
  //         return Math.sin(p * 10 * Math.PI);
  //       }
  //     }
  //   });
  // }
    $(document).ready(function() {
  var $inputs = $('.resizing-input');

  // Resize based on text if text.length > 0
  // Otherwise resize based on the placeholder
  function resizeForText(text) {
    var $this = $(this);
    if (!text.trim()) {
      text = $this.attr('placeholder').trim();
    }
    var $span = $this.parent().find('span');
    $span.text(text);
    var $inputSize = $span.width();
    $this.css("width", $inputSize);
  }

  $inputs.find('input').keypress(function(e) {
    if (e.which && e.charCode) {
      var c = String.fromCharCode(e.keyCode | e.charCode);
      var $this = $(this);
      resizeForText.call($this, $this.val() + c);
    }
  });

  // Backspace event only fires for keyup
  $inputs.find('input').keyup(function(e) {
    if (e.keyCode === 8 || e.keyCode === 46) {
      resizeForText.call($(this), $(this).val());
    }
  });

  $inputs.find('input').each(function() {
    var $this = $(this);
    resizeForText.call($this, $this.val())
  });
});

    jQuery('.mobCareersMenu select').change(function(){
  var redirectPage = '/'+jQuery(this).val();
  console.log(redirectPage);
  window.location.href = redirectPage;
});
    var contenLeft = $('.overviewTopconten').offset().left;
        var lineleftpos = $('.active .line-carrerNavigation').offset().left;
        var lineleftoffset = lineleftpos - contenLeft;
        var contenwidth = $('.overviewTopconten').width() / 2;
        var mainwidth = contenwidth - lineleftoffset;
        $('.line-careerTophead').css({ width: mainwidth });
        var lineheightsparent = $('.line-careerTophead').offset().top;
        var tablinetop = $('.active .line-carrerNavigation').offset().top;
        $('.line-carrerNavigation').css({ height: lineheightsparent - tablinetop });
</script>   </div>
</div>
  <!-- </div> -->
  
        <script type="text/javascript" src="sites\all\themes\arvind\js\script-scrollr.js"></script>
    <script type="text/javascript" src="sites\all\themes\arvind\js\pushstate.js"></script>
    <script type="text/javascript" src="sites\all\themes\arvind\js\lib\jquery.scrolldepth.min.js"></script>
  <script type="text/javascript">
  jQuery(function() {
    jQuery.scrollDepth({
      percentage: true,
      pixelDepth: false
    });
  });

   var count = 0;
   var myInterval;
   // Active
   startTimer();

   function timerHandler() {
    count++;
    if(count == 15){
      console.log('Run Event');
      ga('send', {
        hitType: 'event',
        eventCategory: 'ToPrevent0SecondSessions',
        eventAction: '15SecondUserActive',
        eventLabel: ''    //page name if possible
      });    
    }else if(count >= 16 ){ 
        console.log('Stop Timer');
        stopTimer();  
    }
   }

   // Start timer
   function startTimer() {
    console.log('Start Timer');
    myInterval = window.setInterval(timerHandler, 1000);
   }

   // Stop timer
   function stopTimer() {
    window.clearInterval(myInterval);
   }
</script>
</body>
</html>
