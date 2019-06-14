@extends('frontEnd.layout.master')
@section('title','Csr')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <!--<section class="csrInnerBanner" style="background-image: url()"></section>-->
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/Csr/'.$Csr->banner)}})"></div>
              </div>
            </section>
            <section class="wrapper" id="overview">
               <div class="container">
                  <div class="wrapper"><h1 class="csrbgline"><span>Overview</span></h1></div>
                
                  <div class="wrapper">
                    <p style="color: #000;margin: 0 10px;">
                      <?= html_entity_decode($Csr->overview_description) ?> 
                    </p>
                </div>
               </div>
            </section>
            <section class="wrapper" id="people">
                <div><strong class="line-csrinfo"><i></i></strong></div>
                <div class="csrtext">
                  <h2>Empowerment of People</h2>   
                  <div class="csrImg">
                    <img src="{{url('upload/Csr/'.$Csr->empowerment_of_people)}}" alt="">
                  </div>
                  
                </div>
          </section>
          <section class="wrapper" id="health">
                <div><strong class="line-csrinfo"><i></i></strong></div>
                <div class="csrtext">
                  <h2>Health & Safety</h2>   
                  <div class="csrImg">
                    <img src="{{url('upload/Csr/'.$Csr->health_safety)}}" alt="">
                  </div>
                </div>
          </section>
          <section class="wrapper" id="edu">
                <div><strong class="line-csrinfo"><i></i></strong></div>
                <div class="csrtext">
                  <h2>Education</h2>   
                  <div class="csrImg">
                    <img src="{{url('upload/Csr/'.$Csr->education)}}" alt="">
                  </div>
                </div>
          </section>
@endsection