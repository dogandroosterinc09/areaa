@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Chapter Logo'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.chapter_logos.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Chapter Logo
                        </h4>
                    </div>
                    <div class="widget-extra-full">
                        <span class="h2 text-primary animation-expandOpen">
                            <i class="fa fa-plus"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    @endif
    <div class="block full">
        <div class="block-title">
            <h2>
                <i class="fa fa-newspaper-o sidebar-nav-icon"></i>
                <strong>Chapter Logos</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable chapter_logo-empty {{$chapter_logos->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Chapter Logos found.
        </div>
        <div class="table-responsive {{$chapter_logos->count() == 0 ? 'johnCena' : '' }}">
            <table id="chapter_logos-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-left">
                        Slug
                    </th>
                    <th class="text-left">
                        Content
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
                @foreach($chapter_logos as $chapter_logo)
                    <tr data-chapter_logo-id="{{$chapter_logo->id}}">
                        <td class="text-center"><strong>{{ $chapter_logo->id }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_logo->name }}</strong></td>
                        <td class="text-left">
                            @if($chapter_logo->slug && $chapter_logo->slug != '')
                                <a target="_blank" href="{{ add_http($chapter_logo->slug) }}">{{ add_http($chapter_logo->slug) }}</a>
                            @endif
                        </td>
                        <td class="text-left">{!! str_limit(strip_tags($chapter_logo->content), 50) !!}</td>
                        <td class="text-center">{{ $chapter_logo->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Chapter Logo'))
                                    <a href="{{ route('admin.chapter_logos.show', $chapter_logo->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Chapter Logo'))
                                    <a href="{{ route('admin.chapter_logos.edit', $chapter_logo->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Chapter Logo'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-chapter_logo-btn"
                                       data-original-title="Delete"
                                       data-chapter_logo-id="{{ $chapter_logo->id }}"
                                       data-chapter_logo-route="{{ route('admin.chapter_logos.destroy', $chapter_logo->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_logos.js') }}"></script>
@endpush