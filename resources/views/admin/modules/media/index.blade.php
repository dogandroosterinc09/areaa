@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Media'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.media.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Media
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
                <strong>Media</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable media-empty {{$media->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Media found.
        </div>
        <div class="table-responsive {{$media->count() == 0 ? 'johnCena' : '' }}">
            <table id="media-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-left">
                        Slug
                    </th>
                    <th class="text-left">
                        Content
                    </th>
                    <th class="text-center">
                        Date Created
                    </th>
                    <th class="text-center">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($media as $media)
                    <tr data-media-id="{{$media->id}}">
                        <td class="text-center"><strong>{{ $media->id }}</strong></td>
                        <td class="text-center"><strong>{{ $media->name }}</strong></td>
                        <td class="text-left">
                            @if($media->slug && $media->slug != '')
                                <a target="_blank" href="{{ add_http($media->slug) }}">{{ add_http($media->slug) }}</a>
                            @endif
                        </td>
                        <td class="text-left">{!! str_limit(strip_tags($media->content), 50) !!}</td>
                        <td class="text-center">{{ $media->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Media'))
                                    <a href="{{ route('admin.media.show', $media->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Media'))
                                    <a href="{{ route('admin.media.edit', $media->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Media'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-media-btn"
                                       data-original-title="Delete"
                                       data-media-id="{{ $media->id }}"
                                       data-media-route="{{ route('admin.media.destroy', $media->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/media.js') }}"></script>
@endpush