@extends('layouts.default')

@section('title', 'Beatriz')

@section('content')

@switch(session('locale'))
  @case('en')
  <div class="breadcrumbs d-flex align-items-center"
  style="background-image: url('assets/img/services-details.jpg');">
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="active">Industrial</a>
              <a href="#">Renewal</a>
              <a href="#">Cleaning</a>
            </div>

            <h4>Enim qui eos rerum in delectus</h4>
            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
          </div>

          <div class="col-lg-8">
            <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
            <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
            <p>
              Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            </ul>
            <p>
              Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
            </p>
            <p>
              Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->
  @break
  @case('pt')
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset("assets/img/services-details.jpg") }}');">     
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Detalhes dos Serviços</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="service-details" class="service-details mb-6">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        @switch($detail)
              @case('in')
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <div class="services-list">
                      <a href="{{ route('services-details', 'in') }}" class="active">Industrial</a>
                      <a href="{{ route('services-details', 're') }}">Renovação</a>
                      <a href="{{ route('services-details', 'ne') }}">Limpeza</a>
                    </div>
                    
                    <div class="p-3">
                      <h4>Industrial</h4>
                      <p class="text-justify">
                        Na Béatriz Rénovation especializamo-nos numa gama
                        gama completa de serviços industriais,
                        materiais para
                        instalação e peças
                        equipamento industrial. Nós cobrimos
                        vários setores, incluindo o setor
                        petróleo, construção civil,
                        arquitetura e agricultura.
                      </p>
                    </div>
                    
                  </div>
                  <div class="col-lg-8">
                    <div id="products" class="products">
                      <div class="container aos-init aos-animate" data-aos="fade-up">
                
                        <div class="row gy-4">
                          
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Plataformas de Petróleo</h4>
                                    <p>
                                      Fornecemos equipamentos
                                      especializado para plataformas
                                      empresas petrolíferas e temos peças
                                      peças de reposição para manter seu
                                      instalações em perfeitas condições
                                      Operativo.
                                      Nossos engenheiros
                                      pessoas competentes podem ajudá-lo
                                      no local para instalação,
                                      manutenção e reparação de
                                      seu equipamento. 
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset('./assets/img/plataform.jpeg') }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/construction.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Construção</h4>
                                    <p>
                                      Oferecemos uma ampla gama
                                      de materiais de construção
                                      alta qualidade, feito de concreto
                                      até mesmo estruturas metálicas.
                                      Nossas equipes de engenharia
                                      e técnicos podem garantir o
                                      instalação e manutenção de
                                      equipamentos, garantindo a
                                      a segurança e a eficácia
                                      seus projetos de construção. 
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Arquitetura</h4>
                                    <p>
                                      Nossos serviços incluem
                                      também soluções
                                      projetos arquitetônicos inovadores.
                                      Vendemos equipamentos
                                      arquitetura de alta qualidade,
                                      incluindo mármores de alta qualidade
                                      qualidade e oferecemos
                                      serviços de instalação para
                                      seus projetos arquitetônicos. 
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/arctexture.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/agriculture.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Agricultura</h4>
                                    <p>
                                      Oferecemos uma ampla gama
                                      de materiais de construção
                                      alta qualidade, feito de concreto
                                      até mesmo estruturas metálicas.
                                      Nossas equipes de engenharia
                                      e técnicos podem garantir o
                                      instalação e manutenção de
                                      equipamentos, garantindo a
                                      a segurança e a eficácia
                                      seus projetos de construção.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @break
              @case('re')
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <div class="services-list">
                      <a href="{{ route('services-details', 'in') }}">Industrial</a>
                      <a href="{{ route('services-details', 're') }}" class="active">Renovação</a>
                      <a href="{{ route('services-details', 'ne') }}">Limpeza</a>
                    </div>
                    
                    <div class="p-3">
                      <h4>Rénovation</h4>
                      <p class="text-justify">
                        
                        Os nossos serviços de renovação visam transformar e melhorar o seu 
                        espaços de estar e de trabalho, aliando estética e funcionalidade. 
                        Cuidamos de projetos de todos os portes, desde reformas de 
                        salas pequenas para completar a reforma de grandes espaços. Nossa abordagem para 
                        medição garante que cada projeto reflita suas necessidades e preferências, criando 
                        ambientes bonitos e práticos.
                      
                      </p>
                    </div>
                  </div>
  
                  <div class="col-lg-8">
                    <div id="products" class="products">
                      <div class="container aos-init aos-animate" data-aos="fade-up">
                
                        <div class="row gy-4">
                          
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Renovação interiores e exterior</h4>
                                    <p>                                     
                                      Transforme seus espaços com
                                      serviços de renovação
                                      completo, seja
                                      dentro ou fora
                                      sua propriedade. 
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/renovation-interior.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/coki-restaurant.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Desenvolvimento de cozinha e banheiro banhos</h4>
                                    <p>                                     
                                      Design e produção
                                      espaços funcionais e
                                      elegante para sua cozinha e
                                      seu banheiro.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">
                                      Revestimento
                                      do chão</h4>
                                    <p>
                                      Instalação de diversos tipos de
                                      revestimentos de piso
                                      alta qualidade adequada para
                                      suas necessidades. 
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/revestiment.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/piting.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Pintura</h4>
                                    <p>
                                                                            
                                      Serviços de pintura
                                      profissional para
                                      atualizar e personalizar
                                      seus espaços.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">
                                      Carpintaria</h4>
                                    <p>
                                      Criação e instalação de
                                      marcenaria personalizada
                                      para adicionar um toque
                                      exclusivo para seus interiores
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/capinter.jpeg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/mamore-instalation.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">
                                      Instalação de
                                      materiais de mármore</h4>
                                    <p>
                                      Colocação e instalação de
                                      mármores de qualidade para
                                      acabamentos luxuosos e
                                      durável.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @break
              @case('ne')
              <div class="col-lg-4">
              <div class="services-list">
                <a href="{{ route('services-details', 'in') }}">Industriel</a>
                <a href="{{ route('services-details', 're') }}">Rénovation</a>
                <a href="{{ route('services-details', 'ne') }}" class="active">Nettoyage</a>
              </div>
  
              <h4>Nettoyage</h4>
              <p>                      
                Nous offrons une gamme complète de services de nettoyage pour 
                garantir des espaces impeccables, sains et accueillants. 
                Nos services de nettoyage s'adaptent à divers environnements, qu'ils soient résidentiels, 
                commerciaux ou industriels. Nous utilisons des techniques et produits de nettoyage
                avancés pour assurer une propreté optimale et maintenir des standards élevés d'hygiène.</p>
              </div>

              <div class="col-lg-8">
                <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
                <p>
                  Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                </ul>
                <p>
                  Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                </p>
                <p>
                  Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
                </p>
              </div>
              @break

        @endswitch
        </div>
      </div>
    </section>
  @break
  @default

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset("assets/img/services-details.jpg") }}');">     
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Détails des Services</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details mb-6">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        @switch($detail)
              @case('in')
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <div class="services-list">
                      <a href="{{ route('services-details', 'in') }}" class="active">Industriels</a>
                      <a href="{{ route('services-details', 're') }}">Rénovation</a>
                      <a href="{{ route('services-details', 'ne') }}">Nettoyage</a>
                    </div>
                    
                    <div class="p-3">
                      <h4>Industriels</h4>
                      <p class="text-justify">
                        NChez Béatriz Rénovation, nous sommes
                        spécialisé dans une gamme
                        gamme complète de services industriels,
                        des matériaux à
                        installation et pièces
                        équipement industriel. Nous couvrons
                        divers secteurs, dont le secteur
                        pétrole, construction civile,
                        l'architecture et l'agriculture.
                      </p>
                    </div>
                    
                  </div>
                  <div class="col-lg-8">
                    <div id="constructions" class="constructions">
                      <div class="container aos-init aos-animate" data-aos="fade-up">
                
                        <div class="row gy-4">
                          
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Plateformes Pétrolières</h4>
                                    <p>
                                      Nous fournissons du matériel
                                      spécialisé pour les plateformes
                                      les compagnies pétrolières et nous avons des pièces
                                      pièces de rechange pour entretenir votre
                                      installations en parfait état
                                      De fonctionnement.
                                      Nos ingénieurs
                                      des personnes compétentes peuvent vous aider
                                      sur place pour l'installation,
                                      entretien et réparation de
                                      votre équipement.  
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/plataform.jpeg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/construction.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Construction</h4>
                                    <p>
                                      Nous proposons une large gamme
                                      de matériaux de construction
                                      de haute qualité, en béton
                                      même les structures métalliques.
                                      Nos équipes d'ingénierie
                                      et les techniciens peuvent garantir le
                                      l'installation et l'entretien de
                                      équipement, assurant la
                                      la sécurité et l'efficacité de
                                      vos projets de construction.  
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Architecture</h4>
                                    <p>
                                      Nos services incluent
                                      aussi des solutions
                                      des conceptions architecturales innovantes.
                                      Nous vendons du matériel
                                      architecturale haut de gamme,
                                      y compris des marbres de haute qualité
                                      qualité, et nous offrons
                                      services d'installation pour
                                      leurs projets architecturaux. 
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/arctexture.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/agriculture.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Agriculture</h4>
                                    <p>
                                      Nous proposons une large gamme
                                      de matériaux de construction
                                      de haute qualité, en béton
                                      même les structures métalliques.
                                      Nos équipes d'ingénierie
                                      et les techniciens peuvent garantir le
                                      l'installation et l'entretien de
                                      équipement, assurant la
                                      la sécurité et l'efficacité de
                                      vos projets de construction.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @break
              @case('re')
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <div class="services-list">
                      <a href="{{ route('services-details', 'in') }}">Industriel</a>
                      <a href="{{ route('services-details', 're') }}" class="active">Rénovation</a>
                      <a href="{{ route('services-details', 'ne') }}">Nettoyage</a>
                    </div>
                    <div class="p-3">
                      <h4>Rénovation</h4>
                      <p class="text-justify">Nos services de rénovation visent à transformer et à améliorer vos 
                        espaces de vie et de travail, en alliant esthétique et fonctionnalité. 
                        Nous prenons en charge des projets de toutes tailles, de la rénovation de 
                        petites pièces à la refonte complète de grands espaces. Notre approche sur 
                        mesure garantit que chaque projet reflète vos besoins et préférences, créant 
                        des environnements qui sont à la fois beaux et pratiques.</p>
                    </div>
                  </div>
  
                  <div class="col-lg-8">
                    <div id="constructions" class="constructions">
                      <div class="container aos-init aos-animate" data-aos="fade-up">
                
                        <div class="row gy-4">
                          
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Rénovation
                                      intérieure et
                                      extérieure</h4>
                                    <p>                                     
                                      Transformez vos espaces avec
