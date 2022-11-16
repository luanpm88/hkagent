@extends('layouts.main')

@section('content')
    <form action="{{ action('App\Http\Controllers\ContactController@store') }}" method="POST">
        @csrf
        <h2 class="mt-4">Thêm cửa hàng/đại lý</h2>

        <h4 class="mt-4 mb-3">Thông tin</h4>
        <div class="mb-2">
            <label class="form-label mb-1">Tên cửa hàng/đại lý <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" required />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Địa chỉ <span class="text-danger">*</span></label>
            <input type="text" name="address" class="form-control" required />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Điện thoại <span class="text-danger">*</span></label>
            <input type="text" name="phone" class="form-control" required />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Người đại diện</label>
            <input type="text" name="contact_name" value="" class="form-control" />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Điện thoại/Zalo</label>
            <input type="text" name="phone_2" class="form-control" />
        </div>
        <div class="mb-2">
            <label class="form-label mb-1">Email</label>
            <input type="email" name="email" class="form-control" />
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
        
        <div class="mt-4 mb-5 pt-4 border-top text-center">
            <button type="submit" class="btn btn-primary me-1">Save</button>
            <a href="{{ action('App\Http\Controllers\ContactController@index') }}" class="btn btn-secondary">
                Cancel
            </a>
        </div>
    </form>

    <script>
        var ImageCaptureBoxes = {
            groups: [],
            addGroup: function(groupBox) {
                var _this = this;
                var id = groupBox.attr('image-capture-id');
                var group = {
                    box: groupBox,
                    input: $('#' + id),
                    thumb: $('#' + id + 'Thumb'),
                    placeholder: $('#' + id + 'Placeholder')
                };

                _this.groups.push(group);

                // event
                _this.addEvents(group);
            },

            addEvents: function(group) {
                group.selectFile = function(file) {
                    group.thumb[0].src = URL.createObjectURL(file);

                    group.thumb.show();
                    group.placeholder.hide();
                };

                // click to box
                group.box.on('mouseup', function() {
                    group.input.trigger('click');
                });

                // file change
                group.input.on('change', function() {
                    var file = group.input[0].files[0];
                    group.selectFile(file);
                });
            }
        }

        class CheckGroups {
            constructor() {
                this.groups = [];
            }

            addGroup(checker) {
                var id = checker.attr('check-for-box');
                var box = $('#'+id);

                var group = {
                    checker: checker,
                    box: box
                }
                this.groups.push(group)

                this.addEvents(group);
            }

            addEvents(group) {
                group.toggle = function() {
                    var checked = group.checker.is(':checked');

                    if (checked) {
                        group.box.slideDown();
                    } else {
                        group.box.hide();
                    }
                };
                
                group.toggle();
                group.checker.on('change', function() {                    
                    group.toggle();
                });
            }
        }

        class RadioBoxes {
            constructor(name) {
                var _this = this;
                this.name = name;
                this.radios = $('[name="'+name+'"]');
                this.getCheckedRadio = function() {
                    return $('[name="'+name+'"]:checked');
                };
                this.boxes = [];

                // event
                this.radios.on('change', function() {
                    _this.boxes.forEach(function(box, index) {
                        _this.toggleBox(box);
                    });
                });
            }

            getValue() {
                if (this.getCheckedRadio().length) {
                    return this.getCheckedRadio().val();
                } else {
                    return null;
                }
            }

            addBox(box, value) {
                var box = {
                    box: box,
                    value: value,
                }

                this.boxes.push(box);

                this.toggleBox(box);
            }

            toggleBox(box) {
                if (this.getValue() == box.value) {
                    box.box.slideDown();
                } else {
                    box.box.hide();
                }
            }
        }

        $(function() {
            // initialize images selectors
            $('[image-capture-id]').each(function(index,box) {
                ImageCaptureBoxes.addGroup($(box));
            });

            // initialize checkbox groups
            var checkGroups = new CheckGroups();
            $('[check-for-box]').each(function(index,input) {
                checkGroups.addGroup($(input));
            });

            // initialize radio groups
            var radioBoxes = new RadioBoxes('metadata[dang_ban_do_nhua]');
            $('[radio-box-name="metadata[dang_ban_do_nhua]"]').each(function() {
                radioBoxes.addBox($(this), $(this).attr('radio-box-value'));
            });
        });
    </script>
@endsection