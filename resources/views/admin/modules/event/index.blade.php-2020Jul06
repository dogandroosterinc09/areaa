@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Event'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.events.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Event
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
                <strong>Events</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable event-empty {{$events->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Events found.
        </div>
        <div class="table-responsive {{$events->count() == 0 ? 'johnCena' : '' }}">
            <table id="events-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-left">
                        Duration
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
                @foreach($events as $event)
                    <tr data-event-id="{{$event->id}}">
                        <td class="text-center"><strong>{{ $event->id }}</strong></td>
                        <td class="text-center"><strong>{{ $event->name }}</strong></td>
                        <td class="text-left">
                            {{ optional($event->starts_at)->format('F d, Y') }} - {{ optional($event->ends_at)->format('F d, Y') }}
                        </td>
                        <td class="text-left">{!! str_limit(strip_tags($event->description), 50) !!}</td>
                        <td class="text-center">{{ $event->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Event'))
                                    <a href="{{ route('admin.events.show', $event->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Event'))
                                    <a href="{{ route('admin.events.edit', $event->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Event'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-event-btn"
                                       data-original-title="Delete"
                                       data-event-id="{{ $event->id }}"
                                       data-event-route="{{ route('admin.events.destroy', $event->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/events.js') }}"></script>
@endpush