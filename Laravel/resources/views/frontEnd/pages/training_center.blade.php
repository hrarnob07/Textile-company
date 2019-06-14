@extends('frontEnd.layout.master')
@section('title','Training Center')
@section('content')
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    


<section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/TrainingCenter/'.$TrainingCenter->banner)}});"></div>
              </div>
            </section>
            <section class="wrapper topslider">
               <div class="wrapper abouticonleft">
                  <h1 style="color: #fff;">{{$TrainingCenter->heading}}</h1>
                 {{-- <strong class="line-probottomr containerWidth" style="background-color: #fff"><em></em> </strong> --}}
                </div>
                <div class="wrapper custometxtp">
                  <p>
                    <?= html_entity_decode($TrainingCenter->description) ?>
                  </p>
                </div>
            </section>
@endsection