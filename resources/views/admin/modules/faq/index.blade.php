@extends('admin.layouts.base')

@section('content')
    @if (auth()->user()->can('Create Faq'))
        <div class="row text-center">
            <div class="col-sm-12 col-lg-12">
                <a href="{{ route('admin.faqs.create') }}" class="widget widget-hover-effect2">
                    <div class="widget-extra themed-background">
                        <h4 class="widget-content-light">
                            <strong>Add New</strong>
                            Faq
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
                <strong>Faqs</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable faq-empty {{$faqs->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Faqs found.
        </div>
        <div class="table-responsive {{$faqs->count() == 0 ? 'johnCena' : '' }}">
            <table id="faqs-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        Order
                    </th>
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center">
                        Question
                    </th>
                    <th class="text-left">
                        Answer
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
                @foreach($faqs as $faq)
                    <tr data-faq-id="{{$faq->id}}">
                        <td class="text-center">{{ $faq->order }}</td>
                        <td class="text-center"><strong>{{ $faq->id }}</strong></td>
                        <td class="text-center"><strong>{{ $faq->question }}</strong></td>
                        <td class="text-left">{!! str_limit(strip_tags($faq->answer), 50) !!}</td>
                        <td class="text-center">{{ $faq->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                {{--
                                @if (auth()->user()->can('Read Faq'))
                                    <a href="{{ route('admin.faqs.show', $faq->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
                                @endif
                                --}}
                                @if (auth()->user()->can('Update Faq'))
                                    <a href="{{ route('admin.faqs.edit', $faq->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="Edit">&nbsp;{{--<i class="fa fa-pencil"></i>--}} Edit &nbsp;</a> &nbsp;
                                @endif
                                @if (auth()->user()->can('Delete Faq'))
                                    <a href="javascript:void(0)" data-toggle="tooltip"
                                       title=""
                                       class="btn btn-xs btn-danger delete-faq-btn"
                                       data-original-title="Delete"
                                       data-faq-id="{{ $faq->id }}"
                                       data-faq-route="{{ route('admin.faqs.destroy', $faq->id) }}"> Delete
                                        {{-- <i class="fa fa-times"></i> --}}
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/faqs.js') }}"></script>
@endpush