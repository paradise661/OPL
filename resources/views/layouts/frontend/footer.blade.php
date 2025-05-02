<footer>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="footer-widget">
                        <a class="logo" href="/">
                            <img src="{{ $setting['site_footer_logo'] ? asset(get_media($setting['site_footer_logo'])->fullurl) : '' }}"
                                alt="{{ $setting['site_footer_logo'] ? get_media($setting['site_footer_logo'])->alt : '' }}"
                                width="100px" height="90px">
                        </a>
                        <p class="x-small mt-3">
                            {{ $setting['site_information'] ?? '' }}
                        </p>

                        <div class="flex-column mt-24 small  text-white gap-2">
                            <div class="d-flex align-items-center">
                                <p class="mb-0"><a href="tel:{{ $setting['site_phone'] ?? '' }}"><i
                                            class="fas fa-phone"></i>
                                        {{ $setting['site_phone'] ?? '' }}</a>
                                    @if ($setting['site_phone_two'])
                                        <br>
                                        <a href="tel:{{ $setting['site_phone_two'] ?? '' }}"><i
                                                class="fas fa-phone"></i>
                                            {{ $setting['site_phone_two'] ?? '' }}</a>
                                    @endif
                                </p>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mb-0"><a href="mailto:{{ $setting['site_email'] ?? '' }}"><i
                                            class="fas fa-envelope"></i>
                                        {{ $setting['site_email'] ?? '' }}</a>
                                    @if ($setting['site_email_two'])
                                        <br />
                                        <a href="mailto:{{ $setting['site_email_two'] ?? '' }}"><i
                                                class="fas fa-envelope"></i>
                                            {{ $setting['site_email_two'] ?? '' }}</a>
                                    @endif
                                </p>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mb-0"><i class="fas fa-search-location"></i>
                                    {{ $setting['site_location'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="fw-title">Know Us</h4>
                        <div class="fw-link">
                            @php
                                $menus = getMenus(2);
                            @endphp
                            @if ($menus)
                                <ul>
                                    @foreach ($menus as $key => $value)
                                        <li>
                                            <a href="{{ $value->slug }}" target="{{ $value->target ?? '_self' }}">//
                                                {{ $value->name ?? $value->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="fw-title">Our Policies</h4>
                        <div class="fw-link">
                            @php
                                $menus = getMenus(2);
                            @endphp
                            @if ($menus)
                                <ul>
                                    @foreach ($menus as $key => $value)
                                        <li>
                                            <a href="{{ $value->slug }}" target="{{ $value->target ?? '_self' }}">//
                                                {{ $value->name ?? $value->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                    <div class="footer-widget">
                        <h4 class="fw-title">Our Services</h4>
                        <div class="fw-link">
                            @php
                                $menus = getMenus(2);
                            @endphp
                            @if ($menus)
                                <ul>
                                    @foreach ($menus as $key => $value)
                                        <li>
                                            <a href="{{ $value->slug }}" target="{{ $value->target ?? '_self' }}">//
                                                {{ $value->name ?? $value->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="copyright-text">
                        <p>© Copyright {{ date('Y') }} <a href="/">OHM PHARMACEUTICALS LAB. PVT. LTD.</a>
                            All Rights Reserved | Made with <i class='fa fa-heart text-danger'></i> by <a
                                href="https://paradiseit.com.np/" target="_blank"> Paradise InfoTech.</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="payment-method-img text-center text-md-right">
                        <p>
                            <a href="/terms-and-conditions">Terms and Conditions</a>
                            |
                            <a href="/privacy-policy">Privacy Policy</a>
                            |
                            <a href="/sitemap">Sitemap</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
