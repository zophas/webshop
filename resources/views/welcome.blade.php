@extends ('layouts.layout')
@section('content')
@if (Route::has('login'))
<div class="top-right links">
    @auth
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
    @endauth
</div>
@endif
            <div class="full-height flex-center position-rel">
                <div class="content">
                    <div class="title m-b-md">
                        products for you
                    </div> <br>
                    <a class="btn-prod" href="/products">Look at the products</a>
                    <a class="btn-sell" href="/sellers">Look at the sellers</a>
                </div> 
            </div>
        </div>
@endsection
