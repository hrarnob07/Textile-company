@extends('frontEnd.layout.master')
@section('title','Fibre Yarns')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/FibreYarns/'.$FibreYarns->banner)}});"></div>
              </div>
            </section>
            <section class="wrapper topslider fibre_yarn">
               <div class="wrapper abouticonleft">
                  <h1 style="color: #fff;">{{$FibreYarns->heading}}</h1>
                 {{-- <strong class="line-probottomr containerWidth" style="width: 35% ;background-color: #fff"><em></em> </strong> --}}
                </div>
                <div class="wrapper custometxtp">
                  <p>
                    <?= html_entity_decode($FibreYarns->description) ?>
                  </p>
                </div>
            </section>
@endsection