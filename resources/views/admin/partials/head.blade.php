<link rel="shortcut icon" href="{{ URL::asset('admin/assets/images/favicon.ico') }}">

<!-- App css -->
<link href="{{ URL::asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

@if(isset($isDark) && $isDark)
<link href="{{ URL::asset('admin/assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />
@else
<link href="{{ URL::asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    @if(isset($isRTL) && $isRTL)
    <link href="{{ URL::asset('admin/assets/css/app-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    @else
    <link href="{{ URL::asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    @endif
@endif
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


@yield('css')
