<div class="container">
  <div class="row">
     <div class="col-md-3 footLeft">
        <a href="index-1.htm" class="footerLogo ajaxLoadToGo"><img src="{{ URL::asset('upload/logo/'.$SiteSetting->footer_logo) }}" width="150" alt=""></a>
        <div class="address">
           <h5>Head office</h5>
           <p><?= html_entity_decode($Contact->head_office) ?></p>
        </div>
        <div class="address">
            <h5>Marketing office</h5>
             <p><?= html_entity_decode($Contact->marketing_office) ?></p>
        </div>
        <div class="address">
           <h5>Factory</h5>
           <p><?= html_entity_decode($Contact->factory_office) ?></p>
        </div>
     </div>
     <div class="col-md-9 footRight">
        <div class="col-md-4">
           <h5 class="dropdownFooter">Introducing Ourselves <a href="javascript:void(0)"></a></h5>
           <ul>
              <li><a href="{{url('about_us')}}">About Us</a></li>
              <li><a href="{{url('top_management')}}">Top Management</a></li>
              <li><a href="{{url('vision_mission')}}">Vision & Mission</a></li>
           </ul>
           <h5 class="dropdownFooter" style="padding-top: 30px;">Innovating Future of Fashion <a href="{{url('futureFashion')}}"></a></h5>
           <ul>
              <li><a href="{{url('futureFashion')}}">Fashion</a></li>
              
           </ul>
        </div>
        <div class="col-md-4">
           <h5 class="dropdownFooter">Products & Services <a href="javascript:void(0)"></a></h5>
           <ul>
              <li><a href="{{url('woven_fabrics')}}" title="">Woven Fabrics</a></li>
               <li><a href="{{url('technical_textile')}}" title="">Technical Textile</a></li>
               <li><a href="{{url('training_center')}}" title="">Training Centre</a></li>
               <li><a href="{{url('consultancy')}}" title="">Consultancy</a></li>
              
           </ul>
           <h5 class="dropdownFooter">CSR <a href="javascript:void(0)"></a></h5>
           <ul>
              <li><a href="{{url('csr')}}#overview" title="">Overview</a></li>
             <li><a href="{{url('csr')}}#people">Empowerment of People</a></li>
             <li><a href="{{url('csr')}}#health">Health & Safety</a></li>
             <li><a href="{{url('csr')}}#edu">Education</a></li>
              
           </ul>
        </div>
        <div class="col-md-4">
           <h5 class="dropdownFooter">Sustainability <a href="javascript:void(0)"></a></h5>
           <ul>
             <li><a href="{{url('sus_overview')}}" title="">Overview</a></li>
             <li><a href="{{url('fibre_yarns')}}" title="">Fibre & Yarns</a></li>
             <li><a href="{{url('dyes_chemicals')}}" title="">Dyes & Chemicals</a></li>
             <li><a href="{{url('processes')}}" title="">Processes</a></li>
           </ul>
         <h5 class="dropdownFooter">Contact Us <a href="javascript:void(0)"></a></h5>
           <ul>
              <li><a href="{{url('hgoogle_maps')}}" title="">Head Office Map</a></li>
              <li><a href="{{url('mgoogle_maps')}}" title="">Marketing Office Map</a></li>
              <li><a href="{{url('fgoogle_maps')}}" title="">Factory Map</a></li>
           </ul>
        </div>
        <!-- <div class="col-md-3">
           
        </div> -->
        <div class="wrapper copyrightFooter">
           <span>Copyright © 2018  ANGEL GROUP  | All rights reserved.</span>
          
           <ul class="copyright">
              <li>Designed & Develop by<a href="http://softaidbd.com" target="_blank">Softaidbd.com</a></li>
            </ul>
        </div>
     </div>
  </div>
</div> 