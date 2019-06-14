@extends('frontEnd.layout.master')
@section('title','Home')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('theme/images/h-bg.png')}})">
                  
                  <!-- <strong class="line-inbantl"><em></em><abbr></abbr></strong>  -->
                  <!-- <strong class="line-inbanBl"><em></em></strong>  -->
                  <strong class="line-inbanbottomr "><em></em> 
                     <strong class="line-inbanbotomleft"><em data-0-bottom="height:5%" data--200-bottom="height:100%" ></em></strong> 
                  </strong>
                  <div class="innerbannerConten">
                    <h4>Our Vision</h4>
                  </div>
                  <div class="innerbannerpara">
                     <p>
                       Being 100% sustainable in terms of supply chain, environment, corporate culture, product & service quality,human resources empowerment & customer delight.
                     </p>
                  </div>
                  <div class="wrapNaviforslider">
                     <a href="./" class="ajax-linkPush prevBtn" title="Welcome"></a>        <div class="navPagename">
                      <span></span>
                      <p></p>
                    </div>
                     <a href="mission.php" class="ajax-linkPush nextBtn" title="Mission"></a>      </div>
                </div>
                <!-- <div class="innerbanBottombox"> <strong class="lineibanbotboxl"><em></em> <strong><em></em></strong></strong>
                  <p>Arvind is one of the world’s leading cotton and cotton-blended fabric makers. Our state-of-the-art factories in India produce some of the finest denim, shirting, bottom weights, knits and voiles – the bulk of it using Sustainable Cotton. </p>
                </div> -->
              </div>
            </section>

        @endsection