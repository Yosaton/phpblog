<!DOCTYPE html>
<html lang="en">

    <head>
        @include('partials._head')
    </head>

        <body>

            @include('partials._nav')

            <div class="container">

                @yield('content') <!-- anything with @ is blade-->

                @include('partials._footer')

            </div> <!-- end of container-->

                @include('partials._javascripts')

        </body>
</html>



























