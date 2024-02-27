<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List de produit </title>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>name </th>
            <th>price</th>
            <th>categorie</th>
            <th>delete</th>
            <th>update</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->categorie }}</td>
                <td><a href="/Delete/{{ $product->id }} "onclick="return confirm('Are you sure?')">
                        delete
                    </a>
                </td>
                <td><a href="/Update/{{ $product->id }}">
                        update
                    </a>
                </td>

            </tr>
        @endforeach
    </table>
         <h3><a href="/">back to home</a></h3>
</head>

<body>

</body>

</html>
