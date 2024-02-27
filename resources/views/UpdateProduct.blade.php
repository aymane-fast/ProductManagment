<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Product Update</h1>
        <form action="/Edit/{{$product->id}}" method="GET">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Product Name" name="name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="mb-3">
                <select class="form-select" name="categorie">
                    <option value="sport">Sport</option>
                    <option value="electronic">Electronic</option>
                    <option value="book">Book</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <h3 class="mt-3"><a href="/" class="btn btn-secondary">Back to Home</a></h3>
    </div>
</body>
</html>
