<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <form action="/products/{{$product->id}}" method="post">
        @method('put')
        @csrf
        <label for="">Product Name: </label>
        <input type="text" name="productname" value="{{$product->productname}}"><br>
        @error('productname')
        <div>{{ $message }}</div>
        @enderror
        <label for=""> Quantity: </label>
        <input type="number" name="quantity" value="{{$product->quantity}}"><br>
        @error('quality')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Price: </label>
        <input type="number" name="price" value="{{$product->price}}"><br>
        @error('price')
        <div>{{ $message }}</div>
        @enderror
        <button>Submit</button>
    </form>
</body>

</html>