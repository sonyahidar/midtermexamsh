
<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
<div class="container">
<div class="flex-center position-ref full-height">
<header>
    @include('includes.menu')
</header>


    @yield('content')

</div>
</div>
</body>
</html>