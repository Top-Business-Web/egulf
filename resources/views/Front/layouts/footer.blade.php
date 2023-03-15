<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>@lang('site.company')</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('about_us') }}">@lang('site.About Us')</a></li>
                                <li><a href="{{ route('product') }}">@lang('site.Our Product')</a></li>
                                <li><a href="{{ route('contact') }}">@lang('site.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>Quality Policy</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li>Providing Customers With High-Quality Products That Suit Their Purpose And That Meet Customer Requirements.</li>
                                <li>Enhancing The Skills Of Administrators And Employees Through Continuous Trainin</li>
                                <li>Promote A Culture Of Continuous Improvement Of The Quality Management System With The Philosophy Of Delivering Quality Products From First Time</li>
                                <li>Strengthening The Quality Management System And Ensuring Its Implementation Through Internal Reviews And Taking All Corrective And Preventive Measures.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="footer-widget widget-links widget-icon">
                        <div class="footer-widget-title">
                            <h5>@lang('site.support')</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                @foreach($questions as $question)
                                    <li>
                                        {{ trans_model($question,'title') }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-content">
                            <ul>


                                <li class="phone">
                                    @lang('site.phone')
                                    <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
                                </li>


                                <li class="email">

                                    @lang('site.Email'):
                                    <a
                                        href="mailto:{{ $settings->email }}"
                                    ><span
                                            class="__cf_email__"
                                            data-cfemail="e1888f878ea1848f8493868880cf828e8c"
                                        >{{ $settings->email }}</span
                                        ></a
                                    >
                                </li>


                                <li class="address">
                                    @lang('site.address')
                                    <p>{{ $settings->address_en }}</p>


                                </li>
                                <li class="directions">
                                    <a href="{{ route('contact') }}"
                                    ><i class="energia-location-Icon"></i>@lang('site.get directions')</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright">
                        <div class="copyright">
                <span
                >
                  @lang('site.all rights reserved') @lang('site.by')
                  <a href="https://topbusiness.io/contact3.html"> Top Business</a>.
                    &copy; {{ date('Y') }}
                </span>
                            <ul class="list-unstyled social-icons">

{{--                                <li>--}}
{{--                                    <a class="share-facebook" href="{{ $settings->linked_in }}"--}}
{{--                                    ><i class="energia-facebook"></i>@lang('site.facebook')--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                                {{-- <li>
                                    <a class="share-twitter" href="{{ $settings->twitter }}"
                                    ><i class="energia-twitter"></i>twitter</a
                                    >
                                </li>
                                <li>
                                    <a class="share-youtube" href="{{ $settings->youtube }}"
                                    ><i class="energia-youtube"></i>youtube</a
                                    >
                                </li> --}}


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
