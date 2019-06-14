<!DOCTYPE html>
<html lang="en">
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>@yield('title') | Angel Group </title>
        @include('frontEnd.include.headercss')
        @yield('css')
    </head>
    <body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-21 node-type-businesses">
        <div id="skip-link">
         <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
      </div>
            <!-- Header Menu Start -->
            @include('frontEnd.include.navbar')
            <!-- Header Menu End -->
        <a href="javascript:void(0)" class="gotoTopBtn"></a>
          <div id="content" class="column">
             <div class="section">
                <a id="main-content"></a>
                <div class="tabs"></div>
             </div>
          </div>

		<!-- Main content Start -->
        @yield('content')
        <!-- Footer Start -->
        <footer class="footer">
            @include('frontEnd.include.footer')
        </footer>
        <!-- Footer End -->
        </div>
      </div>
        @include('frontEnd.include.footerJs')
        @yield('js')
    </body>
</html>