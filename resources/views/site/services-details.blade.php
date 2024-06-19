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

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        @switch($detail)
        @case('in')
          <div class="row gy-4">
            <div class="col-lg-4">
              <div class="services-list">
                <a href="#" class="active">Industrial</a>
                <a href="#">Renovação</a>
                <a href="#">Limpeza</a>
              </div>
  
              <h4>Industrial</h4>
              <p class="text-justify">
                Na Béatriz Rénovation, estamos
                especializado em uma variedade
                gama completa de serviços industriais,
                materiais para
                instalação e peças
                equipamento industrial. Nós cobrimos
                vários setores, incluindo o setor
                petróleo, construção civil,
                arquitetura e agricultura.

              </p>
            </div>
            <div class="col-lg-8">
              {{-- <h3>Nos Domaines de Spécialisation Industrie</h3> --}}
              <div class="row mb-5" style="boder: 1px solid red">
                <div class="col-6 service-industrial">
                  <h4>Plataformas Petrolíferas</h4> 
                  <p class="text-justify">
                    Fornecemos materiais
                    especializados para plataformas
                    petrolíferas e dispomos de peças
                    de reposição para manter suas
                    instalações em perfeito estado
                    de funcionamento.
                    Nossos engenheiros
                    competentes podem assisti-lo
                    no local para a instalação,
                    manutenção e reparação dos
                    seus equipamentos.
                  </p>
                </div>

                <div class="col-6" style="background: no-repeat center url('{{ asset("assets/img/plataform.jpeg") }}'); background-size: cover">
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-6" style="background: no-repeat center url('{{ asset("assets/img/construction.jpg") }}'); background-size: cover">
                </div>
                <div class="col-6 service-industrial">
                  <h4>Construção Civil</h4> 
                  <p class="text-justify">
                    Oferecemos uma ampla gama
                    de materiais de construção de
                    alta qualidade, desde concreto
                    até estruturas metálicas.
                    Nossas equipes de engenheiros
                    e técnicos podem garantir a
                    instalação e a manutenção dos
                    equipamentos, assegurando a
                    segurança e a eficiência dos
                    seus projetos de construção.

                  </p>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-6 service-industrial">
                  <h4>Arquitetura</h4> 
                  <p class="text-justify">
                    Nossos serviços incluem
                    também soluções
                    arquitetônicas inovadoras.
                    Vendemos materiais
                    arquitetônicos premium,
                    incluindo mármores de alta
                    qualidade, e oferecemos
                    serviços de instalação para
                    seus projetos arquitetônicos.
                    
                  </p>
                </div>

                <div class="col-6" style="background: no-repeat center url('{{ asset("assets/img/arctexture.jpg") }}'); background-size: cover">
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-6" style="background: no-repeat center url('{{ asset("assets/img/agriculture.jpg") }}'); background-size: cover">
                </div>
                <div class="col-6 service-industrial">
                  <h4>Agricultura</h4> 
                  <p class="text-justify">
                    Oferecemos uma ampla gama
                    de materiais de construção de
                    alta qualidade, desde concreto
                    até estruturas metálicas.
                    Nossas equipes de engenheiros
                    e técnicos podem garantir a
                    instalação e a manutenção dos
                    equipamentos, assegurando a
                    segurança e a eficiência dos
                    seus projetos de construção.

                  </p>
                </div>
              </div>
            </div>
          </div>
          @break
        @case('re')
        <div class="col-lg-4">
          <div class="services-list">
            <a href="#">Industriel</a>
            <a href="#" class="active">Rénovation</a>
            <a href="#">Nettoyage</a>
          </div>

          <h4>Rénovation</h4>
          <p>Nos services de rénovation visent à transformer et à améliorer vos 
            espaces de vie et de travail, en alliant esthétique et fonctionnalité. 
            Nous prenons en charge des projets de toutes tailles, de la rénovation de 
            petites pièces à la refonte complète de grands espaces. Notre approche sur 
            mesure garantit que chaque projet reflète vos besoins et préférences, créant 
            des environnements qui sont à la fois beaux et pratiques.</p>
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
        @case('ne')
        <div class="col-lg-4">
        <div class="services-list">
          <a href="#">Industriel</a>
          <a href="#">Rénovation</a>
          <a href="#" class="active">Nettoyage</a>
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
    </section><!-- End Service Details Section -->

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
                      <a href="#" class="active">Industriels</a>
                      <a href="#">Rénovation</a>
                      <a href="#">Nettoyage</a>
                    </div>
        
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
                  <div class="col-lg-8">
                    <div class="row mb-5" style="boder: 1px solid red">
                      <div class="col-lg-6 col-sm-12 service-industrial">
                        <h4>Plateformes Pétrolières</h4> 
                        <p class="text-justify">
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

                      <div class="col-lg-6 col-sm-12" style="background: no-repeat center url('{{ asset("assets/img/plataform.jpeg") }}'); background-size: cover">
                      </div>
                    </div>

                    <div class="row mb-5">
                      <div class="col-6" style="background: no-repeat center url('{{ asset("assets/img/construction.jpg") }}'); background-size: cover">
                      </div>
                      <div class="col-6 service-industrial">
                        <h4>Construction</h4> 
                        <p class="text-justify">
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

                    <div class="row mb-5">
                      <div class="col-6 service-industrial">
                        <h4>Architecture</h4> 
                        <p class="text-justify">
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

                      <div class="col-6" style="background: no-repeat center url('{{ asset("assets/img/arctexture.jpg") }}'); background-size: cover">
                      </div>
                    </div>

                    <div class="row mb-5">
                      <div class="col-lg-6" style="background: no-repeat center url('{{ asset("assets/img/agriculture.jpg") }}'); background-size: cover">
                      </div>
                      <div class="col-lg-6 service-industrial">
                        <h4>Agriculture</h4> 
                        <p class="text-justify">
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
                @break
              @case('re')
                <div class="col-lg-4">
                  <div class="services-list">
                    <a href="#">Industriel</a>
                    <a href="#" class="active">Rénovation</a>
                    <a href="#">Nettoyage</a>
                  </div>
      
                  <h4>Rénovation</h4>
                  <p>Nos services de rénovation visent à transformer et à améliorer vos 
                    espaces de vie et de travail, en alliant esthétique et fonctionnalité. 
                    Nous prenons en charge des projets de toutes tailles, de la rénovation de 
                    petites pièces à la refonte complète de grands espaces. Notre approche sur 
                    mesure garantit que chaque projet reflète vos besoins et préférences, créant 
                    des environnements qui sont à la fois beaux et pratiques.</p>
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
              @case('ne')
              <div class="col-lg-4">
              <div class="services-list">
                <a href="#">Industriel</a>
                <a href="#">Rénovation</a>
                <a href="#" class="active">Nettoyage</a>
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