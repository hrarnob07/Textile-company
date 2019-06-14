@extends('frontEnd.layout.master')
@section('title','Ourselves')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/introducing/ourselves/'.$ourselves->banner)}})"></div>
              </div>
            </section>
            <section class="wrapper topslider" style="background: #006991;">
               <div class="wrapper">
                  <h1 style="color: #fff;">{{$ourselves->heading}}</h1>
                  {{-- <em class="line-fas" style="width: 39% !important; background: #fff;"><i></i></em>  --}}
                </div>
                <div class="wrapper custometxtp">
                     <p>
                        <?= html_entity_decode($ourselves->description) ?>
                     </p>
                  </div>
               
            </section>
            
            </div>
@endsection