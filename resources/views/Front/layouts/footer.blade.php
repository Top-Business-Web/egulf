<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>company</h5>
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
                            <h5>Services</h5>
                        </div>
                        <div class="widget-content">
                            <!-- Get 5 Latest for Model Services -->
                            @php
                                $services = App\Models\Service::latest()->take(5)->get();
                            @endphp
                            @foreach ($services as $service)

                                <ul>
                                    <li><a href="{{ route('service') }}">{{ $service->title_en }}</a></li>
                                </ul>

                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="footer-widget widget-links widget-icon">
                        <div class="footer-widget-title">
                            <h5>support</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li>
                                    <a href="{{ route('faqs') }}">Terms & Conditions</a>
                                </li>
                                <li><a href="{{ route('faqs') }}">@lang('site.Shipping Policy')</a></li>
                                <li><a href="{{ route('faqs') }}">@lang('site.Delivery Tips')</a></li>
                                <li><a href="{{ route('faqs') }}">Returns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-content">
                            <ul>


                                <li class="phone">
                                    <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
                                </li>



                                <li class="email">



                                    @lang('site.Email'):
                                    <a
                                        href="#"
                                    ><span
                                            class="__cf_email__"
                                            data-cfemail="e1888f878ea1848f8493868880cf828e8c"
                                        >{{ $settings->email }}</span
                                        ></a
                                    >
                                </li>



                                <li class="address">

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
                  all rights reserved @lang('site.by')
                  <a href="https://topbusiness.io/contact3.html"> Top business</a>.
                    &copy; {{ date('Y') }}
                </span>
                            <ul class="list-unstyled social-icons">

                                <li>
                                    <a class="share-facebook" href="{{ $settings->linked_in }}"
                                    ><i class="energia-facebook"></i>@lang('site.facebook')
                                    </a>
                                </li>
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
