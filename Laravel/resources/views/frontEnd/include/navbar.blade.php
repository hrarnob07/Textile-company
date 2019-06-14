<nav class="navbar navbar-default blackNavigation">
         <div class="container-fluid logomoveleft">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"> 
               <abbr> 
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span> 
               </abbr>
               </button>
               <span class="mobileSearch">
                  <em class="icon-search">
                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                        <g class="st0">
                           <g transform="matrix(1,0,0,1,-35.375,-39.25)">
                              <g transform="matrix(1,0,0,1,53.094,56.437)">
                                 <path class="search1" d="M7.2,9.6c3.8-3,5.9-7.9,5.1-13.2C11.4-9.5,6.7-14.4,0.8-15.3C-8.9-17-17.2-8.7-15.6,1c1,6,6,10.8,12,11.6
                                    C-0.8,12.9,4.7,11.7,7.2,9.6"></path>
                              </g>
                           </g>
                           <g transform="matrix(1,0,0,1,-35.375,-39.25)">
                              <g transform="matrix(1,0,0,1,65.866,69.757)">
                                 <path class="searchhandl" d="M8,8.1c0,0-6.1-6-13.3-13"></path>
                              </g>
                           </g>
                           <g transform="matrix(1,0,0,1,-35.375,-39.25)">
                              <g transform="matrix(1,0,0,1,65.866,69.757)">
                                 <path class="searchline1" d="M8,8.1c0,0-16.9-16.6-36.5-35.9"></path>
                              </g>
                           </g>
                           <g transform="matrix(1,0,0,1,-35.375,-39.25)">
                              <g transform="matrix(1,0,0,1,65.866,69.757)">
                                 <path class="searchline2" d="M-28.2,8.4c0,0,16.6-16.9,35.9-36.5"></path>
                              </g>
                           </g>
                        </g>
                     </svg>
                  </em>
               </span>
               <a class="navbar-brand ajaxLoadToGo" href="{{url('home')}}">
                <img src="{{ URL::asset('upload/logo/'.$SiteSetting->logo) }}" alt="{{$SiteSetting->name}}">
                {{-- @if(isset($SiteSetting))<img src="{{ URL::asset('upload/logo/'.$SiteSetting->logo) }}" alt="{{$SiteSetting->name}}">@endif --}}
              </a> 
              <em class="line-logosidee" style="    width: 150% !important;background: #006991;"><i></i></em> 
            </div>
            <div class="collapse navbar-collapse" id="defaultNavbar1">
               <div class="navWrapRight">
                  <ul class="nav navbar-nav">
                     <li>
                        <a href="{{url('ourselves')}}" title="" class="dropdownWrap dropdownWrap dropdownWrap">Introducing Ourselves</a>
                        <ul>
                           <li class="menu-child"><a href="{{url('about_us')}}">About Us</a></li>
                           <li class="menu-child"><a href="{{url('vision_mission')}}">Vision and Mission</a></li>
                           <li class="menu-child"><a href="{{url('top_management')}}">Top Management</a></li>
                        </ul>
                     </li>
                     <li><a href="{{url('futureFashion')}}">Innovating Future of Fashion</a></li>
                     <li><a href="{{url('products_services')}}" class="dropdownWrap dropdownWrap dropdownWrap">Products & Services</a>
                        <ul>
                           <li class="menu-child"><a href="{{url('woven_fabrics')}}">Woven Fabrics</a></li>
                           <li class="menu-child"><a href="{{url('technical_textile')}}">Technical Textile</a></li>
                           <li class="menu-child"><a href="{{url('training_center')}}">Training Centre</a></li>
                           <li class="menu-child"><a href="{{url('consultancy')}}">Consultancy</a></li>
                        </ul>
                     </li>
                     <li><a href="{{url('sustainability')}}" class="dropdownWrap dropdownWrap dropdownWrap">Sustainability</a>
                        <ul>
                           <li class="menu-child"><a href="{{url('sus_overview')}}">Overview</a></li>
                           <li class="menu-child"><a href="{{url('fibre_yarns')}}">Fibre & Yarns</a></li>
                           <li class="menu-child"><a href="{{url('dyes_chemicals')}}">Dyes & Chemicals</a></li>
                           <li class="menu-child"><a href="{{url('processes')}}">Processes</a></li>
                        </ul>
                     </li>
                     <li><a href="{{url('csr')}}" class="dropdownWrap dropdownWrap dropdownWrap">CSR</a>
                        <ul>
                           <li class="menu-child"><a href="{{url('csr')}}#overview">Overview</a></li>
                           <li class="menu-child"><a href="{{url('csr')}}#people">Empowerment of People</a></li>
                           <li class="menu-child"><a href="{{url('csr')}}#health">Health & Safety</a></li>
                           <li class="menu-child"><a href="{{url('csr')}}#edu">Education</a></li>
                        </ul>
                     </li>
                     <li><a href="{{url('contact-us')}}" class="dropdownWrap dropdownWrap dropdownWrap">Contact Us</a>
                        <ul>
                           <li class="menu-child"><a href="{{url('hgoogle_maps')}}">Head Office Map </a></li>
                           <li class="menu-child"><a href="{{url('mgoogle_maps')}}">Marketing Office Map</a></li>
                           <li class="menu-child"><a href="{{url('fgoogle_maps')}}">Factory Map</a></li>
                        </ul>
                     </li>
                  </ul>
                  <ul class="nav navbar-nav searchsocial">
                     <li>
                        <span class="searchBtn">
                           <em class="icon-search">
                              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                 <g class="st0">
                                    <g transform="matrix(1,0,0,1,-35.375,-39.25)">
                                       <g transform="matrix(1,0,0,1,53.094,56.437)">
                                          <path class="search1" d="M7.2,9.6c3.8-3,5.9-7.9,5.1-13.2C11.4-9.5,6.7-14.4,0.8-15.3C-8.9-17-17.2-8.7-15.6,1c1,6,6,10.8,12,11.6
                                             C-0.8,12.9,4.7,11.7,7.2,9.6"></path>
                                       </g>
                                    </g>
                                    <g transform="matrix(1,0,0,1,-35.375,-39.25)">
                                       <g transform="matrix(1,0,0,1,65.866,69.757)">
                                          <path class="searchhandl" d="M8,8.1c0,0-6.1-6-13.3-13"></path>
                                       </g>
                                    </g>
                                    <g transform="matrix(1,0,0,1,-35.375,-39.25)">
                                       <g transform="matrix(1,0,0,1,65.866,69.757)">
                                          <path class="searchline1" d="M8,8.1c0,0-16.9-16.6-36.5-35.9"></path>
                                       </g>
                                    </g>
                                    <g transform="matrix(1,0,0,1,-35.375,-39.25)">
                                       <g transform="matrix(1,0,0,1,65.866,69.757)">
                                          <path class="searchline2" d="M-28.2,8.4c0,0,16.6-16.9,35.9-36.5"></path>
                                       </g>
                                    </g>
                                 </g>
                              </svg>
                           </em>
                        </span>
                     </li>
                     <li><a href="javascript:void(0)"><em class="icon-social"></em></a></li>
                  </ul>
                  <div class="searchWrap desktopsearchwrap">
                     <!--<input type="text" placeholder="Search for anything on Arvind"> -->
                     <form action="/" method="post" id="search-block-form" accept-charset="UTF-8">
                        <div>
                           <div class="container-inline">
                              <h2 class="element-invisible">Search form</h2>
                              <div class="form-item form-type-textfield form-item-search-block-form">
                                 <input title="Enter the terms you wish to search for." placeholder="Search anything on Angel Group" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" class="form-text">
                              </div>
                              <div class="form-actions form-wrapper" id="edit-actions"></div>
                              <input type="hidden" name="form_build_id" value="form-Nq2z12P9RME9-PvKH9-H4xmTsu7k7SrBfc259YZL7Tw">
                              <input type="hidden" name="form_id" value="search_block_form">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="searchWrap mobilesearchWrap">
               <!--<input type="text" placeholder="Search for anything on Arvind"> -->
               <form action="/" method="post" id="search-block-form--2" accept-charset="UTF-8">
                  <div>
                     <div class="container-inline">
                        <h2 class="element-invisible">Search form</h2>
                        <div class="form-item form-type-textfield form-item-search-block-form">
                           <input title="Enter the terms you wish to search for." placeholder="Search anything on Angel" type="text" id="edit-search-block-form--4" name="search_block_form" value="" size="15" maxlength="128" class="form-text">
                        </div>
                        <div class="form-actions form-wrapper" id="edit-actions--2"></div>
                        <input type="hidden" name="form_build_id" value="form-pbPql0B8BdsARzAS6s6EIbdn-VwFQqTb8CxI_eyrG0E">
                        <input type="hidden" name="form_id" value="search_block_form">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </nav>