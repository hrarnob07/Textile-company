@extends('frontEnd.layout.master')
@section('title','Vision & Mission')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <<!-- section class="homepageBannerWrap">
               <div id="contents" class="sliderr">
                  
                  <img src="images/20180116082414_StudioG2.jpg">
                  <img src="images/IMG_8336_edit.jpg">
                  <img src="images/сhanel-73-1170x545.jpg">
              </div>
            </section> -->
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/introducing/VisionMission/'.$VisionMission->banner)}})">
                  
                </div>
              </div>
            </section>
            <section class="wrapper wrapbusinesspage"  id="contentbus">
             <!-- <ul class="singlNavbus navfixermarker"  data-anchor-target="#contentbus" data-200-top="opacity:0;" data-150-top="visibility:visible; right: -55px; opacity: 0.3;" data-100-top="opacity: 1; position: fixed; top: 50%; right:50px;"  data-100-bottom="opacity:1; right:50px;" data-50-bottom="opacity:0; right:-50px;">
                <li><a href='#slideId_1' class='nav-active'><em></em> <span>01</span><strong>Denim</strong> </a> </li>
                <li><a href='#slideId_2' class=''><em></em> <span>02</span><strong>Wovens</strong> </a> </li>
                <li><a href='#slideId_3' class=''><em></em> <span>03</span><strong>Knits</strong> </a> </li>
                <li><a href='#slideId_4' class=''><em></em> <span>04</span><strong>Voiles</strong> </a> </li>
             </ul> -->
           <div class="container980">
              <ul class="businesListCate">
                 <li id='slideId_1'>
                    <strong class='line-gowebsite'><em></em></strong>
                    <h2 class='hclass'>{{$VisionMission->vision}}</h2>
                    <span class='wrapper'>
                       <div class='wrapanimationimg aos-item' data-aos='slideLeft'>
                          <span class='bllistimg' style='background-image: url({{url('upload/introducing/VisionMission/'.$VisionMission->vision_image)}})'></span>
                       </div>
                       <abbr class='ballistimgtext'>
                        <?= html_entity_decode($VisionMission->vision_description) ?>
                        <strong class='line-bllistimg'> <em data-0-bottom='width:0%' data--300-bottom='width:100%' ></em></strong></abbr>
                    </span>
                 </li>
                 <li id='slideId_2'>
                    <strong class='line-gowebsite'><em></em></strong>
                    <h2 class='hclass'>{{$VisionMission->mission}}</h2>
                    <span class='wrapper'>
                       <div class='wrapanimationimg aos-item' data-aos='slideLeft'>
                          <span class='bllistimg' style='background-image: url({{url('upload/introducing/VisionMission/'.$VisionMission->mission_image)}})'></span>
                       </div>
                       <abbr class='ballistimgtext'>
                        <?= html_entity_decode($VisionMission->mission_description) ?>
                        <strong class='line-bllistimg'> <em data-0-bottom='width:0%' data--300-bottom='width:100%' ></em></strong></abbr>
                    </span>
                    
                 </li>
                 
              </ul>
           </div>
        </section>
   @endsection

   @section('js')
   <script type="text/javascript">
               jQuery(document).find("title").text('Angel Group.');
               $('.teamMemberCarousel').slick({
                 infinite: true,
                   slidesToShow: 5,
                   slidesToScroll: 1,
                 responsive: [
                   {
                     breakpoint: 1024,
                     settings: {
                     slidesToShow: 4,
                   }
                   },
                   {
                     breakpoint:900,
                     settings: {
                     slidesToShow: 3,
                   //centerMode: false,
                   }
                   },
                   {
                     breakpoint:768,
                     settings: {
                     // centerPadding: '200px',
                     slidesToShow: 2,
                   }
                   },
                   {
                     breakpoint:576,
                     settings: {
                     centerPadding: '30px',
                       arrow:false,
                     centerMode:true,
                     slidesToShow: 1,
                   }
                   }
               
                   ] 
               });
               
                 AOS.init({
                         easing: 'ease-in-out-sine'
                       });
                 
                 
               
            </script>
    <script type="text/javascript">
        $('.leadArvindSlider').slick({
        centerMode: true,
        centerPadding: '350px',
        slidesToShow: 1,
        focusOnSelect: true,
        arrows: true,
        //prevArrow: $('.homePrev'),
        //nextArrow: $('.homeNext'),
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
          /*if ($('body').width() > 1024) {
          skrollr.init({
            easing: {
              vibrate: function (p) {
                return Math.sin(p * 10 * Math.PI);
              }
            }
          });
        }*/

        $('.abLeftbox').hover(function(event){
        $(this).css({width: '70%'});
        $('.abrightbox').css({width: '30%'});
        
        
      });

      $('.abrightbox').hover(function(event){
        $(this).css({width: '70%'});
        $('.abLeftbox').css({width: '30%'});
        
        
      });

      $('.aboutgotimeline').mouseleave(function(event){
         $('.abrightbox').css({width: '50%'});
        $('.abLeftbox').css({width: '50%'});
         
        
      });

      $('.wrapaboutlconten').mouseover(function(event){
         $('.abrightbox').css({width: '50%'});
        $('.abLeftbox').css({width: '50%'});
         
        
      }); 
       
      </script>

   @endsection