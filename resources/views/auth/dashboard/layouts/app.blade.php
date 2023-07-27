<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
@include('auth.dashboard.partials.head')
</head>
<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">
	<div class="wrapper">
        @include('auth.dashboard.partials.left-main-sidebar')
		<div class="ec-page-wrapper">
			@include('auth.dashboard.partials.page-header')
			@yield('content')
            @include('auth.dashboard.partials.footer')
		</div>
	</div>
@include('auth.dashboard.partials.scripts')
</body>
</html>
