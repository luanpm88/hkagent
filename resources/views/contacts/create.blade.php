@extends('layouts.main', [
    'menu' => 'contact',
])

@section('content')
    <form action="{{ action('App\Http\Controllers\ContactController@store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="mt-4">Thêm cửa hàng/đại lý</h2>

        @include('contacts._form')
        
        <div class="mt-4 mb-5 pt-4 border-top text-center">
            <button type="submit" class="btn btn-primary me-1">Save</button>
            <input type="submit" name="save_close" class="btn btn-secondary me-1" value="Save & Back to List" />
            <a href="{{ action('App\Http\Controllers\ContactController@index') }}" class="btn btn-light">
                Cancel
            </a>
        </div>
    </form>
@endsection