<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.6 Hiển thị phim Action</title>
    <style>
    table {
        margin: 0 auto;
    }
    table,th,td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    td:nth-child(2) {
        width: 200px;
    }
    td:nth-child(4) {
        width: 300px;
    }
    </style>
</head>
<body>
    <h1>7.6 Hiển thị phim Action</h1>
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
            <td>{{$row->movie_name}}</td>
            <td>{{$row->release_date}}</td>
            <td>{{$row->overview}}</td>
            <td ><img style="width: 200px" src="{{$row->image_link}}" alt=""></td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>