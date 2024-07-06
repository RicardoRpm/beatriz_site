@extends('layouts.default')

@section('title', 'Beatriz')

@section('content')

@switch(session('locale'))
  @case('en')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset("assets/img/services-details.jpg") }}');">     
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>Services Details</h2>
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
                      <a href="{{ route('services-details', 're') }}">Renovation</a>
                      <a href="{{ route('services-details', 'ne') }}">Cleaning</a>
                    </div>
                    
                    <div class="p-3">
                      <h4>Industrial</h4>
                      <p class="text-justify">
                        At Béatriz Rénovation we specialize in a range
                        full range of industrial services,
                        materials for
                        installation and parts
                        industrial equipment. We cover
                        various sectors, including the sector
                        oil, civil construction,
                        architecture and agriculture.
                      </p>
                      <a href="{{ route('download-catalog', 'in') }}" >Download catalog <i class="bi bi-arrow-right"></i></a>
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
                                    <h4 class="card-title">Oil Platforms</h4>
                                    <p>
                                      We provide equipment
                                      specialized for platforms
                                      oil companies and we have parts
                                      replacement parts to maintain your
                                      facilities in perfect condition
                                      Operative.
                                      Our engineers
                                      competent people can help you
                                      on site for installation,
                                      maintenance and repair of
                                      your equipment.
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
                                    <h4 class="card-title">Construction</h4>
                                    <p>
                                      We offer a wide range
                                      of construction materials
                                      high quality, made of concrete
                                      even metallic structures.
                                      Our engineering teams
                                      and technicians can guarantee the
                                      installation and maintenance of
                                      equipment, ensuring the
                                      safety and efficacy
                                      your construction projects.
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
                                      Our architects were selected for their ability to understand your 
                                      needs and adapt projects to your budget. We have a local network 
                                      of qualified artisans through the partnership with La B.R.I de Strasbourg, 
                                      ensuring seriousness and quality in each service. 
                                      Carry out your project with peace of mind with B.R.I Architectes!
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
                                      Meet your needs with our expertise in agricultural sales. 
                                      At B.R.I, we prioritize team management and offer machines 
                                      personalized and quality services that add value. 
                                      We use our know-how to develop your projects, helping you to 
                                      prosper in the profession and face future challenges with confidence.
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
                      <a href="{{ route('services-details', 're') }}" class="active">Renovation</a>
                      <a href="{{ route('services-details', 'ne') }}">Cleaning</a>
                    </div>
                    
                    <div class="p-3">
                      <h4>Renovation</h4>
                      <p class="text-justify">                        
                        Our renovation services aim to transform and improve your 
                        living and working spaces, combining aesthetics and functionality. 
                        We take care of projects of all sizes, from renovations to 
                        small rooms to complete the renovation of large spaces. Our approach to 
                        measurement ensures that each project reflects your needs and preferences, creating 
                        beautiful and practical environments.
                      </p>
                      <a href="{{ route('download-catalog', 're') }}">Download catalog <i class="bi bi-arrow-right"></i></a>
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
                                    <h4 class="card-title">
                                      Interior and exterior renovation</h4>
                                    <p>                                     
                                      Transform your spaces with
                                      renovation services
                                      complete, whether
                                      inside or outside
                                      your property.
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
                                    <h4 class="card-title">Kitchen and bathroom development</h4>
                                    <p>                                                                           
                                      Design and production
                                      functional spaces and
                                      elegant for your kitchen and
                                      your bathroom.
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
                                    <h4 class="card-title">Floor covering</h4>
                                    <p>                                      
                                      Installation of different types of
                                      floor coverings
                                      high quality suitable for
                                      your needs.
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
                                    <h4 class="card-title">Painting</h4>
                                    <p>                   
                                      Painting services
                                      professional for
                                      update and customize
                                      their spaces.
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
                                    <h4 class="card-title">Carpentry</h4>
                                    <p>         
                                      Creation and installation of
                                      custom joinery
                                      to add a touch
                                      exclusive for your interiors.
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
                                      Installation of
                                      marble materials</h4>
                                    <p>
                                      Placement and installation of
                                      quality marbles for
                                      luxurious finishes and
                                      durable.
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
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <div class="services-list">
                      <a href="{{ route('services-details', 'in') }}">Industrial</a>
                        <a href="{{ route('services-details', 're') }}">Renovation</a>
                        <a href="{{ route('services-details', 'ne') }}" class="active">Cleaning</a>
                    </div>
                    
                    <div class="p-3">
                      <h4>Cleaning</h4>
                      <p class="text-justify">
                        At Beatriz Renovação, we offer a wide range of 
                        cleaning to meet all your needs, whether 
                        residential, commercial or industrial. 
                        Our dedicated team uses cutting-edge techniques and equipment
                        to ensure impeccable results.
                      </p>
                      <div>
                        <a href="{{ route('download-catalog', 'ne') }}">Download catalog <i class="bi bi-arrow-right"></i></a>
                      </div>
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
                                    <h4 class="card-title">Office Cleaning</h4>
                                    <p>
                                      Maintain a clean and professional work environment.
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/office-clean.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/build-clear.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Post-construction cleaning</h4>
                                    <p>                                      
                                      Let us take care of the debris and dirt 
                                      after construction or renovation works.
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
                                    <h4 class="card-title">Hotel Room Cleaning</h4>
                                    <p>
                                      Ensure a comfortable and hygienic stay for your customers.
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/hotel-room.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/coky-clean.jpeg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Professional Kitchen Cleaning</h4>
                                    <p>
                                      Ensure the cleanliness and hygiene of your culinary facilities.
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

        @endswitch
        </div>
      </div>
    </section>
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
                      <a href="{{ route('download-catalog', 'in') }}" >Descarregar catálogo <i class="bi bi-arrow-right"></i></a>
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
                                      Nossos arquitetos foram selecionados pela habilidade de entender suas 
                                      necessidades e adaptar projetos ao seu orçamento. Contamos com uma rede local 
                                      de artesãos qualificados através da parceria com La B.R.I de Estrasburgo, 
                                      garantindo seriedade e qualidade em cada serviço. 
                                      Realize seu projeto com tranquilidade junto à B.R.I Architectes!
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
                                      Atenda suas necessidades com nossa expertise em vendas agrícolas. 
                                      Na B.R.I, priorizamos a gestão de equipe e oferecemos máquinas 
                                      personalizadas e serviços de qualidade que agregam valor. 
                                      Utilizamos nosso know-how para desenvolver seus projetos, ajudando-o a 
                                      prosperar na profissão e enfrentar os desafios futuros com confiança.
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
                      <h4>Renovação</h4>
                      <p class="text-justify">
                        Os nossos serviços de renovação visam transformar e melhorar o seu 
                        espaços de estar e de trabalho, aliando estética e funcionalidade. 
                        Cuidamos de projetos de todos os portes, desde reformas de 
                        salas pequenas para completar a reforma de grandes espaços. Nossa abordagem para 
                        medição garante que cada projeto reflita suas necessidades e preferências, criando 
                        ambientes bonitos e práticos.
                      </p>
                      <a href="{{ route('download-catalog', 're') }}" >Descarregar catálogo <i class="bi bi-arrow-right"></i></a>
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
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <div class="services-list">
                      <a href="{{ route('services-details', 'in') }}">Industrial</a>
                        <a href="{{ route('services-details', 're') }}">Renovação</a>
                        <a href="{{ route('services-details', 'ne') }}" class="active">Limpeza</a>
                    </div>
                    
                    <div class="p-3">
                      <h4>Limpeza</h4>
                      <p class="text-justify">
                        Na Beatriz Renovação, oferecemos uma ampla gama de serviços de 
                        limpeza para atender a todas as suas necessidades, sejam elas 
                        residenciais, comerciais ou industriais. 
                        Nossa equipe dedicada utiliza técnicas e equipamentos de ponta
                        para garantir resultados impecáveis.
                      </p>
                      <div>
                        <a href="{{ route('download-catalog', 'ne') }}">Descarregar catálogo <i class="bi bi-arrow-right"></i></a>
                      </div>
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
                                    <h4 class="card-title">Limpeza de Escritórios</h4>
                                    <p>
                                      Mantenha um ambiente de trabalho limpo e profissional.
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/office-clean.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/build-clear.jpg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Limpeza Pós-obra</h4>
                                    <p>
                                      Deixe-nos cuidar dos detritos e da sujeira 
                                      após suas obras de construção ou reforma.
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
                                    <h4 class="card-title">Limpeza de Quartos de Hotel</h4>
                                    <p>
                                      Garanta uma estadia confortável e higiênica para seus clientes.
                                    </p>
                                  </div>
                                </div>
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/hotel-room.jpg") }}');"></div>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-item">
                              <div class="row">
                                
                                <div class="col-xl-6">
                                  <div class="card-bg" style="background-image: url('{{ asset("assets/img/coky-clean.jpeg") }}');"></div>
                                </div>
                                
                                <div class="col-xl-6 d-flex align-items-center">
                                  <div class="card-body">
                                    <h4 class="card-title">Limpeza de Cozinhas Profissionais</h4>
                                    <p>
                                      Garanta a limpeza e higiene de suas instalações culinárias.
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
                      Chez Béatriz Rénovation, nous sommes
                      spécialisé dans une gamme complète de services industriels,
                      des matériaux à
                      installation et pièces
                      équipement industriel. Nous couvrons
                      divers secteurs, dont le secteur
                      pétrole, construction civile,
                      l'architecture et l'agriculture.
                    </p>
                    <a href="{{ route('download-catalog', 'in') }}" >Télécharger le catalogue <i class="bi bi-arrow-right"></i></a>
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
                                  <h4 class="card-title">Plateformes Pétrolières</h4>
                                  <p>
                                    Nous fournissons du matériel
                                    spécialisé pour les plateformes
                                    les compagnies pétrolières et nous avons des
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
                                    Nos architectes ont été sélectionnés pour leur 
                                    capacité à comprendre vos besoins et à adapter 
                                    les projets à votre budget. Nous disposons d'un 
                                    réseau local d'artisans qualifiés au travers d'un 
                                    partenariat avec La B.R.I à Strasbourg, garantissant 
                                    sérieux et qualité dans chaque prestation. 
                                    Réalisez votre projet en toute sérénité avec B.R.I Architectes !
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
                                    Répondez à vos besoins grâce à notre expertise en vente agricole. 
                                    Chez B.R.I, nous priorisons la gestion d’équipe et proposons des 
                                    machines personnalisées et des services de qualité qui ajoutent de la valeur.
                                    Nous mettons notre savoir-faire au service du développement de vos projets, 
                                    vous aidant à vous épanouir dans la profession et à affronter les défis 
                                    futurs en toute sérénité.
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
                      des environnements qui sont à la fois beaux et pratiques.
                    </p>
                    <a href="{{ route('download-catalog', 're') }}" >Télécharger le catalogue <i class="bi bi-arrow-right"></i></a>
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
              <div class="row gy-4">
                <div class="col-lg-4">
                  <div class="services-list">
                    <a href="{{ route('services-details', 'in') }}">Industriels</a>
                    <a href="{{ route('services-details', 're') }}">Rénovation</a>
                    <a href="{{ route('services-details', 'ne') }}" class="active">Nettoyage</a>
                  </div>
                  
                  <div class="p-3">
                    <h4>Nettoyage</h4>
                    <p class="text-justify">
                      Chez Beatriz Rénovation, nous offrons une large gamme 
                      de services de nettoyage pour répondre à tous vos besoins, 
                      qu'ils soient résidentiels, commerciaux ou industriels. 
                      Notre équipe dévouée utilise des techniques et des équipements 
                      de pointe pour garantir des résultats impeccables.
                    </p>
                    <a href="{{ route('download-catalog', 'ne') }}" >Télécharger le catalogue <i class="bi bi-arrow-right"></i></a>
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
                                  <h4 class="card-title">Nettoyage de Bureaux</h4>
                                  <p>
                                    Maintenez un environnement de travail propre et professionnel. 
                                  </p>
                                </div>
                              </div>
                              <div class="col-xl-6">
                                <div class="card-bg" style="background-image: url('{{ asset("assets/img/office-clean.jpg") }}');"></div>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                          <div class="card-item">
                            <div class="row">
                              
                              <div class="col-xl-6">
                                <div class="card-bg" style="background-image: url('{{ asset("assets/img/build-clear.jpg") }}');"></div>
                              </div>
                              
                              <div class="col-xl-6 d-flex align-items-center">
                                <div class="card-body">
                                  <h4 class="card-title">Nettoyage de fin de Chantier</h4>
                                  <p>
                                    Laissez-nous nous occuper des débris et de la 
                                    saleté après vos travaux de construction ou de rénovation.  
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
                                  <h4 class="card-title">Nettoyage des Chambres D'hôtel</h4>
                                  <p>
                                    Assurez un séjour confortable et hygiénique pour vos clients.
                                  </p>
                                </div>
                              </div>
                              <div class="col-xl-6">
                                <div class="card-bg" style="background-image: url('{{ asset("assets/img/hotel-room.jpg") }}');"></div>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                          <div class="card-item">
                            <div class="row">
                              
                              <div class="col-xl-6">
                                <div class="card-bg" style="background-image: url('{{ asset("assets/img/coky-clean.jpeg") }}');"></div>
                              </div>
                              
                              <div class="col-xl-6 d-flex align-items-center">
                                <div class="card-body">
                                  <h4 class="card-title">Nettoyage de Cuisines Professionnelles</h4>
                                  <p>
                                    Garantissez la propreté et l'hygiène de vos installations culinaires.
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
      @endswitch
      </div>
    </div>
  </section>

@endswitch
@endsection