<!doctype html>
<html lang="en" ng-app="app">
    <head>
        <meta charset="utf-8" />
        <title>Deepika Designs</title>
        {{ HTML::style('css/normalize.css') }}
        {{ HTML::style('css/foundation.min.css') }}
        {{ HTML::style('css/shared.css') }}
        {{ HTML::script('js/angularjs.1.2.4.min.js') }}
        {{ HTML::script('js/angularjs.cookies.1.2.4.min.js') }}
        {{ HTML::script('js/vendor/modernizr.js') }}
    </head>
    <body ng-controller="main">
        <div class="container">
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="#">{{ t('master.sitetitle') }}</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                </ul>

                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <li class="active"><a href="#">Right Button Active</a></li>
                        <li class="has-dropdown">
                            <a href="#">Right Button Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="#">First link in dropdown</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Left Nav Section -->
                    <ul class="left">
                        <li><a href="#">Left Nav Button</a></li>
                    </ul>
                </section>
            </nav>
            
            <!-- SLIDER -->
            <ul class="example-orbit" data-orbit>
  <li>
    <img src="../assets/img/examples/satelite-orbit.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Caption One.
    </div>
  </li>
  <li class="active">
    <img src="../assets/img/examples/andromeda-orbit.jpg" alt="slide 2" />
    <div class="orbit-caption">
      Caption Two.
    </div>
  </li>
  <li>
    <img src="../assets/img/examples/launch-orbit.jpg" alt="slide 3" />
    <div class="orbit-caption">
      Caption Three.
    </div>
  </li>
</ul>
        </div>  
        {{ HTML::script('js/vendor/jquery.js') }}
        {{ HTML::script('js/vendor/fastclick.js') }}
        {{ HTML::script('js/foundation.min.js') }}
        {{ HTML::script('js/shared.js') }}
        {{ HTML::script('js/custom.js') }}
    </body>
</html>