des services de rénovation
complets, que ce soit à
l'intérieur ou à l'extérieur de
votre propriété.
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/renovation-interior.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
  
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/coki-restaurant.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Aménagement de
                                      cuisine et salle de
                                      bains</h4>
                                    <p>                                     
                                      Conception et réalisation
d'espaces fonctionnels et
élégants pour votre cuisine et
votre salle de bains
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
  
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">
                                      Revêtement de sol</h4>
                                    <p>
                                      Pose de différents types de
revêtements de sol de
haute qualité adaptés à
vos besoins.
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/revestiment.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
  
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/piting.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Peinture</h4>
                                    <p>
                                                                            
                                      Services de peinture
professionnelle pour
rafraîchir et personnaliser
vos espaces.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
  
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">
                                      Menuiserie</h4>
                                    <p>
                                      Création et installation de
menuiseries sur mesure
pour ajouter une touche
unique à vos intérieurs.
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/capinter.jpeg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
  
                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/mamore-instalation.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">
                                      Installation de matériaux de marbre</h4>
                                    <p>
                                      Pose et installation de
marbres de qualité pour
des finitions luxueuses et
durables.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @break
              @case('ne')
              <div class="col-lg-4">
              <div class="services-list">
                <a href="{{ route('services-details', 'in') }}">Industriel</a>
                <a href="{{ route('services-details', 're') }}">Rénovation</a>
                <a href="{{ route('services-details', 'ne') }}" class="active">Nettoyage</a>
              </div>
  
              <h4>Nettoyage</h4>
              <p>                      
                Nous offrons une gamme complète de services de nettoyage pour 
                garantir des espaces impeccables, sains et accueillants. 
                Nos services de nettoyage s'adaptent à divers environnements, qu'ils soient résidentiels, 
                commerciaux ou industriels. Nous utilisons des techniques et produits de nettoyage
                avancés pour assurer une propreté optimale et maintenir des standards élevés d'hygiène.</p>
              </div>

              <div class="col-lg-8">
                <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                <h3>Temporibus et in vero dicta aut eius lidero plastis trand lined voluptas dolorem ut voluptas</h3>
                <p>
                  Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
                </p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                  <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                </ul>
                <p>
                  Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                </p>
                <p>
                  Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
                </p>
              </div>
              @break

        @endswitch
        </div>
      </div>
    </section>
@endswitch
@endsection