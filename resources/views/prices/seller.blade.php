@extends('layouts.main', [
    'menu' => 'price',
])

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bảng giá dành cho đại lý</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <div>
        <img src="{{ url('image/BonNuocLongNhien-BangGiaDaiLy.png') }}" width="100%" />
    </div>
@endsection