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

        @elseif ($page['slug'] == 'events-detail')
            @include('front.pages.custom-page.events-detail')


        @elseif ($page['slug'] == 'dashboard')
            @include('front.pages.custom-page.dashboard')
          

        @else
            @include('front.pages.custom-page.default-page')
        @endif
    @else
        @include('front.pages.custom-page.home')
    @endif
@endsection
