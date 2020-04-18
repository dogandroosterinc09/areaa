@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.webinars.index') }}">Media</a></li>
        <li><span href="javascript:void(0)">Edit Media</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-webinars',
            'route' => ['admin.webinars.update', $webinars->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Media "{{$webinars->title}}"</strong></h2>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('media_category_id') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="media_category_id">Category</label>

                            <div class="col-md-10">
                                <select class="form-control" id="media_category_id" name="media_category_id">
                                @php( $categories = \App\Models\MediaCategory::orderBy('name')->get() )
                                    <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option {{ $webinars->media_category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                                @if($errors->has('media_category_id'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('media_category_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.components.input-field', ['label' => 'Title', 'value' => $webinars->title])
                @include('admin.components.input-field', ['label' => 'Video Link', 'field' => 'link', 'value' => $webinars->link])

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <iframe width="560" height="315" src="{{$webinars->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.webinars.index') }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/webinars.js') }}"></script>
@endpush