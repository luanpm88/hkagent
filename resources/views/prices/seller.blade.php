@extends('layouts.main', [
    'menu' => 'price_seller',
])

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Bảng giá dành cho đại lý</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ action('App\Http\Controllers\PriceController@sellerDownload') }}" class="btn btn-sm btn-primary">
                <span class="d-flex align-items-center">
                    <span class="material-symbols-rounded">download</span>
                    <span>Tải bảng giá đại lý</span>
                </span>
            </a>
        </div>
    </div>

    <div>
        <table class="table">
            @foreach ($values as $num => $cols)
                @if ($num >= 9)
                    <tr>
                        @foreach ($cols as $value)
                            @if (count($cols) < 7)
                                <th colspan="{{ 20 - count($cols) }}">{{ $value }}</th>
                            @else
                                <td colspan="{{ 20 - count($cols) }}">{{ $value }}</td>
                            @endif
                        @endforeach
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
@endsection