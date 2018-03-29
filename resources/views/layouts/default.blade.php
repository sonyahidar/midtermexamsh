
<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
<div class="flex-center position-ref full-height">
<header>
    @include('includes.menu')
</header>


    @yield('content')

</div>
</body>
</html>