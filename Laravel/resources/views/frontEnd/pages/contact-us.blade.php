@extends('frontEnd.layout.master')
@section('title','Contact Us')
@section('content')
      <div id="block-system-main" class="block block-system">
         <div class="content">
            <section class="innerpageBannerWrap" >
              <div class="innerpagebanner">
                  <div class="bannerimg" style="background-image: url({{url('upload/Contact/'.$Contact->banner)}});"></div>
                  <!-- <div class="innerbannerConten">
                    <h1>Sustainability</h1>
                  </div> -->
                  <!-- <strong class="line-inbantl"><em></em></strong>  -->
                  <!-- <strong class="line-inbanBl linecover "><em></em></strong>  -->
                  {{-- <strong class="line-probottomr containerWidth" style="background-color: #006991"><em></em>  --}}
                    {{-- <strong class="line-probotomleft" style="background-color: #006991; display: block;"><em data-0-bottom="height:35%" data--200-bottom="height:100%" ></em></strong>  --}}
                  {{-- </strong> --}}
                </div>
              </div>
            </section>
            <section class="wrapper">
              <div class="container">
                <div class="productTopconten">
                  <div class="wrapper">
                    <h2 class="hclass">Address
                     <!-- <strong class="line-careerTophead"><em></em></strong></h2> -->
                  </div>
                  <div class="view view-contact view-id-contact view-display-id-block view-dom-id-9a00f632ec20a835d6b1767907a49f74">
        
  
  
                    <div class="view-content">
                    <ul>       
                      <li>
                        <h2>Head Office</h2>
                        <p><?= html_entity_decode($Contact->head_office) ?></p>
                      </li>
                      <li>
                        <h2>Marketing Office</h2>
                        <p><?= html_entity_decode($Contact->marketing_office) ?></p>
                      </li> 
                      <li>
                        <h2>Factory</h2>
                        <p><?= html_entity_decode($Contact->factory_office) ?></p>
                      </li>  
                </ul>


                  </div>
                 
                </div>
                
              </div>
            </section>
                       
            <section class="formWrap wrapper" id="writetous">
               <div id="contact_us_cutom_form_wrapper">
                  <form class="webform-client-form webform-client-form-19" action="/contact-us" method="post" id="webform-client-form-19" accept-charset="UTF-8">
                     <div>
                        <style type="text/css">
                           .webform-submit{
                           display:none;
                           visibility:hidden;
                           }
                           #edit-submitted-general-enquiry, #edit-submitted-department {display: none;}
                        </style>
                        <div class="container">
                           <div class="wrapper"><h1 class="csrbgline"><span>Anything to Know</span></h1></div>
                           <ul class="formWraplist">
                              
                              <li class="form-item">
                                 <span class="input ">
                                    <!-- <input class="input__field " type="text" id="input-23" /> -->
                                  
                                    <!-- <label class="input__label " for="input-23"> <span>First Name*</span> </label> -->
                                    <span class="formError"></span>
                                 </span>
                              </li>
                              <li class="form-item">
                                 <span class="input ">
                                                                        <!-- <label class="input__label " for="input-23"> <span>First Name*</span> </label> -->
                                    <span class="formError"></span>
                                 </span>
                              </li>
                              <li class="form-item">
                                 <span class="input ">
                                    <!-- <input class="input__field " type="text" id="input-23" /> -->
                                    <input required="required" class="input__field form-text required" type="text" id="edit-submitted-first-name" name="submitted[first_name]" value="" size="60" maxlength="50"><label class="input__label" for=""> <span>First Name*</span> </label>        <!-- <label class="input__label " for="input-23"> <span>First Name*</span> </label> -->
                                    <span class="formError"></span>
                                 </span>
                              </li>
                              <li class="form-item">
                                 <span class="input ">
                                    <!--  <input class="input__field " type="text" id="input-23" /> -->
                                    <input required="required" class="input__field form-text required" type="text" id="edit-submitted-last-name" name="submitted[last_name]" value="" size="60" maxlength="50"><label class="input__label" for=""> <span>Last Name*</span> </label>        <!-- <label class="input__label " for="input-23"> <span>Last Name*</span>  </label> -->
                                    <span class="formError"></span>
                                 </span>
                              </li>
                              <li class="form-item">
                                 <span class="input ">
                                    <!-- <input class="input__field " type="text" id="input-23" /> -->
                                    <input required="required" class="input__field form-text required" pattern="[0-9]{10,10}" type="text" id="edit-submitted-phone-no" name="submitted[phone_no]" value="" size="60" maxlength="10"><label class="input__label" for=""> <span>Phone No.*</span> </label>        <!-- <label class="input__label " for="input-23"> <span>Phone Number*</span> </label> -->
                                    <span class="formError"></span>
                                 </span>
                              </li>
                              <li class="form-item">
                                 <span class="input ">
                                    <!-- <input class="input__field " type="text" id="input-23" /> -->
                                    <input required="required" class="input__field form-text form-email required" type="email" id="edit-submitted-email" name="submitted[email]" size="60"><label class="input__label" for=""> <span>Email*</span> </label>        <!-- <label class="input__label " for="input-23">  <span>Email Address*</span>  </label> -->
                                    <span class="formError"></span>
                                 </span>
                              </li>
                              <li class="fullwidth">
                                 <span class="input ">
                                    <!-- <input class="input__field " type="text" id="input-23" /> -->
                                    <input class="input__field form-text" type="text" id="edit-submitted-comment" name="submitted[comment]" value="" size="60" maxlength="128"><label class="input__label" for=""> <span>How can we help*</span> </label>        <!-- <label class="input__label " for="input-23"> <span>Comment*</span>  </label> -->
                                 </span>
                              </li>
                              <!-- <input class="input__field " type="text" id="input-23" /> -->
                              <!-- <label class="input__label " for="input-23"> <span>Comment*</span>  </label> -->
                              <li class="text-center fullwidth">
                                 <a class="btn-animation red minwidthbtn btnsave">
                                    <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                                       <rect x="1" stroke="#fff" class="shapelight" height="99%" width="98%" stroke-opacity="0.5"></rect>
                                       <rect x="1" class="shape" height="99%" width="98%"></rect>
                                       <div class="text">Submit</div>
                                    </svg>
                                 </a>
                              </li>
                              
                              <input type="hidden" name="form_id" value="webform_client_form_19">
                              <div class="form-actions"><input class="webform-submit button-primary form-submit" type="submit" name="op" value="Submit"></div>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
            </section>
          
            @endsection