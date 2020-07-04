                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 style="border-left: 3px solid #ab1a2d; padding-left: 8px; margin-bottom: 20px;"><input type='button' value='Add Sponsor' id='addButton' class="btn btn-sm btn-primary"></h4>
                        <div class="form-group">
                            <div class="col-md-10">
                                <!-- <small>* By selecting <strong>No Category</strong> - Sponsor will be removed when Saved.</small> -->
                                {{-- <input type='button' value='Add Sponsor' id='addButton' class="btn btn-sm btn-primary"> --}}
                           </div>
                        </div>
                    </div>
                </div>

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
                // $page->other_sponsors = '[{"badge_icon":"ruby","image":"public\/uploads\/sponsor1-1587071957-1591402616.jpg","image_alt":"chapter title"},{"badge_icon":"emerald","image":"public\/uploads\/sponsor2-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\/uploads\/sponsor3-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\/uploads\/sponsor4-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\/uploads\/sponsor5-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\/uploads\/sponsor6-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\/uploads\/sponsor7-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\/uploads\/sponsor9-1587071957.jpg","image_alt":"chapter title"},{"badge_icon":"jade","image":"public\/uploads\/sponsor8-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"opal","image":"public\/uploads\/sponsor10-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"pearl","image":"public\/uploads\/sponsor11-1587073636.jpg","image_alt":"chapter title"},{"badge_icon":"diamond","image":"public\/uploads\/sponsor12-1587073636.jpg","image_alt":"chapter title"}]';
                ?>

                @php ($sponsor_category = [''=>'No Category','jade'=>'Jade','diamond'=>'Diamond','emerald'=>'Emerald','opal'=>'Opal','ruby'=>'Ruby','pearl'=>'Pearl'])

                {{-- @php($other_sponsors = json_decode($page_other_sponsors)) --}}
                @php($other_sponsors = json_decode($page->other_content))

                @for($counter = 0; $counter < count($other_sponsors); $counter++)
                    <div id="sponsor-row{{$counter}}">
                    
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
                                            Choose File <input type="file" name="chapter_sponsor_image[]" style="display: none;" onchange="document.getElementById('image_chapter_sponsor[{{$counter}}]').value =this.files[0].name">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" id="image_chapter_sponsor[{{$counter}}]" readonly>
                                    </div>
                                    @if($errors->has('image'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-offset-2 col-md-10">
                                    <a href="{{ !empty($other_sponsors[$counter]->image) ? asset($other_sponsors[$counter]->image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                        {{-- <img src="{{ !empty($other_sponsors[$counter]->image) ? asset($other_sponsors[$counter]->image) : '' }}"
                                            class="img-responsive center-block" style="max-width: 100px;"> --}}

                                    <img src="{{ $other_sponsors[$counter]->image ? ($other_sponsors[$counter]->image != '' ? asset($other_sponsors[$counter]->image) : '') : '' }}"
                                        alt="{{ $other_sponsors[$counter]->image ? ($other_sponsors[$counter]->image != '' ? asset($other_sponsors[$counter]->image) : '') : '' }}"
                                        class="img-responsive center-block" style="max-width: 100px;">

                                    </a>                                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @include('admin.components.input-field', ['label' => 'Alt Text', 'field' => 'chapter_alt_text[]', 'value' => isset($other_sponsors[$counter]->image_alt) ? $other_sponsors[$counter]->image_alt : ''])
                    @include('admin.components.input-field', ['label' => 'Link', 'field' => 'chapter_link[]', 'value' => isset($other_sponsors[$counter]->link) ? $other_sponsors[$counter]->link : ''])

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="delete">&nbsp;
                                    <input type="hidden" name="sponsor_id[]" value="{{$counter}}">
                                </label>
                                <div class="col-md-10">
                                    <input type="button" name="hide" id="remove{{$counter}}" onclick="$('#sponsor-row'+{{$counter}}).remove();" value="Remove{{--$counter--}}">
                               </div>
                            </div>
                        </div>
                    </div>


                    {{-- <!-- <div class="row">
                        <div class="col-md-3 col-md-offset-3">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="chapter_alt_text[]">Alt Text</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control valid" id="chapter_alt_text[]" name="chapter_alt_text[]" value="{{ isset($other_sponsors[$counter]->image_alt) ? $other_sponsors[$counter]->image_alt : '' }}" placeholder="Enter Alt Text.." aria-invalid="false">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="chapter_link[]">Link</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control valid" id="chapter_link[]" name="chapter_link[]" value="{{ isset($other_sponsors[$counter]->link) ? $other_sponsors[$counter]->link : '' }}" placeholder="Enter URL Link.." aria-invalid="false">
                                </div>
                            </div>
                        </div>
                    </div> --> --}}



                    @if (!($counter == count($other_sponsors)))
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                    </div>
                    @endif 
                </div>
                @endfor

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
                                            Choose File <input type="file" name="chapter_sponsor_image[]" style="display: none;" onchange="document.getElementById('image_chapter_sponsor').value =this.files[0].name">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" id="image_chapter_sponsor" readonly>
                                    </div>
                                </div>

                                <label class="col-md-2 control-label" for="chapter_sponsor">Alt Text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="chapter_alt_text[]" value="" placeholder="Enter Alt Text..">
                                </div>


                                <label class="col-md-2 control-label" for="chapter_sponsor">Link</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="chapter_link[]" value="" placeholder="Enter Link..">
                                </div>

    <!--                             <div class="row col-md-10">
                                    <div class="col-md-3 col-md-offset-3">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="chapter_alt_text[]">Alt Text</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control valid" id="chapter_alt_text[]" name="chapter_alt_text[]" value="{{ isset($other_sponsors[$counter]->image_alt) ? $other_sponsors[$counter]->image_alt : '' }}" placeholder="Enter Alt Text.." aria-invalid="false">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="chapter_link[]">Link</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control valid" id="chapter_link[]" name="chapter_link[]" value="{{ isset($other_sponsors[$counter]->link) ? $other_sponsors[$counter]->link : '' }}" placeholder="Enter URL Link.." aria-invalid="false">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                <hr>
                        </div>
                    </div>

                </div>
