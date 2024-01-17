<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <form action="/products" method="post">
        @csrf
        <label for="">Product Name: </label>
        <input type="text" name="productname" value="{{old('productname')}}"><br>
        @error('productname')
        <div>{{ $message }}</div>
        @enderror
        <label for=""> Quantity: </label>
        <input type="number" name="quantity" value="{{old('quantity')}}"><br>
        @error('quality')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Price: </label>
        <input type="number" name="price" value="{{old('price')}}"><br>
        @error('price')
        <div>{{ $message }}</div>
        @enderror
        <button>Submit</button>
    </form>
</body>

</html>