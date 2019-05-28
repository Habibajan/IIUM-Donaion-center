<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>IIUM Donation Center</title>
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <script src="{{ asset('js/app.js') }}" defer></script>

    
<!-- Custom Theme files -->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
 @include('layout.script')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
</head>
<body>
<!---->
<div class="header">
	 <div class="container">
		@include('layout.header')

    </div>
</div>
<div>
  <div class="flex-center position-ref full-height">
        
     @yield('content')

</div>

@include('layout.footer')
</body>
</html>