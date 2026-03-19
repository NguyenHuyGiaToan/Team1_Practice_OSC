<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Phim</title>
    <link rel="stylesheet" href="{{ asset('css/tbl_layout.css') }}">
</head>
<body>

    <h1 class="title">10 Bộ phim có doanh thu cao nhất</h1>
    <table>
        <thead>
            <tr>
                <th>Hạng</th>
                <th>Tên phim</th>
                <th>Ngày phát hành</th>
                <th>Doanh thu (VND)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $index => $movie)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $movie->movie_name }}</td>
                <td>{{ date('d/m/Y', strtotime($movie->release_date)) }}</td>
                <td>{{ number_format($movie->budget) }}</td>
            </tr>
            @endforeach
    </table>

</body>
</html>