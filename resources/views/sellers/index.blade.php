@extends ('layouts.app')
@section('content')
<div class="full-height flex-center position-rel">
    <div class="content">
        <div class="title m-b-md">
            Sellers
        </div>

        @foreach ($sellers as $seller) 
        <h2>{{$seller['name']}}</h2>

            @foreach ($seller['products'] as $item) 
              {{$item->name}} <br>
            @endforeach
            
        @endforeach
    </div>
</div>
@endsection