<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Phim Canada</title>
    <link rel="stylesheet" href="{{ asset('css/tbl_layout.css') }}">
</head>
<body>

    <h1 class="title">Phim Canada</h1>

    <table>
        <tr>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Thời lượng</th>
        </tr>
        <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td><strong>{{ $movie->movie_name }}</strong></td>
                    <td>{{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }}</td>
                    <td>{{ $movie->runtime }} phút</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>