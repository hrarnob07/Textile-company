@extends('frontEnd.layout.master')
@section('title','Innovating Future of Fashion')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="wrapper fashioningBanner">
               <div class="bannerbgslides banner1" id="bannera1" style="background-image: url({{url('upload/future_fashion/'.$FutureFashion->banner)}});"></div>
               <div class="bannerimageText">
                  <span>
                     Innovating<span class='spacer'></span><br /><span class='spacer'></span>
                     Future<span class='spacer'></span><br /><span class='spacer'></span>
                     of Fashion
                  </span>
               </div>
            </section>
            <section class="wrapper topslider topfashion" style="background: #006991;">
               <div class="wrapper">
                  <h1 style="color: #fff;">{{$FutureFashion->heading}}</h1>
                  {{-- <em class="line-fas" style="width: 35% !important; background: #fff;"><i></i></em>  --}}
                </div>
                <div class="wrapper custometxtp">
                     <p> <?= html_entity_decode($FutureFashion->description) ?></p>
                  </div>
               
            </section>
            
            </div>
@endsection