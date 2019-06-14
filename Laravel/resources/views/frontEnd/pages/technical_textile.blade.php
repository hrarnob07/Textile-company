@extends('frontEnd.layout.master')
@section('title','Home')
@section('content')
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    


<section class="innerpageBannerWrap" >
  <div class="innerpagebanner">
    <div class="bannerimg" style="background-image: url({{url('upload/TechnicalTextile/'.$TechnicalTextile->banner)}})">

      {{-- <strong class="line-probottomr containerWidth" style="background-color: #006991"><em></em> 
        <strong class="line-probotomleft" style="background-color: #006991; display: block;"><em data-0-bottom="height:35%" data--200-bottom="height:100%" ></em></strong> 
      </strong> --}}
    </div>
  </div>
</section>

<section class="wrapper">
  <div class="container">
    <div class="productTopconten">
      <div class="wrapper">
        <h2 class="hclass">{{$TechnicalTextile->heading}}
         <!-- <strong class="line-careerTophead"><em></em></strong></h2> -->
        
      </div>
      <div class="otpWraptext" >
        <?= $TechnicalTextile->description ?>
      </div>
      <!-- <strong class="line-overviewtop"><i data-200-bottom="height:0%" data--100-bottom="height:100%"></i></strong> -->
    </div>
    
  </div>
</section>
@endsection