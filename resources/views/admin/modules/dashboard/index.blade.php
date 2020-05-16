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

    @php($members = \App\Models\Members::all()->sortByDesc('created_at'))
    @php($event_registrations = \App\Models\EventRegistration::all())

    <div class="row">
        <div class="col-md-6">
            <div class="block">
                <div class="block-title">
                    <h2>Newest Members</h2>
                </div>

                <table class="table table-striped">
                    <tbody>
                        @foreach($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
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
                    <h2>Latest Event Registrations</h2>
                </div>

                <table class="table table-striped">
                    <tbody>
                        @foreach($event_registrations as $event_registration)
                        <tr>
                            <td>{{$event_registration->name}}</td>
                            <td>{{$event_registration->event_name}}</td>
                            <td>{{$event_registration->event}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                
            </div>
        </div>
    </div>

    

@endsection
