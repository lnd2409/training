<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Thêm danh mục</h1>
    {{-- {{ route('ten-route') }} --}}

    <form action="{{ route('danh-muc.store') }}" method="POST">
        @csrf
        <label for="">Tên danh mục</label>
        <input type="text" name="tenDanhMuc">
        <br>
        <label for="">Mô tả</label>
        <textarea name="moTa" id="" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
