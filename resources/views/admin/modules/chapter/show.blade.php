@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapters.index') }}">Chapters</a></li>
        <li><span href="javascript:void(0)">View Chapter</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $chapter->name }}</h1>
            <p class="text-muted">Last updated on {{ $chapter->updated_at->format('M d, Y h:i A') }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $chapter->name }}</strong>
                    </h3>

                    <img src="{{ $chapter->thumbnail ? asset($chapter->thumbnail) : '' }}" alt="{{ $chapter->name }}" class="img-responsive center-block" style="max-width: 100px;">
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapters.js') }}"></script>
@endpush