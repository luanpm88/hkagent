@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cửa hàng/Đại lý</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ action('App\Http\Controllers\ContactController@create') }}" class="btn btn-primary me-3">Thêm đại lý/cửa hàng</a>
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>

    <h4>Danh sách</h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Contact Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $key => $contact)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>
                            <div>{{ $contact->phone }}</div>
                            <div>{{ $contact->phone_2 }}</div>
                        </td>
                        <td>{{ $contact->contact_name }}</td>
                        <td class="text-end">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection