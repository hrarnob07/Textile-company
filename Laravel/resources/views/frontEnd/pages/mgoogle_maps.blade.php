@extends('frontEnd.layout.master')
@section('title','Google Map')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            
            <section class="googlemapsBanner">
               <h1>Google Map</h1>
            </section>
            <section>
             <?= html_entity_decode($Contact->marketing_office_map) ?>
            </section>            
@endsection