@extends('layouts.default')

@section('title', 'Beatriz')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            @if (session('locale') === 'fr')
              <h2 data-aos="fade-down">Bienvenue chez Beatriz Rénovation</h2>
              <p data-aos="fade-up">Donnez vie à vos rêves de rénovation et profitez d'un nettoyage professionnel et complet. Explorez notre site pour découvrir nos services de rénovation et de nettoyage.</p>
            @elseif (session('locale') === 'en')
              <h2 data-aos="fade-down">Welcome to Beatriz Rénovation</h2>
              <p data-aos="fade-up">Bring your renovation dreams to life and enjoy a professional and complete cleaning. Explore our site to discover our renovation and cleaning services.</p>          
            @elseif (session('locale') === 'pt')
              <h2 data-aos="fade-down">Bem-vindo à Beatriz Rénovation</h2>
              <p data-aos="fade-up">Dê vida aos seus sonhos de renovação e desfrute de uma limpeza profissional e completa. Explore nosso site para descobrir nossos serviços de renovação e limpeza.</p>
            @endif
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/4.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/5.jpg); height: 100%; width: 100%;"></div>
      
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <!-- ======= Alt Services Section 2 ======= -->
  <section id="alt-services-2" class="alt-services ">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3></h3>
          @switch(session('locale'))
              @case('pt')
                <p>
                  Somos a Beatri-Rénovation, uma empresa dedicada a transformar espaços 
                  industriais e imobiliários, oferecendo soluções inovadoras e serviços de alta qualidade.
                  Nosso compromisso com a excelência e a satisfação do cliente é o que nos impulsiona a cada projeto.
                </p>
      
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-easel flex-shrink-0"></i>
                  <div>
                    <h4><a href="#" class="stretched-link">Visão</a></h4>
                    <p>Liderar o mercado de renovação e transformação de espaços industriais e imobiliários, elevando os padrões de qualidade e inovação.</p>
                  </div>
                </div><!-- End Icon Box -->
      
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-patch-check flex-shrink-0"></i>
                  <div>
                    <h4><a href="#" class="stretched-link">Missão</a></h4>
                    <p>Superar as expectativas dos clientes através de soluções criativas, expertise técnica e compromisso com a excelência.</p>
                  </div>
                </div><!-- End Icon Box -->
      
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4><a href="#" class="stretched-link">Valores</a></h4>
                    <ul>
                      <li>Excelência</li>  
                      <li>Inovação</li>  
                      <li>Qualidade</li>  
                      <li>Integridade</li>  
                      <li>Colaboração</li>  
                      <li>Satisfação do cliente</li>  
                    </ul>
                  </div>
                </div><!-- End Icon Box -->        
                @break
              @case('en')
                  <p>
                    We are Beatri-Rénovation, a company dedicated to transforming spaces 
                    industrial and real estate, offering innovative solutions and high quality services.
                    Our commitment to excellence and customer satisfaction is what drives us with each project.
                  </p>
        
                  <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                      <h4><a href="#" class="stretched-link">Vision</a></h4>
                      <p>
                        Lead the market for the renovation and transformation of industrial and real estate spaces, raising quality and innovation standards.</p>
                    </div>
                  </div><!-- End Icon Box -->
        
                  <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                      <h4><a href="#" class="stretched-link">Mission</a></h4>
                      <p>Exceed customer expectations through creative solutions, technical expertise and commitment to excellence.</p>
                    </div>
                  </div><!-- End Icon Box -->
        
                  <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                      <h4><a href="#" class="stretched-link">Values</a></h4>
                      <ul>
                        <li>Excellence</li>
                        <li>Innovation</li>
                        <li>Quality</li>
                        <li>Integrity</li>
                        <li>Collaboration</li>
                        <li>Customer satisfaction</li>
                      </ul>
                    </div>
                  </div><!-- End Icon Box -->        
                  @break
              @default
              <p>
                Nous sommes Beatri-Rénovation, une entreprise dédiée à la transformation des espaces 
                industriel et immobilier, proposant des solutions innovantes et des services de haute qualité.
                Notre engagement envers l’excellence et la satisfaction de nos clients est ce qui nous anime dans chaque projet.
              </p>
    
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                  <h4><a href="#" class="stretched-link">Vision</a></h4>
                  <p>Leader du marché de la rénovation et de la transformation d'espaces industriels et immobiliers, en élevant les normes de qualité et d'innovation.</p>
                </div>
              </div><!-- End Icon Box -->
    
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4><a href="#" class="stretched-link">Mission</a></h4>
                  <p>
                    Dépasser les attentes des clients grâce à des solutions créatives, une expertise technique et un engagement envers l'excellence.</p>
                </div>
              </div><!-- End Icon Box -->
    
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4><a href="#" class="stretched-link">Valeurs</a></h4>
                  <ul>
                    <li>Excellence</li>
                    <li>Innovation</li>
                    <li>Qualité</li>
                    <li>Intégrité</li>
                    <li>Collaboration</li>
                    <li>Satisfaction du Client</li>
                  </ul>
                </div>
              </div><!-- End Icon Box -->                          
          @endswitch
          
        </div>

        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/7.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
      </div>

    </div>
  </section><!-- End Alt Services Section 2 -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        @switch(session('locale'))
            @case('pt')
              <h2>Serviços</h2>
              <p>
                Nossa empresa está comprometida em fornecer 
                soluções sob medida para atender às necessidades de nossos clientes,
                garantindo segurança, eficiência e qualidade em cada projeto.
              </p>  
              @break
            @case('en')
              <h2>Services</h2>
              <p>
                Our company is committed to providing 
                tailor-made solutions to meet the needs of our customers,
                ensuring safety, efficiency and quality in each project.
              </p>
                @break
            @default
              <h2>Services</h2>
              <p>                
                Notre entreprise s'engage à fournir 
                des solutions sur mesure pour répondre aux besoins de nos clients,
                assurer la sécurité, l’efficacité et la qualité de chaque projet.
              </p>
        @endswitch
       
      </div>

      <div class="row gy-4">

        @foreach ($services as $service)

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-solid fa-compass-drafting color-green flex-shrink-0"></i>
            </div>
            @switch(session('locale'))
                @case('pt')
                  <h3>{{ $service->title_pt }}</h3>
                  <p>
                    {{ $service->description_pt }}
                  </p>
                  @break
                @case('en')
                  <h3>{{ $service->title_en }}</h3>
                  <p>
                    {{ $service->description_en }}
                  </p>
                  @break
                @default
                  <h3>{{ $service->title_fr }}</h3>
                  <p>
                    {{ $service->description_fr }}
                  </p>  
            @endswitch
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->

  @if (count($projects) >= 1)
    <!-- ======= Our Projects Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">
        @switch(session('locale'))
            @case('pt')
              <div class="section-header">
                <h2>Projectos</h2>
                <p>Nossa equipe especializada realiza projetos sob medida, priorizando qualidade, inovação e satisfação do cliente.</p>
              </div>

              <div class="row gy-4">
                @foreach ($projects as $project)
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                      <div class="row">
                        <div class="col-xl-5">
                          <div class="card-bg" style="background-image: url({{ $project->img }});"></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                          <div class="card-body">
                            <h4 class="card-title"> {{ $project->title_pt }} </h4>
                            <p>{{ $project->description_pt }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>d
            @break
            @case('en')
              <div class="section-header">
                <h2>Projects</h2>
                <p>Our specialized team carries out tailor-made projects, prioritizing quality, innovation and customer satisfaction.</p>
              </div>

              <div class="row gy-4">
                @foreach ($projects as $project)
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                      <div class="row">
                        <div class="col-xl-5">
                          <div class="card-bg" style="background-image: url({{ $project->img }});"></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                          <div class="card-body">
                            <h4 class="card-title"> {{ $project->title_en }} </h4>
                            <p>{{ $project->description_en }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              @break
            @default
            <div class="section-header">
              <h2>Projects</h2>
              <p>Notre équipe spécialisée réalise des projets sur mesure, en privilégiant la qualité, l’innovation et la satisfaction client.</p>
            </div>

            <div class="row gy-4">
              @foreach ($projects as $project)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="card-item">
                    <div class="row">
                      <div class="col-xl-5">
                        <div class="card-bg" style="background-image: url({{ $project->img }});"></div>
                      </div>
                      <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                          <h4 class="card-title"> {{ $project->title_fr }} </h4>
                          <p>{{ $project->description_fr }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
        @endswitch
      </div>
    </section><!-- End Our Projects Section -->    
  @endif

  

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">
      @switch(session('locale'))
          @case('pt')
            <div class="section-header">
              <h2>Nosso Time</h2>
              <p>Conheça alguns membros da nossa equipe</p>
            </div>              
            @break
          @case('en')
          <div class="section-header">
            <h2>Our Team</h2>
            <p>Meet some members of our team</p>
          </div>  
            @break
          @default
          <div class="section-header">
            <h2>Notre Équipe</h2>
            <p>Rencontrez quelques membres de notre équipe</p>
          </div>
      @endswitch

      <div class="row gy-5">
        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <div class="member-img">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
          <div class="member-img">
            <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Brian Doe</h4>
            <span>Marketing</span>
            <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
          <div class="member-img">
            <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Josepha Palas</h4>
            <span>Operation</span>
            <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>
  </section><!-- End Our Team Section -->


  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter section-bg">
    @switch(session('locale'))
            @case('pt')
            <div class="container">
              <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-person-vcard color-orange flex-shrink-0"></i>
                    <div>
                      <p>{{ $statistic[0]->employees }} Funcionários</p>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-compass-drafting color-green flex-shrink-0"></i>
                    <div>
                      <p>{{ count($services) }} Serviços</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-helmet-safety color-pink flex-shrink-0"></i>
                    <div>
                      <p>{{ count($projects) }} Projectos</p>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-people color-pink flex-shrink-0"></i>
                    <div>
                      <p>{{ $statistic[0]->clients }} Clientes</p>
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
                @break
            @case('en')
            <div class="container">
              <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-person-vcard color-orange flex-shrink-0"></i>
                    <div>
                      <p>{{ $statistic[0]->employees }} Employees</p>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-compass-drafting color-green flex-shrink-0"></i>
                    <div>
                      <p>{{ count($services) }} Services</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-helmet-safety color-pink flex-shrink-0"></i>
                    <div>
                      <p>{{ count($projects) }} Projects</p>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-people color-pink flex-shrink-0"></i>
                    <div>
                      <p>{{ $statistic[0]->clients }} Clients</p>
                    </div>
                  </div>
                </div>
        
              </div>
            </div>                
                @break
            @default
            <div class="container">
              <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-person-vcard color-orange flex-shrink-0"></i>
                    <div>
                      <p>{{ $statistic[0]->employees }} Employés</p>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-compass-drafting color-green flex-shrink-0"></i>
                    <div>
                      <p>{{ count($services) }} Services</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-helmet-safety color-pink flex-shrink-0"></i>
                    <div>
                      <p>{{ count($projects) }} Projects</p>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-people color-pink flex-shrink-0"></i>
                    <div>
                      <p>{{ $statistic[0]->clients }} Clientèle</p>
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
        @endswitch
  </section>
  
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-header">
          @switch(session('locale'))
              @case('pt')
              <h2>Contacto</h2>
              <p>
                Para garantir maior confiabilidade em nosso trabalho
              </p>
                  @break
              @case('en')
              <h2>Contact</h2>
              <p>
                In order to ensure greater reliability in our work
              </p>
                  @break
              @default
              <h2>Contact</h2>
              <p>
                Afin d'assurer une plus grande fiabilité dans notre travail
              </p>
          @endswitch

        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              @switch(session('locale'))
                  @case('pt')
                    <h3>Nosso Endereço</h3>  
                    @break
                  @case('en')
                    <h3>Our Address</h3>                
                    @break
                  @default
                    <h3>Notre Adresse</h3>  
              @endswitch
              <p>16 rue de la broque 67000 Strasbourg</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              @switch(session('locale'))
                  @case('pt')
                  <h3>Envia-nos um email</h3>  
                    @break
                  @case('en')
                  <h3>Email Us</h3>                
                    @break
                  @default
                  <h3>Envoyez-nous un email</h3>  
              @endswitch
              <p>beatriz-renovation67@outlook.fr</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              @switch(session('locale'))
                @case('pt')
                <h3>Ligue para nós</h3>  
                  @break
                @case('en')
                <h3>Call Us</h3>                
                  @break
                @default
                <h3>Appelez-nous</h3>  
              @endswitch
              <p>+33 7 53 28 21 48</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="javascript:void(0)" method="POST" class="php-email-form" id="form-contact">
              @csrf
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{ $name }}" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{ $email }}" required>
                </div>
              </div>
              <div class="form-group">
                <select class="form-control" name="service" id="service"> 
                  <option value="">{{ $selectService }}</option>                   
                  @foreach ($services as $service)
                    <option value="{{ $service->title }}">{{ $service->title }}</option>                    
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ $subject }}" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="description" id="description" rows="5" placeholder="{{ $message }}" required></textarea>
              </div>

              <div class="alert alert-success" id="sucess-message" style="display: none">
                {{ $messageSuccess }}
              </div>
              
              <div class="alert alert-danger" id="error-message" style="display: none">
                {{ $messageError }}
              </div>

               <div class="text-center"><button type="submit"> {{ $btnText }} </button></div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection

