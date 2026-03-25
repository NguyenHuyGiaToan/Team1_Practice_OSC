<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách thể loại phim</title>
    <link rel="stylesheet" href="{{ asset('css/tbl_layout.css') }}">
</head>
<body>
    <h2 class="title">Danh Sách Thể Loại Phim</h2>
    <table>
        <thead>
            <tr>
                <th>Tiếng Anh</th>
                <th>Tiếng Việt</th>
            </tr>
        </thead>
        <tbody>
            @foreach($danh_sach_the_loai as $the_loai)
                <tr>
                    <td>{{ $the_loai->genre_name }}</td>
                    <td>{{ $the_loai->genre_name_vn }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>