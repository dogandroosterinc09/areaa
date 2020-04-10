@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Chapter Board Member'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.chapter_board_members.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Chapter Board Member
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
                <strong>Chapter Board Members</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable chapter_board_member-empty {{$chapter_board_members->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Chapter Board Members found.
        </div>
        <div class="table-responsive {{$chapter_board_members->count() == 0 ? 'johnCena' : '' }}">
            <table id="chapter_board_members-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Chapter
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-center">
                        Type
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
                @foreach($chapter_board_members as $chapter_board_member)
                    <tr data-chapter_board_member-id="{{$chapter_board_member->id}}">
                        <td class="text-center"><strong>{{ $chapter_board_member->id }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_board_member->chapter }}</strong</td>
                        <td class="text-center"><strong>{{ $chapter_board_member->name }}</strong></td>                        
                        <td class="text-center"><strong>{{ $chapter_board_member->typeAsString }}</strong></td>
                        <td class="text-center">{{ $chapter_board_member->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Chapter Board Member'))
                                    <a href="{{ route('admin.chapter_board_members.show', $chapter_board_member->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Chapter Board Member'))
                                    <a href="{{ route('admin.chapter_board_members.edit', $chapter_board_member->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Chapter Board Member'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-chapter_board_member-btn"
                                       data-original-title="Delete"
                                       data-chapter_board_member-id="{{ $chapter_board_member->id }}"
                                       data-chapter_board_member-route="{{ route('admin.chapter_board_members.destroy', $chapter_board_member->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_board_members.js') }}"></script>
@endpush