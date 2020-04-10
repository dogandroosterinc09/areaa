@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Media Category'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.media_categories.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Media Category
                        </h4>
                    </div>
                    <div class="widget-extra-full">
                        <span class="h2 text-primary animation-expandOpen">
                            <i class="fa fa-plus"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    @endif
    <div class="block full">
        <div class="block-title">
            <h2>
                <i class="fa fa-newspaper-o sidebar-nav-icon"></i>
                <strong>Media Categories</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable media_category-empty {{$media_categories->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Media Categories found.
        </div>
        <div class="table-responsive {{$media_categories->count() == 0 ? 'johnCena' : '' }}">
            <table id="media_categories-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="hidden"></th>
                    <th class="hidden"></th>
                    <th class="text-center">
                        Date Created
                    </th>
                    <th class="text-center">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($media_categories as $media_category)
                    <tr data-media_category-id="{{$media_category->id}}">
                        <td class="text-center"><strong>{{ $media_category->id }}</strong></td>
                        <td class="text-center"><strong>{{ $media_category->name }}</strong></td>
                        <td class="hidden"></td>
                        <td class="hidden">{!! str_limit(strip_tags($media_category->content), 50) !!}</td>
                        <td class="text-center">{{ $media_category->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Media Category'))
                                    <a href="{{ route('admin.media_categories.show', $media_category->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Media Category'))
                                    <a href="{{ route('admin.media_categories.edit', $media_category->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Media Category'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-media_category-btn"
                                       data-original-title="Delete"
                                       data-media_category-id="{{ $media_category->id }}"
                                       data-media_category-route="{{ route('admin.media_categories.destroy', $media_category->id) }}">
                                        <i class="fa fa-times"></i>
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/media_categories.js') }}"></script>
@endpush