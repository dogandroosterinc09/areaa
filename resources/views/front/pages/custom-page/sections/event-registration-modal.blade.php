<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    {{  Form::open([
        'method' => 'POST',
        'id' => '',
        'route' => ['event.register'],
        'class' => ''
        ])
    }}
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                    <input type="text" id="first_name" name="first_name" class="form-control input-lg"
                            placeholder="First name"
                            value="{{ old('first_name') }}" autofocus>
                </div>
                @if ($errors->has('first_name'))
                    <span id="first_name-error" class="help-block animation-slideDown">
                    {{ $errors->first('first_name') }}
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                    <input type="text" id="last_name" name="last_name" class="form-control input-lg"
                            placeholder="Last name"
                            value="{{ old('last_name') }}" autofocus>
                </div>
                @if ($errors->has('last_name'))
                    <span id="last_name-error" class="help-block animation-slideDown">
                    {{ $errors->first('last_name') }}
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                    <input type="text" id="email" name="email" class="form-control input-lg"
                            placeholder="Email"
                            value="{{ old('email') }}" autofocus>
                </div>
                @if ($errors->has('email'))
                    <span id="email-error" class="help-block animation-slideDown">
                    {{ $errors->first('email') }}
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                    <input type="text" id="phone" name="phone" class="form-control input-lg"
                            placeholder="Phone Number"
                            value="{{ old('phone') }}" autofocus>
                </div>
                @if ($errors->has('phone'))
                    <span id="phone-error" class="help-block animation-slideDown">
                    {{ $errors->first('phone') }}
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('is_member') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>                    
                    <select id="is_member" name="is_member" class="form-control input-lg">
                        <option value="">Are you a member?</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                @if ($errors->has('is_member'))
                    <span id="is_member-error" class="help-block animation-slideDown">
                    {{ $errors->first('is_member') }}
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('member_chapter_id') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>                    
                    <select id="member_chapter_id" name="member_chapter_id" class="form-control input-lg">
                        <option value="">Select Chapter</option>
                        @foreach(\App\Models\Chapter::all() as $chapter)
                        <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                        @endforeach                        
                    </select>
                </div>
                @if ($errors->has('member_chapter_id'))
                    <span id="member_chapter_id-error" class="help-block animation-slideDown">
                    {{ $errors->first('member_chapter_id') }}
                </span>
                @endif
            </div>
        </div>
        <input type="hidden" name="event_id" value="{{ isset($event) ? $event->id : '' }}">
        <input type="hidden" name="chapter_event_id" value="{{ isset($chapter_event) ? $chapter_event->id : '' }}">
      </div>
      <div class="modal-footer">        
        <button type="submit" class="btn btn--secondary">Submit</button>
      </div>
    {{ Form::close() }}
    </div>
  </div>
</div>