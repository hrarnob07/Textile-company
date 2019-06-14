@extends('frontEnd.layout.master')
@section('title','DyesChemicals')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/DyesChemicals/'.$DyesChemicals->banner)}})"></div>
              </div>
            </section>
            <section class="wrapper topslider fibre_yarn">
               <div class="wrapper abouticonleft">
                  <h1 style="color: #fff;">{{$DyesChemicals->heading}}</h1>
                 {{-- <strong class="line-probottomr containerWidth" style="width: 34% ;background-color: #fff"><em></em> </strong> --}}
                </div>
                <div class="wrapper custometxtp">
                  <p>
                   <?= html_entity_decode($DyesChemicals->description) ?>
                  </p>
                </div>
            </section>
            
        @endsection