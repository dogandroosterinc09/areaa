@extends('admin.layouts.base')

@section('content')

    @isset($is_chapter)
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapters.index') }}">Main</a></li>
        <li><span href="javascript:void(0)">All Members</span></li>
    </ul>    
    @endisset

    {{--
    @if (auth()->user()->can('Create Members'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.members.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Member
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
    --}}

    <div class="block full">
        <div class="block-title">
            <h2>
                <i class="fa fa-newspaper-o sidebar-nav-icon"></i>
                <strong>{{-- isset($chapter) ? $chapter->name : 'National' --}}All Chapter Members</strong>
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
                    <th class="text-center">
                        Username
                    </th>
                    <th class="text-center">
                        Chapter
                    </th>
                    <th class="text-center">
                        Date Registered
                    </th>
                    <th class="text-center">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $members)
                    <tr data-members-id="{{$members->id}}">
                        <td class="text-center"><strong>{{-- $members->member_id --}} {{ $members->user_id }}</strong></td>
                        <td class="text-left"><strong>{{ $members->first_name.' '.$members->last_name }}</strong></td>
                        <td class="text-left"><strong>{{ $members->user_name }}</strong></td>
                        <td class="text-center"><strong>{{ isset($members->chapter_name)? $members->chapter_name: 'National' }}</strong></td>
                        <td class="text-center">@if($members->joined_date) {{ date('d-m-Y', strtotime($members->joined_date)) }} @endif</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <?php /* @if (auth()->user()->can('Read Members'))
                                    <a href="{{ route('admin.members.show', $members->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif */ ?>
                                @if (auth()->user()->can('Update Members'))
                                    <a href="{{ route('admin.user.edit_member', $members->user_id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Members'))
<!--                                     <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-members-btn"
                                       data-original-title="Delete"
                                       data-members-id="{{ $members->id }}"
                                       data-members-route="{{ route('admin.members.destroy', $members->id) }}">
                                        <i class="fa fa-times"></i>
                                    </a> -->
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