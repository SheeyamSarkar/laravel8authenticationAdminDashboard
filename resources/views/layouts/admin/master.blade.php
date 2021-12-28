<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin | @yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        @include('partial.admin.css')
        
    </head>

    <body class="fixed-left">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            @include('partial.admin.leftsidebar')

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    @include('partial.admin.topbar')

            <!-- ==================PAGE CONTENT START================== -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                        <!-- header -->
                            @yield('content')

                        </div>
                        

                        {{-- Main Content --}}
                        
                    </div> <!-- Page content Wrapper -->

                </div> 
                @include('partial.admin.footer')

            </div> <!-- End Right content here -->

        </div> <!-- END wrapper -->

        {{-- JS --}}
        @include('partial.admin.js')

    </body>
</html>
@section('page-js')
<script>
    // Mulilevel Menu
    $('.has_multi_sub a').click(function () {

$(this).siblings('ul').toggle().removeClass('d-none');
if ($(this).parent('li').hasClass('sub-nav-active')) {

    $(this).parent('li').removeClass('sub-nav-active');
    $(this).children('span').children('span').children('.mdi').css("transform", "rotate(-90deg)")

} else {
    $(this).parent('li').addClass('sub-nav-active');
    $(this).children('span').children('span').children('.mdi').css("transform", "rotate(0deg)")

}

})
</script>
@endsection


