@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Chapter'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.chapters.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Chapter
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
                <strong>Chapters</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable chapter-empty {{$chapters->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Chapters found.
        </div>
        <div class="table-responsive {{$chapters->count() == 0 ? 'johnCena' : '' }}">
            <table id="chapters-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Name
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
                @foreach($chapters as $chapter)
                    <tr data-chapter-id="{{$chapter->id}}">
                        <td class="text-center"><strong>{{ $chapter->id }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter->name }}</strong></td>
                        <td class="text-center">{{ $chapter->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Chapter'))
                                    <a href="{{ route('admin.chapters.show', $chapter->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Chapter'))
                                    <a href="{{ route('admin.chapters.edit', $chapter->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Chapter'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-chapter-btn"
                                       data-original-title="Delete"
                                       data-chapter-id="{{ $chapter->id }}"
                                       data-chapter-route="{{ route('admin.chapters.destroy', $chapter->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapters.js') }}"></script>
@endpush