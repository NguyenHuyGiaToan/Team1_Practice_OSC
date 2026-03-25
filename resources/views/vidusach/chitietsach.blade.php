<x-book-layout>

<x-slot name="title">Chi tiết sách</x-slot>

@foreach($data as $row)
<div class="book-detail">
    <h3>{{ $row->tieu_de }}</h3>
    <div class="row">
        <div class="col-md-3">
            <img src="{{ $row->link_anh_bia }}" 
                 style="width:100%; height:auto; max-height:200px; object-fit:cover;">
        </div>
        <div class="col-md-9">
            <p>Nhà cung cấp:<strong> {{ $row->nha_cung_cap }}</strong></p>
            <p>Nhà xuất bản:<strong> {{ $row->nha_xuat_ban }}</strong></p>
            <p>Tác giả: <strong>{{ $row->tac_gia }}</strong></p>
            <p>Hình thức bìa:<strong> {{ $row->hinh_thuc_bia }}</strong></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>Mô tả:</h5>
            <p style="text-align: justify;">{{ $row->mo_ta }}</p>
        </div>
    </div>
</div>
@endforeach

</x-book-layout>