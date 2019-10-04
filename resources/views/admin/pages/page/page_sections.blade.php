@if (!empty($page))
    @foreach($page->page_sections()->orderBy('position', 'ASC')->get() as $section)
        @if ($section->type == 'textarea')
            <div class="form-group{{ $errors->has($section->section) ? ' has-error' : '' }}">
                <label class="col-md-3 control-label"
                       for="page_sections[{{ $section->id }}]">{{ ucwords(str_replace('_', ' ', $section->section)) }}</label>
                <div class="col-md-9">
                                    <textarea id="page_sections[{{ $section->id }}]"
                                              name="page_sections[{{ $section->id }}]" rows="9"
                                              class="form-control" style="resize: vertical; min-height: 150px;"
                                              placeholder="Enter page {{ str_replace('_', ' ', $section->section) }}..">{!! $section->content !!}</textarea>
                </div>
            </div>
        @elseif ($section->type == 'ckeditor')
            <div class="form-group{{ $errors->has($section->section) ? ' has-error' : '' }}">
                <label class="col-md-3 control-label"
                       for="page_sections[{{ $section->id }}]">{{ ucwords(str_replace('_', ' ', $section->section)) }}</label>
                <div class="col-md-9">
                                <textarea id="page_sections[{{ $section->id }}]"
                                          name="page_sections[{{ $section->id }}]" rows="9"
                                          class="form-control ckeditor"
                                          placeholder="Enter page {{ str_replace('_', ' ', $section->section) }}..">{!! $section->content !!}</textarea>
                </div>
            </div>
        @elseif ($section->type == 'input')
            <div class="form-group{{ $errors->has($section->section) ? ' has-error' : '' }}">
                <label class="col-md-3 control-label"
                       for="page_sections[{{ $section->id }}]">{{ ucwords(str_replace('_', ' ', $section->section)) }}</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="page_sections[{{ $section->id }}]"
                           name="page_sections[{{ $section->id }}]"
                           placeholder="Enter page {{ str_replace('_', ' ', $section->section) }}.."
                           value="{{ $section->content }}">
                </div>
            </div>
        @elseif ($section->type == 'file')
            @php
                $ext = pathinfo(asset($section->content), PATHINFO_EXTENSION);
            @endphp
            <div class="form-group{{ $errors->has($section->section) ? ' has-error' : '' }}">
                <label class="col-md-3 control-label"
                       for="page_sections[{{ $section->id }}]">{{ ucwords(str_replace('_', ' ', $section->section)) }}</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <label class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Choose File <input type="file" name="page_sections[{{ $section->id }}]"
                                                                       style="display: none;" data-file-type="{{ $ext }}">
                                                </span>
                        </label>
                        <input type="text" class="form-control" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"
                       for="page_sections[{{ $section->id }}]">&nbsp;</label>
                <div class="col-md-9">
                    @if ($ext == 'pdf' || $ext == 'doc' || $ext == 'docx')
                        <a target="_blank" href="{{ asset($section->content) }}" class="file-anchor">
                            {{ $section->content }}
                        </a>
                    @else
                        <a href="{{ asset($section->content) }}" class="zoom img-thumbnail"
                           style="cursor: default !important;" data-toggle="lightbox-image">
                            <img src="{{ asset($section->content) }}" alt="{{ $section->content}}" onerror="this.src='{{ asset(config('constants.placeholder_image')) }}'"
                                 class="img-responsive center-block" style="max-width: 100px;">
                        </a>
                    @endif
                </div>
            </div>
        @endif
        @if($errors->has($section->section))
            <span class="help-block animation-slideDown">{{ $errors->first($section->section) }}</span>
        @endif
    @endforeach
@endif