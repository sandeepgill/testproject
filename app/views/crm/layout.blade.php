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
            @include('crm.plugins.menu.main')
            @yield('content')
        </div>  
        {{ HTML::script('js/vendor/jquery.js') }}
        {{ HTML::script('js/vendor/fastclick.js') }}
        {{ HTML::script('js/foundation.min.js') }}
        {{ HTML::script('js/shared.js') }}
        {{ HTML::script('js/custom.js') }}
    </body>
</html>
