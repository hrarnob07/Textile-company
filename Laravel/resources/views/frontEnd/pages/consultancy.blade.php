@extends('frontEnd.layout.master')
@section('title','Consultancy')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/Consultancy/'.$Consultancy->banner)}})"></div>
              </div>
            </section>
            <section class="wrapper topslider">
               <div class="wrapper abouticonleft">
                  <h1 style="color: #fff;">{{$Consultancy->heading}}</h1>
                 {{-- <strong class="line-probottomr containerWidth" style="width: 35% ;background-color: #fff"><em></em> </strong> --}}
                </div>
                <div class="wrapper custometxtp">
                  <p>
                    <?= html_entity_decode($Consultancy->description) ?>  
                  </p>
                </div>
            </section>
            
        @endsection