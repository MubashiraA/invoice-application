<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
</head>

<body>
    <form action="/customers/{{$customer->id}}" method="post">
        @method('put')
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" value="{{$customer->name}}"><br>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Phone: </label>
        <input type="number" name="phone" value="{{$customer->phone}}"><br>
        @error('phone')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Address: </label>
        <textarea name="address"> {{$customer->address}}</textarea><br>
        @error('address')
        <div>{{ $message }}</div>
        @enderror
        <button>Submit</button>
    </form>
</body>

</html>