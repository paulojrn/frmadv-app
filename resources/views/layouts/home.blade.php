<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        @yield('navbar')
        
        <div id="home">
            @yield('carousel')
        </div>        
    </header>
    <!-- Header -->

    <!-- Main -->
    <main>        
        <div class="container">

            <!-- Section: Expertise Areas -->
            <section id="expertise-area" class="text-center">
                <h4 class="section-title my-5 font-weight-bold">Áreas de atuação</h4>

                <div class="card-deck expertise">
                    @yield('cards-expertises-1')
                </div>

                <div class="card-deck expertise" style="padding-top: 1rem;">
                    @yield('cards-expertises-2')
                </div>
            </section>

            <!-- Section: Contact -->
            <section id="contact">
                <h4 class="section-title my-5 font-weight-bold">Contato</h4>

                <hr class="mb-5 d-none">

                <!-- Contact information -->
                <div id="contact-info-column" class="row">
                    <div class="info col-lg-3 col-md-3 mb-3 text-left">
                        <i class="bi bi-building mr-2"></i>
                        <p>Segunda à sexta</p>
                    </div>
                    
                    <div class="info col-lg-3 col-md-3 mb-3 text-center">
                        <i class="bi bi-clock mr-2"></i>
                        <p>08:00 - 22:00</p>
                    </div>
                    
                    <div class="info col-lg-3 col-md-3 mb-3 text-center">
                        <i class="bi bi-envelope mr-2"></i>
                        <p>adv-fran@email.com</p>
                    </div>
                    
                    <div class="info col-lg-3 col-md-3 mb-3 text-right">
                        <i class="bi bi-whatsapp mr-2"></i>
                        <p>(48) 99934-1646</p>
                    </div>
                </div>
                <!-- Contact information -->

                <div class="pt-3 row">
                    <!-- Contact form -->
                    <div id="contact-form-column" class="col-lg-5 col-md-12">
                       @yield('contact-form') 
                    </div>
                    <!-- Contact form -->

                    <!-- Contact map -->
                    <div id="contact-map-column" class="col-lg-7 col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.962801037071!2d-48.622607885429154!3d-27.56366492730385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95274998cf5672a3%3A0x73a80830068c9da7!2sR.%20Jo%C3%A3o%20Sandim%2C%20643%20-%20Ipiranga%2C%20S%C3%A3o%20Jos%C3%A9%20-%20SC%2C%2088111-350!5e0!3m2!1spt-BR!2sbr!4v1617688971806!5m2!1spt-BR!2sbr"
                            width="100%"
                            height="400"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                    <!-- Contact map -->
                </div>

            </section>
            <!--Section: Contact-->

        </div>
    </main>
    <!-- Main -->
    
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">
        
        <!-- Social buttons -->
        <div id="social-buttons">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">

                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <p class="mb-0">Nossas redes sociais</p>
                    </div>

                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="bi bi-facebook mr-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a href="https://twitter.com/" target="_blank">
                            <i class="bi bi-twitter mr-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a href="https://linkedin.com/" target="_blank">
                            <i class="bi bi-linkedin mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="https://instagram.com/" target="_blank">
                            <i class="bi bi-instagram mr-lg-4"> </i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Social buttons -->

    </footer>
    <!-- Footer -->
</body>
</html>
