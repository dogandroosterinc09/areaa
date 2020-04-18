@extends('admin.layouts.base')

@section('content')
<ul class="breadcrumb breadcrumb-top">
    <li><a href="{{ route('admin.chapters.index') }}">Chapters</a></li>
    <li><span href="javascript:void(0)">Pages</span></li>
</ul>

<div class="block full">
    <div class="block-title">
        <h2>
            <i class="fa fa-newspaper-o sidebar-nav-icon"></i>
            <strong>Pages {{ $chapter->name }}</strong>
        </h2>
    </div>
    <div class="table-responsive">
        <table id="" class="table table-bordered table-striped table-vcenter">
            <thead>
            <tr role="row">
                <th class="text-left">
                    Name
                </th>
                <th class="text-left">
                    Slug
                </th>
                <th class="text-center">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-left">Home</td>
                    <td class="text-left"><a href="{{ url($chapter->slug) }}" target="_blank">{{ url($chapter->slug) }}</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="{{ route('admin.chapters.pages.edit.home', $chapter->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">About Us</td>
                    <td class="text-left"><a href="{{ url($chapter->slug).'/aboutus' }}" target="_blank">{{ url($chapter->slug).'/aboutus' }}</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="{{ route('admin.chapters.pages.edit.aboutus', $chapter->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">Events</td>
                    <td class="text-left"><a href="{{ url($chapter->slug).'/events' }}" target="_blank">{{ url($chapter->slug).'/events' }}</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="{{ route('admin.chapters.pages.edit.events', $chapter->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">Leadership</td>
                    <td class="text-left"><a href="{{ url($chapter->slug).'/leadership-board' }}" target="_blank">{{ url($chapter->slug).'/leadership-board' }}</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="{{ route('admin.chapters.pages.edit.home', $chapter->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-left">Contact Us</td>
                    <td class="text-left"><a href="{{ url($chapter->slug).'/contactus' }}" target="_blank">{{ url($chapter->slug).'/contactus' }}</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="{{ route('admin.chapters.pages.edit.home', $chapter->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapters.js') }}"></script>
@endpush