<footer>
    <div class="container-fluid">
        <div class="row border-top p-2 small">

            <div class="col-xs-12 col-md-4 text-left">
                <a href="{{ url('https://github.com/josego85/products-covid19py') }}" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i> Licencia GPLv3</a>
            </div>

            <div class="col-xs-12 col-md-4 text-left text-md-center">
                <div>
                    <a class="a-vendedor" href="{{ url('disclaimer') }}">T&eacute;rminos de uso</a>
                </div>
            </div>

            <div class="col-xs-12 col-md-4 text-right">
                <div>
                    <a href="{{ url('https://www.facebook.com/Productospy-100335464986824') }}" class="btn btn-link" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="{{ url('https://twitter.com/ProductosPy') }}" class="btn btn-link" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="{{ url('https://www.instagram.com/productospy') }}" class="btn btn-link" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <p class="text-muted small">Copyright &copy; Proyectos Beta 2020</p>
            </div>
        </div>
    </div>
    <script async src="{{ url('https://www.googletagmanager.com/gtag/js?id=UA-163227060-1') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', GOOGLE_ANALYTICS_CODE);
    </script>
</footer>
