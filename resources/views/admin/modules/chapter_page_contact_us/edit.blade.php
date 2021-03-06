@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        @if(auth()->user()->roles->first()->name !== 'Chapter Admin')
        <li><a href="{{ route('admin.chapters.index') }}">Chapters</a></li>
        <li><a href="{{ route('admin.chapters.pages', $chapter_page_contact_us->chapter_id ) }}">Pages</a></li>
        @else
        <li><a href="{{ route('admin.pages.index') }}">Pages</a></li>
        @endif
        <li><span href="javascript:void(0)">Edit Chapter Page Contact Us</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-chapter_page_contact_us',
            'route' => ['admin.chapter_page_contact_uses.update', $chapter_page_contact_us->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Chapter Page Contact Us "{{$chapter_page_contact_us->chapter}}"</strong></h2>
                </div>
                
                @include('admin.components.heading', ['text' => 'Page Details'])

                {{--
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('banner_image') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="banner_image">Banner Image</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                    <span class="btn btn-primary">
                                        Choose File <input type="file" name="banner_image" style="display: none;">
                                    </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                @if($errors->has('banner_image'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('banner_image') }}</span>
                                @endif
                            </div>
                            <div class="col-md-offset-2 col-md-10">
                                <a href="{{ $chapter_page_contact_us->banner_image ? asset($chapter_page_contact_us->banner_image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                    <img {{ $chapter_page_contact_us->banner_image ? 'src='.asset($chapter_page_contact_us->banner_image) : '' }}
                                        class="img-responsive center-block" style="max-width: 100px;">
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                --}}

                @include('admin.components.editor', ['label' => 'Content', 'field' => 'content', 'value' => $chapter_page_contact_us->content])
                @include('admin.components.heading', ['text' => 'Sections'])
                @include('admin.components.heading', ['text' => 'Section 1'])

                @php( $section_1 = json_decode($chapter_page_contact_us->section_1) )                
                @include('admin.components.input-field', ['label' => 'Location Text', 'field' => 'location_text', 'value' => $section_1->location_text])
                @include('admin.components.input-field', ['label' => 'Telephone Text', 'field' => 'telephone_text', 'value' => $section_1->telephone_text])
                @include('admin.components.input-field', ['label' => 'Mail Text', 'field' => 'mail_text', 'value' => $section_1->mail_text])

                @include('admin.components.input-field', ['label' => 'Form Text', 'field' => 'form_text', 'value' => isset($section_1->form_text)? $section_1->form_text: ''])

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ (auth()->user()->roles->first()->name === 'Chapter Admin') ? route('admin.pages.index') : route('admin.chapters.pages', $chapter_page_contact_us->chapter_id) }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_page_contact_uses.js') }}"></script>
@endpush