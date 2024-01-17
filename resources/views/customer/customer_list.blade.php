<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>
</head>
<body>
    <h2>Customer Management</h2>
    <a href="customers/create">Create Customer</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <TH>NAME</TH>
            <TH>PHONE</TH>
            <th>ADDRESS</th>
        </tr>
        @foreach ($customers as $customer) 
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address}}</td>
            <td><a href="/customers/{{$customer->id}}"><button>View</button></a></td>
            <td><a href="/customers/{{$customer->id}}/edit"><button>Edit</button></a></td>
            <td>
                <form action="/customers/{{$customer->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <h4><a href="home">Back</a></h4>
</body>
</html>