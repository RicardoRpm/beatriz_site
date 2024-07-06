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
                Via nos partenaires, nous proposons la vente des matériaux 
                industriels sur les réseaux construction civil, plate-forme pétrolière, 
                hospitalière, secteur agricole, les grandes distribution pharmaceutiques, 
                chimiques, et plus…
              </p>
            @elseif (session('locale') === 'en')
              <h2 data-aos="fade-down">Welcome to Beatriz Rénovation</h2>
              <p data-aos="fade-up">
                Through our partners, we offer the sale of materials 
                industrial networks in civil construction, oil platforms, 
                hospital, agricultural sector, large pharmaceutical distribution, 
                chemicals and more…
              </p>          
            @elseif (session('locale') === 'pt')
              <h2 data-aos="fade-down">Bem-vindo à Beatriz Rénovation</h2>
              <p data-aos="fade-up">                
                Através dos nossos parceiros, oferecemos a venda de materiais 
                redes industriais na construção civil, plataformas petrolíferas, 
                hospitalar, setor agrícola, grande distribuição farmacêutica, 
                produtos químicos e mais…
              </p>
            @endif
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/2.jpg); height: 100%; width: 100%;"></div>

      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/1.jpg); height: 100%; width: 100%;"></div>

      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/4.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/5.jpg); height: 100%; width: 100%;"></div>

      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/6.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/7.jpg); height: 100%; width: 100%;"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/8.jpg); height: 100%; width: 100%;"></div>
      
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
                  <p class="text-justify">
                    Beatriz Rénovation is a company dedicated to the transformation and maintenance 
                    of residential and commercial spaces. We offer cleaning services, 
                    renovation and incorporation, and we sell a wide range of products and equipment for different sectors 
                    (Hospital, Industrial, Administration and Large Retail). Our engineers can assist your companies in 
                    installation of the machines sold. Our goal is to provide effective and personalized solutions for
                    improve your living and working spaces.
                  </p>

                  <strong class="mb-4">Why choose Beatriz Rénovation?</strong>
                  
                  <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-1-circle flex-shrink-0"></i>
                    <div>
                      <h4>Quality and know-how</h4>
                      <p>
                        We offer high quality services using durable materials 
                        and proven techniques. We also sell products and materials 
                        premium quality construction.
                      </p>
                    </div>
                  </div>

                  <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-2-circle flex-shrink-0"></i>
                    <div>
                      <h4>Personalized approach</h4>
                      <p>              
                        Each project is unique. We offer tailor-made solutions adapted to your needs, 
                        whether for renovation, cleaning or remodeling. Our engineers are at your disposal 
                        to ensure the correct installation of our machines on site.  
                      </p>
                    </div>
                  </div>

                  <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-3-circle flex-shrink-0"></i>
                    <div>
                      <h4>Respect deadlines</h4>
                      <p>                      
                        We respect agreed deadlines, whilst ensuring careful and quality work. 
                        Our team is dedicated to providing complete solutions including disassembly, handling and transportation 
                        of equipment.
                      </p>
                    </div>
                  </div>         
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
                Somos especializados em equipamentos para indústrias internacionais. 
                Gerenciamento de serviços como desmontagem e remontagem de equipamentos e também 
                renovação e limpeza interior/exterior.
              </p>  
              @break
            @case('en')
              <h2>Services</h2>
              <p>
                We specialize in equipment for international industries. 
                Management of services such as disassembly and reassembly of equipment and also 
                interior/exterior renovation and cleaning.
              </p>
                @break
            @default
              <h2>Services</h2>
              <p>                
                Nous sommes spécialisés dans le matériel à destinations des industries internationales. 
                La gestion de services tels que les démontage des équipements et remontage et aussi la 
                rénovation de intérieur / extérieur et nettoyage.
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
                      <h3>Industrial</h3>
                      <p>
                        Our industrial services are designed to modernize, 
                        optimize and maintain your industrial facilities. 
                        We offer complete and personalized solutions 
                        to improve its operational performance and ensure 
                        the sustainability of its infrastructure. Whether for installation 
                        new equipment, updating existing systems or 
                        routine maintenance, we have the experience to support 
                        its industrial operations.
                      </p>  
                      <a href="{{ route('services-details', 'in') }}" class="readmore stretched-link">To know more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item  position-relative">
                    <div class="icon">
                      <i class="fa-solid fa-paint-roller color-green flex-shrink-0"></i>
                    </div>
                      <h3>Renovation</h3>
                      <p>
                        Our renovation services aim to transform and improve your 
                        living and working spaces, combining aesthetics and functionality. 
                        We take care of projects of all sizes, from renovations to 
                        small rooms to complete the renovation of large spaces. Our approach to 
                        measurement ensures that each project reflects your needs and preferences, creating 
                        beautiful and practical environments.
                      </p>
                      <a href="{{ route('services-details', 're') }}" class="readmore stretched-link">
                        To know more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item  position-relative">
                    <div class="icon">
                      <i class="fa-solid fa-broom color-green flex-shrink-0"></i>
                    </div>
                      <h3>Cleaning</h3>
                      <p>
                        We offer a full range of cleaning services for 
                        ensure impeccable, healthy and welcoming spaces. 
                        Our cleaning services adapt to different environments, whether residential, 
                        commercial or industrial. We use cleaning techniques and products
                        advanced to ensure optimal cleaning and maintain high hygiene standards.
                      </p>  
                      <br>
                      <a href="{{ route('services-details', 'ne') }}" class="readmore stretched-link">
                        To know more <i class="bi bi-arrow-right"></i></a>
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
                      <div id="IdConstruction" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/construction_1.jpg'); "></div>
                          </div>
                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/construction_2.jpg')"></div>
                          </div>
                          <div class="carousel-item active">
                            <div class="card-bg" style="background-image: url('assets/img/construction_3.jpg')"></div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#IdConstruction" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#IdConstruction" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>

                      </div>
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
                          Descubra nossa extensa gama de materiais projetados para 
                          atender às demandas dos setores agroalimentar, têxtil, farmacêutico, 
                          químico, siderurgia, automóvel e tratamento e distribuição de água. 
                          Oferecemos produtos robustos e eficientes que impulsionam a produtividade, 
                          a segurança e a sustentabilidade em diversas indústrias.
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-5">
                      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                          
                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/industrial_manufacture.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/farmacia.jpg')"></div>
                          </div>

                          <div class="carousel-item active">
                            <div class="card-bg" style="background-image: url('assets/img/industrial-tools.jpg')"></div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>

                      </div>

                    </div>

                  </div>
                </div>
              </div>

              {{-- end the game --}}

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">

                    <div class="col-xl-5">

                      <div id="idHospital" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="card-bg" style="background-image: url('assets/img/hospital.jpg')"></div>
                          </div>

                          
                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/medicamentos.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/farmacia_medica.jpg')"></div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#idHospital" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#idHospital" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>

                    </div>

                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title"> Equipamento Hospitalar </h4>
                        <p>
                          Descubra uma ampla seleção de produtos essenciais 
                          para hospitais, clínicas cirúrgicas, clínicas 
                          hospitais psiquiátricos e lares de idosos. Equipamento 
                          suprimentos médicos de alta qualidade para suprimentos essenciais 
                          para o cuidado diário, oferecemos soluções que 
                          promover conforto, segurança e eficiência em ambientes de saúde.
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
                        <h4 class="card-title"> Equipamentos de infraestrutura e segurança</h4>
                        <p>
                          Descubra a nossa gama completa de materiais essenciais concebidos para 
                          aeroportos, instalações militares, serviços de processamento 
                          água, grandes instalações administrativas e estacionamentos. 
                          Oferecemos produtos de alta qualidade que garantem 
                          eficiência operacional, segurança robusta e sustentabilidade.
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-5">
                      <div class="card-bg" style="background-image: url('{{ asset("assets/img/water.jpg") }}');"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-5">
                      
                      <div id="super" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/varejo_4.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/varejo_3.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/varejo_2.jpg')"></div>
                          </div>

                          <div class="carousel-item active">
                            <div class="card-bg" style="background-image: url('assets/img/varejo_1.jpg')"></div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#super" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#super" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>

                      </div>

                    </div>

                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title">
                          Equipamentos profissionais para o setor de varejo</h4>
                        <p>
                          Descubra a nossa vasta gama de produtos concebidos para 
                          atender às necessidades específicas dos shopping centers, 
                          lojas de departamentos, supermercados e hipermercados. 
                          Fornecemos soluções eficientes e de alta qualidade para
                          otimizar operações, segurança e experiência do cliente.
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          @break
          @case('en')
          <div class="section-header">
            <h2>Our products</h2>
            <p>
              We offer a diverse range of products and equipment for different sectors.
            </p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title"> Marble Materials </h4>
                      <p>
                        We provide a
                        wide range of marbles
                        high-quality,
                        perfect for different
                        construction projects and
                        architecture. Our marbles
                        are available
                        in different colors and
                        finishes, suitable
                        to all your needs
                        aesthetic and
                        functional.
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
                    <div id="IdConstruction" class="carousel slide" data-bs-touch="false">
                      <div class="carousel-inner">
                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/construction_1.jpg'); "></div>
                        </div>
                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/construction_2.jpg')"></div>
                        </div>
                        <div class="carousel-item active">
                          <div class="card-bg" style="background-image: url('assets/img/construction_3.jpg')"></div>
                        </div>
                      </div>

                      <button class="carousel-control-prev" type="button" data-bs-target="#IdConstruction" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#IdConstruction" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>

                    </div>
                  </div>

                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Construction Materials</h4>
                      <p>
                        We sell
                        a wide variety
                        of materials from
                        construction, including
                        concrete,
                        steel, and other products
                        essential
                        for construction
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
                      <h4 class="card-title"> Industrial Equipment </h4>
                      <p>
                        Discover our extensive range of materials designed to 
                        meet the demands of the agri-food, textile, pharmaceutical, 
                        chemical, steel, automobile and water treatment and distribution. 
                        We offer robust and efficient products that boost productivity, 
                        safety and sustainability in various industries.
                      </p>
                    </div>
                  </div>

                  <div class="col-xl-5">
                    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                      <div class="carousel-inner">
                        
                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/industrial_manufacture.jpg')"></div>
                        </div>

                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/farmacia.jpg')"></div>
                        </div>

                        <div class="carousel-item active">
                          <div class="card-bg" style="background-image: url('assets/img/industrial-tools.jpg')"></div>
                        </div>
                      </div>

                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>

                    </div>

                  </div>

                </div>
              </div>
            </div>

            {{-- end the game --}}

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="row">

                  <div class="col-xl-5">

                    <div id="idHospital" class="carousel slide" data-bs-touch="false">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="card-bg" style="background-image: url('assets/img/hospital.jpg')"></div>
                        </div>

                        
                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/medicamentos.jpg')"></div>
                        </div>

                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/farmacia_medica.jpg')"></div>
                        </div>
                      </div>

                      <button class="carousel-control-prev" type="button" data-bs-target="#idHospital" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#idHospital" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>

                  </div>

                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title"> Hospital Equipment </h4>
                      <p>
                        Discover a wide selection of essential products 
                        for hospitals, surgical clinics, clinics 
                        psychiatric hospitals and nursing homes. Equipment 
                        high quality medical supplies for essential supplies 
                        for daily care, we offer solutions that 
                        promote comfort, safety and efficiency in healthcare environments.
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
                      <h4 class="card-title"> 
                        Infrastructure and security equipment</h4>
                      <p>
                        Discover our full range of essential materials designed for 
                        airports, military installations, processing services 
                        water, large administrative facilities and parking lots. 
                        We offer high quality products that guarantee 
                        operational efficiency, robust security and sustainability.
                      </p>
                    </div>
                  </div>

                  <div class="col-xl-5">
                    <div class="card-bg" style="background-image: url('{{ asset("assets/img/water.jpg") }}');"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    
                    <div id="super" class="carousel slide" data-bs-touch="false">
                      <div class="carousel-inner">

                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/varejo_4.jpg')"></div>
                        </div>

                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/varejo_3.jpg')"></div>
                        </div>

                        <div class="carousel-item">
                          <div class="card-bg" style="background-image: url('assets/img/varejo_2.jpg')"></div>
                        </div>

                        <div class="carousel-item active">
                          <div class="card-bg" style="background-image: url('assets/img/varejo_1.jpg')"></div>
                        </div>
                      </div>

                      <button class="carousel-control-prev" type="button" data-bs-target="#super" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#super" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>

                    </div>

                  </div>

                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">
                        Professional equipment for the retail sector</h4>
                      <p>
                        Discover our wide range of products designed to 
                        meet the specific needs of shopping centers, 
                        department stores, supermarkets and hypermarkets. 
                        We provide efficient, high-quality solutions for
                        optimize operations, security and customer experience.
                      </p>
                    </div>
                  </div>

                </div>
              </div>
            </div>

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
                        <h4 class="card-title"> Matériaux en Marbre </h4>
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
                      <div id="IdConstruction" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/construction_1.jpg'); background-size: cover; background-position: center;"></div>
                          </div>
                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/construction_2.jpg'); background-size: cover; background-position: center;"></div>
                          </div>
                          <div class="carousel-item active">
                            <div class="card-bg" style="background-image: url('assets/img/construction_3.jpg'); background-size: cover; background-position: center;"></div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#IdConstruction" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#IdConstruction" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>

                      </div>
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
                          Découvrez notre vaste gamme de matériaux conçus pour 
                          répondre aux demandes des secteurs agroalimentaire, textile, pharmaceutique, 
                          traitement et distribution de produits chimiques, d'acier, d'automobile et d'eau. 
                          Nous proposons des produits robustes et efficaces qui boostent la productivité, 
                          sécurité et durabilité dans diverses industries.
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-5">
                      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                          
                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/industrial_manufacture.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/farmacia.jpg')"></div>
                          </div>
                          <div class="carousel-item active">
                            <div class="card-bg" style="background-image: url('assets/img/industrial-tools.jpg')"></div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>

                      </div>
                    </div>

                  </div>
                </div>
              </div>

              {{-- ISTO É TESTE --}}

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-5">

                      <div id="idHospital" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="card-bg" style="background-image: url('assets/img/hospital.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/medicamentos.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/farmacia_medica.jpg')"></div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#idHospital" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#idHospital" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>

                    </div>

                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title"> Équipement Hospitalier </h4>
                        <p>
                          Découvrez une large sélection de produits essentiels 
                          pour les hôpitaux, cliniques chirurgicales, cliniques 
                          psychiatriques et maisons de retraite. Des équipements 
                          médicaux de haute qualité aux fournitures essentielles 
                          aux soins quotidiens, nous proposons des solutions qui 
                          favorisent le confort, la sécurité et l’efficacité dans les environnements de soins de santé.
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
                        <h4 class="card-title">
                          Équipement d'infrastructure et de sécurité</h4>
                        <p>
                          Découvrez notre gamme complète de matériaux essentiels conçus pour les 
                          aéroports, les installations militaires, les services de traitement des 
                          eaux, les grandes installations administratives et les parkings. 
                          Nous proposons des produits de haute qualité qui garantissent une 
                          efficacité opérationnelle, une sécurité robuste et une durabilité.
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-5">
                      <div class="card-bg" style="background-image: url('{{ asset("assets/img/water.jpg") }}');"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                  <div class="row">
                    <div class="col-xl-5">
                      <div id="super" class="carousel slide" data-bs-touch="false">
                        <div class="carousel-inner">

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/varejo_4.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/varejo_3.jpg')"></div>
                          </div>

                          <div class="carousel-item">
                            <div class="card-bg" style="background-image: url('assets/img/varejo_2.jpg')"></div>
                          </div>

                          <div class="carousel-item active">
                            <div class="card-bg" style="background-image: url('assets/img/varejo_1.jpg')"></div>
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#super" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#super" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>

                      </div>
                    </div>

                    <div class="col-xl-7 d-flex align-items-center">
                      <div class="card-body">
                        <h4 class="card-title">
                          Équipement professionnelles pour le secteur de la vente au détail</h4>
                        <p>
                          Découvrez notre large gamme de produits conçus pour 
                          répondre aux besoins spécifiques des centres commerciaux, 
                          grands magasins, supermarchés et hypermarchés. 
                          Nous fournissons des solutions efficaces et de haute qualité pour
                          optimiser les opérations, la sécurité et l’expérience client.
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

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

