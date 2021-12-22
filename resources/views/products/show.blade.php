@extends ('layouts.app')
@section('content')
<div class="full-height flex-center position-rel">
    <div class="content">
        <div class="title m-d-mb">
            {{$product->name}} - {{$product->serial_number}}
        </div>
        <div class="detail-card">
            <h2>Price</h2> 
            <p>&euro; {{$product->price}}</p>
            <h2>Stock</h2>
            <p>{{$product->stock}}</p>
            <h2>Description</h2>
            <p>{{$product->description}}</p>
            @if($product->image_url)
                <img src="{{$product->image_url}}" alt="">
            @endif

            @if(Route::has('login'))
                @auth
                <form action="/products/{{$product->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button>Remove product</button>
                    </form>  
                @endauth
            @endif
        </div>
    </div>
</div>
@endsection