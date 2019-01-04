@extends('main') <!-- declare that we are referring to the main.blade.php page (if it were in a folder called layouts we could do layouts.main, but its not)-->
@section('content') <!-- everything inside section('content') goes inside the yield('content') in main.blade.php -->
@section ('title', '| Homepage')
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1 class="display-4">Welcome to My Blog!</h1>
                        <p class="lead">Thanks for visiting.</p>
                            <a class="btn btn-primary btn-lg" href="#" role="button">Latest Post</a>
                        </p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class ="row">
                <div class="col-md-8";>
                    <div class="post">
                        <h3> Post Title </h3>
                    <p> You may also utilize dropdowns in your navbar nav. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for .nav-item and .nav-link as shown below. </p>
                    <a href="#" class="btn btn-primary"> Read more</a>
                    </div>

                    <br>

                    <div class="post">
                        <h3> Post Title </h3>
                    <p> You may also utilize dropdowns in your navbar nav. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for .nav-item and .nav-link as shown below. </p>
                    <a href="#" class="btn btn-primary"> Read more</a>
                    </div>

                    <br>

                    <div class="post">
                        <h3> Post Title </h3>
                    <p> You may also utilize dropdowns in your navbar nav. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for .nav-item and .nav-link as shown below. </p>
                    <a href="#" class="btn btn-primary"> Read more</a>
                    </div>

                    <br>

                    <div class="post">
                        <h3> Post Title </h3>
                    <p> You may also utilize dropdowns in your navbar nav. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for .nav-item and .nav-link as shown below. </p>
                    <a href="#" class="btn btn-primary"> Read more</a>
                    </div>

                    <br>

                </div>

                <div class="col-md-3 offset-md-1" style="background-color:red;"> <!--offsets by 1. so its 8 and 3, then 1. for total of 12-->
                    <h2> Sidebar </h2>
                </div>
            </div>

@endsection <!-- ends the yield thingy -->


















