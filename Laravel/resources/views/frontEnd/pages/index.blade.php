@extends('frontEnd.layout.master')
@section('title','Home')
@section('content')

<div id="block-system-main" class="block block-system">
         <div class="content">
            
                    <!-- new -->
                    <div id="jssor_1" class="sliderbtm" style="position:relative;margin:0 auto;top:60px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{url('theme/slider/svg/loading/static-svg/spin.svg')}}" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                            @if(isset($slider))
                            @foreach($slider as $data)
                            <div>
                                <img data-u="image" src="{{url('theme/images/h-bg.png')}}" />
                                <div class="slidermblp" style="position:absolute;top:40%;left:15%;width:960px;height:130px;z-index:0;font-size:28px;font-weight:100;color:#fff;line-height:25px;">
                                  <h4 style="font-size: 24px;">
                                    @if(!empty($data->title)=='0')
                                        
                                    @else
                                        {{$data->title}}
                                    @endif
                                  </h4><br>
                                  <p style="font-size: 18px; color: #fff !important;">
                                  <?= html_entity_decode($data->description) ?>
                                </p>
                                </div>
                                
                            </div>
                            @endforeach
                            @endif
                       
                        </div>
                        <!-- Bullet Navigator -->
                        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                </svg>
                            </div>
                        </div>
                        <!-- Arrow Navigator -->
                        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                            </svg>
                        </div>
                    </div>
                    <script type="text/javascript">jssor_1_slider_init();</script>
       
                <!-- slider end -->
@endsection

@section('css')
<script src="{{url('theme/slider/jssor.slider.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
        
  <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}
        
        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
@endsection
@section('js')
<!-- slider -->

<script src="{{url('theme/slider/static/prismjs/prism.js')}}"></script>
  
<!-- slider -->
@endsection