<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item">
                <a href="#"><i class="icon-cart"></i>
                    <span class="menu-title">Pages Info</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::path() == 'admin/category' ? 'active' : '' }}"><a href="{{url('/admin/category')}}" class="menu-item">Category Page</a></li>
                    <li class="{{ Request::path() == 'admin/subcategory' ? 'active' : '' }}"><a href="{{url('/admin/subcategory')}}" class="menu-item">Sub Category Page</a></li>
                </ul>
            </li>
            <li class="{{ Request::path() == 'admin/slider' ? 'active' : '' }}"><a href="{{url('/admin/slider')}}"><i class="icon-user-plus"></i><span class="menu-title">Slider</span></a></li>
            
            <li class="{{ Request::path() == 'admin/sitesetting' ? 'active' : '' }}"><a href="{{url('/admin/sitesetting')}}"><i class="icon-user-plus"></i><span class="menu-title">Site Setting</span></a></li>
            <li class=" nav-item">
                <a href="#"><i class="icon-cart"></i>
                    <span class="menu-title">Introducing Ourselves</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::path() == 'admin/ourselves' ? 'active' : '' }}"><a href="{{url('/admin/ourselves')}}" class="menu-item">Introducing Ourselves</a></li>
                    <li class="{{ Request::path() == 'admin/about' ? 'active' : '' }}"><a href="{{url('/admin/about')}}" class="menu-item">About Us</a></li>
                    <li class="{{ Request::path() == 'admin/VisionMission' ? 'active' : '' }}"><a href="{{url('/admin/VisionMission')}}" class="menu-item">Vision & Mission</a></li>
                    <li class="{{ Request::path() == 'admin/management' ? 'active' : '' }}"><a href="{{url('/admin/management')}}" class="menu-item">Top Management Banner</a></li>
                    <li class="{{ Request::path() == 'admin/top/management' ? 'active' : '' }}"><a href="{{url('/admin/top/management')}}" class="menu-item">Top Management</a></li>
                </ul>
            </li>
           <li class="{{ Request::path() == 'admin/future/fashion' ? 'active' : '' }}"><a href="{{url('/admin/future/fashion')}}"><i class="icon-user-plus"></i><span class="menu-title">Future Fashion</span></a></li>
           <li class=" nav-item">
                <a href="#"><i class="icon-cart"></i>
                    <span class="menu-title">Products & Services</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::path() == 'admin/Product/Services' ? 'active' : '' }}"><a href="{{url('/admin/Product/Services')}}" class="menu-item">Products & Services</a></li>
                    <li class="{{ Request::path() == 'admin/Woven/Fabrics' ? 'active' : '' }}"><a href="{{url('/admin/Woven/Fabrics')}}" class="menu-item">Woven Fabrics</a></li>
                    <li class="{{ Request::path() == 'admin/Technical/Textile' ? 'active' : '' }}"><a href="{{url('/admin/Technical/Textile')}}" class="menu-item">Technical Textile</a></li>
                    <li class="{{ Request::path() == 'admin/Training/Center' ? 'active' : '' }}"><a href="{{url('/admin/Training/Center')}}" class="menu-item">Training Center</a></li>
                    <li class="{{ Request::path() == 'admin/Consultancy' ? 'active' : '' }}"><a href="{{url('/admin/Consultancy')}}" class="menu-item">Consultancy</a></li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="icon-cart"></i>
                    <span class="menu-title">Sustainability</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::path() == 'admin/Sustainability' ? 'active' : '' }}"><a href="{{url('/admin/Sustainability')}}" class="menu-item">Sustainability</a></li>
                    <li class="{{ Request::path() == 'admin/Sustainability/Overview' ? 'active' : '' }}"><a href="{{url('/admin/Sustainability/Overview')}}" class="menu-item">Sustainability Overview</a></li>
                    <li class="{{ Request::path() == 'admin/Fibre/Yarns' ? 'active' : '' }}"><a href="{{url('/admin/Fibre/Yarns')}}" class="menu-item">Fibre & Yarns</a></li>
                    <li class="{{ Request::path() == 'admin/Dyes/Chemicals' ? 'active' : '' }}"><a href="{{url('/admin/Dyes/Chemicals')}}" class="menu-item">Dyes Chemicals</a></li>
                    <li class="{{ Request::path() == 'admin/Processes' ? 'active' : '' }}"><a href="{{url('/admin/Processes')}}" class="menu-item">Processes</a></li>
                    
                </ul>
            </li>
           <li class="{{ Request::path() == 'admin/Csr' ? 'active' : '' }}"><a href="{{url('/admin/Csr')}}"><i class="icon-user-plus"></i><span class="menu-title">Csr</span></a></li>
           <li class="{{ Request::path() == 'admin/Contact' ? 'active' : '' }}"><a href="{{url('/admin/Contact')}}"><i class="icon-user-plus"></i><span class="menu-title">Contact</span></a></li>
        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <div class="main-menu-footer footer-close">
        <div class="header text-xs-center"><a href="#" class="col-xs-12 footer-toggle"><i class="icon-ios-arrow-up"></i></a></div>
        <div class="content">
            <div class="actions">
                <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Settings"><span aria-hidden="true" class="icon-cog3"></span></a>
                <a href="{{url('admin/unlock')}}" data-placement="top" data-toggle="tooltip" data-original-title="Lock"><span aria-hidden="true" class="icon-lock4"></span></a>

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
                    <span aria-hidden="true" class="icon-power3"></span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <!-- main menu footer-->
</div>