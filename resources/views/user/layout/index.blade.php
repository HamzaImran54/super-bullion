<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.partials.head')
</head>

<body>
    <!-- Header start  -->
    <header class="ec-header">

        <!-- Ec Header Top  End -->
        @include('user.partials.navbar')

    </header>
    <!-- Header End  -->

@yield('content')

@include('user.partials.footer')
@include('user.partials.scripts')
</body>
</html>
