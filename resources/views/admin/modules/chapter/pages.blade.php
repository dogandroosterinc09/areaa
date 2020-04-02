@extends('admin.layouts.base')

@section('content')
<ul class="breadcrumb breadcrumb-top">
    <li><a href="{{ route('admin.chapters.index') }}">Chapters</a></li>
    <li><span href="javascript:void(0)">Pages</span></li>
</ul>

<div class="block full">
    <div class="content-header">
        <div class="header-section">
            <h1>{{ $chapter->name }}</h1>
        </div>
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
                        <a href="{{ route('admin.chapters.pages.edit.home', $chapter->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
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