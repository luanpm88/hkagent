@extends('layouts.main')

@section('content')
    <form action="{{ action('App\Http\Controllers\ContactController@update', [
        'contact' => $contact,
    ]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH" />

        <h2 class="mt-4">Edit: {{ $contact->name }}</h2>

        @include('contacts._form')
        
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