@extends('front.layouts.base')

@section('content')
    @if (!empty($page))
        <?php $item = $page; ?>
        {{-- need to be updated to live slugs or by page type --}}
        @if ($page['slug'] == 'home')
            @include('front.pages.custom-page.home')
        @elseif ($page['slug'] == 'contact-us')
            @include('front.pages.custom-page.contact-us')

        @elseif ($page['slug'] == 'about-us')
            @include('front.pages.custom-page.about-us')

        @elseif ($page['slug'] == 'executive-board')
            @include('front.pages.custom-page.executive-board')

        @elseif ($page['slug'] == 'delegate-board')
            @include('front.pages.custom-page.delegate-board')
        
        @elseif ($page['slug'] == 'board-detail')
            @include('front.pages.custom-page.board-detail')

        @elseif ($page['slug'] == 'events')
            @include('front.pages.custom-page.events')

        @elseif ($page['slug'] == 'events-chapter')
            @include('front.pages.custom-page.events-chapter')

        @elseif ($page['slug'] == 'events-detail')
            @include('front.pages.custom-page.events-detail')

        @elseif ($page['slug'] == 'events-register')
            @include('front.pages.custom-page.events-register')

        @elseif ($page['slug'] == 'FAQ')
            @include('front.pages.custom-page.FAQ')

        @elseif ($page['slug'] == 'media')
            @include('front.pages.custom-page.media')

        @elseif ($page['slug'] == 'photo-gallery')
            @include('front.pages.custom-page.photo-gallery')

        @elseif ($page['slug'] == 'areabenefits') 
            @include('front.pages.custom-page.areabenefits')

         @elseif ($page['slug'] == 'membership-registration') 
            @include('front.pages.custom-page.membership-registration')


            {{-- chapters --}}
        @elseif ($page['slug'] == 'chapter-homepage') 
            @include('front.pages.custom-page.chapter-homepage')


        @elseif ($page['slug'] == 'dashboard')
            @include('front.pages.custom-page.dashboard')

         @elseif ($page['slug'] == 'dashboard-main')
            @include('front.pages.custom-page.dashboard-main')


        @elseif ($page['slug'] == 'dashboard-profile') 
            @include('front.pages.custom-page.dashboard-profile')

        @elseif ($page['slug'] == 'dashboard-events-login')
            @include('front.pages.custom-page.dashboard-events-login')

        @elseif ($page['slug'] == 'sponsors')
            @include('front.pages.custom-page.sponsors')

        @elseif ($page['slug'] == 'our-partners')
            @include('front.pages.custom-page.our-partners')


        @elseif ($page['slug'] == 'chapter')
            @include('front.pages.custom-page.chapter')
        
        @elseif ($page['slug'] == 'chapter-aboutus')
            @include('front.pages.custom-page.chapter-aboutus')

        @elseif ($page['slug'] == 'chapter-event-detail')
            @include('front.pages.custom-page.chapter-event-detail')

        @elseif ($page['slug'] == 'chapter-events')
            @include('front.pages.custom-page.chapter-events')
            
        @elseif ($page['slug'] == 'chapter-contactus')
            @include('front.pages.custom-page.chapter-contactus')

        @elseif ($page['slug'] == 'chapter-leadership')
            @include('front.pages.custom-page.chapter-leadership')

        @elseif ($page['slug'] == 'chapter-leadership-detail')
            @include('front.pages.custom-page.chapter-leadership-detail')

        @elseif ($page['slug'] == 'chapter-our-story')
            @include('front.pages.custom-page.chapter-our-story')

        @elseif ($page['slug'] == 'chapter-login')
            @include('front.pages.custom-page.chapter-login')
            

        @elseif ($page['slug'] == 'resource-page')
            @include('front.pages.custom-page.resource-page')
            
        @elseif ($page['slug'] == 'resource-asia-america-report')
            @include('front.pages.custom-page.resource-asia-america-report')



        {{-- @elseif ($page['slug'] == 'aloha')
            @include('front.pages.custom-page-chapters.aloha') 

        @elseif ($page['slug'] == 'aloha-login')
            @include('front.pages.custom-page-chapters.aloha-login')

        @elseif ($page['slug'] == 'aloha-events')
            @include('front.pages.custom-page-chapters.aloha-events')
        
        @elseif ($page['slug'] == 'aloha-events-detail')
            @include('front.pages.custom-page-chapters.aloha-events-detail')

        @elseif ($page['slug'] == 'aloha-leadership')
            @include('front.pages.custom-page-chapters.aloha-leadership')

        @elseif ($page['slug'] == 'aloha-leadership-detail')
            @include('front.pages.custom-page-chapters.aloha-leadership-detail')

        @elseif ($page['slug'] == 'aloha-contactus')
            @include('front.pages.custom-page-chapters.aloha-contactus')

        @elseif ($page['slug'] == 'aloha-aboutus')
            @include('front.pages.custom-page-chapters.aloha-aboutus')
        --}}




         {{-- @elseif ($page['slug'] == 'newyorkeast')
            @include('front.pages.custom-page-chapters.newyorkeast')
        
        @elseif ($page['slug'] == 'newyorkeast-login')
            @include('front.pages.custom-page-chapters.newyorkeast-login')

        @elseif ($page['slug'] == 'newyorkeast-events')
            @include('front.pages.custom-page-chapters.newyorkeast-events')

        @elseif ($page['slug'] == 'newyorkeast-events-detail')
            @include('front.pages.custom-page-chapters.newyorkeast-events-detail')

        @elseif ($page['slug'] == 'newyorkeast-leadership')
            @include('front.pages.custom-page-chapters.newyorkeast-leadership')

        @elseif ($page['slug'] == 'newyorkeast-leadership-detail')
            @include('front.pages.custom-page-chapters.newyorkeast-leadership-detail')
        --}}
        
        
        @elseif ($page['slug'] == 'newyorkeast-contactus')
            @include('front.pages.custom-page-chapters.newyorkeast-contactus')

        @elseif ($page['slug'] == 'newyorkeast-aboutus')
            @include('front.pages.custom-page-chapters.newyorkeast-aboutus')


        @elseif ($page['slug'] == 'support')
            @include('front.pages.custom-page-chapters.support')


        @elseif ($page['slug'] == 'dashboard-events-login')
            @include('front.pages.custom-page.dashboard-events-login')
        


        {{-- @elseif ($page['slug'] == 'atlantametro')
            @include('front.pages.custom-page-chapters.atlantametro')
        
        @elseif ($page['slug'] == 'atlantametro-login')
            @include('front.pages.custom-page-chapters.atlantametro-login')

        @elseif ($page['slug'] == 'atlantametro-events')
            @include('front.pages.custom-page-chapters.atlantametro-events')

        @elseif ($page['slug'] == 'atlantametro-events-detail')
            @include('front.pages.custom-page-chapters.atlantametro-events-detail')

        @elseif ($page['slug'] == 'atlantametro-leadership')
            @include('front.pages.custom-page-chapters.atlantametro-leadership')

        @elseif ($page['slug'] == 'atlantametro-leadership-detail')
            @include('front.pages.custom-page-chapters.atlantametro-leadership-detail')
        
        @elseif ($page['slug'] == 'atlantametro-contactus')
            @include('front.pages.custom-page-chapters.atlantametro-contactus')

        @elseif ($page['slug'] == 'atlantametro-aboutus')
            @include('front.pages.custom-page-chapters.atlantametro-aboutus')


        @elseif ($page['slug'] == 'dashboard-memberdirectory')
            @include('front.pages.custom-page.dashboard-memberdirectory')
            
        @elseif ($page['slug'] == 'dashboard-memberdirectory-detail')
            @include('front.pages.custom-page.dashboard-memberdirectory-detail')

        @elseif ($page['slug'] == 'dashboard-support')
            @include('front.pages.custom-page.dashboard-support')
        
        @else
            @include('front.pages.custom-page.default-page')
        @endif
    @else
        @if ( \App\Models\Chapter::where('slug', $chapter['slug']) )            
            @include('front.pages.custom-page.chapter-homepage')            
        @else
            @include('front.pages.custom-page.home')
        @endif
    @endif
@endsection
