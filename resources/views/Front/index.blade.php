@extends('Front.layouts.master')

@section('content')
    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input class="form-control" type="text" placeholder="type words then enter"/>
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
    </div>

    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pe-0 ps-0">
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1"
                 data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                @foreach ($settings->sliders as $slider)
                    <div class="slide bg-overlay bg-overlay-dark-slider-2">
                        <div class="bg-section">
                            <img src="{{ asset($slider) }}" alt="Background"/>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="slide-content">
                                        <h1 class="slide-headline">
                                            {{ trans_model($settings, 'title') }}
                                        </h1>
                                        <p class="slide-desc">
                                            {{ trans_model($settings, 'desc') }}
                                        </p>
                                        <div class="slide-action">
{{--                                            <a class="btn btn--primary" href="{{ route('service') }}">--}}
{{--                                                <span>@lang('site.our services')</span><i class="energia-arrow-right"></i></a>--}}
                                            <a
                                                class="btn btn--white justify-content-center"
                                                href="{{ route('about_us') }}">@lang('site.more_about_us')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="features-bar bg-overlay bg-overlay-theme3" id="featuresBar-1">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/3.jpg" alt="background"/>
        </div>
        <div class="container">
            <div class="row g-0 features-holder">
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-024-energy"></i>
                            <h5>@lang('site.save_your_money')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-009-ecology-1"></i>
                            <h5>@lang('site.five_stars_service')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-028-greenhouse"></i>
                            <h5>@lang('site.home_is_energy')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-026-world"></i>
                            <h5>@lang('site.consultation_planning')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-038-ecology"></i>
                            <h5>@lang('site.certified_engineers')</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i class="flaticon-003-fuel-1"></i>
                            <h5>@lang('site.unbeatable_pricing')</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="more-features more-features-2">
                    <p>@lang('site.Discover_of_solar')</p>
                    <a class="btn btn--bordered btn--white"
                       href="{{ route('service') }}">@lang('site.explore_our_plans')</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services services-2 bg-grey" id="services-2">
        <div class="container">
            <div class="heading heading-2">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="heading-title">
                            We Have Many Products That Cover Consumer Desires With The Highest Possible Quality.
                        </h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="heading-desc">
                            {!! trans_model($about,'desc') !!}
                        </p>
                        <div class="actions-holder">
                            <a class="btn btn--primary" href="{{ route('about_us') }}">
                                @lang('site.read_more')<i class="energia-arrow-right"></i></a><a
                                class="btn btn--bordered btn--white"
                                href="{{ route('service') }}">@lang('site.find_solution')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5 offset-lg-7">
                    <div class="more-services more-services-2">
                        <div class="rating" style="margin-left:30px">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>
                            <a href="javascript:void(0)"></a>
                            @lang('site.based_on') {{ \App\Models\Project::count() }} @lang('site.completed_projects')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about about-2" id="about-2">
        <div class="about-wrapper">
            <div class="video-wrapper">
                <div class="video video-2" id="video-2">
                    <div class="bg-section">
                        <img src="{{ asset('assets/front') }}/assets/images/sliders/3.jpg" alt="background"/>
                    </div>
                </div>
            </div>

            <div class="about-block-wrapper">
                <div class="about-block">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">
                            This Is The Most Common Question That We Are Asked
                        </p>
                        <h2 class="heading-title">
                            Quality, Accuracy And Confidence In Dealing Among Customers Is What Makes Our Customers Happy To Do Business With Us
                        </h2>
                        <p class="heading-desc">
                            {!! trans_model($about,'desc') !!}
                        </p>
                        <div class="signature-block">
                            <a class="btn btn--secondary" href="{{ route('about_us') }}">
                                @lang('site.read_more')<i
                                    class="energia-arrow-right"></i></a>
{{--                            <div class="signature-body">--}}
{{--                                <h6>michael brian</h6>--}}
{{--                                <p>co founder</p>--}}
{{--                                <img class="signature-img"--}}
{{--                                     src="{{ asset('assets/front') }}/assets/images/signature/1.png" alt="signature"/>--}}
{{--                            </div>--}}
                        </div>
                        <div class="advantages-list-holder">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p>
                                        {{ lang() == 'ar' ? 'كيف يمكننا تلبية الطلب المتزايد على الكهرباء في حين
                                         حماية مناخنا؟' : 'How can we meet the growing demand for electricity while
                                        protecting our climate?' }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <ul class="list-unstyled advantages-list">
                                        <li>{{ lang() == 'ar' ? 'موثوقة والأداء' : 'Reliabe and performance' }}</li>
                                        <li>{{ lang() == 'ar' ? 'التصنيع في الوقت المناسب' : 'In-time manufacturing' }}</li>
                                        <li>{{ lang() == 'ar' ? 'تمويل مواد الطاقة الشمسية' : 'Solar material financing' }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects projects-grid" id="projects-grid-1">
        <div class="container">
            <div class="heading heading-8">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">
                            All These Years, Our Different Services Have Delivered Long Lasting Innovation
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel owl-carousel carousel-dots carousel-navs" data-slide="4" data-slide-rs="1" data-center=""
             data-autoplay="true" data-nav="true" data-dots="true" data-space="" data-loop="false" data-speed="800">
            @foreach ($products as $product)
                <div>
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img">
                                <a class="link" href="{{ route('get.product', $product->id) }}"></a><img
                                    src="{{ asset($product->images[0]) }}" alt="project image"/>
                            </div>
                            <div class="project-content">
                                <div class="project-title">
                                    <h4>
                                        <a href="{{ route('get.product', $product->id) }}">{{ $product->title_en }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="projects-load-more">
                        <a class="btn btn--secondary" href="{{ route('product') }}">@lang('site.explore all products')
                            <i
                                class="energia-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="processes processes-1 bg-overlay bg-overlay-theme4" id="processes-1">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/wavy-pattern.png" alt="Background"/>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="block-right-holder">
                    <div class="heading heading-light heading-light2">
                        <p class="heading-subtitle">@lang('site.how it works!')</p>
                        <h2 class="heading-title">
                            We Are Seeking To Expand In The Field
                        </h2>
                    </div>
                    <div class="counters-holder">
                        <div class="counter counter-3">
                            <div class="counter-holder">
                                <div class="counter-num">
                                    <!-- Loop to get Years of  Experience-->


                                    <span class="counting" data-counterup-nums="25"
                                          data-counterup-beginat="12">{{ $settings->year_of_experince }}</span>


                                </div>
                                <div class="counter-img">
                                    <div class="bg-section">
                                        <img src=""
                                             alt="image"/>
                                    </div>
                                    <i class="flaticon-020-factory"></i>
                                </div>
                            </div>
                            <div class="counter-desc">
                                <p>Experence of Year</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="processes-holder">
                    <div class="carousel owl-carousel carousel-dots process-content-carousel" data-slide="1"
                         data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0"
                         data-loop="turw" data-speed="800">
                        @foreach($questions as $question)
                            <div>
                                <div class="process-panel">
                                    <p class="process-number">{{ $loop->iteration }}.</p>
                                    <div class="process-body">
                                        <div class="process-content">
                                            <h5>
                                                {{ trans_model($question,'title') }}
                                            </h5>
                                            <p>
                                                {!!  trans_model($question,'desc')  !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--                    <div class="images-holder">--}}
{{--                        <div class="carousel owl-carousel process-image-carousel" data-slide="1" data-slide-rs="1"--}}
{{--                             data-autoplay="true" data-drag="false" data-nav="false" data-dots="false" data-space="0"--}}
{{--                             data-loop="false" data-speed="800">--}}
{{--                            <img src="{{ asset('assets/front') }}/assets/images/processes/1.jpg" alt="process"/><img--}}
{{--                                src="assets/images/processes/2.jpg" alt="process"/><img--}}
{{--                                src="{{ asset('assets/front') }}/assets/images/processes/3.jpg" alt="process"/>--}}
{{--                        </div>--}}
{{--                        <div class="processes-panel">--}}
{{--                            <h3 class="panel-title">--}}
{{--                                @lang('site.contact title 1')--}}
{{--                            </h3>--}}
{{--                            <p class="panel-desc">--}}
{{--                                @lang('site.contact title 2')--}}
{{--                            </p>--}}
{{--                            <a href="{{ route('contact') }}">@lang('site.schedule A Visit') <i--}}
{{--                                    class="energia-arrow-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="contact contact-2" style="margin-top: 250px" id="contact-2">
        <div class="contact-overlay bg-overlay bg-overlay-theme5" style="top: 25%;">
            <div class="bg-section">
                <img src="{{ asset('assets/front') }}/assets/images/background/4.jpg" alt="background"/>
            </div>
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-3">
                <div class="heading heading-light heading-10">
                    <h2 class="heading-title">
                        {{ trans_model($about,'title') }}
                    </h2>
                    <p class="heading-desc">
                        {!!   Str::limit(trans_model($about,'desc'),200) !!}
                    </p>
                    <div class="contact-action contact-action-2">
                        <a class="btn btn--white" href="{{ route('about_us') }}">@lang('site.read_more')<i
                                class="energia-arrow-right"></i></a>
                    </div>

                </div>
                <div class="contact-card">
                    <div class="contact-body">
                        <h5 class="card-heading">@lang('site.request a quote')</h5>
                        <p class="card-desc">
                            @lang('site.quote_desc')
                        </p>
                        <div class="col-12">
                            <a href="{{ route('quoteIndex') }}">
                                <button class="btn btn--secondary w-100" type="submit">@lang('site.send request')<i class="energia-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="contact-result"></div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
