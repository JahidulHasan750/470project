<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="{{asset('js/app.js') }}"></script>
        <title>{{config('app.name' , 'LSAPP')}}</title>
    <body>
        @include('nav.navigation')
         <div class="container">;
            @include('nav.message')
            @yield('content')
         </div>
    </body>
</html>
