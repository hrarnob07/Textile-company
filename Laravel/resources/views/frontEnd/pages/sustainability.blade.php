@extends('frontEnd.layout.master')
@section('title','Sustainability')
@section('content')
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    


<section class="innerpageBannerWrap" >
  <div class="innerpagebanner">
    <div class="bannerimg" style="background-image: url({{url('upload/Sustainability/'.$Sustainability->banner)}})"></div>
  </div>
</section>

<section class="wrapper">
  <div class="container">
    <div class="productTopconten">
      <div class="wrapper">
        <h2 class="hclass">{{$Sustainability->heading}}
         {{-- <strong class="line-susTophead"><em></em></strong></h2> --}}
      </div>
      <div class="otpWraptext" >
        <p>
         <?= html_entity_decode($Sustainability->description) ?>
        </p>
      </div>
     
    </div>
    
  </div>
</section>
@endsection