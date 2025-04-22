<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
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

        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        input[type="text"],
        textarea,
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<h1>Create Product</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Product Name"><br>
    <textarea name="description" placeholder="Product Description"></textarea><br>
    <input type="number" step="0.01" name="price" placeholder="Price"><br>
    <button type="submit">Save</button>
</form>

</body>
</html>
