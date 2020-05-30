@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Benefits'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.benefits.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Benefits
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
                <strong>Benefits</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable benefits-empty {{$benefits->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Benefits found.
        </div>
        <div class="table-responsive {{$benefits->count() == 0 ? 'johnCena' : '' }}">
            <table id="benefits-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-center">
                        Category
                    </th>
                    {{-- <th class="text-left">
                        Slug
                    </th> --}}
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
                @foreach($benefits as $benefits)
                    <tr data-benefits-id="{{$benefits->id}}">
                        <td class="text-center"><strong>{{ $benefits->id }}</strong></td>
                        <td class="text-center"><strong>{{ $benefits->name }}</strong></td>
                        <td class="text-center"><strong>{{ $benefits->category }}</strong></td>
                        {{--<td class="text-left">
                            @if($benefits->slug && $benefits->slug != '')
                                <a target="_blank" href="{{ add_http($benefits->slug) }}">{{ add_http($benefits->slug) }}</a>
                            @endif
                        </td>--}}
                        <td class="text-left">{!! str_limit(strip_tags($benefits->content), 50) !!}</td>
                        <td class="text-center">{{ $benefits->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Benefits'))
                                    <a href="{{ route('admin.benefits.show', $benefits->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                @if (auth()->user()->can('Update Benefits'))
                                    <a href="{{ route('admin.benefits.edit', $benefits->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                @endif
                                @if (auth()->user()->can('Delete Benefits'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-benefits-btn"
                                       data-original-title="Delete"
                                       data-benefits-id="{{ $benefits->id }}"
                                       data-benefits-route="{{ route('admin.benefits.destroy', $benefits->id) }}">
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/benefits.js') }}"></script>
@endpush