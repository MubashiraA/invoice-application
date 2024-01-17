<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>

<body>
    <form action="/customers" method="post">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" value="{{old('name')}}"><br>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Phone: </label>
        <input type="number" name="phone" value="{{old('phone')}}"><br>
        @error('phone')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Address: </label>
        <textarea name="address">{{old('address')}}</textarea><br>
        @error('address')
        <div>{{ $message }}</div>
        @enderror
        <button>Submit</button>
    </form>
</body>

</html>