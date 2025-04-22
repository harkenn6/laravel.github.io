<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            padding: 40px;
            color: #333;
        }

        h1 {
            color: #000;
            text-align: center;
        }

        a.button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #000;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        form {
            display: inline;
        }

        .edit-link {
            color: #e74c3c;
            margin-right: 10px;
        }

        .edit-link:hover {
            color: #c0392b;
        }

        .delete-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<h1>Product List</h1>

<a href="{{ route('products.create') }}" class="button">Create New Product</a>

<table>
    <tr>
        <th>Name</th><th>Description</th><th>Price</th><th>Actions</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>${{ number_format($product->price, 2) }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}" class="edit-link">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
