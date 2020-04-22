@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Members'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.members.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Members
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
                <strong>Members</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable members-empty {{$members->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Members found.
        </div>
        <div class="table-responsive {{$members->count() == 0 ? 'johnCena' : '' }}">
            <table id="members-table" class="table table-bordered table-striped table-vcenter">
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
                @foreach($members as $members)
                    <tr data-members-id="{{$members->id}}">
                        <td class="text-center"><strong>{{ $members->id }}</strong></td>
                        <td class="text-center"><strong>{{ $members->name }}</strong></td>
                        <td class="text-left">
                            @if($members->slug && $members->slug != '')
                                <a target="_blank" href="{{ add_http($members->slug) }}">{{ add_http($members->slug) }}</a>
                            @endif
                        </td>
                        <td class="text-left">{!! str_limit(strip_tags($members->content), 50) !!}</td>
                        <td class="text-center">{{ $members->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Members'))
                                    <a href="{{ route('admin.members.show', $members->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Members'))
                                    <a href="{{ route('admin.members.edit', $members->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Members'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-members-btn"
                                       data-original-title="Delete"
                                       data-members-id="{{ $members->id }}"
                                       data-members-route="{{ route('admin.members.destroy', $members->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/members.js') }}"></script>
@endpush