@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapters.index') }}">Chapters</a></li>
        <li><span href="javascript:void(0)">Upload Chapter Logo</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-chapter_logo',
            'route' => ['admin.chapter_logos.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Upload Chapter Logo</strong></h2>
                </div>                
                <div class="form-group{{ $errors->has('chapter_id') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="chapter_id">Chapter</label>

                    <div class="col-md-9">
                        <select class="form-control" id="chapter_id" name="chapter_id">
                        @php( $chapter = \App\Models\Chapter::where('id',$id)->get()->first() )
                            <option {{ $chapter_logo ? ($chapter_logo->chapter_id == $chapter->id ? 'selected' : '') : $chapter->id == $id ? 'selected' : '' }} value="{{ $chapter->id }}">{{ $chapter->name }}</option>                        
                        </select>
                        @if($errors->has('chapter_id'))
                            <span class="help-block animation-slideDown">{{ $errors->first('chapter_id') }}</span>
                        @endif
                    </div>
                </div>             
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="chapter_logo_image">Image</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Choose File <input type="file" name="image" style="display: none;">
                            </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        @if($errors->has('image'))
                            <span class="help-block animation-slideDown">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <a href="{{ asset($chapter_logo ? $chapter_logo->image : '') }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                            <img src="{{ $chapter_logo ? ($chapter_logo->image != '' ? asset($chapter_logo->image) : '') : '' }}"
                                 alt="{{ $chapter_logo ? ($chapter_logo->image != '' ? asset($chapter_logo->image) : '') : '' }}"
                                 class="img-responsive center-block" style="max-width: 100px;">
                        </a>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-xs btn-danger remove-image-btn"
                           style="display: {{ $chapter_logo ? ($chapter_logo->image != '' ? '' : 'none') : 'none' }};"><i class="fa fa-trash"></i> Remove</a>
                        <input type="hidden" name="remove_image" class="remove-image" value="0">
                    </div>
                </div>
                
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.chapters.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_logos.js') }}"></script>
@endpush