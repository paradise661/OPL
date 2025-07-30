<section class="footer-layout1 z-index-common" data-bg-src="public/frontend/assets/img/bg/footer-bg-1-1.png">
    <img class="footer-ele1" src="public/frontend/assets/img/footer/falling-leaves.png" alt="">
    <div class="widget-area">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <div class="footer-logo">
                                <a class="logo" href="/">
                                    <img src="{{ $setting['site_footer_logo'] ? asset(get_media($setting['site_footer_logo'])->fullurl) : '' }}"
                                        alt="{{ $setting['site_footer_logo'] ? get_media($setting['site_footer_logo'])->alt : '' }}"
                                        width="100px" height="90px">
                                </a>
                            </div>
                            <p class="footer-text">Aliquet eget sit amet tellus cras adipiscing
                                enim eu turpis. Hac habitasse platea dictu
                                quisque.</p>
                            @if ($socialdata->isNotEmpty())
                                <div class="footer-social pt-xl-4">
                                    @foreach ($socialdata as $data)
                                        <a href="{{ $data->link ?? '#' }}" target="_blank">
                                            <i class="{{ $data->icon ?? 'fab fa-globe' }}"></i>
                                        </a>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Information</h3>
                        <div class="footer-info">
                            <div class="footer-info__icon">
                                <i>
                                    <img src="frontend/assets/img/icons/footer-info-1-1.png" alt="footer info">
                                </i>
                            </div>
                            <div class="media-body">
                                <div class="footer-info__link pe-xl-5">
                                    <p>Babu Ram Acharya Marg(Corporate Office ), Sinamangal Kathmandu</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-info">
                            <div class="footer-info__icon">
                                <i>
                                    <img src="frontend/assets/img/icons/footer-info-1-2.png" alt="footer info">
                                </i>
                            </div>
                            <div class="media-body">
                                <span class="footer-info__label">Phone No:</span>
                                <div class="footer-info__link">
                                    <a href="tel:01-4110761">01-4110761</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-info">
                            <div class="footer-info__icon">
                                <i>
                                    <img src="frontend/assets/img/icons/footer-info-1-3.png" alt="footer info">
                                </i>
                            </div>
                            <div class="media-body">
                                <span class="footer-info__label">Email Address:</span>
                                <div class="footer-info__link">
                                    <a href="mailto:info@opl.com.np">info@opl.com.np</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Useful Links</h3>
                        <div class="footer-menu--style">
                            <ul>
                                <li><a href="/contact-us">Contact Us</a></li>
                                <li><a href="/products">Products</a></li>
                                <li><a href="/blogs">Blogs</a></li>
                                <li><a href="/company-profile">Company Profile</a></li>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Our Team</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-wrap">
        <div class="container">
            <div class="row g-3 justify-content-center justify-content-xxl-between align-items-center">
                <div class="col-lg-auto">
                    <p class="copyright-text text-center text-lg-start">Copyright © <a href="#">OPL
                            2025</a> . All
                        rights reserved. <a href="https://paradiseit.com.np/">ParadiseIT</a></p>
                </div>

                <div class="col-lg-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <div class="menu-all-pages-container">
                            <ul class="menu justify-content-center justify-content-lg-end ">
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
