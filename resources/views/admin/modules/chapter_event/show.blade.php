@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapter_events.index') }}">Chapter Events</a></li>
        <li><span href="javascript:void(0)">View Chapter Event</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $chapter_event->name }}</h1>
            <p class="text-muted">Last updated on {{ $chapter_event->updated_at->format('M d, Y h:i A') }}</p>
            <h5>{{ optional($chapter_event->starts_at)->format('F d, Y') }} - {{ optional($chapter_event->ends_at)->format('F d, Y') }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $chapter_event->name }}</strong>
                    </h3>

                    <img src="{{ optional($chapter_event->attachment)->url }}" alt="" class="img-responsive center-block" style="max-width: 100px;">
                    <p>
                        Ticket Price: {{ $chapter_event->amount }}<br>
                        Discounted Ticket Price: {{ $chapter_event->amount_member }}</p>

                    <p><i>{{ $chapter_event->short_description }}</i></p>


                    <p>{!! $chapter_event->description !!}</p>

                    <p>
                        Location: {{ $chapter_event->location_name }}<br>
                        City: {{ $chapter_event->city }}<br>
                        State: {{ $chapter_event->state }}<br>

                        @if($chapter_event->location_name && strtolower($chapter_event->location_name)!='online')
                        <iframe width="100%" height="300" frameborder="0" style="border:0" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB5npvhjIbytxAbiMKUQak32FQ8-boyLg0&q={{$chapter_event->location_name}},{{$chapter_event->city}}+{{$chapter_event->state}}"></iframe>
                        @endif

                    </p>

                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_events.js') }}"></script>
@endpush