<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Top 10 Phim Hay Nhất</title>
    <link rel="stylesheet" href="{{ asset('css/tbl_layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">


        <h3 class="title">BẢNG XẾP HẠNG 10 BỘ PHIM CÓ ĐIỂM CAO NHẤT</h3>
            <table>
                <thead>
                    <tr>
                        <th>Hạng</th>
                        <th>Tên bộ phim</th>
                        <th>Ngày phát hành</th>
                        <th>Điểm bình chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ds_phim as $index => $phim)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $phim->movie_name }}</td>
                        <td>
                            {{-- Định dạng ngày tháng năm cho dễ nhìn --}}
                            {{ date('d/m/Y', strtotime($phim->release_date)) }}
                        </td>
                        <td>
                            <span>
                                {{ $phim->vote_average }} 
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>