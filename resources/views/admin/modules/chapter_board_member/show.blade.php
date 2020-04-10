@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapter_board_members.index') }}">Chapter Board Members</a></li>
        <li><span href="javascript:void(0)">View Chapter Board Member</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $chapter_board_member->typeAsString }} Board Member </h1>
            <p class="text-muted">Last updated on {{ $chapter_board_member->updated_at->format('M d, Y h:i A') }}</p>
            <h5>{{ $chapter_board_member->slug }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <div class="sub-header text-center">
                        <div class="sub-header text-center">
                            <img src="{{ $chapter_board_member->attachment ? $chapter_board_member->attachment->url : asset('public/images/placeholders/avatars/avatar2.jpg') }}" height="150" width="150" alt="Avatar" class="img-circle">
                            <p style="margin: 0; margin-top: 10px;"><strong>{{ $chapter_board_member->name }}</strong></p>
                        </div>
                        <p style="margin-top: -16px; margin-bottom: -5px;"><small>{{ $chapter_board_member->position }}</small></p>
                        <p style="margin-top: -16px; margin-bottom: -5px;"><small>{{ $chapter_board_member->chapter }}</small></p>
                    </div>

                    <p>{!! $chapter_board_member->content !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_board_members.js') }}"></script>
@endpush