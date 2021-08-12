<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
    <h1>Category</h1>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        <?php $stt = 1; ?>
        @foreach ($category as $item)
        <tr>
            <td>{{ $stt++ }}</td>
            <td>{{ $item->cat_name }}</td>
            <td>{{ $item->cat_des }}</td>
        </tr>
        @endforeach
    </table>

    <h2>Add category</h2>
    <form action="{{ route('cat.store') }}" method="POST">
        @csrf
        <label for="cat_name">Name</label>
        <input type="text" name="cat_name" id="cat_name">
        <br>
        <label for="cat_des">Description</label>
        <textarea name="cat_des" id="cat_des" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>
