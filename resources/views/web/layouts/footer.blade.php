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
                        <h3 class="item-footer-h3">{{ __('Website Sections') }}</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">{{ __('HOME') }}</a></li>
                            <li><a href="{{ url('about/') }}">{{ __('ABOUT SAMA') }}</a></li>
                            <li><a href="{{ url('projects/') }}">{{ __('PROJECTS') }}</a></li>
                            <li><a href="{{ url('contact/') }}">{{ __('CONTACT US') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="item-footer">
                        <h3 class="item-footer-h3">{{ __('Sectors') }}</h3>
                        <ul>
                            <li><a href="{{ url('civil-divisions/') }}">{{ __('CIVIL DIVISION') }}</a></li>
                            <li><a href="{{ url('medical-divisions/') }}">{{ __('MEDICAL DIVISIONS') }}</a></li>
                            <li><a href="{{ url('military-divisions/') }}">{{ __('MILITARY DIVISIONS') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-footer-contact">
                        <h3 class="item-footer-h3">{{ __('Contact Information') }}</h3>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i>
                                {{ __('3939 Makkah Road, Officers District') }}</li>
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
            <small>{{ __('All rights reserved to Sama Group &copy;') }} {{ date('Y') }}</small>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('web/assets/js/script.js?v=1') }}"></script>
<script>
    document.querySelectorAll('img[data-enlargable]').forEach(function(img) {
        img.classList.add('img-enlargable');
        img.addEventListener('click', function() {
            var src = img.getAttribute('src');
            var overlay = document.createElement('div');

            Object.assign(overlay.style, {
                background: `RGBA(0,0,0,.5) url(${src}) no-repeat center`,
                backgroundSize: 'contain',
                width: '100%',
                height: '100%',
                position: 'fixed',
                zIndex: '10000',
                top: '0',
                left: '0',
                cursor: 'zoom-out'
            });

            overlay.addEventListener('click', function() {
                document.body.removeChild(overlay);
            });

            document.body.appendChild(overlay);
        });
    });
</script>
</body>

</html>
