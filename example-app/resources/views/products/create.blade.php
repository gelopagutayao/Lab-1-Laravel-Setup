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
    <h2>Create Product</h2>
    <form action="{{route('product.store')}}" method="POST">
    @csrf
    @method('post')
    <div>
    <label for="name">Product Name:</label>
    <input type="text" name="name" >
    </div>
    <div>
    <label for="qty">Quantity:</label>
    <input type="number"  name="qty">
    </div>
    <div>
    <label for="price">Price:</label>
    <input type="number"  name="price" >
    </div>
    <div>
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>
    </div>
    <div>
    <input type="submit" value="Save A new Product"/>
    </div>
</form>

</body>
</html>
