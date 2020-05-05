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

                    @if($webinars->link != '#')                    
                    <div class="form-group center-block">
                        <iframe class="center-block" width="560" height="315" src="{{$webinars->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    @endif

                    @php( $tags = explode(',', $webinars->tags) )
                    <div class="form-group center-block text-center">
                    @foreach($tags as $tag)
                        @if(!empty(trim($tag)))
                        <span>{{ trim($tag) }}</span>
                        @endif
                    @endforeach
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/webinars.js') }}"></script>
@endpush