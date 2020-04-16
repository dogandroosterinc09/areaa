@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Chapter Page About Us'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.chapter_page_about_uses.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Chapter Page About Us
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
                <strong>Chapter Page About uses</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable chapter_page_about_us-empty {{$chapter_page_about_uses->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Chapter Page About uses found.
        </div>
        <div class="table-responsive {{$chapter_page_about_uses->count() == 0 ? 'johnCena' : '' }}">
            <table id="chapter_page_about_uses-table" class="table table-bordered table-striped table-vcenter">
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
                @foreach($chapter_page_about_uses as $chapter_page_about_us)
                    <tr data-chapter_page_about_us-id="{{$chapter_page_about_us->id}}">
                        <td class="text-center"><strong>{{ $chapter_page_about_us->id }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_page_about_us->name }}</strong></td>
                        <td class="text-left">
                            @if($chapter_page_about_us->slug && $chapter_page_about_us->slug != '')
                                <a target="_blank" href="{{ add_http($chapter_page_about_us->slug) }}">{{ add_http($chapter_page_about_us->slug) }}</a>
                            @endif
                        </td>
                        <td class="text-left">{!! str_limit(strip_tags($chapter_page_about_us->content), 50) !!}</td>
                        <td class="text-center">{{ $chapter_page_about_us->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Chapter Page About Us'))
                                    <a href="{{ route('admin.chapter_page_about_uses.show', $chapter_page_about_us->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Chapter Page About Us'))
                                    <a href="{{ route('admin.chapter_page_about_uses.edit', $chapter_page_about_us->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Chapter Page About Us'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-chapter_page_about_us-btn"
                                       data-original-title="Delete"
                                       data-chapter_page_about_us-id="{{ $chapter_page_about_us->id }}"
                                       data-chapter_page_about_us-route="{{ route('admin.chapter_page_about_uses.destroy', $chapter_page_about_us->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_page_about_uses.js') }}"></script>
@endpush