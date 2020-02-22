@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.faqs.index') }}">Faqs</a></li>
        <li><span href="javascript:void(0)">View Faq</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>FAQ Item</h1>
            <p class="text-muted">Last updated on {{ $faq->updated_at->format('M d, Y h:i A') }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $faq->question }}</strong>
                    </h3>

                    <p>{!! $faq->answer !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/faqs.js') }}"></script>
@endpush