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
                Via nos partenaires, nous proposons la vente de matériaux 
                industriels pour les secteurs de la construction civile, 
                des plates-formes pétrolières, des hôpitaux, de l'agriculture, 
                ainsi que des grandes distributions pharmaceutiques, 
                chimiques, et bien plus encore.
              </p>
            @elseif (session('locale') === 'en')
              <h2 data-aos="fade-down">Welcome to Beatriz Rénovation</h2>
              <p data-aos="fade-up">
                Through our partners, we offer the sale of industrial 
                materials for the sectors of civil construction, oil platforms, 
                hospitals, agriculture, as well as large pharmaceutical 
                and chemical distributions, and much more.
              </p>          
            @elseif (session('locale') === 'pt')
              <h2 data-aos="fade-down">Bem-vindo à Beatriz Rénovation</h2>
              <p data-aos="fade-up">                
                Através de nossos parceiros, oferecemos a venda de materiais
                industriais para os setores de construção civil, 
                plataformas de petróleo, hospitais, agricultura, 
                além de grandes distribuições farmacêuticas e químicas, e muito mais.
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
                  Beatriz Rénovation é uma empresa especializada na transformação 
                  industrial, bem como na manutenção e renovação de espaços residenciais, 
                  comercial e industrial. Oferecemos serviços de limpeza e reforma 
                  e layout, e vendemos uma ampla gama de materiais industriais e 
                  equipamentos para os setores hospitalar, industrial, administrativo e saúde 
                  distribuição em massa. Nossos engenheiros também podem ajudar seus negócios 
                  ao instalar as máquinas. Nosso objetivo é fornecer soluções 
                  eficiente e personalizado para melhorar seus espaços de vida e de trabalho.
                </p>
                
                <strong class="mb-4">Por que escolher Beatriz Rénovation?</strong>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-1-circle flex-shrink-0"></i>
                  <div>
                    <h4>Qualidade e know-how</h4>
                    <ul>
                      <li>Serviços de alta qualidade utilizando materiais duráveis ​​e técnicas comprovadas.</li>
                      <li>Comercialização de produtos e materiais industriais, hospitalares, administrativos e de grande distribuição de qualidade premium.</li>
                    </ul>
                  </div>
                </div>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-2-circle flex-shrink-0"></i>
                  <div>
                    <h4>Abordagem personalizada</h4>
                    <ul>
                      <li>Soluções à medida para renovação, limpeza e remodelação.</li>
                      <li>Assistência dos nossos engenheiros para a instalação de máquinas no local.</li>
                    </ul>
                  </div>
                </div>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-3-circle flex-shrink-0"></i>
                  <div>
                    <h4>Respeito aos prazos</h4>
                    <ul>
                      <li>Respeito aos prazos acordados com trabalho cuidadoso e de qualidade.</li>
                      <li>Serviços completos incluindo desmontagem, manuseio e transporte de equipamentos.</li>
                    </ul>
                  </div>
                </div>   
                @break
              @case('en')
                  <p class="text-justify">
                    Beatriz Rénovation is a company specializing in the transformation 
                    industrial as well as in the maintenance and renovation of residential spaces, 
                    commercial and industrial. We offer cleaning and renovation services 
                    and layout, and we sell a wide range of industrial materials and 
                    equipment for the hospital, industrial, administrative and health sectors 
                    mass distribution. Our engineers can also assist your businesses 
                    when installing the machines. Our goal is to provide solutions 
                    efficient and personalized to improve your living and working spaces.
                  </p>
                  
                  <strong class="mb-4">Why Choose Beatriz Rénovation?</strong>

                  <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-1-circle flex-shrink-0"></i>
                    <div>
                      <h4>Quality and know-how</h4>
                      <ul>
                        <li>High quality services using durable materials and proven techniques.</li>
                        <li>Sale of premium quality industrial, hospital, administrative and mass distribution products and materials.</li>
                      </ul>
                    </div>
                  </div>

                  <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-2-circle flex-shrink-0"></i>
                    <div>
                      <h4>Personalized approach</h4>
                      <ul>
                        <li>Tailor-made solutions for renovation, cleaning and fitting out.</li>
                        <li>Assistance from our engineers for the installation of machines on site.</li>
                      </ul>
                    </div>
                  </div>

                  <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-3-circle flex-shrink-0"></i>
                    <div>
                      <h4>Respect of deadlines</h4>
                      <ul>
                        <li>Respect of agreed deadlines with careful and quality work.</li>
                        <li>Complete services including dismantling, handling and transportation of equipment.</li>
                      </ul>
                    </div>
                  </div>                    
                  @break
              @default
                <p class="text-justify">
                  Beatriz Rénovation est une entreprise spécialisée dans la transformation 
                  industrielle ainsi que dans l'entretien et la rénovation des espaces résidentiels, 
                  commerciaux et industriels. Nous proposons des services de nettoyage, de rénovation 
                  et d'aménagement, et nous vendons une large gamme de matériaux industriels et 
                  d'équipements pour les secteurs hospitalier, industriel, administratif et de la 
                  grande distribution. Nos ingénieurs peuvent également assister vos entreprises 
                  lors de l'installation des machines. Notre objectif est de fournir des solutions 
                  efficaces et personnalisées pour améliorer vos espaces de vie et de travail.
                </p>

                <strong class="mb-4">Pourquoi Choisir Beatriz Rénovation?</strong>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-1-circle flex-shrink-0"></i>
                  <div>
                    <h4>Qualité et savoir-faire</h4>
                    <ul>
                      <li>Services de haute qualité utilisant des matériaux durables et des techniques éprouvées.</li>
                      <li>Vente de produits et de matériaux industriels, hospitaliers, administratifs et de grande distribution de première qualité.</li>
                    </ul>
                  </div>
                </div>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-2-circle flex-shrink-0"></i>
                  <div>
                    <h4>Approche personnalisée</h4>
                    <ul>
                      <li>Solutions sur mesure pour la rénovation, le nettoyage et l'aménagement.</li>
                      <li>Assistance de nos ingénieurs pour l'installation des machines sur site.</li>
                    </ul>
                  </div>
                </div>

                <div class="icon-box d-flex position-relative mb-2" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-3-circle flex-shrink-0"></i>
                  <div>
                    <h4>Respect des délais</h4>
                    <ul>
                      <li>Respect des délais convenus avec un travail soigné et de qualité.</li>
                      <li>Services complets incluant le démontage, la manutention et le transport des équipements.</li>
                    </ul>
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
                Somos especializados na venda de equipamentos para indústrias 
                internacionais e em serviços de manuseio, como desmontagem e 
                remontagem de equipamentos, bem como reforma e limpeza interna e externa.
              </p>  
              @break
            @case('en')
              <h2>Services</h2>
              <p>
                We specialize in selling equipment to international industries and 
                handling services such as dismantling and reassembling equipment, 
                as well as interior and exterior renovation and cleaning.
              </p>
                @break
            @default
              <h2>Services</h2>
              <p>                
                Nous sommes spécialisés dans la vente de matériel destiné aux industries 
                internationales et dans la gestion de services tels que le démontage et 
                le remontage des équipements, ainsi que la rénovation intérieure
                et extérieure et le nettoyage.
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
                          Fornecemos uma ampla gama de mármores de alta qualidade, 
                          perfeito para diversos projetos de construção e arquitetura. 
                          Nossos mármores estão disponíveis em diversas cores e acabamentos, 
                          adaptado a todas as suas necessidades estéticas e funcionais.
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
                          Comercializamos uma grande variedade de materiais de construção, 
                          incluindo concreto, aço e outros produtos essenciais 
                          para construção civil.
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
                          DDescubra a nossa vasta gama de materiais concebidos para 
                          satisfazer as necessidades dos sectores agro-alimentar, têxtil, 
                          farmacêutica, processamento e distribuição de produtos químicos, 
                          aço, automóveis e água. Oferecemos produtos 
                          robusto e eficiente que aumenta a produtividade, a segurança e 
                          sustentabilidade em vários setores.
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
                          We supply a wide range of high quality marbles, 
                          perfect for various construction and architectural projects. 
                          Our marbles are available in several colors and finishes, 
                          adapted to all your aesthetic and functional needs.
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
                          We sell a wide variety of building materials, 
                          including concrete, steel and other essential products 
                          for civil construction.
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
                          Discover our wide range of materials designed to 
                          meet the needs of the agri-food, textile, 
                          pharmaceutical, processing and distribution of chemicals, 
                          steel, automobiles and water. We offer products 
                          robust and efficient that boost productivity, safety and 
                          sustainability in various industries.
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
                          Nous fournissons une large gamme de marbres de haute qualité, 
                          parfaits pour différents projets de construction et d'architecture. 
                          Nos marbres sont disponibles en plusieurs couleurs et finitions, 
                          adaptées à tous vos besoins esthétiques et fonctionnels.
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
                          Nous vendons une grande variété de matériaux de construction, 
                          y compris le béton, l'acier et d'autres produits essentiels 
                          pour la construction civile.
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
                          répondre aux besoins des secteurs agroalimentaire, textile, 
                          pharmaceutique, traitement et distribution de produits chimiques, 
                          de l'acier, de l'automobile et de l'eau. Nous proposons des produits 
                          robustes et efficaces qui boostent la productivité, la sécurité et la 
                          durabilité dans diverses industries.
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
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">
      @switch(session('locale'))
          @case('pt')
            <div class="section-header">
              <h2>Nossos Parceiros</h2>
              <p>
                Colaboramos com empresas de renome mundial para lhe fornecer serviços superiores.
              </p>
            </div>              
            @break
          @case('en')
          <div class="section-header">
            <h2>Our Partners</h2>
            <p>
              We collaborate with world-renowned companies 
              to provide you with superior services.
            </p>
          </div>  
            @break
          @default
          <div class="section-header">
            <h2>Nos Partenaires</h2>
            <p>
              Nous collaborons avec des entreprises de renommée 
              mondiale pour vous offrir des services de qualité supérieure.
            </p>
          </div>
      @endswitch

      <div class="row gy-5">
        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/Petrobras_br.png" class="img-fluid partner" alt="Petrobras">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/eurofarma-logo.png" class="img-fluid partner" alt="Eurofarma">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/Gerdau.png" class="img-fluid partner" alt="Gerdau">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/Karl_Storz_Endoskope.png" class="img-fluid partner" alt="Karl Storz - Endoskope">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/Schott.png" class="img-fluid partner" alt="Schott">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/Röchling.png" class="img-fluid partner" alt="Rochling">
        </div><!-- End Team Member -->
      
        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/Kuhn.png" class="img-fluid partner" alt="Kuhn">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/IFP-Trainig.png" class="img-fluid partner" alt="IFP Training">
        </div><!-- End Team Member -->
        
        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/Camargo-Correa.png" class="img-fluid partner" alt="Construtora Camargo Corrêa">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/logo-mga.png" class="img-fluid partner" alt="MGA Tecnologies">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/Constlab_ger.png" class="img-fluid partner" alt="MGA Tecnologies">
        </div><!-- End Team Member -->

        <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <img src="assets/img/partners/logo-hzc-v2.png" class="img-fluid partner" alt="MGA Tecnologies">
        </div><!-- End Team Member -->
      </div>
    </div>
  </section>
  <!-- End Our Team Section -->


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
                    
                    <div class="col-lg-6 col-md-6">
                      <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="fa-solid fa-location-dot color-green flex-shrink-0"></i>
                        <div>
                          <p>3 Countries (France, Angola and Portugal)</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6">
                      <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="fa-solid fa-compass-drafting color-pink flex-shrink-0"></i>
                        <div>
                          <p>3 Main services (Industrial, Renovation and Cleaning)</p>
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
                  Para garantir maior confiabilidade em nosso trabalho, não hesite em nos contatar.
                </p>
                @break
              @case('en')
                <h2>Contact</h2>
                <p>
                  To ensure greater reliability in our work, do not hesitate to contact us.
                </p>
                @break
              @default
                <h2>Contact</h2>
                <p>
                  Afin d'assurer une plus grande fiabilité dans notre travail, n’hésitez pas à nous contacter.
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
                  <h3>Send us an email</h3>                
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
                @switch (session('locale'))
                  @case('pt')
                    <select class="form-select" name="typeSolicitation" id="typeSolicitation">
                      <option value="service">Serviço</option>
                      <option value="product">Produto</option>
                    </select>
                    @break
                  @case('en')
                    <select class="form-select" name="typeSolicitation" id="typeSolicitation">
                      <option value="service">Service</option>
                      <option value="product">Product</option>
                    </select>  
                    @break
                  @default
                    <select class="form-select" name="typeSolicitation" id="typeSolicitation">
                      <option value="service">Service</option>
                      <option value="product">Produit</option>
                    </select>  
                @endswitch
              </div>

              <div class="form-group" id="section-service" style="display: block;">
                <select class="form-control" name="service" id="service"> 

                  @switch (session('locale'))
                    @case('pt')
                      <option value="">{{ $selectService }}</option>                   
                      @foreach ($services as $service)
                        <option value="{{ $service->title_pt }}">{{ $service->title_pt }}</option>                    
                      @endforeach

                      @break
                    @case('en')
                      <option value="">{{ $selectService }}</option>                   
                      @foreach ($services as $service)
                        <option value="{{ $service->title_en }}">{{ $service->title_en }}</option>                    
                      @endforeach
                      
                      @break
                    @default
                      <option value="">{{ $selectService }}</option>                   
                      @foreach ($services as $service)
                        <option value="{{ $service->title_fr }}">{{ $service->title_fr }}</option>                    
                      @endforeach
                      
                  @endswitch
                </select>
              </div>

              <div class="form-group" id="section-product" style="display: none;">
                <select class="form-control" name="product" id="product"> 

                  @switch (session('locale'))
                    @case('pt')
                      <option value="">{{ $selectProduct }}</option>                   
                      @foreach ($products as $product)
                        <option value="{{ $product->title_pt }}">{{ $product->title_pt }}</option>                    
                      @endforeach

                      @break
                    @case('en')
                      <option value="">{{ $selectProduct }}</option>                   
                      @foreach ($products as $product)
                        <option value="{{ $product->title_en }}">{{ $product->title_en }}</option>                    
                      @endforeach
                      
                      @break
                    @default
                      <option value="">{{ $selectProduct }}</option>                   
                      @foreach ($products as $product)
                        <option value="{{ $product->title_fr }}">{{ $product->title_fr }}</option>                    
                      @endforeach
                      
                  @endswitch
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

