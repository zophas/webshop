<div class="full-height">
    <div class="content">
        <div class="title m-b-md">
            Add a product
        </div>
        <form action="/products" method="POST">
            @csrf
            <label for="name">Name of product</label>
            <input type="text" name="name" id="name">
            <label for="serial_number">Serial Number</label>
            <input type="text" name="serial_number">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" step="0.01">
            <label for="description">Description of product</label>
            <input type="text" name="description" id="description">
            <label for="image_url">Image URL</label>
            <input type="text" name="image_url" id="image_url">
            <input type="submit" value="Add product">
        </form>
    </div>
</div>