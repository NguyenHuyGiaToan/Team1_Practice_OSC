<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phim thời lượng > 120 phút</title>
    <style>
        h1 { text-align: center;}
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Top 10 phim có thời lượng trên 120 phút</h1>

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
                <td>{{ $movie->release_date }}</td>
                <td>{{ $movie->runtime }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>