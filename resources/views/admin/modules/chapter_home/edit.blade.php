@extends('admin.layouts.base')

@section('content')
    <ul class="breadcrumb breadcrumb-top">
        @if(auth()->user()->roles->first()->name !== 'Chapter Admin')
        <li><a href="{{ route('admin.chapters.index') }}">Chapters</a></li>
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

                {{--
                @include('admin.components.heading', ['text' => 'Page Details'])

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
                                <a href="{{ $chapter_home->banner_image ? asset($chapter_home->banner_image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                    <img {{ $chapter_home->banner_image ? 'src='.asset($chapter_home->banner_image) : '' }}
                                        class="img-responsive center-block" style="max-width: 100px;">
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.components.editor', ['label' => 'Content', 'field' => 'content', 'value' => $chapter_home->content])
                --}}

                @include('admin.components.heading', ['text' => 'Sections'])
                @include('admin.components.heading', ['text' => 'Who We Are'])
                
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('who_we_are_featured_video') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="who_we_are_featured_video">Featured Video</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="who_we_are_featured_video" value="{{ $chapter_home->who_we_are_featured_video }}">
                                <small>&nbsp; &nbsp;Example if youtube: https://www.youtube.com/embed/LaiWuvIPBgg<br>
                                       &nbsp; &nbsp;Example if uploaded: public/uploads/q1ZqlonyJvk5xRqL-1587972946.mp4
                                </small><br>
                                <!-- <div class="input-group">
                                    <label class="input-group-btn">
                                    <span class="btn btn-primary">
                                        Choose File <input type="file" name="who_we_are_featured_video" style="display: none;">
                                    </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div> -->
                                @if($errors->has('who_we_are_featured_video'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('who_we_are_featured_video') }}</span>
                                @endif
                            </div>
                            @if($chapter_home->who_we_are_featured_video)
                            <div class="col-md-offset-2 col-md-3">
                                <div class="html-video"> 
                                    <video width="100%" controls muted id="video">
                                        <source type="video/mp4" src="{{ asset($chapter_home->who_we_are_featured_video) }}" >
                                    </video>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group{{ $errors->has('who_we_are_video_cover_image') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label" for="who_we_are_video_cover_image">Video Cover Image</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                    <span class="btn btn-primary">
                                        Choose File <input type="file" name="who_we_are_video_cover_image" style="display: none;">
                                    </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                @if($errors->has('image'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                            <div class="col-md-offset-2 col-md-10">
                                <a href="{{ asset( $chapter_home->who_we_are_video_cover_image ?$chapter_home->who_we_are_video_cover_image : '') }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                    <img src="{{ $chapter_home->who_we_are_video_cover_image ? ($chapter_home->who_we_are_video_cover_image != '' ? asset($chapter_home->who_we_are_video_cover_image) : '') : '' }}"
                                        alt="{{ $chapter_home->who_we_are_video_cover_image ? ($chapter_home->who_we_are_video_cover_image != '' ? asset($chapter_home->who_we_are_video_cover_image) : '') : '' }}"
                                        class="img-responsive center-block" style="max-width: 100px;">
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>

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

                {{--
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
                --}}
                
                {{-- 
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
                                    <img src="{{ $top_sponsor ? asset($top_sponsor->image) : '' }} "
                                        alt="{{ $top_sponsor ? asset($top_sponsor->image) : '' }}"
                                        class="img-responsive center-block" style="max-width: 100px;">
                                </a>                                
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.components.input-field', ['label' => 'Alt Text', 'field' => 'top_sponsor_image_alt', 'value' =>  $top_sponsor ? $top_sponsor->image_alt : ''])
                --}}

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 style="border-left: 3px solid #61dbd5; padding-left: 8px; margin-bottom: 20px;">Sponsors</h4>
                        <div class="form-group">
                            <div class="col-md-10">
                                <input type='button' value='Add Sponsor' id='addButton' class="btn btn-sm btn-primary">
                           </div>
                        </div>
                    </div>
                </div>
                @php ($sponsor_category = [''=>'Select','jade'=>'Jade','diamond'=>'Diamond','emerald'=>'Emerald','opal'=>'Opal','ruby'=>'Ruby','pearl'=>'Pearl'])

                @php($other_sponsors = json_decode($chapter_home->other_sponsors))

                @for($counter = 0; $counter < count($other_sponsors); $counter++)
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="sponsor_category[]">Badge</label>
                                <div class="col-md-10">
                                    {{Form::select('sponsor_category[]',$sponsor_category,$other_sponsors[$counter]->badge_icon,['class'=>'form-control'])}}
                               </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group{{ $errors->has('other_sponsor_image') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label" for="chapter_sponsor_image[]">Image</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Choose File <input type="file" name="chapter_sponsor_image[]" style="display: none;">
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
                                        <img src="{{ !empty($other_sponsors[$counter]->image) ? asset($other_sponsors[$counter]->image) : '' }}"
                                            class="img-responsive center-block" style="max-width: 100px;">
                                    </a>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('admin.components.input-field', ['label' => 'Alt Text', 'field' => 'chapter_alt_text[]', 'value' => isset($other_sponsors[$counter]->image_alt) ? $other_sponsors[$counter]->image_alt : ''])

                    @if (!($counter == count($other_sponsors)))
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                    </div>
                    @endif 
                @endfor

<!--                     <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
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
                                    Remove
                                </div>
                            </div>
                        </div>
                    </div> -->

                <div id="TextBoxesGroup">

                    <div class="row" id="TextBoxDiv">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="chapter_sponsor">Badge</label>
                                <div class="col-md-10">
                                    {{Form::select('sponsor_category[]',$sponsor_category,null,['class'=>'form-control'])}}
                                </div>

                                <label class="col-md-2 control-label" for="chapter_sponsor">Image</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Choose File <input type="file" name="chapter_sponsor_image[]" style="display: none;">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>

                                <label class="col-md-2 control-label" for="chapter_sponsor">Alt Text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="chapter_alt_text[]" value="{{ $chapter_home->chapter_sponsor }}">
                                </div>

                            </div>
                        </div>

                    </div>



                </div>



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


<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

        // if(counter>10){
        //     alert("Only 10 textboxes allow");
        //     return false;
        // }

        var newTextBoxDiv = $(document.createElement('div'))
        .attr("id", 'TextBoxDiv' + counter);

        // newTextBoxDiv.after().html('<label>Textbox #'+ counter + ' : </label>' +
        //     '<input type="text" name="textbox' + counter +
        //     '" id="textbox' + counter + '" value="" >');
                    newTextBoxDiv.after().html('<div class="row" id="TextBoxDiv">'+
                        '<div class="col-md-8 col-md-offset-2">'+
                        '<div class="form-group">'+
                            '<label class="col-md-2 control-label" for="chapter_sponsor">Badge</label>'+
                            '<div class="col-md-10">'+
                                '<select name="sponsor_category[]" id="sponsor_select" class="form-control">'+
                                    '<option value="">Select</option>'+
                                    '<option value="jade">Jade</option>'+
                                    '<option value="diamond">Diamond</option>'+
                                    '<option value="emerald">Emerald</option>'+
                                    '<option value="opal">Opal</option>'+
                                    '<option value="ruby">Ruby</option>'+
                                    '<option value="pearl">Pearl</option>'+
                                '</select>'+
                            '</div>'+
                            '<label class="col-md-2 control-label" for="chapter_sponsor">Image</label>'+
                            '<div class="col-md-10">'+
                                '<div class="input-group">'+
                                    '<label class="input-group-btn">'+
                                    '<span class="btn btn-primary">'+
                                        'Choose File <input type="file" name="chapter_sponsor_image[]" style="display: none;">'+
                                    '</span>'+
                                    '</label>'+
                                    '<input type="text" class="form-control" readonly>'+
                                '</div>'+
                            '</div>'+
                            '<label class="col-md-2 control-label" for="chapter_sponsor">Alt Text</label>'+
                            '<div class="col-md-10">'+
                                '<input type="text" class="form-control" name="chapter_alt_text[]" value="{{ $chapter_home->chapter_sponsor }}">'+
                            '</div>'+
                        '</div>'+
                        '</div>'+
                    '</div>');


        newTextBoxDiv.appendTo("#TextBoxesGroup");

        counter++;
    });

    // $("#removeButton").click(function () {

    //     if(counter==1){
    //         alert("No more textbox to remove");
    //         return false;
    //     }
    //     counter--;
    //     $("#TextBoxDiv" + counter).remove();
    // });

    // $("#getButtonValue").click(function () {
    //     var msg = '';
    //     for(i=1; i<counter; i++){
    //         msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
    //     }
    //     alert(msg);
    // });

});
</script>
@endpush