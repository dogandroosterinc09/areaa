<section class="page page--areaa-benefit">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">                            
                            {!! $page->content !!}
                            <!-- <h3>AREAA</h3>
                            <h1>Benefits</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-banner__image image-background">
            <img src="{{ url($page->attachment) }}">
            <!-- <img src="{{ url('public/images/benefits-banner.jpg') }}"> -->
        </div>
    </section>


    <main class="main-content">

        <section data-aos="fade-up">
            <div class="container-max">
               <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="benefit-message">
                        <p>
                        {{ section('Benefits Section 1.data.first.content') }}
                        </p>
                            <!-- <p>With over 17,000 members in 41 chapters across the US and Canada, AREAA is the largest Asian American and Pacific Islander (AAPI) trade organization in North America. As a member, you’ll receive discounted pricing to all AREAA events, FREE webinar training to help fine-tune your skill sets, and be able to participate in International Trade missions. The benefits don’t stop there; below are more reasons as to why it pays to be an AREAA Member.
                            </p> -->
                        </div>
                    </div>

                    <div class="col-lg-12">

                        <div class="side-tab-container">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="side-tab-container__tab">
                                            <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
                                                @foreach(\App\Models\BenefitsCategories::all() as $benefits_category)
                                                @php( $category_slug = str_slug($benefits_category->name) )
                                                <li class="nav-item">
                                                  <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="sidetab-{{ $category_slug }}" data-toggle="tab" href="#sidetab-box-{{ $category_slug }}" role="tab" aria-controls="sidetab-box-{{ $category_slug }}"
                                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $benefits_category->name }} <i class="fas fa-arrow-right"></i></a>
                                                </li>
                                                @endforeach

                                                {{-- <li class="nav-item">
                                                  <a class="nav-link active" id="sidetab-one" data-toggle="tab" href="#sidetab-box-one" role="tab" aria-controls="sidetab-box-one"
                                                    aria-selected="true">Travel & Automotive <i class="fas fa-arrow-right"></i></a>
                                                </li>
                                                <li class="nav-item"> 
                                                  <a class="nav-link" id="sidetab-two" data-toggle="tab" href="#sidetab-box-two" role="tab" aria-controls="sidetab-box-two"
                                                    aria-selected="false">Risk Management <i class="fas fa-arrow-right"></i></a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" id="sidetab-three" data-toggle="tab" href="#sidetab-box-three" role="tab" aria-controls="sidetab-box-three"
                                                    aria-selected="false">Office Supplies & Services <i class="fas fa-arrow-right"></i></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="sidetab-four" data-toggle="tab" href="#sidetab-box-four" role="tab" aria-controls="sidetab-box-four"
                                                      aria-selected="false">Transaction Management <i class="fas fa-arrow-right"></i></a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link" id="sidetab-five" data-toggle="tab" href="#sidetab-box-five" role="tab" aria-controls="sidetab-box-five"
                                                      aria-selected="false">Marketing Tools <i class="fas fa-arrow-right"></i></a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link" id="sidetab-six" data-toggle="tab" href="#sidetab-box-six" role="tab" aria-controls="sidetab-box-six"
                                                      aria-selected="false">Gifting <i class="fas fa-arrow-right"></i></a>
                                                  </li> --}}
                                              </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-9">

                                        {{-- tab-content --}}
                                        <div class="tab-content side-tab-container__content" id="myTabContentMD">
                                            
                                            @foreach(\App\Models\BenefitsCategories::all() as $benefits_category)
                                            @php( $category_slug = str_slug($benefits_category->name) )
                                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="sidetab-box-{{ $category_slug }}" role="tabpanel" aria-labelledby="sidetab-{{ $category_slug }}">
                                                <div class="row">
                                                    @foreach(\App\Models\Benefits::where('category_id',$benefits_category->id)->get() as $benefit)
                                                    <div class="col-md-4">
                                                        <div class="image-thumbnail-hover">
                                                            <div class="image-thumbnail-hover__image image-background">
                                                                <img src="{{ asset($benefit->thumbnail) }}" class="img-fluid">
                                                                <div class="image-thumbnail-hover__overlay">
                                                                    <a data-id="{{ $benefit->id }}"  href="{{ !empty($benefit->external_link) ? url($benefit->external_link) : 'javascript:void(0)' }}" target="{{ !empty($benefit->external_link) ? '_blank' : '' }}" class="btn btn--view-detail"> View Details</a>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="image-thumbnail-hover__content">
                                                                <h4>{{ $benefit->name }}</h4>
                                                                <p>{{ $benefit->short_description }}</p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endforeach

                                            {{-- <div class="tab-pane fade show active" id="sidetab-box-one" role="tabpanel" aria-labelledby="sidetab-one">
                                                @include('front.pages.custom-page.sections.sidetab-thumbnail')
                                            </div>
                                            <div class="tab-pane fade" id="sidetab-box-two" role="tabpanel" aria-labelledby="sidetab-two">
                                                @include('front.pages.custom-page.sections.sidetab-thumbnail-riskmanagement')
                                            </div>
                                            <div class="tab-pane fade" id="sidetab-box-three" role="tabpanel" aria-labelledby="sidetab-three">
                                                @include('front.pages.custom-page.sections.sidetab-thumbnail-office')
                                            </div>
                                            <div class="tab-pane fade" id="sidetab-box-four" role="tabpanel" aria-labelledby="sidetab-four">
                                                @include('front.pages.custom-page.sections.sidetab-thumbnail-transaction')
                                            </div>
                                            <div class="tab-pane fade" id="sidetab-box-five" role="tabpanel" aria-labelledby="sidetab-five">
                                                @include('front.pages.custom-page.sections.sidetab-thumbnail-marketing')
                                            </div>
                                            <div class="tab-pane fade" id="sidetab-box-six" role="tabpanel" aria-labelledby="sidetab-six">
                                                @include('front.pages.custom-page.sections.sidetab-thumbnail-gifting')
                                            </div> --}}
                                        </div>
                                        {{-- tab-content --}}

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


               </div>           
            </div>
        </section>


        {{-- need to dynamic this sub  --}}
        <section class="white-cover membership-slider" data-aos="fade-up">
            <div class="white-cover__wrapper container-max">
                <div class="white-cover__item">
                    <div class="container-max">
                        <div class="row">
                            <div class="col-md-6 content-middle">

                                <div class="white-cover__content">
                                    {!! section('Benefits Section 2.data.first.content') !!}
                                    <!-- <h2>Your Membership <br>
                                        Could Help Pay For <br>
                                         Itself</h2>
                                        <p>When you’re getting discounts on everyday purchases all year, the savings can really add up.
                                        </p> -->
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="slider-mask">
                                    <div class="slider-mask__slick">
                                        
                                        <div class="slider-mask__slick--item">
                                            <div class="slider-mask__image image-background">    
                                                <img src="{{ url(section('Benefits Section 2.data.first.image')) }}">
                                            </div>
                                            <div class="slider-mask__text"> 
                                                
                                                <div class="slider-mask__text--content">
                                                    {!! section('Benefits Section 2.data.first.quote') !!}
                                                    <!-- “Hazel Rosete referred me to Darell and my experience with ADT was nothing short from outstanding. Darell was very transparent with services and costs and also very generous with discounts because of the partnership with AREAA. The installer was punctual and informative. I was very happy and satisfied with the services provided.”

                                                    <div class="slider-mask__text--name">
                                                        <h6>
                                                            Eric Tai</h6>
                                                            <p>San Diego Chapter</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider-mask__slick--item">
                                            <div class="slider-mask__image image-background">    
                                                <img src="{{ url('public/images/testimonial-image.png') }}">
                                            </div>
                                            <div class="slider-mask__text"> 
                                                <div class="slider-mask__text--content">
                                                    {!! section('Benefits Section 2.data.first.quote') !!}
                                                    <!-- “Hazel Rosete referred me to Darell and my experience with ADT was nothing short from outstanding. Darell was very transparent with services and costs and also very generous with discounts because of the partnership with AREAA. The installer was punctual and informative. I was very happy and satisfied with the services provided.”

                                                    <div class="slider-mask__text--name">
                                                        <h6>
                                                            Eric Tai</h6>
                                                            <p>San Diego Chapter</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section data-aos="fade-up">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-12">
                      

                        <div class="side-tab-equal">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-5 side-tab-equal__left">
                                        <div class="side-tab-equal__tab">
                                            <ul class="nav nav-tabs md-tabs" id="myEqualTab" role="tablist">
                                                @foreach(section('Benefits Section 3 List Items.data') as $item)
                                                <li class="nav-item">                                                    
                                                    <a class="nav-link" id="sidetab-equal-one" data-toggle="tab" href="#sidetab-equal-box-one" role="tab" aria-controls="sidetab-equal-box-one"
                                                    aria-selected="true">
                                                        <h3>{{ $item->title }}</h3>
                                                        <p>{{ $item->sub_title }}</p>
                                                    </a>
                                                </li>
                                                @endforeach
                                                <!-- <li class="nav-item">
                                                  <a class="nav-link" id="sidetab-equal-one" data-toggle="tab" href="#sidetab-equal-box-one" role="tab" aria-controls="sidetab-equal-box-one"
                                                    aria-selected="true">
                                                    <h3>$14 Off Concerts</h3>
                                                    <p>Ticket value of $200. </p>
                                                </a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" id="sidetab-equal-two" data-toggle="tab" href="#sidetab-equal-box-two" role="tab" aria-controls="sidetab-equal-box-two"
                                                    aria-selected="false">
                                                    <h3>$50 Off Anniversary Gifts</h3>
                                                    <p>Gift value of $149 . </p>
                                                </a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" id="sidetab-equalb-three" data-toggle="tab" href="#sidetab-equal-box-three" role="tab" aria-controls="sidetab-equal-box-three"
                                                    aria-selected="false">
                                                    <h3>$129 Off Cell Phone Bill</h3>
                                                    <p>Total annual amount off </p>
                                                </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="sidetab-equalb-four" data-toggle="tab" href="#sidetab-equal-box-four" role="tab" aria-controls="sidetab-equal-box-four"
                                                      aria-selected="false">
                                                      <h3>$150 Off Car Insurance</h3>
                                                      <p>Total annual amount off
                                                    </p>
                                                  </a>
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link" id="sidetab-equalb-five" data-toggle="tab" href="#sidetab-equal-box-five" role="tab" aria-controls="sidetab-equal-box-five"
                                                      aria-selected="false">
                                                      <h3>$24.95 Identity Theft Protection</h3>
                                                      <p>Total value of $299.14. </p>
                                                  </a>
                                                  </li> -->
                                              </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-2 side-tab-equal__middle content-middle">
                                        <div class="arrow-pointer">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>

                                    <div class="col-md-5 side-tab-equal__right content-middle">

                                        {{-- tab-content --}}
                                        <div class="tab-content side-tab-equal__content" id="side-tab-equal">
                                            <div class="tab-pane fade show active" id="sidetab-equal-box-one" role="tabpanel" aria-labelledby="sidetab-equal-one">
                                              
                                                {{-- red-box --}}
                                                <div class="red-box">
                                                     <div class="red-box__wrapper">
                                                         <div class="red-box__top">
                                                            {!! section('Benefits Section 3 Right Content.data.first.content') !!}
                                                            <!-- <p>Annual Savings</p>
                                                            <h4>$376.95</h4>
                                                            <p>Total Savings After <br>
                                                               AREAA $99 Membership</p>
                                                            <h4>$268.95</h4> -->
                                                         </div>
                                                         <div class="red-box__bottom">
                                                            <a href="{{url( section('Benefits Section 3 Right Content.data.first.button_link') )}}" class="btn btn--primary">{{ section('Benefits Section 3 Right Content.data.first.button_text') }}</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 {{-- red-box --}}

                                            </div>
                                            <!-- <div class="tab-pane fade show active" id="sidetab-equal-box-one" role="tabpanel" aria-labelledby="sidetab-equal-one">
                                              
                                                {{-- red-box --}}
                                                <div class="red-box">
                                                     <div class="red-box__wrapper">
                                                         <div class="red-box__top">
                                                            <p>Annual Savings</p>
                                                            <h4>$376.95</h4>
                                                            <p>Total Savings After <br>
                                                               AREAA $99 Membership</p>
                                                           <h4>$268.95</h4>
                                                         </div>
                                                         <div class="red-box__bottom">
                                                            <a href="{{url('membership-registration')}}" class="btn btn--primary"> Become a Member Today !</a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 {{-- red-box --}}

                                            </div> -->
                                            <!-- <div class="tab-pane fade" id="sidetab-equal-box-two" role="tabpanel" aria-labelledby="sidetab-equaltwo">
                                                
                                                {{-- red-box --}}
                                                 <div class="red-box">
                                                    <div class="red-box__wrapper">
                                                        <div class="red-box__top">
                                                           <p>Annual Savings</p>
                                                           <h4>$36.95</h4>
                                                           <p>Total Savings After <br>
                                                              AREAA $99 Membership</p>
                                                          <h4>$28.95</h4>
                                                        </div>
                                                        <div class="red-box__bottom">
                                                           <a href="#" class="btn btn--primary"> Become a Member Today !</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- red-box --}}

                                            </div>
                                            <div class="tab-pane fade" id="sidetab-equal-box-three" role="tabpanel" aria-labelledby="sidetab-equal-three">
                                                
                                                {{-- red-box --}}
                                                <div class="red-box">
                                                    <div class="red-box__wrapper">
                                                        <div class="red-box__top">
                                                           <p>Annual Savings</p>
                                                           <h4>$76.95</h4>
                                                           <p>Total Savings After <br>
                                                              AREAA $99 Membership</p>
                                                          <h4>$68.95</h4>
                                                        </div>
                                                        <div class="red-box__bottom">
                                                           <a href="{{url('membership-registration')}}" class="btn btn--primary"> Become a Member Today !</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- red-box --}}

                                            </div>


                                            <div class="tab-pane fade" id="sidetab-equal-box-four" role="tabpanel" aria-labelledby="sidetab-equal-four">
                                                
                                                {{-- red-box --}}
                                                <div class="red-box">
                                                    <div class="red-box__wrapper">
                                                        <div class="red-box__top">
                                                           <p>Annual Savings</p>
                                                           <h4>$37.95</h4>
                                                           <p>Total Savings After <br>
                                                              AREAA $99 Membership</p>
                                                          <h4>$26.95</h4>
                                                        </div>
                                                        <div class="red-box__bottom">
                                                           <a href="{{url('membership-registration')}}" class="btn btn--primary"> Become a Member Today !</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- red-box --}}

                                            </div>

                                            <div class="tab-pane fade" id="sidetab-equal-box-five" role="tabpanel" aria-labelledby="sidetab-equal-five">
                                                
                                                {{-- red-box --}}
                                                <div class="red-box">
                                                    <div class="red-box__wrapper">
                                                        <div class="red-box__top">
                                                           <p>Annual Savings</p>
                                                           <h4>$376.95</h4>
                                                           <p>Total Savings After <br>
                                                              AREAA $99 Membership</p>
                                                          <h4>$268.95</h4>
                                                        </div>
                                                        <div class="red-box__bottom">
                                                           <a href="{{url('membership-registration')}}" class="btn btn--primary"> Become a Member Today !</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- red-box --}}

                                            </div> -->


                                          </div>
                                         {{-- tab-content --}}

                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>


        @include('front.pages.custom-page.sections.follow-us')

    </main>

    @include('front.pages.custom-page.sections.modal-benefits')

    @include('front.layouts.sections.footer')
</section>

@push('extrascripts')
<script>
    $(function(){

        $('.image-thumbnail-hover__overlay a').on('click', function() {
            if ($(this).attr('href') == 'javascript:void(0)') {
                var id = $(this).attr('data-id');                
                $.ajax({
                type:'GET',
                url: '{{ route('benefit.get') }}',
                data:{                    
                    'id' : id
                },
                success:function(data) {
                    var result = JSON.parse(data);
                    $('.modal-title').html(result.name);
                    $('.modal-body').html(result.content);
                    $('#benefitModal').modal('show');    
                }
            });
            }
        });
        
    });
</script>
@endpush