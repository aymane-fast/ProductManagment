<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add product here</h1>
    <form action="/Add"  method="post">
        @csrf
        <input type="text"  placeholder="Product Name" name="name"><br>
        <input type="text" placeholder="Price" name="price"><br>
        <select name="categorie" id="">
            <option value="sport">sport</option>
            <option value="electronic">Electronic</option>
            <option value="book">Book</option>
        </select><br>
        <button type="submit">ADD</button>
    </form>
</body>
</html>