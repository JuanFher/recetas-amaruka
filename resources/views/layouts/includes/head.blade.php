<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="msapplication-TileColor" content="#ff685c">
<meta name="theme-color" content="#32cafe">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('assets/fonts/fonts/font-awesome.min.css') }}">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<link href="{{ asset('assets/css/left-sidemenu.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/tables/style.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/toggle-sidebar/sidemenu.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/iconfonts/plugin.css') }}" rel="stylesheet" />
@include('sweetalert::alert')
@stack('styles')