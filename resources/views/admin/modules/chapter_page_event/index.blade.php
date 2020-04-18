@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Chapter Page Event'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.chapter_page_events.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Chapter Page Event
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
                <strong>Chapter Page Events</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable chapter_page_event-empty {{$chapter_page_events->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Chapter Page Events found.
        </div>
        <div class="table-responsive {{$chapter_page_events->count() == 0 ? 'johnCena' : '' }}">
            <table id="chapter_page_events-table" class="table table-bordered table-striped table-vcenter">
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
                @foreach($chapter_page_events as $chapter_page_event)
                    <tr data-chapter_page_event-id="{{$chapter_page_event->id}}">
                        <td class="text-center"><strong>{{ $chapter_page_event->id }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_page_event->name }}</strong></td>
                        <td class="text-left">
                            @if($chapter_page_event->slug && $chapter_page_event->slug != '')
                                <a target="_blank" href="{{ add_http($chapter_page_event->slug) }}">{{ add_http($chapter_page_event->slug) }}</a>
                            @endif
                        </td>
                        <td class="text-left">{!! str_limit(strip_tags($chapter_page_event->content), 50) !!}</td>
                        <td class="text-center">{{ $chapter_page_event->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Chapter Page Event'))
                                    <a href="{{ route('admin.chapter_page_events.show', $chapter_page_event->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Chapter Page Event'))
                                    <a href="{{ route('admin.chapter_page_events.edit', $chapter_page_event->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Chapter Page Event'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-chapter_page_event-btn"
                                       data-original-title="Delete"
                                       data-chapter_page_event-id="{{ $chapter_page_event->id }}"
                                       data-chapter_page_event-route="{{ route('admin.chapter_page_events.destroy', $chapter_page_event->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_page_events.js') }}"></script>
@endpush