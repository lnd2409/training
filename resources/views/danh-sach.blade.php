<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách</title>
</head>
<body>
    <h1>Danh sách danh mục</h1>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
        </tr>
        <?php $stt = 1; ?>
        @foreach ($danhSachDanhMuc as $item)
            <tr>
                <td>{{ $stt++ }}</td>
                <td>{{ $item->dm_ten }}</td>
                <td>{{ $item->dm_mota }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
