@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.galleries.index') }}">Galleries</a></li>
        <li><span href="javascript:void(0)">Edit Gallery</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-gallery',
            'route' => ['admin.galleries.update', $gallery->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Gallery "{{$gallery->title}}"</strong></h2>
                </div>
                
                @include('admin.components.heading', ['text' => 'Gallery Information'])
                @include('admin.components.input-field', ['label' => 'Title', 'value' => $gallery->title])
                @include('admin.components.editor', ['label' => 'Description', 'value' => $gallery->description])
                @include('admin.components.heading', ['text' => 'Photos'])                                

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-10 col-md-offset-2">
                            <form action="{{ url('admin/gallery_upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="needsclick dropzone" id="document-dropzone"></div>
                                </div>                                
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row form-group">               
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-10 col-md-offset-2">
                        @if(!empty($gallery->photos))
                            @foreach(explode(',',$gallery->photos) as $photo)
                            <div class="col-md-3">
                                <img src="{{asset($photo)}}" class="img-responsive">
                                <button image-link="{{ $photo }}" type="button" class="btn btn-sm btn-danger btn_remove_image">Remove</button>
                            </div>
                            @endforeach
                        @endif
                        </div>
                    </div>

                    <input type="hidden" name="removed_images">
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.galleries.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('extrastylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
@endpush

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/galleries.js') }}"></script>
    <script>
        // Dropzone.autoDiscover = false;
        // var url = "{{ url('admin/gallery_upload') }}";
        // var myDropzone = new Dropzone(".dropzone", { url: url });

        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
            url: '{{ url('admin/gallery_upload') }}',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
            $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            },
            init: function () {
            @if(isset($project) && $project->document)
                var files =
                {!! json_encode($project->document) !!}
                for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                }
            @endif
            }
        }

        $(function(){
            var removed_images = [];

            $(document).on('click','.btn_remove_image', function() {                
                var image_link = $(this).attr('image-link');

                removed_images.push(image_link);

                $('[name="removed_images"]').val(removed_images.toString());

                $(this).parent().remove();
            });
        });
    </script>
@endpush