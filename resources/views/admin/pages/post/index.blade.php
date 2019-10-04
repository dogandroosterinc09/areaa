@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Post'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.posts.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light"><strong>Add New</strong> Post</h4>
                    </div>
                    <div class="widget-extra-full"><span class="h2 text-primary animation-expandOpen"><i
                                    class="fa fa-plus"></i></span></div>
                </a>
            </div>
        </div>
    @endif
    <div class="block full">
        <div class="block-title">
            <h2><i class="fa fa-newspaper-o sidebar-nav-icon"></i>&nbsp;<strong>Posts</strong></h2>
        </div>
        <div class="alert alert-info alert-dismissable post-empty {{$posts->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No posts found.
        </div>
        <div class="table-responsive {{$posts->count() == 0 ? 'johnCena' : '' }}">
            <table id="posts-table"
                   class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        Title
                    </th>
                    <th class="text-left">
                        Body
                    </th>
                    <th class="text-center">
                        Date Created
                    </th>
                    <th class="text-center">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr data-post-template-id="{{$post->id}}">
                        <td class="text-center"><strong>{{ $post->title }}</strong></td>
                        <td class="text-left">{{ str_limit($post->body, 50) }}</td>
                        <td class="text-center">{{ $post->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Post'))
                                    <a href="{{ route('admin.posts.show', $post->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Post'))
                                    <a href="{{ route('admin.posts.edit', $post->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Post'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-post-btn"
                                       data-original-title="Delete"
                                       data-post-id="{{ $post->id }}"
                                       data-post-route="{{ route('admin.posts.delete', $post->id) }}">
                                        <i class="fa fa-times"></i>
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/posts.js') }}"></script>
@endpush