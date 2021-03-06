@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapter_board_members.index') }}">Chapter Board Members</a></li>
        <li><span href="javascript:void(0)">Add New Chapter Board Member</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'POST',
            'id' => 'create-chapter_board_member',
            'route' => ['admin.chapter_board_members.store'],
            'class' => 'form-horizontal ',
            'files' => TRUE
            ])
        }}
        <div class="col-md-12">
            <div class="block">
            <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Add new Board Member</strong></h2>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label class="col-md-2 control-label">
                                <img id="avatarContainer" src="{{ asset('public/images/placeholders/avatars/avatar2.jpg') }}" alt="avatar"
                                     class="img-circle" width="64">
                            </label>
                            <div class="col-md-10">
                                <div>
                                    <i class="fa fa-fw fa-upload"></i>
                                    <a href="javascript:void(0)" onclick="$('input[name=avatar]').trigger('click')">
                                        Upload New Avatar
                                    </a>
                                    <input type="file" name="avatar" style="display: none;">
                                </div>
                                <i class="fa fa-fw fa-times"></i> <a id="btnRemoveAvatar" href="#" class="text-danger">Remove Avatar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('chapter_id') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="chapter_id">Chapter</label>
                            <div class="col-md-10">
                                <select class="form-control" id="chapter_id" name="chapter_id">                                
                                @if(auth()->user()->roles->first()->name === 'Chapter Admin')
                                    @php( $chapter = \App\Models\Chapter::where('id',auth()->user()->chapter_id)->get()->first() )
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

                @include('admin.components.input-field', ['label' => 'First Name'])
                @include('admin.components.input-field', ['label' => 'Last Name'])
                @include('admin.components.input-field', ['label' => 'Position'])
                @include('admin.components.textarea', ['label' => 'Bio', 'rows' => 25])
                @include('admin.components.radio', ['label' => 'Type', 'value' => request('type') ?? null, 'values' => [
                    'Executive' => \App\Models\ChapterBoardMember::TYPE_EXECUTIVE,
                    'Board of Director' => \App\Models\ChapterBoardMember::TYPE_BOARD_OF_DIRECTOR,
                    'Committee Chair' => \App\Models\ChapterBoardMember::TYPE_ADVISORY,
                ]])
                @include('admin.components.toggle', ['label' => 'Is Active', 'value' => true])
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group form-actions">
                            <div class="col-md-10 col-md-offset-2">
                                <a href="{{ route('admin.chapter_board_members.index') }}" class="btn btn-sm btn-warning">Cancel</a>
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('extrascripts')
    <script type="text/javascript" src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_board_members.js') }}"></script>
@endpush