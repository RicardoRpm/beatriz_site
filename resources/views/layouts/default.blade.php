<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">  
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <title>@yield('title', 'Beatriz')</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Favicons -->
  <link href="{{ URL::asset('assets/img/logo2.png') }}" rel="icon">
  <link href="{{ URL::asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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

  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <h1>Beatriz<span>.</span></h1>
            </a>
    
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            
            <nav id="navbar" class="navbar">
                <ul>    
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown"><a href="#"><span>Langues</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                          <li><a href="#">EN</a></li>
                          <li><a href="#">FR</a></li>
                          <li><a href="#">PT</a></li>
                        </ul>
                      </li>
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
                        <image src="assets/img/logo_2.svg" style="width: 20rem;" /> 
                        <br>
                        <br>
                        <br>
                         <span> 
                            <strong>Endereço: </strong>16 rue de la broque 67000 Strasbourg <br>
                            <strong>Telefone: </strong> +33 7 53 28 21 48<br>
                            <strong>Email: </strong> beatriz-renovation67@outlook.fr<br>
                        </span>
                        <br>
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
                    <h4>Most Used Links</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#alt-services-2">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#constructions">Projects</a></li>
                        <li><a href="#team">Our Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    </div><!-- End footer links column-->

                    <div class="col-md-4 footer-links footer-menu-align">
                    <h4>Our services</h4>
                    <ul>
                        @foreach ($services as $service)
                            <li>{{ $service->title }}</a></li>                            
                        @endforeach
                    </ul>
                    </div><!-- End footer links column-->


                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Beatriz</span></strong>. All rights reserved
            </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- 
    <div id="preloader"></div>
    -->

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
    {{-- <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#frm-create-post").validate({
            submitHandler: function() {
                var description = $("#description").val();
                var status = $("#status").val();

                // processing ajax request    
                $.ajax({
                    url: "{{ route('contact.store') }}",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        name: name,
                        description: description,
                        status: status
                    },
                    success: function(data) {
                        // log response into console
                        console.log(data);
                    }
                });
            }
        });
    </script> --}}
    
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
        var subject = $("#subject").val();
        var description = $("#description").val();
        
        $.ajax({
            type:'POST',
            url: "/contact/store",
            data: {
                name: name,
                email: email,
                service: service,
                subject: subject,
                description: description
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
            }
        });      
    });    
</script>
    
    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>

</html>