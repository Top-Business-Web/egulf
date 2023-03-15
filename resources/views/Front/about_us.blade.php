@extends('Front.layouts.master')

@section('content')
    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input class="form-control" type="text" placeholder="type words then enter" />
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
    </div>

    <section class="page-title page-title-1" id="page-title">

        <div  style="background-position-y: center;" class="page-title-wrap bg-overlay bg-overlay-dark-2">

            <div class="bg-section">
                <img src="{{ asset($slider->image_about) }}" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">@lang('site.About Us')</h1>
{{--                            <div class="title-action">--}}
{{--                                <a class="btn btn--primary" href="{{ route('service') }}">--}}
{{--                                    <span>@lang('site.our services')</span><i class="energia-arrow-right"></i></a>--}}
{{--                                <a class="btn-video btn-video-2" href="https://www.youtube.com/watch?v=qLFzFy_FHBk&t=73s">--}}
{{--                                    <i class="fas fa-play"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('site.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        @lang('site.About Us')
                    </li>
                </ol>
            </div>
        </div>
    </section>


    <section class="about about-1" id="about-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section">
                                <img src="{{ asset($about_us->image) }}" />
                            </div>
                        </div>
                        <div>
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="flaticon-033-plug"></i>
                                </div>
                                <div class="counter-num">
                                    <span class="counting"
                                          data-counterup-nums="{{ $about_us->client_count }}">{{ $about_us->client_count }}</span>
                                    <p></p>
                                </div>
                                <div class="counter-name">
                                    <h6>@lang('site.happy clients')</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="heading heading-1">

                        <h2 class="heading-title">
                            {{ trans_model($about_us,'title') }}
                        </h2>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="block-left">
                                    <p class="paragraph">
                                        {{ trans_model($about_us, 'sub_title') }}
                                    </p>
                                    <p>
                                        {!! trans_model($about_us, 'desc') !!}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="block-right">
                                    <div class="prief-set">
                                        <p>
                                            Producing High-Quality Engine Oils That Satisfy The Consumer.To Be A Leading Company Achieving Continuous Growth In The Production Of All Types Of Motor Oils.
                                        </p>
                                        <ul class="list-unstyled advantages-list">
                                            <li>Earn The Confidence Of The Domestic And International Market.</li>
                                            <li>Keeping Up With Modern Technologies.</li>
                                            <li>Achieving Global Standards In Manufacturing Processes.</li>
{{--                                            <li>Finding Job Opportunities, Training, And Technical Qualification For Young People Who Are Able To Prove Themselves.</li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="features features-1 bg-overlay bg-overlay-theme2" id="features-1">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/2.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="heading heading-2 heading-light heading-light2">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <p class="heading-subtitle">
                            Vision
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">
                            To Be A Leading Company Achieving Continuous Growth In The Production Of All Types Of Motor Oils.
                        </h2>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <p class="heading-subtitle">
                            The Message
                        </p>
                        <p class="heading-desc">
                            Producing High-Quality Engine Oils That Satisfy The Consumer.To Be A Leading Company Achieving Continuous Growth In The Production Of All Types Of Motor Oils.
                        </p>
                        <p class="heading-desc">
                            {{ lang() == 'ar' ? 'السيليكون الخام متعدد الكريستالات لتصنيع الخلايا الكهروضوئية. متوفر بدرجات وأشكال مختلفة بما في ذلك القطع والرقائق والمسحوق والسبيكة.' : 'Raw polycrystalline silicon for PV manufacturing. Offered in
                            various grades and formats including chunks, chips, powder and ingot.' }}
                        </p>
                        <div class="actions-holder">
                            <a class="btn btn--primary btn--inversed" href="{{ route('contact') }}">
                                @lang('site.get started')<i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                                                                                     href="{{ route('about_us') }}">@lang('site.explore_our_plans')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true"
                 data-nav="false" data-dots="true" data-space="25" {{--                data-loop="true" --}} data-speed="800">
                <?php $classServices = ['flaticon-024-energy', 'flaticon-028-greenhouse', 'flaticon-026-world', 'flaticon-008-plant', 'flaticon-024-energy', 'flaticon-004-solar-panel'];
                ?>
                @foreach ($services as $service)
                    <div>
                        <div class="feature-panel-holder" data-hover="">
                            <div class="feature-panel">
                                <div class="feature-icon">
                                    <i class="{{ $classServices[rand(0, 5)] }}"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>{{ trans_model($service, 'title') }}</h4>
                                    <p>
                                        {{ trans_model($service, 'desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
{{--    <section class="clients clients-carousel clients-1" id="clients-1">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <h3 class="d-none">@lang('site.Our Clients')</h3>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="true"--}}
{{--                         data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="3000">--}}
{{--                        @foreach ($brands as $brand)--}}
{{--                            <div class="client">--}}
{{--                                <a href="javascript:void(0)"> </a><img src="{{ asset($brand->image) }}"--}}
{{--                                                                       alt="{{ $brand->name }}" />--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/3.jpg" alt="background" />
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-3">
                <div class="heading heading-light heading-6">
                    <p class="heading-subtitle">
                        {{ trans_model($about_us,'hash') }}
                    </p>
                    <h2 class="heading-title">
                        {{ trans_model($about_us,'title') }}
                    </h2>
                    <p class="heading-desc">
                        {!!  Str::limit(trans_model($about_us,'desc'),200)  !!}
                    </p>
                    <div class="contact-action">
                        <a class="btn btn--white" href="{{ route('about_us') }}">@lang('site.read_more') <i
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
                                <button class="btn btn--secondary w-100" type="submit">
                                    @lang('site.send request') <i class="energia-arrow-right"></i>
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
    </section>
@endsection
