<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Edit a Product</h2>
    <form method="POST" action="{{route('product.update',['product' => $product])}}" >
    @csrf
    @method('PUT')
    <div>
    <label for="name">Product Name:</label>
    <input type="text" name="name" value='{{$product->name}}'>
    </div>
    <div>
    <label for="qty">Quantity:</label>
    <input type="number"  name="qty" value='{{$product->qty}}'>
    </div>
    <div>
    <label for="price">Price:</label>
    <input type="number"  name="price" value='{{$product->price}}' >
    </div>
    <div>
    <label for="description">Description:</label>
    <input type="text" id="description" name="description" value='{{$product->description}}'>
    </div>
    <div>
    <input type="submit" value="Update A new Product"/>
    </div>
</form>

</body>
</html>
