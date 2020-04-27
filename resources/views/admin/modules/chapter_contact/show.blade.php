@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapter_contacts.index') }}">Chapter Contacts</a></li>
        <li><span href="javascript:void(0)">View Chapter Contact</span></li>
    </ul>    
    <div class="row">
    <div class="col-lg-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-phone"></i> <strong>Contact</strong> Info</h2>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                    <tr>
                        <td style="width: 30%" class="text-right"><strong>Date</strong></td>
                        <td style="width: 70%">{{ $chapter_contact->created_at->format('F d, Y h:i:s A') }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%" class="text-right"><strong>Name</strong></td>
                        <td style="width: 70%">{{ $chapter_contact->name }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%" class="text-right"><strong>Email</strong></td>
                        <td style="width: 70%"><a href="mailto:{{ $chapter_contact->email }}">{{ $chapter_contact->email }}</a></td>
                    </tr>
                    <tr>
                        <td style="width: 30%" class="text-right"><strong>Message</strong></td>
                        <td style="width: 70%">{!! $chapter_contact->message !!}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_contacts.js') }}"></script>
@endpush