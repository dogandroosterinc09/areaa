@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.pages.index') }}">Pages</a></li>
        <li><span href="javascript:void(0)">Edit Page</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-page',
            'route' => ['admin.pages.update', $page->id],
            'class' => 'form-horizontal ',
            'files' => TRUE,
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Page "{{$page->name}}"</strong></h2>
                </div>

                @include('admin.components.heading', ['text' => 'Page Details'])
                @include('admin.components.input-field', ['label' => 'Name', 'value' => $page->name])
                @include('admin.components.input-field', ['label' => 'Slug', 'value' => $page->slug])
                @include('admin.components.attachment', ['label' => 'Banner Image', 'value' => $page->attachment])
                @include('admin.components.editor', ['label' => 'Content', 'value' => $page->content])
                @include('admin.components.toggle', ['label' => 'Is Active', 'value' => $page->is_active])

                @include('admin.components.heading', ['text' => 'Sections'])
                
                @include('admin.modules.page.page_sections')

                @if($page->id==52)
                    @include('admin.modules.page.page_sponsors')
                @endif


                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                        <button id="btnSave" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            @include('admin.modules.page.meta_fields')
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('extrascripts')
    <script>
        if (!Array.prototype.includes) {
            Object.defineProperty(Array.prototype, 'includes', {
                value: function (searchElement, fromIndex) {
                    if (this == null) {
                        throw new TypeError('"this" is null or not defined');
                    }

                    var o = Object(this);
                    var len = o.length >>> 0;

                    if (len === 0)
                        return false;

                    var n = fromIndex | 0;
                    var k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);

                    while (k < len) {
                        if (o[k] === searchElement)
                            return true;
                        k++;
                    }

                    return false;
                }
            });
        }

        $('input[type=file].async').each(function (i, el) {
            var $self = $(this);
            $(el).on('change', function (e) {
                if (e.target.files.length === 0)
                    return;

                var formData = new FormData();
                formData.append('image', e.target.files[0]);
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.upload') }}',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (response) {
                        if (response.status) {
                            $self.siblings('input[type=hidden].fld').val(response.data.id);
                        }
                    }
                });
            });
        });

        var sections = {!! json_encode($page->sections) !!}.map(function (section) {
            if (section.type === 3)
                section.value = JSON.parse(section.value);
            return section;
        });

        $('#btnSave').on('click', function (e) {
            e.preventDefault();

            sections.filter(function (section) {
                return section.type === 3;
            }).forEach(function (section) {
                section.value.data = $(`#section-${section.id}`).children('.form-field').map(function (i, el) {
                    return $(el).find('.form-group').toArray().reduce(function (item, fg) {
                        var field = $(fg).find('input.fld');

                        if (field.length > 0) {
                            item[$(field).data('name')] = $(field).val();
                        } else if (field.length === 0) {
                            field = $(fg).find('textarea.fld');

                            if (field.length > 0) {
                                var editor = CKEDITOR.instances[field.attr('id')];

                                if (editor) {
                                    item[$(field).data('name')] = editor.getData();
                                } else {
                                    item[$(field).data('name')] = $(field).val();
                                }
                            }
                        }

                        return item;
                    }, {});
                }).toArray();
                $(`input[name=${section.alias}]`).val(JSON.stringify(section.value));
            });

            $('form#edit-page').submit();
        });
    </script>
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/pages.js') }}"></script>

    @if($page->id==52)
    <script type="text/javascript">

    $(document).ready(function(){

        var counter = 2;

        $("#addButton").click(function () {

            var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDiv' + counter);

            newTextBoxDiv.after().html('<div class="row" id="TextBoxDiv">'+
                '<div class="col-md-8 col-md-offset-2">'+
                '<div class="form-group">'+
                    '<label class="col-md-2 control-label" for="chapter_sponsor">Badge</label>'+
                    '<div class="col-md-10">'+
                        '<select name="sponsor_category[]" id="sponsor_select" class="form-control">'+
                            '<option value="">No Category</option>'+
                            '<option value="jade">Jade</option>'+
                            '<option value="diamond">Diamond</option>'+
                            '<option value="emerald">Emerald</option>'+
                            '<option value="opal">Opal</option>'+
                            '<option value="ruby">Ruby</option>'+
                            '<option value="pearl">Pearl</option>'+
                        '</select>'+
                    '</div>'+
                    '<label class="col-md-2 control-label" for="chapter_sponsor">Image</label>'+
                    '<div class="col-md-10">'+
                        '<div class="input-group">'+
                            '<label class="input-group-btn">'+
                            '<span class="btn btn-primary">'+
                                'Choose File <input type="file" name="chapter_sponsor_image[]" style="display: none;" onchange="document.getElementById(\'image_chapter_sponsor'+counter+'\').value =this.files[0].name">'+
                            '</span>'+
                            '</label>'+
                            '<input type="text" class="form-control" id="image_chapter_sponsor'+counter+'" readonly>'+
                        '</div>'+
                    '</div>'+
                    '<label class="col-md-2 control-label" for="chapter_sponsor">Alt Text</label>'+
                    '<div class="col-md-10">'+
                        '<input type="text" class="form-control" name="chapter_alt_text[]" value="">'+
                    '</div>'+
                '</div>'+
                '</div>'+
            '</div>');

            newTextBoxDiv.appendTo("#TextBoxesGroup");

            counter++;
        });
    });
    </script>
    @endif

@endpush