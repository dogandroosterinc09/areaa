                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 style="border-left: 3px solid #ab1a2d; padding-left: 8px; margin-bottom: 20px;"><input type='button' value='Add Events / Campaigns' id='addButton' class="btn btn-sm btn-primary"></h4>
                        <div class="form-group">
                            <div class="col-md-10">
                                {{-- <small>* By selected <strong>No Category</strong> - Sponsor will be removed when Saved.</small> --}}
                           </div>
                        </div>
                    </div>
                </div>

            @if($page->other_content)

                <?php
                // print_r($page->other_content);
                // die('ln23');
                // foreach ($page->sections as $page_section) {
                //     // echo 'section id:  '.$page_section->id.'<br>';

                //     if ($page_section->id==28) {
                //         $page_other_sponsors = $page_section->value;
                //         break;
                //     }
                // }
                // print_r($page_other_sponsors);
                // die('ln23');

                // Sample Data saved in table 'sections' with 'id=28' / for sponsors page only National Areaa
                // $page->other_content = '[{"title":"ruby","image":"public\/uploads\/sponsor1-1587071957-1591402616.jpg","link":"chapter title"},{"title":"emerald","image":"public\/uploads\/sponsor2-1587071957.jpg","link":"chapter title"},{"title":"diamond","image":"public\/uploads\/sponsor3-1587071957.jpg","link":"chapter title"}]';

                // $page->other_sponsors = '[{"badge_icon":"ruby","image":"public\/uploads\/sponsor1-1587071957-1591402616.jpg","image_alt":"chapter title"},{"badge_icon":"emerald","image":"public\/uploads\/sponsor2-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\/uploads\/sponsor3-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\/uploads\/sponsor4-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\/uploads\/sponsor5-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\/uploads\/sponsor6-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\/uploads\/sponsor7-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\/uploads\/sponsor9-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"jade","image":"public\/uploads\/sponsor8-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\/uploads\/sponsor10-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\/uploads\/sponsor11-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\/uploads\/sponsor12-1587073636.jpg","image_alt":"chapter title"}]';
                ?>

                @php($events_campaigns = json_decode($page->other_content))

                @for($counter = 0; $counter < count($events_campaigns); $counter++)
                    <div id="event-row{{$counter}}">
                    <?php /* <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="sponsor_category[]">Badge</label>
                                <div class="col-md-10">
                                    {{Form::select('sponsor_category[]',$sponsor_category,$other_sponsors[$counter]->badge_icon,['class'=>'form-control'])}}
                               </div>
                            </div>
                        </div>
                    </div> */ ?>

                    @include('admin.components.input-field', ['label' => 'Title', 'field' => 'event_title[]', 'value' => isset($events_campaigns[$counter]->title) ? $events_campaigns[$counter]->title : ''])

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group{{ $errors->has('event_image') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label" for="event_image[]">Images</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Choose File <input type="file" name="event_image[]" style="display: none;" onchange="document.getElementById('image_event[{{$counter}}]').value =this.files[0].name">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" id="image_event[{{$counter}}]" readonly>
                                    </div>
                                    @if($errors->has('image'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-offset-2 col-md-10">
                                    <a href="{{ !empty($events_campaigns[$counter]->image) ? asset($events_campaigns[$counter]->image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                        {{-- <img src="{{ !empty($events_campaigns[$counter]->image) ? asset($events_campaigns[$counter]->image) : '' }}"
                                            class="img-responsive center-block" style="max-width: 100px;"> --}}

                                    <img src="{{ $events_campaigns[$counter]->image ? ($events_campaigns[$counter]->image != '' ? asset($events_campaigns[$counter]->image) : '') : '' }}"
                                        alt="{{ $events_campaigns[$counter]->image ? ($events_campaigns[$counter]->image != '' ? asset($events_campaigns[$counter]->image) : '') : '' }}"
                                        class="img-responsive center-block" style="max-width: 100px;">

                                    </a>                                
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('admin.components.input-field', ['label' => 'Link', 'field' => 'event_link[]', 'value' => isset($events_campaigns[$counter]->link) ? $events_campaigns[$counter]->link : ''])

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="delete">&nbsp;
                                    <input type="hidden" name="event_id[]" value="{{$counter}}">
                                </label>
                                <div class="col-md-10">
                                    <input type="button" name="hide" id="remove{{$counter}}" onclick="$('#event-row'+{{$counter}}).remove();" value="Remove{{--$counter--}}">
                               </div>
                            </div>
                        </div>
                    </div>


                    @if (!($counter == count($events_campaigns)))
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                    </div>
                    @endif 
                </div>
                @endfor

            @endif

                <div id="TextBoxesGroup">
                    <div class="row" id="TextBoxDiv">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="event">Title</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="event_title[]" value="">
                                </div>

                                <label class="col-md-2 control-label" for="event">Image</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Choose File <input type="file" name="event_image[]" style="display: none;" onchange="document.getElementById('image_event').value =this.files[0].name">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" id="image_event" readonly>
                                    </div>
                                </div>

                                <label class="col-md-2 control-label" for="event">Link</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="event_link[]" value="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php /* <div id="TextBoxesGroup">
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
                                            Choose File <input type="file" name="chapter_sponsor_image[]" style="display: none;" onchange="document.getElementById('image_chapter_sponsor').value =this.files[0].name">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" id="image_chapter_sponsor" readonly>
                                    </div>
                                </div>

                                <label class="col-md-2 control-label" for="chapter_sponsor">Alt Text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="chapter_alt_text[]" value="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div> */ ?>
                