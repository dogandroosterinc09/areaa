@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Webinars'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.webinars.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Webinars
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
                <strong>Webinars</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable webinars-empty {{$webinars->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Webinars found.
        </div>
        <div class="table-responsive {{$webinars->count() == 0 ? 'johnCena' : '' }}">
            <table id="webinars-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Title
                    </th>
                    <th class="text-left">
                        Link
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
                @foreach($webinars as $webinars)
                    <tr data-webinars-id="{{$webinars->id}}">
                        <td class="text-center"><strong>{{ $webinars->id }}</strong></td>
                        <td class="text-center"><strong>{{ $webinars->title }}</strong></td>
                        <td class="text-left">{{ $webinars->link }}</td>
                        <td class="text-center">{{ $webinars->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Webinars'))
                                    <a href="{{ route('admin.webinars.show', $webinars->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Webinars'))
                                    <a href="{{ route('admin.webinars.edit', $webinars->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Webinars'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-webinars-btn"
                                       data-original-title="Delete"
                                       data-webinars-id="{{ $webinars->id }}"
                                       data-webinars-route="{{ route('admin.webinars.destroy', $webinars->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/webinars.js') }}"></script>
@endpush