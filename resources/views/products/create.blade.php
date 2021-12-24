@extends('layouts.app')
@section('content')

<div class="full-height">
    <div class="content">
        <div class="title m-b-md">
            Add a product
        </div>
        <form action="/products" method="POST">
            @csrf
            <label for="name">Name of product</label> <br>
            <input type="text" name="name" id="name"> <br>
            <label for="serial_number">Serial Number</label> <br>
            <input type="text" name="serial_number"> <br>
            <label for="stock">Stock</label> <br>
            <input type="number" name="stock" id="stock"> <br>
            <label for="price">Price</label> <br>
            <input type="number" name="price" id="price" step="0.01"> <br>
            <label for="description">Description of product</label> <br>
            <input type="text" name="description" id="description"> <br>
            <label for="image_url">Image URL</label> <br>
            <input type="text" name="image_url" id="image_url"> <br>
            <input type="submit" value="Add product"> <br>
        </form>
    </div>
</div>
@endsection