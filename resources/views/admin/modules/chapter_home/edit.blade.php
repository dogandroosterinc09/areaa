@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        @if(auth()->user()->roles->first()->name !== 'Chapter Admin')
        <li><a href="{{ route('admin.chapters.index') }}">Chapter</a></li>
        <li><a href="{{ route('admin.chapters.pages', $chapter_home->chapter_id ) }}">Pages</a></li>
        @else
        <li><a href="{{ route('admin.pages.index') }}">Pages</a></li>
        @endif
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

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('member_benefits_featured_image') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="member_benefits_featured_image">Image</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                    <span class="btn btn-primary">
                                        Choose File <input type="file" name="member_benefits_featured_image" style="display: none;">
                                    </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                @if($errors->has('image'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <div class="col-md-offset-2 col-md-10">
                                <a href="{{ asset( $chapter_home->member_benefits_featured_image ?$chapter_home->member_benefits_featured_image : '') }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                    <img src="{{ $chapter_home->member_benefits_featured_image ? ($chapter_home->member_benefits_featured_image != '' ? asset($chapter_home->member_benefits_featured_image) : '') : '' }}"
                                        alt="{{ $chapter_home->member_benefits_featured_image ? ($chapter_home->member_benefits_featured_image != '' ? asset($chapter_home->member_benefits_featured_image) : '') : '' }}"
                                        class="img-responsive center-block" style="max-width: 100px;">
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.components.input-field', ['label' => 'Image Alt', 'field' => 'member_benefits_featured_image_alt', 'value' => $chapter_home->member_benefits_featured_image_alt])
                @include('admin.components.input-field', ['label' => 'Title', 'field' => 'member_benefits_title', 'value' => $chapter_home->member_benefits_title])
                @include('admin.components.textarea', ['label' => 'Content', 'field' => 'member_benefits_content', 'value' => $chapter_home->member_benefits_content])
                @include('admin.components.input-field', ['label' => 'Button1 Text', 'field' => 'member_benefits_button1_text', 'value' => $chapter_home->member_benefits_button1_text])
                @include('admin.components.input-field', ['label' => 'Button1 Link', 'field' => 'member_benefits_button1_link', 'value' => $chapter_home->member_benefits_button1_link])
                @include('admin.components.input-field', ['label' => 'Button2 Text', 'field' => 'member_benefits_button2_text', 'value' => $chapter_home->member_benefits_button2_text])
                @include('admin.components.input-field', ['label' => 'Button2 Link', 'field' => 'member_benefits_button2_link', 'value' => $chapter_home->member_benefits_button2_link])

                @include('admin.components.heading', ['text' => 'Member Benefits Items'])
                
                @php($items = json_decode($chapter_home->member_benefits_items))
                @for($counter = 0; $counter < 3; $counter++)
                    @include('admin.components.editor', ['label' => 'Content', 'field' => 'member_benefits_items[]', 'value' => $items[$counter]])
                @endfor

                @include('admin.components.heading', ['text' => 'Sponsors'])
                @include('admin.components.input-field', ['label' => 'Title', 'field' => 'sponsors_title', 'value' => $chapter_home->sponsors_title])
                @include('admin.components.textarea', ['label' => 'Content', 'field' => 'sponsors_content', 'value' => $chapter_home->sponsors_content])
                @include('admin.components.input-field', ['label' => 'Button1 Text', 'field' => 'sponsors_button1_text', 'value' => $chapter_home->sponsors_button1_text])
                @include('admin.components.input-field', ['label' => 'Button1 Link', 'field' => 'sponsors_button1_link', 'value' => $chapter_home->sponsors_button1_link])

                @include('admin.components.heading', ['text' => 'Sponsors Filters'])

                @php($filters = json_decode($chapter_home->sponsors_filters))                
                @for($counter = 0; $counter < $max = 6; $counter++)
                    @include('admin.components.input-field', ['label' => 'Icon', 'field' => 'sponsor_filter_icon[]', 'value' => $filters[$counter] ? $filters[$counter]->icon : ''])
                    @include('admin.components.input-field', ['label' => 'Text', 'field' => 'sponsor_filter_text[]', 'value' => $filters[$counter] ? $filters[$counter]->text : ''])
                    @include('admin.components.input-field', ['label' => 'Link', 'field' => 'sponsor_filter_link[]', 'value' => $filters[$counter] ? $filters[$counter]->link : ''])
                   
                    @if (!($counter == $max - 1))
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                    </div>
                    @endif 

                @endfor
                
                @include('admin.components.heading', ['text' => 'Top Sponsor'])

                @php($top_sponsor = json_decode($chapter_home->top_sponsor))

                @include('admin.components.input-field', ['label' => 'Badge Icon', 'field' => 'top_sponsor_badge_icon', 'value' => $top_sponsor ? $top_sponsor->badge_icon : ''])
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('top_sponsor_image') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="top_sponsor_image">Image</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                    <span class="btn btn-primary">
                                        Choose File <input type="file" name="top_sponsor_image" style="display: none;">
                                    </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                @if($errors->has('top_sponsor_image'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('top_sponsor_image') }}</span>
                                @endif
                            </div>
                            <div class="col-md-offset-2 col-md-10">
                                <a href="{{ $top_sponsor ? asset($top_sponsor->image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                    <img {{ $top_sponsor ? asset($top_sponsor->image) : '' }} 
                                        alt="{{ $top_sponsor ? asset($top_sponsor->image) : '' }}"
                                        class="img-responsive center-block" style="max-width: 100px;">
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.components.input-field', ['label' => 'Alt Text', 'field' => 'top_sponsor_image_alt', 'value' =>  $top_sponsor ? $top_sponsor->image_alt : ''])

                @include('admin.components.heading', ['text' => 'Other Sponsors'])

                @php($other_sponsors = json_decode($chapter_home->other_sponsors))
                @for($counter = 0; $counter < $max = 8; $counter++)
                    @include('admin.components.input-field', ['label' => 'Badge Icon', 'field' => 'other_sponsors_badge_icon[]', 'value' => isset($other_sponsors[$counter]->badge_icon) ? $other_sponsors[$counter]->badge_icon : '' ])
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group{{ $errors->has('other_sponsor_image') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label" for="other_sponsors_image[]">Image</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Choose File <input type="file" name="other_sponsors_image[]" style="display: none;">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                    @if($errors->has('image'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-offset-2 col-md-10">
                                    <a href="{{ !empty($other_sponsors[$counter]->image) ? asset($other_sponsors[$counter]->image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                        <img {{ !empty($other_sponsors[$counter]->image) ? 'src='. asset($other_sponsors[$counter]->image) : '' }}                                            
                                            class="img-responsive center-block" style="max-width: 100px;">
                                    </a>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('admin.components.input-field', ['label' => 'Alt Text', 'field' => 'other_sponsors_image_alt[]', 'value' => isset($other_sponsors[$counter]->image_alt) ? $other_sponsors[$counter]->image_alt : ''])

                    @if (!($counter == $max - 1))
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                    </div>
                    @endif 
                @endfor

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="{{ (auth()->user()->roles->first()->name === 'Chapter Admin') ? route('admin.pages.index') : route('admin.chapters.pages', $chapter_home->chapter_id) }}" class="btn btn-sm btn-warning">Cancel</a>
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