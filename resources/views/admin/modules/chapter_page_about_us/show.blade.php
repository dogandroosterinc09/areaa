@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapter_page_about_uses.index') }}">Chapter Page About uses</a></li>
        <li><span href="javascript:void(0)">View Chapter Page About Us</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $chapter_page_about_us->name }}</h1>
            <h5>{{ $chapter_page_about_us->slug }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $chapter_page_about_us->created_at->format('F d, Y') }}</strong>
                        <div class="btn-group btn-group-xs pull-right">
                            @if (auth()->user()->can('Update Chapter Page About Us'))
                                <a href="{{ route('admin.chapter_page_about_uses.edit', $chapter_page_about_us->id) }}"
                                   data-toggle="tooltip"
                                   title=""
                                   class="btn btn-default"
                                   data-original-title="Edit"><i class="fa fa-pencil"></i> Edit</a>
                            @endif
                        </div>
                    </h3>

                    <img src="{{ asset($chapter_page_about_us->banner_image) }}" alt="{{ $chapter_page_about_us->banner_image }}" class="img-responsive center-block" style="max-width: 100px;">

                    <p>{!! $chapter_page_about_us->content !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_page_about_uses.js') }}"></script>
@endpush