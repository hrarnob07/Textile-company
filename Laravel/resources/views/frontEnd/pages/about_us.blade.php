﻿@extends('frontEnd.layout.master')
@section('title','About Us')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                <div class="bannerimg" style="background-image: url({{url('upload/introducing/AboutUs/'.$aboutUs->banner)}})"></div>
              </div>
            </section>
            <section class="wrapper topslider topfashion" style="background: #006991;">
               <div class="wrapper">
                  <h1 style="color: #fff;">{{$aboutUs->heading}}</h1>
                  <!-- <em class="line-fas" style="width: 39% !important; background: #fff;"><i></i></em> -->
                </div>
                <div class="wrapper custometxtp">
                     <p>
                        <?= html_entity_decode($aboutUs->description) ?>
                     </p>
                  </div>
               
            </section>
            
            </div>
@endsection