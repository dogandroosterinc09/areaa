@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.webinars.index') }}">Media</a></li>
        <li><span href="javascript:void(0)">Add New Media</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-webinars',
            'route' => ['admin.webinars.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Media</strong></h2>
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
                                    <option {{ old('media_category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                                @if($errors->has('media_category_id'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('media_category_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.components.input-field', ['label' => 'Title'])
                @include('admin.components.input-field', ['label' => 'Video Link', 'field' => 'link'])
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="tags">Tags</label>

                            <div class="col-md-10">
                                <textarea class="form-control"
                                        rows="{{ $rows ?? 5 }}"
                                        id="tags"
                                        name="tags"
                                        placeholder="Enter Tags">{{ old('tags') ?? $webinars->tags ?? '' }}</textarea>
                                @if($errors->has('tags'))
                                    <span class="help-block animation-slideDown"></span>
                                @endif
                                <em>Seperate tags with commas</em>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="assets">Assets</label>
                            <div class="col-md-10">
                                <button id="btn_add_asset" type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Asset</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="asset-item-wrapper">
                    <!-- <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="assets">Title</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="" name="asset_title[]" value="" placeholder="Enter Title..">                                
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="assets">File</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Choose File <input type="file" name="file[]" style="display: none;">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" readonly>
                                    </div>

                                    <input type="text" class="form-control hidden" id="" name="asset_link[]" value="" placeholder="Enter Link..">

                                    <label class="radio-inline" for="upload-a-file">
                                        <input class="upload-a-file" type="radio" id="upload-a-file" name="asset-type"
                                            value="" checked> Upload a File
                                    </label>

                                    <label class="radio-inline" for="external-link">
                                        <input class="external-link" type="radio" id="external-link" name="asset-type"
                                            value=""> External Link
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.webinars.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/webinars_assets.js') }}"></script>
@endpush