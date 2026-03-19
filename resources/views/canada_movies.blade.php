<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Phim Canada</title>
    <style>
        body { font-family: sans-serif; padding: 20px; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f8f8f8; color: #c0392b; }
        tr:nth-child(even) { background-color: #fafafa; }
        .no-data { text-align: center; padding: 20px; color: #666; }
    </style>
</head>
<body>

    <h1>Phim Canada</h1>

    <table>
        <thead>
            <tr>
                <th>Tên phim</th>
                <th>Ngày phát hành</th>
                <th>Thời lượng</th>
            </tr>
        </thead>
        <tbody>
            @forelse($movies as $movie)
                <tr>
                    <td><strong>{{ $movie->movie_name }}</strong></td>
                    <td>{{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }}</td>
                    <td>{{ $movie->runtime }} phút</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="no-data">Hiện chưa có phim nào trong danh sách.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>