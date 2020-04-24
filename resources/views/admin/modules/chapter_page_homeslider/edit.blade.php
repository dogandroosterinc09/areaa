@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapter_page_homesliders.index') }}">Chapter Page Homesliders</a></li>
        <li><span href="javascript:void(0)">Edit Chapter Page Homeslider</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-chapter_page_homeslider',
            'route' => ['admin.chapter_page_homesliders.update', $chapter_page_homeslider->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Chapter Page Homeslider "{{$chapter_page_homeslider->name}}"</strong></h2>
                </div>
                <div class="form-group{{ $errors->has('chapter_id') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="chapter_id">Chapter</label>

                    <div class="col-md-9">
                        <select class="form-control" id="chapter_id" name="chapter_id">
                        @php( $chapters = \App\Models\Chapter::all() )
                            <option value="">Select Chapter</option>
                        @foreach($chapters as $chapter)
                            <option {{ $chapter_page_homeslider->chapter_id == $chapter->id ? 'selected' : ''  }} value="{{ $chapter->id }}">{{ $chapter->name }}</option>                        
                        @endforeach
                            
                        </select>
                        @if($errors->has('chapter_id'))
                            <span class="help-block animation-slideDown">{{ $errors->first('chapter_id') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="home_slide_name">Name</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="home_slide_name" name="name" 
                               placeholder="Enter Home Slide name.." value="{{ Request::old('name') ? : $chapter_page_homeslider->name }}">
                        @if($errors->has('name'))
                            <span class="help-block animation-slideDown">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('background_image') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="home_slide_background_image">Background Image</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Choose File <input type="file" name="background_image" style="display: none;">
                            </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        @if($errors->has('background_image'))
                            <span class="help-block animation-slideDown">{{ $errors->first('background_image') }}</span>
                        @endif
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <a href="{{ $chapter_page_homeslider->background_image != '' ? asset($chapter_page_homeslider->background_image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                            <img src="{{ $chapter_page_homeslider->background_image != '' ? asset($chapter_page_homeslider->background_image) : '' }}" alt="" class="img-responsive center-block" style="max-width: 100px;">
                        </a>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-xs btn-danger remove-image-btn" style="display: none;"><i class="fa fa-trash"></i> Remove</a>
                        <input type="hidden" name="remove_banner_image" class="remove-image" value="0">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('thumbnail_image') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="home_slide_thumbnail_image">Thumbnail Image</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Choose File <input type="file" name="thumbnail_image" style="display: none;">
                            </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        @if($errors->has('thumbnail_image'))
                            <span class="help-block animation-slideDown">{{ $errors->first('thumbnail_image') }}</span>
                        @endif
                    </div>
                    <div class="col-md-offset-3 col-md-9">
                        <a href="{{ $chapter_page_homeslider->thumbnail_image != '' ? asset($chapter_page_homeslider->thumbnail_image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                            <img src="{{ $chapter_page_homeslider->thumbnail_image != '' ? asset($chapter_page_homeslider->thumbnail_image) : '' }}" alt="" class="img-responsive center-block" style="max-width: 100px;">
                        </a>
                        <br>
                        <a href="javascript:void(0)" class="btn btn-xs btn-danger remove-image-btn" style="display: none;"><i class="fa fa-trash"></i> Remove</a>
                        <input type="hidden" name="remove_banner_image" class="remove-image" value="0">
                    </div>
                </div>

                <div class="form-group{{ $errors->has('thumbnail_text') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="home_slide_thumbnail_text">Thumbnail Text</label>

                    <div class="col-md-9">
                        <textarea id="home_slide_thumbnail_text" name="thumbnail_text" rows="9"
                                  style="resize: vertical; min-height: 150px;"
                                  class="form-control " placeholder="Enter Home Slide button link..">{{ $chapter_page_homeslider->thumbnail_text }}</textarea>
                        @if($errors->has('thumbnail_text'))
                            <span class="help-block animation-slideDown">{{ $errors->first('thumbnail_text') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="home_slide_content">Content</label>

                    <div class="col-md-9">
                        <textarea id="home_slide_content" name="content" rows="9"
                                  class="form-control ckeditor" placeholder="Enter Home Slide content..">{{ $chapter_page_homeslider->content }}</textarea>
                        @if($errors->has('content'))
                            <span class="help-block animation-slideDown">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('button_label') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="home_slide_button_label">Button Label</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="home_slide_button_label" name="button_label" value="{{ $chapter_page_homeslider->button_label }}"
                               placeholder="Enter Home Slide button label.." value="{{ old('button_label') }}">
                        @if($errors->has('button_label'))
                            <span class="help-block animation-slideDown">{{ $errors->first('button_label') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('button_link') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="home_slide_button_link">Button Link</label>

                    <div class="col-md-9">
                        <textarea id="home_slide_button_link" name="button_link" rows="9"
                                  style="resize: vertical; min-height: 150px;"
                                  class="form-control " placeholder="Enter Home Slide button link..">{{ $chapter_page_homeslider->button_link }}</textarea>
                        @if($errors->has('button_link'))
                            <span class="help-block animation-slideDown">{{ $errors->first('button_link') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Is Active?</label>

                    <div class="col-md-9">
                        <label class="switch switch-primary">
                            <input type="checkbox" id="is_active" name="is_active"
                                   value="1" checked>
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.chapter_page_homesliders.index') }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_page_homesliders.js') }}"></script>
@endpush