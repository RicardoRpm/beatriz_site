@extends('layouts.default')

@section('title', 'Beatriz')

@section('content')

@switch(session('locale'))
  @case('en')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">        
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
        <h2>Service Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Service Details</li>
        </ol>

      </div>
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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: {{ URL::asset('assets/img/service.jpg') }}">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
        <h2>Service Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Service Details</li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-4">
              @switch($detail)
                  @case('in')
                    <div class="services-list">   
                      <a href="#" class="active">Industriais</a>
                      <a href="#">Renovação</a>
                      <a href="#">Limpeza</a>
                    </div>
                    <h4>Industriais</h4>
                    <p class="text-justify">
                      Nossos serviços industriais são projetados para modernizar, 
                      otimizar e manter suas instalações industriais. 
                      Oferecemos soluções completas e personalizadas 
                      para melhorar seu desempenho operacional e garantir 
                      a sustentabilidade da sua infraestrutura. Seja para instalação 
                      novos equipamentos, atualizando sistemas existentes ou 
                      manutenção de rotina, temos a experiência para apoiar 
                      suas operações industriais.
                    </p>
                    @break
                  @case('re')
                  <div class="services-list">   
                    <a href="#">Industriais</a>
                    <a href="#" class="active">Renovação</a>
                    <a href="#">Limpeza</a>
                  </div>
                  <h4>Renovação</h4>
                  <p class="text-justify">
                    Os nossos serviços de renovação visam transformar e melhorar o seu 
                    espaços de estar e de trabalho, aliando estética e funcionalidade. 
                    Cuidamos de projetos de todos os portes, desde reformas de 
                    salas pequenas para completar a reforma de grandes espaços. Nossa abordagem para 
                    medição garante que cada projeto reflita suas necessidades e preferências, criando 
                    ambientes bonitos e práticos.
                  </p>
                    @break
                  @case('ne')
                  <div class="services-list">   
                    <a href="#">Industriais</a>
                    <a href="#">Renovação</a>
                    <a href="#" class="active">Limpeza</a>                     
                  </div>
                  <h4>Limpeza</h4>
                  <p class="text-justify">
                    Oferecemos uma gama completa de serviços de limpeza para 
                    garantir espaços impecáveis, saudáveis ​​e acolhedores. 
                    Nossos serviços de limpeza se adaptam a diversos ambientes, sejam residenciais, 
                    comercial ou industrial. Utilizamos técnicas e produtos de limpeza
                    avançado para garantir uma limpeza ideal e manter altos padrões de higiene.
                  </p>
                    @break 
              @endswitch  

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
  @default
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">      
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    
        <h2>Service Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Service Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="active">Industriel</a>
              <a href="#">Renouvellement</a>
              <a href="#">Nettoyage</a>
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
@endswitch
@endsection