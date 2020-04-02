@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        <li><a href="{{ route('admin.chapters.index') }}">Chapter</a></li>
        <li><a href="{{ route('admin.chapters.pages', $chapter_home->chapter_id ) }}">Pages</a></li>
        <li><span href="javascript:void(0)">Edit Chapter Home</span></li>
    </ul>
    <div class="row">
        {{  Form::open([
            'method' => 'PUT',
            'id' => 'edit-chapter_home',
            'route' => ['admin.chapter_homes.update', $chapter_home->id],
            'class' => 'form-horizontal ',
            'files' => true
            ])
        }}
        <div class="col-md-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-pencil"></i> <strong>Edit Chapter Home "{{$chapter_home->chapter}}"</strong></h2>
                </div>
                @include('admin.components.heading', ['text' => 'Sections'])
                @include('admin.components.heading', ['text' => 'Who We Are'])
                
                @include('admin.components.input-field', ['label' => 'Title', 'field' => 'who_we_are_title', 'value' => $chapter_home->who_we_are_title])
                @include('admin.components.editor', ['label' => 'Content', 'field' => 'who_we_are_content', 'value' => $chapter_home->who_we_are_content])
                @include('admin.components.input-field', ['label' => 'Button1 Text', 'field' => 'who_we_are_button1_text', 'value' => $chapter_home->who_we_are_button1_text])
                @include('admin.components.input-field', ['label' => 'Button1 Link', 'field' => 'who_we_are_button1_link', 'value' => $chapter_home->who_we_are_button1_link])
                @include('admin.components.input-field', ['label' => 'Button2 Text', 'field' => 'who_we_are_button2_text', 'value' => $chapter_home->who_we_are_button2_text])
                @include('admin.components.input-field', ['label' => 'Button2 Link', 'field' => 'who_we_are_button2_link', 'value' => $chapter_home->who_we_are_button2_link])

                @include('admin.components.heading', ['text' => 'Member Benefits'])
                @include('admin.components.input-field', ['label' => 'Title', 'field' => 'member_benefits_title', 'value' => $chapter_home->member_benefits_title])
                @include('admin.components.textarea', ['label' => 'Content', 'field' => 'member_benefits_content', 'value' => $chapter_home->member_benefits_content])
                @include('admin.components.input-field', ['label' => 'Button1 Text', 'field' => 'member_benefits_button1_text', 'value' => $chapter_home->member_benefits_button1_text])
                @include('admin.components.input-field', ['label' => 'Button1 Link', 'field' => 'member_benefits_button1_link', 'value' => $chapter_home->member_benefits_button1_link])
                @include('admin.components.input-field', ['label' => 'Button2 Text', 'field' => 'member_benefits_button2_text', 'value' => $chapter_home->member_benefits_button2_text])
                @include('admin.components.input-field', ['label' => 'Button2 Link', 'field' => 'member_benefits_button2_link', 'value' => $chapter_home->member_benefits_button2_link])


                @include('admin.components.heading', ['text' => 'Sponsors'])
                @include('admin.components.input-field', ['label' => 'Title', 'field' => 'sponsors_title', 'value' => $chapter_home->sponsors_title])
                @include('admin.components.textarea', ['label' => 'Content', 'field' => 'sponsors_content', 'value' => $chapter_home->sponsors_content])
                @include('admin.components.input-field', ['label' => 'Button1 Text', 'field' => 'sponsors_button1_text', 'value' => $chapter_home->sponsors_button1_text])
                @include('admin.components.input-field', ['label' => 'Button1 Link', 'field' => 'sponsors_button1_link', 'value' => $chapter_home->sponsors_button1_link])
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ route('admin.chapters.pages', $chapter_home->chapter_id) }}" class="btn btn-sm btn-warning">Cancel</a>
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
    <script type="text/javascript" src="{{ asset('public/js/libraries/chapter_homes.js') }}"></script>
@endpush