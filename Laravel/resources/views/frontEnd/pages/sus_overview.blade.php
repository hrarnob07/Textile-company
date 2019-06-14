@extends('frontEnd.layout.master')
@section('title','Sustainability Overview')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/SustainabilityOverview/'.$SustainabilityOverview->banner)}})"></div>
              </div>
            </section>
            <section class="wrapper topslider">
               <div class="wrapper abouticonleft">
                  <h1 style="color: #fff;">{{$SustainabilityOverview->heading}}</h1>
                 {{-- <strong class="line-probottomr containerWidth" style="width: 40% ;background-color: #fff"><em></em> </strong> --}}
                </div>
                <div class="wrapper custometxtp">
                  <p>
                    <?= html_entity_decode($SustainabilityOverview->description) ?>
                  </p>
                </div>
            </section>
            
    @endsection