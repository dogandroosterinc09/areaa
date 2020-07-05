@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Chapter Event'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.chapter_events.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Chapter Event
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
                <strong>Chapter Events</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable chapter_event-empty {{$chapter_events->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Chapter Events found.
        </div>
        <div class="table-responsive {{$chapter_events->count() == 0 ? 'johnCena' : '' }}">
            <table id="chapter_events-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Chapter
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
                @foreach($chapter_events as $chapter_event)
                    <tr data-chapter_event-id="{{$chapter_event->id}}">
                        <td class="text-center"><strong>{{ $chapter_event->id }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_event->chapter }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_event->name }}</strong></td>
                        <td class="text-left">
                            {{ $chapter_event->starts_at->format('F d, Y') }} - {{ optional($chapter_event->ends_at)->format('F d, Y') }}
                        </td>
                        <td class="text-left">{!! str_limit(strip_tags($chapter_event->description), 50) !!}</td>
                        <td class="text-center">{{ $chapter_event->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Chapter Event'))
                                    <a href="{{ route('admin.chapter_events.show', $chapter_event->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Chapter Event'))
                                    <a href="{{ route('admin.chapter_events.edit', $chapter_event->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Chapter Event'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-chapter_event-btn"
                                       data-original-title="Delete"
                                       data-chapter_event-id="{{ $chapter_event->id }}"
                                       data-chapter_event-route="{{ route('admin.chapter_events.destroy', $chapter_event->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_events.js') }}"></script>
@endpush