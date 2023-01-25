@extends('Front.layouts.master')

@section('content')

    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input
                                class="form-control"
                                type="text"
                                placeholder="type words then enter"
                            />
                            <button></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
    </div>

    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section">
                <img src="{{ asset($slider->image_about) }}"/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">About Us</h1>
                            <p class="title-desc">
                                We offer products, solutions, and services across the entire
                                energy value chain. We support our customers on their way to
                                a more sustainable future.
                            </p>
                            <div class="title-action">
                                <a class="btn btn--primary" href="{{ route('service') }}">
                  <span>our services</span
                  ><i class="energia-arrow-right"></i
                                    ></a>
                                <!-- <a class="btn-video btn-video-2 popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="">company</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        About Us
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
                                <img src="{{ asset('assets/front') }}/assets/images/about/1.jpg" alt="about Image"/>
                            </div>
                        </div>
                        <div>
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="flaticon-033-plug"></i>
                                </div>
                                <div class="counter-num">
                  <span class="counting" data-counterup-nums="{{ $about_us->client_count }}"
                  >{{ $about_us->client_count }}</span
                  >
                                    <p></p>
                                </div>
                                <div class="counter-name">
                                    <h6>happy clients</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">
                            {{ $about_us->hash_en }}
                        </p>
                        <h2 class="heading-title">
                            {{ $about_us->title_en }}
                        </h2>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="block-left">
                                    <p class="paragraph">
                                        {{ $about_us->sub_title_en }}
                                    </p>
                                    <p>
                                        {{ $about_us->desc_en }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="block-right">
                                    <div class="prief-set">
                                        <p>
                                            How can we meet the growing demand for electricity
                                            while protecting our climate & make planet a better
                                            place?
                                        </p>
                                        <ul class="list-unstyled advantages-list">
                                            <li>Reliability and performance</li>
                                            <li>Just-in-time manufacturing</li>
                                            <li>solar material financing</li>
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

    <section
        class="features features-1 bg-overlay bg-overlay-theme2"
        id="features-1"
    >
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/2.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="heading heading-2 heading-light heading-light2">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <p class="heading-subtitle">
                            Sustainable, Reliable & Affordable Energy!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">
                            Providing Value To Our ClientsThrough Ongoing Product &
                            Innovation.
                        </h2>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <p class="heading-desc">
                            While improving the yield and performance of solar energy
                            products, our PV industry experience enables us to provide
                            in-depth material sourcing, financing and supply chain
                            expertise for every step.
                        </p>
                        <p class="heading-desc">
                            Raw polycrystalline silicon for PV manufacturing. Offered in
                            various grades and formats including chunks, chips, powder and
                            ingot.
                        </p>
                        <div class="actions-holder">
                            <a
                                class="btn btn--primary btn--inversed"
                                href="{{ route('contact') }}"
                            >
                                get started<i class="energia-arrow-right"></i></a
                            ><a
                                class="btn btn--bordered btn--white"
                                href="{{ route('about_us') }}"
                            >explore our plans</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="carousel owl-carousel carousel-dots"
                data-slide="4"
                data-slide-rs="2"
                data-autoplay="true"
                data-nav="false"
                data-dots="true"
                data-space="25"
{{--                data-loop="true"--}}
                data-speed="800"
            >
                <?php $classServices = ['flaticon-024-energy', 'flaticon-028-greenhouse',
                    'flaticon-026-world', 'flaticon-008-plant', 'flaticon-024-energy','flaticon-004-solar-panel'];
                ?>
                @foreach($services as $service)
                <div>
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon">
                                <i class="{{$classServices[rand(0,5)]}}"></i>
                            </div>
                            <div class="feature-content">
                                <h4>{{ trans_model($service,'title') }}</h4>
                                <p>
                                    {{ trans_model($service,'desc') }}
                                </p>
                            </div>
{{--                            <a href="page-about.html"--}}
{{--                            ><i class="energia-arrow-right"></i>--}}
{{--                                <span>explore more</span>--}}
{{--                            </a>--}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="clients clients-carousel clients-1" id="clients-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="d-none">Our Clients</h3>
                </div>
                <div class="col-12">
                    <div
                        class="carousel owl-carousel"
                        data-slide="6"
                        data-slide-rs="2"
                        data-autoplay="true"
                        data-nav="false"
                        data-dots="false"
                        data-space="0"
                        data-loop="false"
                        data-speed="3000"
                    >
                        @foreach($brands as $brand)
                        <div class="client">
                            <a href="javascript:void(0)"> </a
                            ><img src="{{ asset($brand->image) }}" alt="{{$brand->name}}"/>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="contact contact-1 bg-overlay bg-overlay-theme"
        id="contact-1"
    >
        <div class="bg-section">
            <img src="{{ asset('assets/front') }}/assets/images/background/3.jpg" alt="background"/>
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-3">
                <div class="heading heading-light heading-6">
                    <p class="heading-subtitle">
                        Improving The Performance Of Solar Energy.
                    </p>
                    <h2 class="heading-title">
                        Discover Independence Through Using The Power Of Solar Panels!
                    </h2>
                    <p class="heading-desc">
                        We offer products, solutions, and services across the entire
                        energy value chain. We support our customers on their way to a
                        more sustainable future – no matter how far along the journey to
                        energize society with affordable energy systems.
                    </p>
{{--                    <div class="advantages-list-holder">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-lg-6">--}}
{{--                                <ul class="list-unstyled advantages-list advantages-list-2">--}}
{{--                                    <li>Reliabe and performance</li>--}}
{{--                                    <li>Solar material financing</li>--}}
{{--                                    <li>In-time manufacturing</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-lg-6">--}}
{{--                                <ul class="list-unstyled advantages-list advantages-list-2">--}}
{{--                                    <li>50% more energy output</li>--}}
{{--                                    <li>Built using ntype mono</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="contact-action">
                        <a class="btn btn--white" href="{{ route('about_us') }}"
                        >learn more <i class="energia-arrow-right"></i></a
                        >
                    </div>
{{--                    <div class="contact-quote">--}}
{{--                        <img src="{{ asset('assets/front') }}/assets/images/icons/noteicon.png" alt="icon"/>--}}
{{--                        <p>--}}
{{--                            Receive an accurate quote within 3-5 days when you fill out--}}
{{--                            this form. Or, give us a call:--}}
{{--                            <a href="tel:01061245741">(002) 01061245741</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
                </div>
                <div class="contact-card">
                    <div class="contact-body">
                        <h5 class="card-heading">Request A Quote</h5>
                        <p class="card-desc">
                            We take great pride in everything that we do, control over
                            products allows us to ensure our customers receive the best
                            quality service.
                        </p>
                        <div class="col-12">
                            <a href="{{ route('quoteIndex') }}">
                                <button class="btn btn--secondary w-100" type="submit">
                                    Send Request <i class="energia-arrow-right"></i>
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
