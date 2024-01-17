<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h2>Product Management</h2>
    <a href="products/create">Create Product</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <TH>PRODUCT NAME</TH>
            <TH>QUANTITY</TH>
            <th>PRICE</th>
        </tr>
        @foreach ($products as $product) 
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->productname}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td><a href="/products/{{$product->id}}"><button>View</button></a></td>
            <td><a href="/products/{{$product->id}}/edit"><button>Edit</button></a></td>
            <td>
                <form action="/products/{{$product->id}}" method="post">
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