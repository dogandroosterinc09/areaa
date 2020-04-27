@extends('admin.layouts.base')

@section('content')
    <div class="block full">
        <div class="block-title">
            <h2>
                <i class="fa fa-phone sidebar-nav-icon"></i>
                <strong>Chapter Contacts</strong>
            </h2>
        </div>
        <div class="alert alert-info alert-dismissable chapter_contact-empty {{$chapter_contacts->count() == 0 ? '' : 'johnCena' }}">
            <i class="fa fa-info-circle"></i> No Chapter Contacts found.
        </div>
        <div class="table-responsive {{$chapter_contacts->count() == 0 ? 'johnCena' : '' }}">
            <table id="chapter_contacts-table" class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr role="row">
                    <th class="text-center">
                        ID
                    </th>
                    <th class="text-center" >
                        Chapter
                    </th>
                    <th class="text-center">
                        Name
                    </th>
                    <th class="text-left">
                        Email
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
                @foreach($chapter_contacts as $chapter_contact)
                    <tr data-chapter_contact-id="{{$chapter_contact->id}}">
                        <td class="text-center"><strong>{{ $chapter_contact->id }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_contact->chapter }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_contact->name }}</strong></td>
                        <td class="text-center"><strong>{{ $chapter_contact->email }}</strong></td>
                        <td class="text-center">{{ $chapter_contact->created_at->format('F d, Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                @if (auth()->user()->can('Read Chapter Contact'))
                                    <a href="{{ route('admin.chapter_contacts.show', $chapter_contact->id) }}"
                                       data-toggle="tooltip"
                                       title=""
                                       class="btn btn-default"
                                       data-original-title="View"><i class="fa fa-eye"></i></a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_contacts.js') }}"></script>
@endpush