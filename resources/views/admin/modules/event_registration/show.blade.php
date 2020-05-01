@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.event_registrations.index') }}">Event Registrations</a></li>
        <li><span href="javascript:void(0)">View Event Registration</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <!-- <h1>{{ $event_registration->name }}</h1>
            <h5>{{ $event_registration->slug }}</h5> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <!-- <h3 class="sub-header text-center">
                        <strong>{{ $event_registration->created_at->format('F d, Y') }}</strong>                         
                    </h3> -->
                    <h5>{{$event_registration->name}}</h5>
                    <h5>{{$event_registration->is_member}}</h5>
                    @if($event_registration->chapter_id != 0)
                    <h5>{{$event_registration->chapter->name}}</h5>
                    @endif
                    <h5>{{$event_registration->email}}</h5>
                    <h5>{{$event_registration->phone}}</h5>
                    <hr>
                    <h5>{{$event_registration->event->name}}</h5>                    
                    <h5>{{$event_registration->event->chapter}}</h5>
                    <h5>{{$event_registration->event->date_range}}</h5>                    
                    <h5>{{$event_registration->event->time}}</h5>
                    <h5>{{$event_registration->event->location_name}}</h5>
                    <h5>{{$event_registration->event->amount}}</h5>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/event_registrations.js') }}"></script>
@endpush