@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapter_events.index') }}">Chapter Events</a></li>
        <li><span href="javascript:void(0)">Add New Chapter Event</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-chapter_event',
            'route' => ['admin.chapter_events.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
        <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Chapter Event</strong></h2>
                </div>
                @include('admin.components.heading', ['text' => 'Event Details'])
                @include('admin.components.attachment', ['label' => 'Thumbnail'])

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('chapter_id') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="chapter_id">Chapter</label>

                            <div class="col-md-10">
                                <select class="form-control" id="chapter_id" name="chapter_id">
                                @if(auth()->user()->roles->first()->name == 'Chapter Admin')
                                    @php( $chapter = \App\Models\Chapter::where('id', auth()->user()->chapter_id)->get()->first() )
                                    <option value="{{ $chapter->id }}">{{ $chapter->name }}</option>
                                @else
                                    @php( $chapters = \App\Models\Chapter::all() )
                                    <option value="">Select Chapter</option>
                                    @foreach($chapters as $chapter)
                                    <option {{ old('chapter_id') == $chapter->id ? 'selected' : '' }} value="{{ $chapter->id }}">{{ $chapter->name }}</option>
                                    @endforeach
                                @endif
                                </select>
                                @if($errors->has('chapter_id'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('chapter_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.components.input-field', ['label' => 'Name'])
                {{-- @include('admin.components.input-field', ['label' => 'Amount', 'type' => 'number']) --}}
                {{-- @include('admin.components.input-field', ['label' => 'Amount Member', 'type' => 'number', 'field' => 'amount_member']) --}}
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="amount">Amount</label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" id="amount" name="amount"
                                       value="{{  old('amount')? old('amount') : '' }}" placeholder="Enter Regular Amount.." min='0' step="0.01">
                                @if($errors->has('amount'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('amount') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('amount_member') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="amount_member">Amount Member</label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" id="amount_member" name="amount_member"
                                       value="{{  old('amount_member')? old('amount_member') : '' }}" placeholder="Enter Amount Member.." min='0' step="0.01">
                                @if($errors->has('amount_member'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('amount_member') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.components.input-field', ['label' => 'Starts At', 'type' => 'date'])
                @include('admin.components.input-field', ['label' => 'Ends At', 'type' => 'date'])
                @include('admin.components.input-field', ['label' => 'Time'])
                @include('admin.components.input-field', ['label' => 'Short Description', 'field' => 'short_description'])
                @include('admin.components.editor', ['label' => 'Description'])
                @include('admin.components.heading', ['text' => 'Location'])
                @include('admin.components.input-field', ['label' => 'Name', 'field' => 'location_name'])
                @include('admin.components.input-field', ['label' => 'City'])
                @include('admin.components.input-field', ['label' => 'State'])
                @include('admin.components.input-field', ['label' => 'Zip'])
                @include('admin.components.input-field', ['label' => 'Country'])
                @include('admin.components.input-field', ['label' => 'Longitude'])
                @include('admin.components.input-field', ['label' => 'Latitude'])

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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_events.js') }}"></script>
@endpush