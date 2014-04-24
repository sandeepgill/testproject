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
                        <li class="active"><a href="#">{{ t('master.crm') }}</a></li>
                        <li class="has-dropdown">
                            <a href="#">{{ t('master.settings') }}</a>
                            <ul class="dropdown">
                                <li><a href="#">{{ t('master.administration') }}</a></li>
                                <li><a href="#">{{ t('master.profile') }}</a></li>
                                <li><a href="#">{{ t('master.changepassword') }}</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Left Nav Section -->
                    <ul class="left">
                        <li><a href="#">{{ t('master.crm') }}</a></li>
                        <li><a href="#">{{ t('master.accounting') }}</a></li>
                        <li><a href="#">{{ t('master.projectmanagement') }}</a></li>
                        <li><a href="#">{{ t('master.processes') }}</a></li>
                    </ul>
                </section>
            </nav>
            @yield('content')
        </div>  
        {{ HTML::script('js/vendor/jquery.js') }}
        {{ HTML::script('js/vendor/fastclick.js') }}
        {{ HTML::script('js/foundation.min.js') }}
        {{ HTML::script('js/shared.js') }}
        {{ HTML::script('js/custom.js') }}
    </body>
</html>