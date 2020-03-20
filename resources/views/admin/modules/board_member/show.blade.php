@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.board_members.index') }}">Board Members</a></li>
        <li><span href="javascript:void(0)">View Board Member</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $board_member->typeAsString }} Board Member </h1>
            <p class="text-muted">Last updated on {{ $board_member->updated_at->format('M d, Y h:i A') }}</p>
            <h5>{{ $board_member->slug }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <div class="sub-header text-center">
                        <div class="sub-header text-center">
                            <img src="{{ $board_member->attachment ? $board_member->attachment->url : asset('public/images/placeholders/avatars/avatar2.jpg') }}" height="150" width="150" alt="Avatar" class="img-circle">
                            <p style="margin: 0; margin-top: 10px;"><strong>{{ $board_member->name }}</strong></p>
                        </div>
                        <p style="margin-top: -16px; margin-bottom: -5px;"><small>{{ $board_member->position }}</small></p>
                    </div>

                    <p class="text-justify" style="font-size: 14px;">{!! nl2br($board_member->bio) !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/board_members.js') }}"></script>
@endpush