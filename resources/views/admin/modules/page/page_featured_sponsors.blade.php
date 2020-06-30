                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 style="border-left: 3px solid #61dbd5; padding-left: 8px; margin-bottom: 20px;"><input type='button' value='Add Featured Sponsors' id='addSponsor' class="btn btn-sm btn-primary"></h4>
                        <div class="form-group">
                            <div class="col-md-10">
                                {{-- <small>* By selected <strong>No Category</strong> - Sponsor will be removed when Saved.</small> --}}
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

                // Sample Data saved in table 'page' with 'id=1' field 'other_section' / for Featured sponsors in home page
                // $page->other_section = '[{"title":"ruby","image":"public\/uploads\/sponsor1-1587071957-1591402616.jpg","link":"chapter title"},{"title":"emerald","image":"public\/uploads\/sponsor2-1587071957.jpg","link":"chapter title"},{"title":"diamond","image":"public\/uploads\/sponsor3-1587071957.jpg","link":"chapter title"}]';
                ?>

            @if($page->other_section)

                @php($feat_sponsors = json_decode($page->other_section))

                @for($counter = 0; $counter < count($feat_sponsors); $counter++)
                    <div id="feat_sponsor-row{{$counter}}">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group{{ $errors->has('feat_sponsor_image') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label" for="feat_sponsor_image[]">Images</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Choose File <input type="file" name="feat_sponsor_image[]" style="display: none;" onchange="document.getElementById('image_feat_sponsor[{{$counter}}]').value =this.files[0].name">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" id="image_feat_sponsor[{{$counter}}]" readonly>
                                    </div>
                                    @if($errors->has('image'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-offset-2 col-md-10">
                                    <a href="{{ !empty($feat_sponsors[$counter]->image) ? asset($feat_sponsors[$counter]->image) : '' }}" class="zoom img-thumbnail" style="cursor: default !important;" data-toggle="lightbox-image">
                                        {{-- <img src="{{ !empty($feat_sponsors[$counter]->image) ? asset($feat_sponsors[$counter]->image) : '' }}"
                                            class="img-responsive center-block" style="max-width: 100px;"> --}}

                                    <img src="{{ $feat_sponsors[$counter]->image ? ($feat_sponsors[$counter]->image != '' ? asset($feat_sponsors[$counter]->image) : '') : '' }}"
                                        alt="{{ $feat_sponsors[$counter]->image ? ($feat_sponsors[$counter]->image != '' ? asset($feat_sponsors[$counter]->image) : '') : '' }}"
                                        class="img-responsive center-block" style="max-width: 100px;">

                                    </a>                                
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('admin.components.input-field', ['label' => 'Title', 'field' => 'feat_sponsor_title[]', 'value' => isset($feat_sponsors[$counter]->title) ? $feat_sponsors[$counter]->title : ''])

                    @include('admin.components.input-field', ['label' => 'Link', 'field' => 'feat_sponsor_link[]', 'value' => isset($feat_sponsors[$counter]->link) ? $feat_sponsors[$counter]->link : ''])

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="delete">&nbsp;</label>
                                <div class="col-md-10">
                                    <input type="button" name="hide" id="remove{{$counter}}" onclick="$('#feat_sponsor-row'+{{$counter}}).remove();" value="Remove{{--$counter--}}">
                               </div>
                            </div>
                        </div>
                    </div>

                    @if (!($counter == count($feat_sponsors)))
                    <div class="col-md-8 col-md-offset-2">
                        <hr>
                    </div>
                    @endif 
                </div>
                @endfor

            @endif

                <div id="featSponsorGroup">
                    <div class="row" id="featSponsorDiv">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">

                                <label class="col-md-2 control-label" for="feat_sponsor">Image</label>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Choose File <input type="file" name="feat_sponsor_image[]" style="display: none;" onchange="document.getElementById('image_feat_sponsor').value =this.files[0].name">
                                        </span>
                                        </label>
                                        <input type="text" class="form-control" id="image_feat_sponsor" readonly>
                                    </div>
                                </div>

                                <label class="col-md-2 control-label" for="feat_sponsor">Title</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="feat_sponsor_title[]" value="">
                                </div>

                                <label class="col-md-2 control-label" for="feat_sponsor">Link</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="feat_sponsor_link[]" value="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                