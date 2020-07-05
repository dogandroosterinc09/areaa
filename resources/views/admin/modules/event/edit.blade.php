@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.events.index') }}">Events</a></li>
        <li><span href="javascript:void(0)">Edit Event</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-event',
            'route' => ['admin.events.update', $event->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Event "{{$event->name}}"</strong></h2>
                </div>
                @include('admin.components.heading', ['text' => 'Event Details'])
                @include('admin.components.attachment', ['label' => 'Thumbnail', 'value' => $event->attachment])
                @include('admin.components.input-field', ['label' => 'Name', 'value' => $event->name])
                @include('admin.components.input-field', ['label' => 'Amount', 'type' => 'number', 'value' => $event->amount])
                @include('admin.components.input-field', ['label' => 'Amount Member', 'type' => 'number', 'value' => $event->amount_member])
                @include('admin.components.input-field', ['label' => 'Starts At', 'type' => 'date', 'value' => $event->starts_at->format('Y-m-d')])
                @include('admin.components.input-field', ['label' => 'Ends At', 'type' => 'date', 'value' => $event->ends_at->format('Y-m-d')])
                @include('admin.components.input-field', ['label' => 'Time', 'value' => $event->time])
                @include('admin.components.input-field', ['label' => 'Short Description', 'field'=>'short_description','value'=>$event->short_description])
                @include('admin.components.editor', ['label' => 'Description', 'value' => $event->description])
                @include('admin.components.heading', ['text' => 'Location'])
                @include('admin.components.input-field', ['label' => 'Name', 'field' => 'location_name', 'value' => $event->location_name])
                @include('admin.components.input-field', ['label' => 'City', 'value' => $event->city])
                @include('admin.components.input-field', ['label' => 'State', 'value' => $event->state])
                @include('admin.components.input-field', ['label' => 'Zip', 'value' => $event->zip])
                @include('admin.components.input-field', ['label' => 'Country', 'value' => $event->country])
                @include('admin.components.input-field', ['label' => 'Longitude', 'value' => $event->longitude])
                @include('admin.components.input-field', ['label' => 'Latitude', 'value' => $event->latitude])
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/events.js') }}"></script>
@endpush