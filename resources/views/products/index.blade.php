@extends ('layouts.app')
@section('content')
<div class="full-height flex-center position-rel">
    <div class="content">
        <div class="title m-b-md">
            Products
        </div>
        @foreach ($products as $product)
        
                <a href="/products/{{$product->id}}" class="href">{{$product->name}}</a> <br>
        @endforeach
        <p>{{session('mssg')}}</p>
    </div>
</div>
@endsection