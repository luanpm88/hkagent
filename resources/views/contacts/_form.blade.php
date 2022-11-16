<h4 class="mt-4 mb-3">Thông tin</h4>
<div class="mb-2">
    <label class="form-label mb-1">Tên cửa hàng/đại lý <span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control" value="{{ $contact->name }}" required />
</div>
<div class="mb-2">
    <label class="form-label mb-1">Địa chỉ <span class="text-danger">*</span></label>
    <input type="text" name="address" class="form-control" value="{{ $contact->address }}" required />
</div>
<div class="mb-2">
    <label class="form-label mb-1">Điện thoại <span class="text-danger">*</span></label>
    <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}" required />
</div>
<div class="mb-2">
    <label class="form-label mb-1">Người đại diện</label>
    <input type="text" name="contact_name" value="{{ $contact->contact_name }}" class="form-control" />
</div>
<div class="mb-2">
    <label class="form-label mb-1">Điện thoại/Zalo</label>
    <input type="text" name="phone_2" value="{{ $contact->phone_2 }}" class="form-control" />
</div>
<div class="mb-2">
    <label class="form-label mb-1">Email</label>
    <input type="email" name="email" value="{{ $contact->email }}" class="form-control" />
</div>

<h4 class="mt-5 mb-3">Ảnh thực tế</h4>
<div class="d-flex">
    @for ($i = 0;$i < 4;$i++)
        <div image-capture-id="image{{ $i }}" class="d-inline-block me-3 pic-input-capture-box border rounded p-2 shadow-sm" style="cursor: pointer;">
            <div>
                <div id="image{{ $i }}Placeholder">
                    <span style="width: 100px;height:100px;" class="d-inline-block d-flex align-items-center justify-content-center">
                        <span class="material-symbols-rounded fs-1 text-muted">
                            add_a_photo
                        </span>
                    </span>
                </div>
                <img height="100px" id="image{{ $i }}Thumb" src="" style="display:none" />
            </div>
            <input id="image{{ $i }}" type="file" name="images[]" accept="image/*;capture=camera" style="display:none;">
        </div>
    @endfor
</div>

<h4 class="mt-5 mb-3">Khảo sát</h4>
<div class="mb-3">
    <h6 class="my-2 text-bold">1. Cửa hàng có đang bán bồn nhựa?</h6>
    <div class="form-check">            
        <label class="form-check-label d-block">
            <input class="form-check-input" type="radio" name="metadata[dang_ban_do_nhua]" value="chua_tung_ban">
            Chưa từng bán
        </label>
    </div>
    <div class="form-check">                
        <label class="form-check-label d-block">
            <input class="form-check-input" type="radio" name="metadata[dang_ban_do_nhua]" value="truoc_co_ban">
            Trước đây có bán
        </label>
    </div>
    <div class="form-check">                
        <label class="form-check-label d-block">
            <input class="form-check-input" type="radio" name="metadata[dang_ban_do_nhua]" value="ban_thuong_hieu">
            Đang bán
        </label>
        <div radio-box-name="metadata[dang_ban_do_nhua]" radio-box-value="ban_thuong_hieu">
            <div class="mb-3 mt-2">
                <label class="mb-2">Thương hiệu đang bán</label>
                <input type="text" name="metadata[dang_ban_do_nhua_][ban_thuong_hieu][thuong_hieu_dang_ban]" class="form-control" />
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
    <h6 class="my-2 text-bold">2. Cửa hàng có vị trí trưng bày?</h6>
    <div class="form-check">            
        <label class="form-check-label d-block">
            <input class="form-check-input" type="radio" name="metadata[co_vi_tri_trung_bay]" value="co">
            Có
        </label>
    </div>
    <div class="form-check">                
        <label class="form-check-label d-block">
            <input class="form-check-input" type="radio" name="metadata[co_vi_tri_trung_bay]" value="khong">
            Không
        </label>
    </div>
    <div class="form-check">                
        <label class="form-check-label d-block">
            <input class="form-check-input" type="radio" name="metadata[co_vi_tri_trung_bay]" value="se_sap_xep_cho">
            Nếu bán sẽ sắp xếp chỗ trưng bày
        </label>
    </div>
</div>

<div class="mb-3">
    <h6 class="my-2 text-bold">3. Yêu cầu của cửa hàng khi nhập hàng?</h6>
    <div class="form-check">            
        <label class="form-check-label d-block">
            <input class="form-check-input" type="checkbox" name="metadata[yeu_cau]" value="loi_nhuan_cao">
            Lợi nhuận cao
        </label>
    </div>
    <div class="form-check">                
        <label class="form-check-label d-block">
            <input class="form-check-input" type="checkbox" name="metadata[yeu_cau]" value="giao_tan_noi">
            Giao hàng tận nơi
        </label>
    </div>
    <div class="form-check">                
        <label class="form-check-label d-block">
            <input class="form-check-input" type="checkbox" name="metadata[yeu_cau]" value="duoc_cong_no" check-for-box="box1">
            Được công nợ
        </label>
        <div id="box1">
            <div class="mb-3 mt-2">
                <label class="mb-2">Thòi gian công nợ</label>
                <input type="text" name="metadata[yeu_cau_][duoc_cong_no][thoi_gian_cong_no]" class="form-control" />
            </div>
        </div>
    </div>
    <div class="form-check">                
        <label class="form-check-label d-block">
            <input class="form-check-input" type="checkbox" name="metadata[yeu_cau]" value="doi_tra_linh_hoat">
            Hỗ trợ đổi trả linh hoạt
        </label>
    </div>
    <div class="form-check">                
        <label class="form-check-label d-block">
            <input class="form-check-input" type="checkbox" name="metadata[yeu_cau]" value="khac" check-for-box="box2">
            Khác
        </label>
        <div id="box2">
            <div class="mb-3 mt-2">
                <label class="mb-2">Nhập yêu cầu</label>
                <input type="text" name="metadata[yeu_cau_][khac]" class="form-control" />
            </div>
        </div>
    </div>
</div>