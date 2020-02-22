@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Board Member'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                @php($types = ['Delegate' => \App\Models\BoardMember::TYPE_DELEGATE, 'Executive' => \App\Models\BoardMember::TYPE_EXECUTIVE])
                <a href="{{ route('admin.board_members.create', empty($title) ? [] : ['type' => $types[$title]]) }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            {{ $title ?? '' }} Board Member
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
                <strong>{{ $title ?? '' }} Board Members</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable board_member-empty {{$board_members->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No {{ $title ?? '' }} Board Members found.
        </div>
        <div class="table-responsive {{$board_members->count() == 0 ? 'johnCena' : '' }}">
            <table id="board_members-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        Order
                    </th>
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-left">
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
                @foreach($board_members as $board_member)
                    <tr data-board_member-id="{{$board_member->id}}">
                        <td class="text-center">{{ $board_member->order }}</td>
                        <td class="text-center"><strong>{{ $board_member->id }}</strong></td>
                        <td class="text-center"><strong>{{ $board_member->name }}</strong></td>
                        <td class="text-center"><strong>{{ $board_member->typeAsString }}</strong></td>
                        <td class="text-center">{{ $board_member->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Board Member'))
                                    <a href="{{ route('admin.board_members.show', $board_member->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Board Member'))
                                    <a href="{{ route('admin.board_members.edit', $board_member->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Board Member'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-board_member-btn"
                                       data-original-title="Delete"
                                       data-board_member-id="{{ $board_member->id }}"
                                       data-board_member-route="{{ route('admin.board_members.destroy', $board_member->id) }}">
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

@push('extrastylesheets')
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
@endpush

@push('extrascripts')
    <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/board_members.js') }}"></script>
@endpush