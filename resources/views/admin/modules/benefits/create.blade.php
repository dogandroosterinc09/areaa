@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.benefits.index') }}">Benefits</a></li>
        <li><span href="javascript:void(0)">Add New Benefit</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-benefits',
            'route' => ['admin.benefits.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Benefit</strong></h2>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="category_id">Category</label>
                            <div class="col-md-10">
                                <select
                                    class="form-control"
                                    id="category_id"
                                    name="category_id">
                                    
                                    @foreach( \App\Models\BenefitsCategories::all() as $benefits )
                                        <option value="{{ $benefits->id }}">{{ $benefits->name }}</option>
                                    @endforeach

                                </select>
                                @if($errors->has('category_id'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('thumbnail') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="thumbnail">Thumbnail</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                    <span class="btn btn-primary">
                                        Choose File <input type="file" name="thumbnail" style="display: none;">
                                    </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                @if($errors->has('thumbnail'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('thumbnail') }}</span>
                                @endif
                            </div>
                            <div class="col-md-offset-2 col-md-10">
                                <a href="" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                    <img src=""
                                        alt=""
                                        class="img-responsive center-block" style="max-width: 100px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.components.input-field', ['label' => 'Name'])
                @include('admin.components.textarea', ['label' => 'Short Description'])
                @include('admin.components.editor', ['label' => 'Content'])
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group form-actions">
                            <div class="col-md-10 col-md-offset-2">
                                <a href="{{ route('admin.benefits.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/benefits.js') }}"></script>
@endpush