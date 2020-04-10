@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.webinars.index') }}">Media</a></li>
        <li><span href="javascript:void(0)">View Media</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $webinars->title }}</h1>
            <p class="text-muted">Last updated on {{ $webinars->updated_at->format('M d, Y h:i A') }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $webinars->title }}</strong>
                    </h3>

                    <img src="{{ asset($webinars->link) }}" alt="{{ $webinars->link }}" class="img-responsive center-block" style="max-width: 100px;">

                    <p>{!! $webinars->content !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/webinars.js') }}"></script>
@endpush