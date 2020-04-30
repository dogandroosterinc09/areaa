@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Gallery'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.galleries.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Gallery
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
                <strong>Galleries</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable gallery-empty {{$galleries->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Galleries found.
        </div>
        <div class="table-responsive {{$galleries->count() == 0 ? 'johnCena' : '' }}">
            <table id="galleries-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Title
                    </th>                    
                    <th class="text-left">
                        Description
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
                @foreach($galleries as $gallery)
                    <tr data-gallery-id="{{$gallery->id}}">
                        <td class="text-center"><strong>{{ $gallery->id }}</strong></td>
                        <td class="text-center"><strong>{{ $gallery->title }}</strong></td>                        
                        <td class="text-left">{!! str_limit(strip_tags($gallery->description), 50) !!}</td>
                        <td class="text-center">{{ $gallery->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Gallery'))
                                    <a href="{{ route('admin.galleries.show', $gallery->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Gallery'))
                                    <a href="{{ route('admin.galleries.edit', $gallery->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Gallery'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-gallery-btn"
                                       data-original-title="Delete"
                                       data-gallery-id="{{ $gallery->id }}"
                                       data-gallery-route="{{ route('admin.galleries.destroy', $gallery->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/galleries.js') }}"></script>
@endpush