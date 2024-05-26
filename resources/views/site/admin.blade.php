@extends('layouts.default')

@section('title', 'Beatriz')

@section('content')
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
  style="background-image: url('assets/img/mf_img/plataform.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Recruitment</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Administrative </li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 mt-1">

        <div class="col-lg-12 php-email-form">
          <h4 class="title-form-recruit">Make your application</h4>

          <table>
            <thead>
              <th>Name</th>
            </thead>
            <tbody>
              @foreach ($recruitments as $recruitment)
                <td>{{ $recruitment->name }}</td>
              @endforeach
            </tbody>
          </table>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

@endsection
