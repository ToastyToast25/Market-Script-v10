<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/custom.css">


        @hasSection('title')
        <title>{{config('app.name')}} - @yield('title')</title>
        @else
        <title>{{config('app.name')}}</title>
        @endif

    </head>
    <body >
        @include('master.navbar')
        @include('master.search')

        @hasSection('container-fluid')
        <div class="container-fluid">
            @else
            
            <div class="container">
                <div class="section-wrapper-main">
                @endif
                @include('includes.jswarning')
                <div class="mt-4">
                    @yield('content')
                </div>
            </div>
            </div>
        <!--<img class="left-patern" src="/img/left-side.svg">-->
        <!--    <img class="right-patern" src="/img/right-side.svg">-->
             @include('master.footer')
    </body>
</html>