<header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">
    <div class="top-bar">
        <div class="block-left">
            <div class="top-contact">
                <div class="contact-infos">
                    <i class="energia-phone-Icon"></i>
                    <div class="contact-body">


                        <p>@lang('site.phone') : <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></p>
                    </div>



                </div>
                <div class="contact-infos">
                    <i class="energia-email--icon"></i>
                    <div class="contact-body">

                        <p>
                            @lang('site.email') :
                            <a href="../cdn-cgi/l/email-protection.html#254c4b434a65404b4057424c440b464a48"><span
                                    class="__cf_email__"
                                    data-cfemail="b5dcdbd3daf5d0dbd0c7d2dcd49bd6dad8">{{ $settings->email }}</span>
                            </a>
                        </p>

                    </div>
                </div>


                <div class="contact-infos">
                    <i class="energia-clock-Icon"></i>
                    <div class="contact-body">
                        <p>{{ $settings->work_date }}</p>
                    </div>
                </div>



            </div>
        </div>
        <div class="block-right">


{{--            <div class="social-links">--}}
{{--                <a class="share-facebook" href="{{ $settings->linked_in }}"><i class="energia-facebook"></i></a>--}}
{{--                --}}{{-- <a class="share-twitter" href="{{ $settings->twitter }}"--}}
{{--                    ><i class="energia-twitter"></i></a--}}
{{--                    ><a class="share-youtube" href="{{ $settings->youtube }}"--}}
{{--                    ><i class="energia-youtube"></i--}}
{{--                        ></a> --}}
{{--            </div>--}}



{{--            <div class="topbar-links">--}}
{{--                <!-- <a href="blog-grid.html">news & media</a--}}
{{--                ><a href="page-careers.html">careers</a--}}
{{--                > -->--}}
{{--                <a href="{{ route('faqs') }}">@lang('site.faqs')</a>--}}
{{--            </div>--}}
{{--            <div class="module module-language">--}}
{{--                <div class="selected">--}}
{{--                    <img @if (lang() == 'en') src="{{ asset('assets/front/') }}/assets/images/module-language/en.png"--}}
{{--                         @else--}}
{{--                             src="{{ asset('assets/front/') }}/assets/images/module-language/ar.png" @endif--}}
{{--                         alt="En Language" /><span>{{ lang() == 'en' ? ' english ' : ' العربية ' }}</span>--}}
{{--                </div>--}}
{{--                <div class="lang-list">--}}
{{--                    <ul>--}}
{{--                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                            <li>--}}
{{--                                <a rel="alternate" hreflang="{{ $localeCode }}"--}}
{{--                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                                    {{ $properties['native'] }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu">
        <a class="navbar-brand" href="{{ route('home') }}">



            <img class="logo logo-dark" src="{{ asset($settings->logo) }}" alt="Energia Logo" /><img
                class="logo logo-mobile" src="assets/images/logo/logo-mobile.png" alt="Energia Logo" />



        </a>
        <div class="module-holder module-holder-phone">
            {{--            <div class="module module-search"> --}}
            {{--                <div class="module-icon module-icon-search"> --}}
            {{--                    <i class="energia-search-Icon"></i></div> --}}
            {{--            </div> --}}
            <div class="module module-language">
                <div class="selected"><img src="{{ asset('assets/front/') }}/assets/images/module-language/en.png"
                                           alt="En Language" /><span>@lang('site.english')</span><i class="fas fa-chevron-down"></i>
                </div>
                <div class="lang-list">
                    <ul>
                        <li><img src="{{ asset('assets/front/') }}/assets/images/module-language/en.png"
                                 alt="En Language" /><a href="#">@lang('site.english')</a></li>
                        <li><img src="{{ asset('assets/front/') }}/assets/images/module-language/ar.png"
                                 alt="AR Language" /><a href="#">@lang('site.arabic')</a></li>
                    </ul>
                </div>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item   @if (Route::currentRouteName() == 'home') active @endif" id="contact"
                    data-hover="">
                    <a    href="{{ route('home') }}"><span>@lang('site.home')</span></a>
                </li>
                <li class="nav-item   @if (Route::currentRouteName() == 'about_us') active @endif" id="contact"
                    data-hover="">
                    <a    href="{{ route('about_us') }}"><span>@lang('site.about us')</span></a>
                </li>
{{--                <li class="nav-item   @if (Route::currentRouteName() == 'service') active @endif" id="contact"--}}
{{--                    data-hover="">--}}
{{--                    <a    href="{{ route('service') }}"><span>@lang('site.services')</span></a>--}}
{{--                </li>--}}
                <li class="nav-item   @if (Route::currentRouteName() == 'product') active @endif" id="contact"
                    data-hover="">
                    <a href="{{ route('product') }}"><span>@lang('site.products')</span></a>
                </li>

                <li class="nav-item  @if (Route::currentRouteName() == 'projects') active @endif" id="contact"

                data-hover="">
                <a href="{{ route('projects') }}"><span>@lang('site.Projects')</span></a>
            </li>
                <li class="nav-item @if (Route::currentRouteName() == 'contact') active @endif" id="contact" data-hover="">
                    <a href="{{ route('contact') }}"><span>@lang('site.contact')</span></a>
                </li>
            </ul>
            <div class="module-holder">
                <div class="module-contact">
                    <a class="btn btn--primary " href="{{ route('quoteIndex') }}" id="request">
                        @lang('site.request a quote')<i class="energia-arrow-right"></i></a>
                </div>
            </div>

        </div>

    </nav>
</header>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    {{--$('#request').on('click', function(e) {--}}
    {{--    e.preventDefault();--}}
    {{--    var url = $(this).attr('href');--}}
    {{--    // alert(url);--}}
    {{--    --}}{{--$.ajax({--}}
    {{--    --}}{{--    type: 'get',--}}
    {{--    --}}{{--    url: url,--}}
    {{--    --}}{{--    beforeSend: function(data) {--}}
    {{--    --}}{{--        Swal.fire({--}}
    {{--    --}}{{--            icon: 'warning',--}}
    {{--    --}}{{--            title: 'Oops...',--}}
    {{--    --}}{{--            showCancelButton: true,--}}
    {{--    --}}{{--            text: 'Please Choose Product First!',--}}
    {{--    --}}{{--            confirmButtonText: '<a style="color:white;" href="{{ route('product') }}"><i class="fa fa-thumbs-up">OK!</i></a>',--}}
    {{--    --}}{{--        })--}}
    {{--    --}}{{--    },--}}
    {{--    --}}{{--    success: function(data) {--}}
    {{--    --}}{{--        uploadUrl: '{{ route('product') }}';--}}
    {{--    --}}{{--    }--}}
    {{--    --}}{{--});--}}
    {{--});--}}
</script>
