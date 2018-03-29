@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{route('home')}}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
            <a  href="{{route('contact')}}">Contact</a>
    </div>
@endif