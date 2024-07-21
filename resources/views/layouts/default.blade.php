<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">  
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <title>@yield('title', 'Beatriz')</title>

  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Favicons -->
  <link href="{{ URL::asset('assets/img/logo_2.svg') }}" rel="icon">
  <link href="{{ URL::asset('assets/img/logo_2.svg') }}" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/css/my_style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <h1>Beatriz-Rénovation<span>.</span></h1>
            </a>
    
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            
            <nav id="navbar" class="navbar">
                <ul>
                    @switch(session('locale'))
                        @case('pt')
                            <li class="text-center"><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="#about">Sobre Nós</a></li>
                            <li><a href="#services">Serviços</a></li>
                            <li><a href="#products">Produtos</a></li>
                            <li><a href="#contact">Contacto</a></li>
                            <li class="dropdown"><a href="#"><span>Línguas</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="{{ route('change-language','fr') }}">FR</a></li>
                                    <li ><a href="{{ route('change-language','en') }}">EN</a></li>
                                    <li><a href="{{ route('change-language','pt') }}">PT</a></li>
                                </ul>
                            </li>                            
                            @break
                        @case('en')
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#products">Products</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown"><a href="#"><span>Languages</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="{{ route('change-language','fr') }}">FR</a></li>
                                    <li><a href="{{ route('change-language','en') }}">EN</a></li>
                                    <li><a href="{{ route('change-language','pt') }}">PT</a></li>
                                </ul>
                            </li>
                            @break
                        @default
                            <li><a href="{{ route('index') }}">Accueil </a></li>
                            <li><a href="#about">Qui sommes-nous</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#products">Des Produits</a></li>
                            <li><a href="#contact">Contacts </a></li>
                            <li class="dropdown"><a href="#"><span>Langue</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="{{ route('change-language','fr') }}">FR</a></li>
                                    <li><a href="{{ route('change-language','en') }}">EN</a></li>
                                    <li><a href="{{ route('change-language','pt') }}">PT</a></li>
                                </ul>
                            </li>
                    @endswitch   
                </ul>
            </nav><!-- .navbar -->    
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Main ======= -->
    <main id="main">
        @yield('content')    
    </main>
    <!-- End #Main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                    <div class="footer-info">
                        <image src="{{ URL::asset('assets/img/logo_2.svg') }}" style="width: 20rem;" /> 
                        <br>
                        <br>
                        @switch(session('locale'))
                            @case('pt')
                                <span> 
                                    <strong>Endereço: </strong>16 rue de la broque 67000 Strasbourg <br>
                                    <strong>Telefones: </strong> 
                                    <ul>
                                        <li>+33 7 53 28 21 48</li>
                                        <li>+33 6 01 86 65 86</li>
                                    </ul>
                                    <strong>E-mails: </strong> 
                                    <ul>
                                        <li>beatriz-renovation67@outlook.fr</li>
                                        <li>info@beatriz-renovation.com</li>
                                    </ul>
                                </span>
                                @break
                            @case('en')
                                <span> 
                                    <strong>Address: </strong>16 rue de la broque 67000 Strasbourg <br>
                                    <strong>Telephones: </strong> 
                                    <ul>
                                        <li>+33 7 53 28 21 48</li>
                                        <li>+33 6 01 86 65 86</li>
                                    </ul>
                                    <strong>E-mails: </strong> 
                                    <ul>
                                        <li>beatriz-renovation67@outlook.fr</li>
                                        <li>info@beatriz-renovation.com</li>
                                    </ul>
                                </span>
                                @break
                            @default
                                <span> 
                                    <strong>Adresse: </strong>16 rue de la broque 67000 Strasbourg <br>
                                    <strong>Téléphones: </strong> 
                                    <ul>
                                        <li>+33 7 53 28 21 48</li>
                                        <li>+33 6 01 86 65 86</li>
                                    </ul>
                                    <strong>E-mails: </strong> 
                                    <ul>
                                        <li>beatriz-renovation67@outlook.fr</li>
                                        <li>info@beatriz-renovation.com</li>
                                    </ul>
                                </span>
                        @endswitch
                        <br>
                        <div class="social-links d-flex mt-6">
                            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                            <a href="beatriz_renovation67" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    </div><!-- End footer info column-->

                    <div class="col-md-4 footer-links footer-menu-align">
                        @switch(session('locale'))
                            @case('pt')
                                <h4>Seções do Site</h4>
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="#about">Sobre Nós</a></li>
                                    <li><a href="#services">Serviços</a></li>
                                    <li><a href="#products">Produtos</a></li>
                                    <li><a href="#contact">Contacto</a></li>
                                </ul>
                                @break
                            @case('en')
                                <h4>Sections of Site</h4>
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="#about">About Us</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#products">Products</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                                @break
                            @default
                                <h4>Sections du Site</h4>
                                <ul>
                                    <li><a href="{{ route('index') }}">Accueil</a></li>
                                    <li><a href="#about">Qui sommes-nous</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#products">Des Produits</a></li>
                                    <li><a href="#contact">Contacts</a></li>
                                </ul>
                        @endswitch
                    </div><!-- End footer links column-->

                    <div class="col-md-4 footer-links footer-menu-align">
                        @if (session('locale') === 'fr')
                            <h4>Nos Services</h4>
                            <ul>
                                <li><a href="{{ route('services-details', 'in') }}">Industriels</a></li>                            
                                <li><a href="{{ route('services-details', 're') }}">Rénovation</a></li>                            
                                <li><a href="{{ route('services-details', 'ne') }}">Nettoyage</a></li>
                            </ul>
                        @elseif (session('locale') === 'en')
                            <h4>Our services</h4>
                            <ul> 
                                <li><a href="{{ route('services-details', 'in') }}">Industrial</a></li>                            
                                <li><a href="{{ route('services-details', 're') }}">Renovation</a></li>                            
                                <li><a href="{{ route('services-details', 'ne') }}">Cleaning</a></li>
                            </ul>
                        @elseif (session('locale') === 'pt')
                            <h4>Nossos Serviços</h4>
                            <ul>
                                <li><a href="{{ route('services-details', 'in') }}">Industriais</a></li>                            
                                <li><a href="{{ route('services-details', 're') }}">Renovação</a></li>                            
                                <li><a href="{{ route('services-details', 'ne') }}">Limpeza</a></li>                            
                            </ul>
                        @endif    
                        
                    </div><!-- End footer links column-->


                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Beatriz-Rénovation</span></strong>. All rights reserved
            </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    
    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#form-contact').submit(function(e) {
            e.preventDefault();

            var name = $("#name").val();
            var email = $("#email").val();
            var service = $("#service").val();
            var product = $("#product").val();
            var subject = $("#subject").val();
            var description = $("#description").val();
            var typeSolicitation = $("#typeSolicitation").val();  
            
            if (typeSolicitation === 'product') {
                service = product;
            } 

            $.ajax({
                type:'POST',
                url: "/contact/store",
                data: {
                    name: name,
                    email: email,
                    service: service,
                    subject: subject,
                    description: description,
                    typeSolicitation: typeSolicitation
                },
                dataType: "json",
                success: (response) => {
                    $("#name").val("");
                    $("#email").val("");
                    $("#service").val("Selecionar Serviço");
                    $("#subject").val("");
                    $("#description").val("");

                    $('#sucess-message').show();
                },
                error: function(response, data){
                    $('#error-message').show()
                    alert(response);
                    console.log(response);
                }
            });      
        });    


        $('#categoryService').change(function(e) {
            e.preventDefault();

            var idCategoryService = $("#categoryService").val();  

            $.ajax({
                type:'GET',
                url: "/categoryServices/load-services/" + idCategoryService,
                dataType: "json",
                success: (response) => {
                    $("#service").empty();
                    console.log("============= Sucesso =============");
                    console.log(response);

                    for (const item of response) {
                        if (item.key == '') {
                            $("#service").append("<option selected value='"+item.key+"'>"+item.name+"</option>");
                        } else {
                            $("#service").append("<option value='"+item.key+"'>"+item.key+"</option>");
                        }
                    }
                },
                error: function(response, data) {
                    console.log("============= Erro =============");
                    console.log(data);
                    console.log(response);
                }
            });      
        });
    </script>
    
    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/my_js.js') }}"></script>
</body>

</html>