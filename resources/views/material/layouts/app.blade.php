

<!DOCTYPE html>
<html>
    <head>
        @include('material.layouts.includes.head')
        <style>
            
        </style>
    </head>
    <body>
        @include('material.layouts.website.header')
        
        <div>
            @yield('content')
        </div>

        @include('material.layouts.website.footer')
        @include('material.layouts.includes.bottom')
    </body>
</html>

