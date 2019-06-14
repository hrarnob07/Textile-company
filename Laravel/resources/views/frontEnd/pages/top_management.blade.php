@extends('frontEnd.layout.master')
@section('title','Top Management')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/Management/'.$Management->banner)}});"></div>
              </div>
            </section>
            <section class="wrapper topslider">
               <div class="wrapper abouticonleft">
                  <h1 style="color: #fff;">{{$Management->heading}}</h1>
                 {{-- <strong class="line-probottomr containerWidth" style="background-color: #fff"><em></em> </strong> --}}
                </div>
                <div class="wrapper">
                  <p>
                    <?= html_entity_decode($Management->description) ?>
                  </p>
                </div>
            </section>
            <section class="teamBannerhome wrapper">
            </em> 
            <div class="leadArvindSlider whoweareLead">
               @if(isset($TopManagement))
               @foreach($TopManagement as $top)
               <div class="lasSlide">
                  <div>
                     <em class="line-ls-top"></em>
                     <em class="line-ls-right"></em>
                     <em class="line-ls-bottom"></em>
                     <em class="line-ls-left"></em>
                     <div class="laImgwrap" style="background-image: url({{url('upload/TopManagement/'.$top->photo)}})"> </div>
                     <div class="laContenwrap newAjaxLoad">
                        <h3 style="color: #000;"><a href="">{{$top->name}} </a></h3>
                        <h6 style="color: #000;">{{$top->designation}}</h6>
                        <?= html_entity_decode($top->short_detail) ?>                 
                        <div>
                           <a href="" class="btn-animation red">
                              <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                                 <rect x="1" stroke="#fff" class="shapelight" height="99%" width="98%" stroke-opacity="0.5"></rect>
                                 <rect x="1" class="shape" height="99%" width="98%"></rect>
                                 <div class="text">Read More</div>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
                @endforeach
                @endif
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
            