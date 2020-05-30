@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Benefits Categories'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.benefits_categories.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Benefits Categories
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
                <strong>Benefits Categories</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable benefits_categories-empty {{$benefits_categories->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Benefits Categories found.
        </div>
        <div class="table-responsive {{$benefits_categories->count() == 0 ? 'johnCena' : '' }}">
            <table id="benefits_categories-table" class="table table-bordered table-striped table-vcenter">
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
                @foreach($benefits_categories as $benefits_categories)
                    <tr data-benefits_categories-id="{{$benefits_categories->id}}">
                        <td class="text-center"><strong>{{ $benefits_categories->id }}</strong></td>
                        <td class="text-center"><strong>{{ $benefits_categories->name }}</strong></td>
                        <td class="text-center">{{ $benefits_categories->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                {{-- @if (auth()->user()->can('Read Benefits Categories'))
                                    <a href="{{ route('admin.benefits_categories.show', $benefits_categories->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif --}}
                                @if (auth()->user()->can('Update Benefits Categories'))
                                    <a href="{{ route('admin.benefits_categories.edit', $benefits_categories->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Benefits Categories'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-benefits_categories-btn"
                                       data-original-title="Delete"
                                       data-benefits_categories-id="{{ $benefits_categories->id }}"
                                       data-benefits_categories-route="{{ route('admin.benefits_categories.destroy', $benefits_categories->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/benefits_categories.js') }}"></script>
@endpush