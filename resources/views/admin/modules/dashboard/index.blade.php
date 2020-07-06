@extends('admin.layouts.base')

@section('content')

    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-brush"></i>Welcome,<br>
                <small>{{ auth()->user()->first_name }}</small>
            </h1>
        </div>
    </div>
    
    <!-- <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li>Get Started</li>
        <li><a href="">Blank</a></li>
    </ul> -->

    @if(auth()->user()->getRoleNames()->first() === 'Chapter Admin')
        @php($members = \App\Models\Members::whereHas('user', function($q) {
                            $q->where('chapter_id',auth()->user()->chapter_id);
                        })->orderByDesc('created_at')->limit(10)->get())

        @php($event_registrations = \App\Models\EventRegistration::where('event_id',0)->where('event_chapter_id',auth()->user()->chapter_id)->orderByDesc('created_at')->get())
    @else
        <?php
        // $members = \App\Models\Members::whereHas('user', function($q) {
        //                     $q->where('chapter_id',0);
        //                 })->orderByDesc('created_at')->limit(10)->get());
        $members = \App\Models\Members::with('user')->orderByDesc('created_at')->limit(10)->get();
        ?>

        @php($event_registrations = \App\Models\EventRegistration::where('event_id','<>',0)->orderByDesc('created_at')->get())
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="block">
                <div class="block-title">
                    <h2>New Registered Users</h2>
                </div>

                <table class="table table-striped">
                    <tbody>
                        @foreach($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <!-- <td>{{ $member->chapter }}</td> -->
                            <td>{{ ($member->created_at)->format('F d, Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                
            </div>
        </div>

        <div class="col-md-6">
            <div class="block">
                <div class="block-title">
                    <h2>Event Registrations</h2>
                </div>

                <table class="table table-striped">
                    <tbody>
                        @foreach($event_registrations as $event_registration)
                        <tr>
                            <td>{{$event_registration->name}}</td>
                            <td>{{$event_registration->event_name}}</td>
                            <td>{{($event_registration->created_at)->format('F d, Y')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                
            </div>
        </div>
    </div>

    

@endsection
