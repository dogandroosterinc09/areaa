@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.posts.index') }}">Posts</a></li>
        <li><span href="javascript:void(0)">Add New Post</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-post',
            'route' => ['admin.posts.store'],
            'class' => 'form-horizontal '
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Post</strong></h2>
                </div>
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="post_title">Title</label>

                    <div class="col-md-9">
                        <input type="text" class="form-control" id="post_title" name="title" value="{{ old('title') }}"
                               placeholder="Enter post title..">
                        @if($errors->has('title'))
                            <span class="help-block animation-slideDown">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label" for="post_body">Body</label>

                    <div class="col-md-9">
                        <textarea id="post_body" name="body" rows="9"
                                  class="form-control" placeholder="Enter post body..">{{ old('body') }}</textarea>
                        @if($errors->has('body'))
                            <span class="help-block animation-slideDown">{{ $errors->first('body') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/posts.js') }}"></script>
@endpush