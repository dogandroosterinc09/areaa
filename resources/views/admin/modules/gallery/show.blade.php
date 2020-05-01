@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.galleries.index') }}">Galleries</a></li>
        <li><span href="javascript:void(0)">View Gallery</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $gallery->title }}</h1>
            <h5>{{ $gallery->created_at->format('M d, Y h:s a') }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $gallery->title }}</strong>
                    </h3>

                    <p>{!! $gallery->description !!}</p>

                    <div class="row form-group">
                        @if(!empty($gallery->photos))
                            @foreach(explode(',',$gallery->photos) as $photo)
                            <div class="col-md-3">
                                <img src="{{asset($photo)}}" class="img-responsive">
                            </div>
                            @endforeach
                        @endif
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/galleries.js') }}"></script>
@endpush