@extends('admin.layouts.base')

@section('content')
    <div class="block full">
        <div class="block-title">
            <h2>
                <i class="fa fa-newspaper-o sidebar-nav-icon"></i>
                <strong>Event Registrations</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable event_registration-empty {{$event_registrations->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Event Registrations found.
        </div>
        <div class="table-responsive {{$event_registrations->count() == 0 ? 'johnCena' : '' }}">
            <table id="event_registrations-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-left">
                        Event
                    </th>
                    <th class="text-left hidden">
                        Status
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
                @foreach($event_registrations as $event_registration)
                    <tr data-event_registration-id="{{$event_registration->id}}">
                        <td class="text-center"><strong>{{ $event_registration->id }}</strong></td>
                        <td class="text-center"><strong>{{ $event_registration->name }}</strong></td>
                        <td class="text-center"><strong>{{ $event_registration->event_name }}</strong></td>
                        <td class="text-center hidden"><strong>{{ $event_registration->status }}</strong></td>
                        <td class="text-center">{{ $event_registration->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Event Registration'))
                                    <a href="{{ route('admin.event_registrations.show', $event_registration->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/event_registrations.js') }}"></script>
@endpush