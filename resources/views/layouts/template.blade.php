
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		@yield('og_tag')

        @include('layouts.inc-style')
        @yield('stylesheet')

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">




@include('layouts.inc-header')






<!-- Slider
================================================== -->

@yield('content')



@include('layouts.inc-footer')


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



@include('layouts.inc-script')
        @yield('scripts')


</body>
</html>