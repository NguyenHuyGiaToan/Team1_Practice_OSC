<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị phim Action</title>
    <link rel="stylesheet" href="{{ asset('css/tbl_layout.css') }}">
    
</head>
<body>
    <h1 class = "title">Hiển thị phim Action</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên bộ phim</th>
            <th>Ngày phát hành</th>
            <th>Mô tả</th>
            <th>Ảnh đại diện</th>
        </tr>
        @foreach($phimaction_tbl as $row)
        <tr>
            <td>{{$loop->index + 1}}</td>
            <td style="width: 300px">{{$row->movie_name}}</td>
            <td>{{$row->release_date}}</td>
            <td style="width: 400px">{{$row->overview}}</td>
            <td ><img src="{{$row->image_link}}" alt=""></td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>