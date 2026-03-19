<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phim thời lượng > 120 phút</title>
    <link rel="stylesheet" href="{{ asset('css/tbl_layout.css') }}">
</head>
<body>
    <h1 class="title">Top 10 phim có thời lượng trên 120 phút</h1>

    <table>
        <thead>
            <tr>
                <th>Tên phim</th>
                <th>Ngày phát hành</th>
                <th>Thời lượng (phút)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->movie_name }}</td>
                <td>{{ date('d/m/Y',strtotime($movie->release_date)) }}</td>
                <td>{{ $movie->runtime }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>