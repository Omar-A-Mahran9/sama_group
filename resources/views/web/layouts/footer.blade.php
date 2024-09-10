<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <figure><img src="{{ asset('web/assets/images/logo.png') }}" alt=""></figure>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-footer">
                        <h3 class="item-footer-h3">أقسام الموقع</h3>
                        <ul>
                            <li><a href="">الرئيسية</a></li>
                            <li><a href="">عن سما</a></li>
                            <li><a href="">المشاريع</a></li>
                            <li><a href="">اتصل بنا</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-footer">
                        <h3 class="item-footer-h3">القطاعات</h3>
                        <ul>
                            <li><a href="">القطاع المدنى</a></li>
                            <li><a href="">القطاع الطبي</a></li>
                            <li><a href="">القطاع العسكري</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-footer-contact">
                        <h3 class="item-footer-h3">معلومات الاتصال</h3>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i> 3939 طريق مكة المكرمة، حي الضباط </li>
                            <li><i class="fa-solid fa-phone"></i> 4545454 11 966+ </li>
                            <li><i class="fa-solid fa-mobile-screen-button"></i> 50100383 966+</li>
                            <li><i class="fa-solid fa-envelope"></i> contact@samaa-group.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <small>جميع الحقوق محفوظة لدى موقع مجموعة سما &copy; {{ date('Y') }}</small>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('web/assets/js/script.js?v=1') }}"></script>
</body>

</html>
