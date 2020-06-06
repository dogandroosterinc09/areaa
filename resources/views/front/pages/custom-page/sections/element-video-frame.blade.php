<div class="html-video">
    @if($chapter_home->who_we_are_featured_video)
        <div class="html-video__button">
            <button class="active">play</button>
        </div>
        <video id="video" width="100%" height="100%" poster="{{ asset($chapter_home->who_we_are_video_cover_image) }}" loop muted controlsList="nodownload" webkitallowfullscreen mozallowfullscreen allowfullscreen>
            <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
            <source type="video/mp4" src="{{ asset($chapter_home->who_we_are_featured_video) }}" />
            {{--
            <source type="video/mp4" src="{{ url('public/images/AREAACentralNewJersey.mp4') }}" />
            <source type="video/ogg" src="{{ url('public/images/AREAACentralNewJersey.ogg') }}" />
            <source type="video/webm" src="{{ url('public/images/AREAACentralNewJersey.webm') }}" />
            --}}
            <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
            <object width="100%" height="400" type="application/x-shockwave-flash" data="flashmediaelement.swf">
                <param name="movie" value="flashmediaelement.swf" />
                <param name="flashvars" value="controls=false&file={{ url('public/images/video-cover.jpg') }}" />
                <!-- Image as a last resort -->
                <img src="{{ url('public/images/video-cover.jpg') }}" width="320" height="240" title="No video playback capabilities" />
            </object>
        </video> 
</div>   