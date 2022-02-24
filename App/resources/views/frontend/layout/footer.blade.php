<footer class="mt-30">
        <!-- Newslatter area start -->
        <div class="newsletter-group">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="newsletter-inner d-flex align-items-center">
                            <i class="fa fa-envelope-open-o"></i>
                            <div class="newsletter-title">
                                <h1 class="sign-title">Sign Up For Our Newsletter</h1>
                                <p>Get e-mail updates about our latest shop and special offers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="newsletter-box">
                            <form id="mc-form" class="mc-form">
                                <input type="email" id="mc-email" class="email-box" placeholder="enter your email" name="EMAIL">
                                <button id="mc-submit" class="newsletter-btn" type="submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newslatter area End -->
        <!-- Footer Top Start -->
        <div class="footer-top mt-50 mb-40">
            <div class="container">
                <div class="footer-single-widget">
                    <div class="row flex-row">
                        <div class="col-4 footer-logo mb-40">
                            <a href="index.html" class="w-100"><img class="w-100" src="{{asset('common/pageimg/Electro City.png')}}" alt=""></a>
                        </div>
                        <div class="col-4 widget-body">
                            <p>Mọi thắc mắc vui lòng liên hệ theo thông tin bên dưới.</p>
                            <div class="widget-address mt-30 mb-20">
                                <p><strong>Address:</strong> {{$pageInfo->PageInfo()->address}}.</p>
                                <p><strong>Number Phone:</strong> {{$pageInfo->PageInfo()->phone}}.</p>
                                <p><strong>Address Email:</strong> {{$pageInfo->PageInfo()->email}}</p>
                            </div>
                        </div>
                        <div class="col-4 footer_social">
                            <p>Người sáng lập</p>
                            <ul class="d-flex flex-column">
                                <li><span style="width: 5rem" class="d-inline-block">Hùng:</span><a class="facebook" href="https://www.facebook.com/huhgque/"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><span style="width: 5rem" class="d-inline-block">Hưng:</span><a class="facebook" href="https://www.facebook.com/hungkuteso1koaiso2"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><span style="width: 5rem" class="d-inline-block">Hiếu:</span><a class="facebook" href="https://www.facebook.com/profile.php?id=100070135172791"><i class="zmdi zmdi-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="footer-bottom-content">
                            <div class="footer-copyright">
                                <p>© 2021 <strong>ElectroCity</strong> Made With <i class="fa fa-heart text-danger"></i> by  <strong>Team 3H</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="payment">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <a class="scroll-to-top" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- modal area start-->
    
    <!-- jQuery JS -->
    <script src="{{url('asset-frontend')}}/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Modernizer JS -->
    <script src="{{url('asset-frontend')}}/js/vendor/modernizr-3.8.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{url('asset-frontend')}}/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="{{url('asset-frontend')}}/js/plugins/plugins.js"></script>
    <!-- Jquery ui JS -->
    <script src="{{url('asset-frontend')}}/js/plugins/jquery.ui.js"></script>
    <!-- Mailchimp JS -->
    <script src="{{url('asset-frontend')}}/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Magnific Popup JS -->
    <script src="{{url('asset-frontend')}}/js/plugins/jquery.magnific-popup.min.js"></script>
    <!-- Slick JS -->
    <!-- Modal JS -->
    <script src="{{url('asset-frontend')}}/js/plugins/modal.min.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="{{url('asset-frontend')}}/js/plugins/sticky-sidebar.min.js"></script>
    <!-- Countdown JS -->
    {{-- <script src="assets/js/plugins/countdown.min.js"></script> --}}
    <!-- jQuery Nice Select JS -->
    <script src="{{url('asset-frontend')}}/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Main JS -->
    <script src="{{url('asset-frontend')}}/js/main.js"></script>

    <script src="{{asset('common/Mercury.lib/js/all.js')}}"></script>
    @yield('script')
</body>


<!-- Mirrored from template.hasthemes.com/circleshop/circleshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Sep 2021 16:20:05 GMT -->
</html>