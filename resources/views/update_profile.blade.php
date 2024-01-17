<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>

<body>
    <form action="/Registration/{{$Registration->id}}" method="post">
        @method('put')
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" value="{{$Registration->name}}"><br>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Email: </label>
        <input type="email" name="email" value="{{$Registration->email}}"><br>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
        <label for="">Password: </label>
        <input type="password" name="password"><br>
        @error('password')
        <div>{{ $message }}</div>
        @enderror
        <br>
        <button>Update</button>
    </form>
</body>

</html>