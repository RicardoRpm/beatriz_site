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
              <p data-aos="fade-up">
                Explorez notre site pour découvrir nos services de rénovation, 
                de nettoyage, et nos matériaux et produits pour divers secteurs 
                (Hospitalier, Industriels, Administration et Grande Distribution)
              </p>
            @elseif (session('locale') === 'en')
              <h2 data-aos="fade-down">Welcome to Beatriz Rénovation</h2>
              <p data-aos="fade-up">Bring your renovation dreams to life and enjoy a professional and complete cleaning. Explore our site to discover our renovation and cleaning services.</p>          
            @elseif (session('locale') === 'pt')
              <h2 data-aos="fade-down">Bem-vindo à Beatriz Rénovation</h2>
              <p data-aos="fade-up">                
                Explore nosso site para descobrir nossos serviços de renovação, 
                limpeza, e nossos materiais e produtos para diversos setores 
                (Hospitalar, Industrial, Administração e Distribuição Massiva)
              </p>
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

      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/6.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/7.jpg); height: 100%; width: 100%;"></div>
      
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <!-- ======= Alt Services Section 2 ======= -->
  <section id="about" class="alt-services ">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-around gy-4">
        <div class="col-lg-5 d-flex flex-column justify-content-center">
          @switch(session('locale'))
              @case('pt')
                <p class="text-justify">
                  Beatriz Rénovation é uma empresa que se dedica à transformação e manutenção 
                  de espaços residenciais e comerciais. Oferecemos serviços de limpeza, 
                  reforma e incorporação, e comercializamos uma variada gama de produtos e equipamentos para diversos setores 
                  (Hospitalar, Industrial, Administração e Grande Varejo). Nossos engenheiros podem auxiliar suas empresas na 
                  instalação das máquinas vendidas. Nosso objetivo é fornecer soluções eficazes e personalizadas para
                   melhorar seus espaços de vida e de trabalho.
                </p>

                <strong class="mb-4">Por que escolher a Beatriz Rénovation?</strong>
                
                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-1-circle flex-shrink-0"></i>
                  <div>
                    <h4>Qualidade e know-how</h4>
                    <p>
                      Oferecemos serviços de alta qualidade utilizando materiais duráveis 
                      ​​e técnicas comprovadas. Também vendemos produtos e materiais de construção de qualidade premium. 
                    </p>
                  </div>
                </div>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-2-circle flex-shrink-0"></i>
                  <div>
                    <h4>Abordagem personalizada</h4>
                    <p>              
                      Cada projeto é único. Oferecemos soluções à medida e adaptadas às suas necessidades, 
                      seja para renovação, limpeza ou remodelação. Nossos engenheiros estão à disposição 
                      para garantir a correta instalação de nossas máquinas no local.  
                    </p>
                  </div>
                </div>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-3-circle flex-shrink-0"></i>
                  <div>
                    <h4>Respeito aos prazos</h4>
                    <p>                      
                      Respeitamos os prazos acordados, garantindo ao mesmo tempo um trabalho cuidado e de qualidade. 
                      Nossa equipe se dedica a fornecer soluções completas, incluindo desmontagem, manuseio e transporte 
                      de equipamentos.
                    </p>
                  </div>
                </div>                             
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
                <p class="text-justify">
                  Beatriz Rénovation est une entreprise dédiée à la transformation et à 
                  l'entretien des espaces résidentiels et commerciaux. Nous offrons des 
                  services de nettoyage, de rénovation, d'aménagement, et vendons une 
                  gamme variée de produits et équipements pour divers secteurs 
                  (Hospitalier, Industriels, Administration et Grande Distribution). 
                  Nos ingénieurs peuvent assister vos entreprises lors de l'installation des 
                  machines vendues. Notre objectif est de vous fournir des solutions efficaces 
                  et personnalisées pour améliorer vos espaces de vie et de travail.
                </p>

                <strong class="mb-4">Pourquoi Choisir Beatriz Rénovation?</strong>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-1-circle flex-shrink-0"></i>
                  <div>
                    <h4>Qualité et savoir-faire</h4>
                    <p>
                      Nous offrons des services de haute qualité en utilisant 
                      des matériaux durables et des techniques éprouvées. 
                      Nous vendons également des produits et matériaux de construction de première qualité.
                    </p>
                  </div>
                </div>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-2-circle flex-shrink-0"></i>
                  <div>
                    <h4>Approche personnalisée</h4>
                    <p>
                      Chaque projet est unique. Nous proposons des solutions sur mesure adaptées à vos besoins,
                       que ce soit pour la rénovation, le nettoyage ou l'aménagement. 
                       Nos ingénieurs sont disponibles pour assurer l'installation correcte de nos machines sur site.
                    </p>
                  </div>
                </div>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-3-circle flex-shrink-0"></i>
                  <div>
                    <h4>Respect des délais</h4>
                    <p>
                      Nous respectons les délais convenus, tout en garantissant un travail soigné et de qualité. 
                      Notre équipe est dédiée à fournir des solutions complètes, y compris le démontage, 
                      la manutention et le transport des équipements.
                    </p>
                  </div>
                </div>                       
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
        @switch(session('locale'))
            @case('en')
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-compass-drafting color-green flex-shrink-0"></i>
                  </div>
                    <h3>Industriels</h3>
                    <p>
                      Nos services industriels sont conçus pour moderniser, 
                      optimiser et entretenir vos installations industrielles. 
                      Nous proposons des solutions complètes pour répondre à vos 
                      besoins opérationnels et assurer la durabilité de vos infrastructures.
                    </p>  
                </div>
              </div>  
                @break
            @case('pt')
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="fa-solid fa-compass-drafting color-green flex-shrink-0"></i>
                </div>
                  <h3>Industrial</h3>
                  <p>
                    Nossos serviços industriais são projetados para modernizar, 
                    otimizar e manter suas instalações industriais. 
                    Oferecemos soluções completas e personalizadas 
                    para melhorar seu desempenho operacional e garantir 
                    a sustentabilidade da sua infraestrutura. Seja para instalação 
                    novos equipamentos, atualizando sistemas existentes ou 
                    manutenção de rotina, temos a experiência para apoiar 
                    suas operações industriais.
                  </p>  
                  <a href="{{ route('services-details', 'in') }}" class="readmore stretched-link">Saber mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="fa-solid fa-paint-roller color-green flex-shrink-0"></i>
                </div>
                  <h3>Renovação</h3>
                  <p>
                    Os nossos serviços de renovação visam transformar e melhorar o seu 
                    espaços de estar e de trabalho, aliando estética e funcionalidade. 
                    Cuidamos de projetos de todos os portes, desde reformas de 
                    salas pequenas para completar a reforma de grandes espaços. Nossa abordagem para 
                    medição garante que cada projeto reflita suas necessidades e preferências, criando 
                    ambientes bonitos e práticos.
                  </p>
                  <a href="{{ route('services-details', 're') }}" class="readmore stretched-link">Saber mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="fa-solid fa-broom color-green flex-shrink-0"></i>
                </div>
                  <h3>Limpeza</h3>
                  <p>
                    Oferecemos uma gama completa de serviços de limpeza para 
                    garantir espaços impecáveis, saudáveis ​​e acolhedores. 
                    Nossos serviços de limpeza se adaptam a diversos ambientes, sejam residenciais, 
                    comercial ou industrial. Utilizamos técnicas e produtos de limpeza
                    avançado para garantir uma limpeza ideal e manter altos padrões de higiene.
                  </p>  
                  <br>
                  <a href="{{ route('services-details', 'ne') }}" class="readmore stretched-link">Saber mais <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
                @break
            @default
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-compass-drafting color-green flex-shrink-0"></i>
                  </div>
                    <h3>Industriels</h3>
                    <p>
                      Nos services industriels sont conçus pour moderniser, 
                      optimiser et entretenir vos installations industrielles. 
                      Nous proposons des solutions complètes et personnalisées 
                      pour améliorer vos performances opérationnelles et garantir 
                      la durabilité de vos infrastructures. Que ce soit pour l'installation 
                      de nouveaux équipements, la mise à jour de systèmes existants ou la 
                      maintenance de routine, nous avons l'expertise nécessaire pour soutenir 
                      vos opérations industrielles.
                    </p>  
                    <a href="{{ route('services-details', 'in') }}" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-paint-roller color-green flex-shrink-0"></i>
                  </div>
                    <h3>Rénovation</h3>
                    <p>
                      Nos services de rénovation visent à transformer et à améliorer vos 
                      espaces de vie et de travail, en alliant esthétique et fonctionnalité. 
                      Nous prenons en charge des projets de toutes tailles, de la rénovation de 
                      petites pièces à la refonte complète de grands espaces. Notre approche sur 
                      mesure garantit que chaque projet reflète vos besoins et préférences, créant 
                      des environnements qui sont à la fois beaux et pratiques.
                    </p>
                    <br>
                    <a href="{{ route('services-details', 're') }}" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-broom color-green flex-shrink-0"></i>
                  </div>
                    <h3>Nettoyage</h3>
                    <p>
                      Nous offrons une gamme complète de services de nettoyage pour 
                      garantir des espaces impeccables, sains et accueillants. 
                      Nos services de nettoyage s'adaptent à divers environnements, qu'ils soient résidentiels, 
                      commerciaux ou industriels. Nous utilisons des techniques et produits de nettoyage
                      avancés pour assurer une propreté optimale et maintenir des standards élevés d'hygiène.
                    </p>  
                    <br>
                    <br>
                    <a href="{{ route('services-details', 'ne') }}" class="readmore stretched-link">En savoir plus <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
        @endswitch
      </div>                
    </div>
  </section><!-- End Services Section -->

  
  <!-- ======= Our Projects Section ======= -->
  <section id="products" class="products">
    <div class="container" data-aos="fade-up">
      @switch(session('locale'))
          @case('pt')
            <div class="section-header">
              <h2>Nossos Produtos</h2>
              <p>
                Oferecemos uma gama diversificada de produtos e equipamentos para diversos setores.
              </p>
            </div>

            <div class="row gy-4">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title"> Materiais de Mármore </h4>
                        <p>
                          Disponibilizamos uma
                          vasta gama de mármores
                          de alta qualidade,
                          perfeitos para diversos
                          projetos de construção e
                          arquitetura. Nossos mármores
                          estão disponíveis
                          em diferentes cores e
                          acabamentos, adequados
                          a todas as suas necessidades
                          estéticas e
                          funcionais
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-5">
                      <div class="card-bg" style="background-image: url('assets/img/granito.jpg')"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-5">
                      <div class="card-bg" style="background-image: url('{{ asset('assets/img/construction-tools.jpg') }}')"></div>
                    </div>

                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title">Materiais de Construção</h4>
                        <p>
                          Vendemos
                          uma grande variedade
                          de materiais de
                          construção, incluindo
                          concreto,
                          aço, e outros produtos
                          essenciais
                          para a construção
                          civil.
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title"> Equipamentos Industriais </h4>
                        <p>
                          Nosso catálogo
                          inclui máquinas
                          sofisticadas de
                          última geração,
                          assim como peças
                          de reposição para
                          melhorar e manter
                          suas instalações
                          industriais.
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-5">
                      <div class="card-bg" style="background-image: url('assets/img/industrial-tools.jpeg')"></div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
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
              <h2>Nos Produits</h2>
              <p>
                Nous offrons une gamme variée de produits et équipements pour divers secteurs.
              </p>
            </div>

            <div class="row gy-4">
              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title"> Hospitalier </h4>
                        <p>
                          Nous fournissons un
                          large gamme de marbres
                          haute qualité,
                          parfait pour différents
                          des projets de construction et
                          architecture. Nos billes
                          sont disponibles
                          en différentes couleurs et
                          finitions, adaptées
                          à tous vos besoins
                          esthétique et
                          fonctionnel
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-5">
                      <div class="card-bg" style="background-image: url('{{ asset('assets/img/granito.jpg') }}?v={{ time() }}')"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-5">
                      <div class="card-bg" style="background-image: url('{{ asset('assets/img/construction-tools.jpg') }}?v={{ time() }}')"></div>
                    </div>

                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title">
                          Matériaux de Construction</h4>
                        <p>
                          Nous vendons
                          une grande variété
                          de matériaux provenant de
                          construction, y compris
                          béton,
                          acier et autres produits
                          essentiel
                          pour construction
                          civil.
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title"> Équipement Industriel </h4>
                        <p>
                          Notre catalogue
                          comprend des machines
                          sophistiqué
                          la dernière génération,
                          ainsi que des pièces
                          remplacement pour
                          améliorer et entretenir
                          vos installations
                          industriel.
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-5">
                      <div class="card-bg" style="background-image: url('{{ asset("assets/img/industrial-tools.jpeg") }}');"></div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="row gy-4">
              
            </div>  
      @endswitch

    </div>
  </section><!-- End Our Projects Section -->    

  <!-- ======= Our Team Section ======= -->
  {{-- <section id="team" class="team section-bg">
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
  </section><!-- End Our Team Section --> --}}


  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter section-bg">
    @switch(session('locale'))
            @case('pt')
            <div class="container">
              <div class="row gy-4">
                
                <div class="col-lg-6 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-location-dot color-green flex-shrink-0"></i>
                    <div>
                      <p>3 Paises (França, Angola, Portugal)</p>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-compass-drafting color-pink flex-shrink-0"></i>
                    <div>
                      <p>3 Principais serviços (Industriels, Rénovation, Nettoyage)</p>
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
                <div class="col-lg-6 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-location-dot color-orange flex-shrink-0"></i>
                    <div>
                      <p>3 Pays (France, Angola, Portugal)</p>
                    </div>
                  </div>
                </div>
        
                <div class="col-lg-6 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="fa-solid fa-compass-drafting color-green flex-shrink-0"></i>
                    <div>
                      <p>3 Services principaux (Industriels, Rénovation, Nettoyage)</p>
                    </div>
                  </div>
                </div>
                
                {{-- <div class="col-lg-3 col-md-6">
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
                </div> --}}
        
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
            <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=7.727559506893159%2C48.57699221817149%2C7.730070054531098%2C48.578211342973006&amp;layer=mapnik"  
            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            {{-- <iframe 
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" 
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen>
            </iframe> --}}
          </div>

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

