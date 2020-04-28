@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.event_registrations.index') }}">Event Registrations</a></li>
        <li><span href="javascript:void(0)">View Event Registration</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $event_registration->name }}</h1>
            <h5>{{ $event_registration->slug }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $event_registration->created_at->format('F d, Y') }}</strong>
                        <div class="btn-group btn-group-xs pull-right">
                            @if (auth()->user()->can('Update Event Registration'))
                                <a href="{{ route('admin.event_registrations.edit', $event_registration->id) }}"
                                   data-toggle="tooltip"
                                   title=""
                                   class="btn btn-default"
                                   data-original-title="Edit"><i class="fa fa-pencil"></i> Edit</a>
                            @endif
                        </div>
                    </h3>

                    <img src="{{ asset($event_registration->banner_image) }}" alt="{{ $event_registration->banner_image }}" class="img-responsive center-block" style="max-width: 100px;">

                    <p>{!! $event_registration->content !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/event_registrations.js') }}"></script>
@endpush