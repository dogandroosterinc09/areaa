@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.posts.index') }}">Posts</a></li>
        <li><span href="javascript:void(0)">View Post</span></li>
    </ul>
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="block block-alt-noborder">
                <article>
                    <h3 class="sub-header text-center"><strong> {{ $post->created_at->format('F d, Y') }} </strong>
                        <div class="btn-group btn-group-xs pull-right">
                            @if (auth()->user()->can('Update Post'))
                                <a href="{{ route('admin.posts.edit', $post->id) }}"
                                   data-toggle="tooltip"
                                   title=""
                                   class="btn btn-default"
                                   data-original-title="Edit"><i class="fa fa-pencil"></i> Edit</a>
                            @endif
                            @if (auth()->user()->can('Delete Post'))
                                <a id="delete-post-btn" href="javascript:void(0)" data-toggle="tooltip"
                                   title=""
                                   class="btn btn-xs btn-danger delete-post-btn"
                                   data-original-title="Delete"
                                   data-post-id="{{ $post->id }}"
                                   data-post-route="{{ route('admin.posts.delete', $post->id) }}">
                                    <i class="fa fa-times"> Delete</i>
                                </a>
                            @endif
                        </div>
                    </h3>

                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/posts.js') }}"></script>
@endpush