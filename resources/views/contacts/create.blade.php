@extends('layouts.main')

@section('content')
    <form action="" method="POST">
        @csrf
        <h2 class="mt-4">Thêm cửa hàng/đại lý</h2>

        <h4 class="mt-4 mb-3">Thông tin</h4>
        <div class="mb-2">
            <label class="form-label mb-1">Tên cửa hàng</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Địa chỉ</label>
            <input type="text" name="address" class="form-control" />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Điện thoại</label>
            <input type="text" name="phone" class="form-control" />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Người phụ trách</label>
            <input type="text" name="" class="form-control" />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Điện thoại/Zalo</label>
            <input type="text" class="form-control" />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Email</label>
            <input type="email" class="form-control" />
        </div>

        <h4 class="mt-5 mb-3">Ảnh thực tế</h4>
        <div>
            <div class="d-inline-block me-2" style="cursor: pointer;">
                <span class="d-inline-block p-4 border rounded shadow-sm">
                    <span class="material-symbols-rounded fs-1 text-muted">
                        add_a_photo
                    </span>
                </span>
                <input id="myFileInput" type="file" accept="image/*;capture=camera" style="display:none;">
            </div>
            <div class="d-inline-block me-2" style="cursor: pointer;">
                <span class="d-inline-block p-4 border rounded shadow-sm">
                    <span class="material-symbols-rounded fs-1 text-muted">
                        add_a_photo
                    </span>
                </span>
                <input id="myFileInput" type="file" accept="image/*;capture=camera" style="display:none;">
            </div>
            <div class="d-inline-block me-2" style="cursor: pointer;">
                <span class="d-inline-block p-4 border rounded shadow-sm">
                    <span class="material-symbols-rounded fs-1 text-muted">
                        add_a_photo
                    </span>
                </span>
                <input id="myFileInput" type="file" accept="image/*;capture=camera" style="display:none;">
            </div>
            <div class="d-inline-block me-2" style="cursor: pointer;">
                <span class="d-inline-block p-4 border rounded shadow-sm">
                    <span class="material-symbols-rounded fs-1 text-muted">
                        add_a_photo
                    </span>
                </span>
                <input id="myFileInput" type="file" accept="image/*;capture=camera" style="display:none;">
            </div>
            <script>
                var myInput = document.getElementById('myFileInput');

                function sendPic() {
                    var file = myInput.files[0];

                    // Send file here either by adding it to a `FormData` object 
                    // and sending that via XHR, or by simply passing the file into 
                    // the `send` method of an XHR instance.
                }

                myInput.addEventListener('change', sendPic, false);
            </script>
        </div>

        <h4 class="mt-5 mb-3">Khảo sát</h4>
        <div class="mb-3">
            <h6 class="my-2 text-bold">1. Cửa hàng có đang bán bồn nhựa?</h6>
            <div class="form-check">            
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                    Chưa từng bán
                </label>
            </div>
            <div class="form-check">                
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                    Trước đây có bán
                </label>
            </div>
            <div class="form-check">                
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault">
                    Đang bán thương hiệu:
                </label>
                <div>
                    <div class="mb-3 mt-2">
                        <input type="email" class="form-control" />
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <h6 class="my-2 text-bold">2. Cửa hàng có vị trí trưng bày?</h6>
            <div class="form-check">            
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1">
                    Có
                </label>
            </div>
            <div class="form-check">                
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1">
                    Không
                </label>
            </div>
            <div class="form-check">                
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1">
                    Nếu bán sẽ sắp xếp chỗ trưng bày
                </label>
            </div>
        </div>

        <div class="mb-3">
            <h6 class="my-2 text-bold">3. Yêu cầu của cửa hàng khi nhập hàng?</h6>
            <div class="form-check">            
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2">
                    Lợi nhuận cao
                </label>
            </div>
            <div class="form-check">                
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2">
                    Giao hàng tận nơi
                </label>
            </div>
            <div class="form-check">                
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2">
                    Được công nợ:
                </label>
                <div>
                    <div class="mb-3 mt-2">
                        <input type="email" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="form-check">                
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2">
                    Hỗ trợ đổi trả linh hoạt
                </label>
            </div>
            <div class="form-check">                
                <label class="form-check-label d-block">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" box-toggle-id="">
                    Khác:
                </label>
                <div>
                    <div class="mb-3 mt-2">
                        <input type="email" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-4 mb-5 pt-4 border-top text-center">
            <button type="submit" class="btn btn-primary me-1">Save</button>
            <a href="{{ action('App\Http\Controllers\ContactController@index') }}" class="btn btn-secondary">
                Cancel
            </a>
        </div>
    </form>
@endsection