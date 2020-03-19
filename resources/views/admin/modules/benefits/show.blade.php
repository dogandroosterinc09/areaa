@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.benefits.index') }}">Benefits</a></li>
        <li><span href="javascript:void(0)">View Benefits</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $benefits->name }}</h1>
            <h5>{{ $benefits->slug }}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center">
                        <strong>{{ $benefits->created_at->format('F d, Y') }}</strong>
                        <div class="btn-group btn-group-xs pull-right">
                            @if (auth()->user()->can('Update Benefits'))
                                <a href="{{ route('admin.benefits.edit', $benefits->id) }}"
                                   data-toggle="tooltip"
                                   title=""
                                   class="btn btn-default"
                                   data-original-title="Edit"><i class="fa fa-pencil"></i> Edit</a>
                            @endif
                        </div>
                    </h3>

                    <img src="{{ asset($benefits->banner_image) }}" alt="{{ $benefits->banner_image }}" class="img-responsive center-block" style="max-width: 100px;">

                    <p>{!! $benefits->content !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/benefits.js') }}"></script>
@endpush