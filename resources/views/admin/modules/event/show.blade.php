@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.events.index') }}">Events</a></li>
        <li><span href="javascript:void(0)">View Event</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $event->name }}</h1>
            <p class="text-muted">Last updated on {{ $event->updated_at->format('M d, Y h:i A') }}</p>
            <h5>{{ optional($event->starts_at)->format('F d, Y') }} - {{ optional($event->ends_at)->format('F d, Y') }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $event->name }}</strong>
                    </h3>

                    <img src="{{ optional($event->attachment)->url }}" alt="{{ $event->name }}" class="img-responsive center-block" style="max-width: 100px;">

                    <p>{!! $event->description !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/events.js') }}"></script>
@endpush