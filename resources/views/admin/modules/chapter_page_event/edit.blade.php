@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="">Chapter Page Events</a></li>
        <li><span href="javascript:void(0)">Edit Chapter Page Event</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-chapter_page_event',
            'route' => ['admin.chapter_page_events.update', $chapter_page_event->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Chapter Page Event ""</strong></h2>
                </div>
                
                @include('admin.components.heading', ['text' => 'Page Details'])

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('banner_image') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="banner_image">Banner Image</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                    <span class="btn btn-primary">
                                        Choose File <input type="file" name="banner_image" style="display: none;">
                                    </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                @if($errors->has('banner_image'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('banner_image') }}</span>
                                @endif
                            </div>
                            <div class="col-md-offset-2 col-md-10">
                                <a href="{{ $chapter_page_event->banner_image ? asset($chapter_page_event->banner_image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                    <img {{ $chapter_page_event->banner_image ? 'src='.asset($chapter_page_event->banner_image) : '' }}
                                        class="img-responsive center-block" style="max-width: 100px;">
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.components.editor', ['label' => 'Content', 'field' => 'content', 'value' => $chapter_page_event->content])
                

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ (auth()->user()->roles->first()->name === 'Chapter Admin') ? route('admin.pages.index') : route('admin.chapters.pages', $chapter_page_event->chapter_id) }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_page_events.js') }}"></script>
@endpush