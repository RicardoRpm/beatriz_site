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
        <li>Recruitment</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 mt-1">

        <div class="col-lg-12 php-email-form">
          <h4 class="title-form-recruit">Make your application</h6>
            
            @if(session('success_message'))
              
              <div class="my-3">
                <div class="alert alert-success" role="alert">
                  {{ session('success_message') }}
                </div>
              </div>

            @endif

            <form action="{{ route('recrutamento.store') }}" method="post">
              @csrf
              @method('POST')
              <div class="row gy-4">

                <div class="col-lg-9 form-group">
                  <label>Name</label>
                  <input type="text" name="name" maxlength="150" class="form-control" id="name" placeholder="Full name" required>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Date of birth</label>
                  <input type="date" class="form-control" name="bird_day" id="bird_day" placeholder="Idade" required>
                </div>

              </div>

              <div class="row gy-4">
                <div class="col-lg-9 form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" maxlength="150" name="address" id="address" placeholder="Current address"
                    required>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Province</label>
                  <select class="form-control" name="province" id="province"
                    style="height: 44px; border-radius: 0; box-shadow: none; font-size: 14px">
                    <option selected>Bengo</option>
                    <option>Benguela</option>
                    <option>Bié</option>
                    <option>Cabinda</option>
                    <option>Cuando Cubango</option>
                    <option>Cuanza Norte</option>
                    <option>Cuanza Sul</option>
                    <option>Cunene</option>
                    <option>Huambo</option>
                    <option>Huíla</option>
                    <option>Luanda</option>
                    <option>Lunda Norte</option>
                    <option>Lunda Sul</option>
                    <option>Malanje</option>
                    <option>Moxico</option>
                    <option>Namibe</option>
                    <option>Uíge</option>
                    <option>Zaire</option>

                  </select>
                </div>

              </div>

              <div class="row gy-4">

                <div class="col-lg-6 form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" maxlength="150" name="email" id="email" placeholder="Email" required>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Telephone</label>
                  <input type="text" class="form-control" maxlength="9" name="phone" id="phone" placeholder="Telephone" required>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Telephone</label><small>(alternative)</small>
                  <input type="text" class="form-control" maxlength="9" name="phone_alternative" id="phone_alternative"
                    placeholder="Telephone" required >
                </div>

              </div>

              <div class="row gy-4">

                <div class="col-lg-6 form-group">
                  <label>Training / Academic Degree</label>
                  <input type="text" class="form-control" name="academic_degree" id="academic_degree"
                    placeholder="Training / Academic Degree" maxlength="80" required>
                </div>

                <div class="col-lg-6 form-group">
                  <label>Desired role</label>
                  <input type="text" class="form-control" maxlength="50" name="function_want" id="function_want"
                    placeholder="Desired role" required>
                </div>

              </div>

              <div class="row gy-4">
                <label>Functions occupied<small>(Three last. Ex: Painter's helper(3 years); 
                  Electrician (2 years); Welding Technician (1 year))</small></label>
                <div class="col-lg-4" style="margin-top: 1px;">
                  <input type="text" class="form-control" maxlength="50" name="ocupation1" id="ocupation1" placeholder="
                  Function 1" required>
                </div>

                <div class="col-lg-4" style="margin-top: 1px;">
                  <input type="text" class="form-control" maxlength="50" name="ocupation2" id="ocupation2" placeholder="
                  Function 2">
                </div>

                <div class="col-lg-4" style="margin-top: 1px;">
                  <input type="text" class="form-control" maxlength="50" name="ocupation3" id="ocupation3" placeholder="
                  Function 3">
                </div>

              </div>

              <div class="row gy-4 mt-1">

                <div class="col-lg-3 form-group">
                  <label>Years of experience</label>
                  <input type="number" min="0" max="100" maxlength="3" min="0" max="50" class="form-control" name="year_of_expirience" id="year_of_expirience" 
                  required>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Wage</label>
                  <input type="number" class="form-control"  maxlength="10" min="1" max="1000000000" name="salary_want" id="salary_want" 
                  required>
                </div>

                <div class="col-lg-3 form-group">
                  <label>How did you found the company?</label>
                  <select class="form-control" name="how_find_us" id="how_find_us"
                    style="height: 44px; border-radius: 0; box-shadow: none; font-size: 14px">
                    <option selected>Angola newspaper</option>
                    <option>Radio</option>
                    <option>Friend</option>
                    <option>Television</option>
                    <option>Social media</option>
                  </select>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Onshore/Offshore</label>
                  <select class="form-control" name="onshore_offshore" id="onshore_offshore"
                    style="height: 44px; border-radius: 0; box-shadow: none; font-size: 14px">
                    <option selected>Onshore</option>
                    <option>Offshore</option>
                  </select>
                </div>

              </div>

              <div class="row gy-4">

                <div class="col-lg-3 form-group">
                  <label>Computing</label><br>
                  <input class="remove-heigh-input-radio" type="radio" id="informatic_yes"
                    name="informatic" checked><label for="informatic_yes" class="mx-1 text-label">Yes</label>

                  <input class="remove-heigh-input-radio" type="radio" id="informatic_no"
                    name="informatic"><label for="informatic_no" class="mx-1 text-label">No</label>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Portuguese</label><br>
                  <input class="remove-heigh-input-radio" type="radio" id="portuguese_yes"
                    name="portuguese" checked>
                    <label for="portuguese_yes" class="mx-1 text-label">Yes</label>

                  <input class="remove-heigh-input-radio" type="radio" id="portuguese_no"
                    name="portuguese"><label for="portuguese_no" class="mx-1 text-label">No</label>
                </div>

                <div class="col-lg-3 form-group">
                  <label>English</label><br>
                  <input class="remove-heigh-input-radio" type="radio" id="english_yes" name="english"><label
                    for="english_yes" class="mx-1 text-label">Yes</label>

                  <input class="remove-heigh-input-radio" type="radio" id="english_no" name="english" checked><label
                    for="english_no" class="mx-1 text-label">No</label>
                </div>

                <div class="col-lg-3 form-group">
                  <label>French</label> <br>
                  <input class="remove-heigh-input-radio" type="radio" id="french_yes" name="french"><label
                    for="french_yes" class="mx-1 text-label">Yes</label>

                  <input class="remove-heigh-input-radio" type="radio" id="french_no" name="french" checked><label
                    for="french_no" class="mx-1 text-label">No</label>
                </div>

              </div>

              <div class="row gy-4">

                <div class="col-lg-3 form-group">
                  <label>BST</label>
                  <br>
                  <input class="remove-heigh-input-radio" type="radio" id="bst_yes" name="bst"><label
                    for="bst_yes" class="mx-1 text-label">Yes</label>

                  <input class="remove-heigh-input-radio" type="radio" id="bst_no" name="bst" checked><label
                    for="bst_no" class="mx-1 text-label">No</label>
                </div>

                <div class="col-lg-3 form-group">
                  <label>HUET</label>
                  <br>
                  <input class="remove-heigh-input-radio" type="radio" id="huet_yes" name="huet"><label
                    for="huet_yes" class="mx-1 text-label">Yes</label>

                  <input class="remove-heigh-input-radio" type="radio" id="huet_no" name="huet" checked><label
                    for="huet_no" class="mx-1 text-label">No</label>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Maritime Bill</label><br>
                  <input class="remove-heigh-input-radio" type="radio" id="maritime_note_yes"
                    name="maritime_note"><label for="maritime_note_yes" class="mx-1 text-label">Yes</label>

                  <input class="remove-heigh-input-radio" type="radio" id="maritime_note_no"
                    name="maritime_note" checked><label for="maritime_note_no" class="mx-1 text-label">No</label>
                </div>

                <div class="col-lg-3 form-group">
                  <label>Offshore Experience</label><br>
                  <input class="remove-heigh-input-radio" type="radio" id="expirience_offshore_yes"
                    name="offshore_expirience"><label for="expirience_offshore_yes"
                    class="mx-1 text-label">Yes</label>

                  <input class="remove-heigh-input-radio" type="radio" id="expirience_offshore_no"
                    name="offshore_expirience" checked><label for="expirience_offshore_no"
                    class="mx-1 text-label">No</label>
                </div>
              </div>

              <div class="text-center">
                <button type="submit">Submit Application</button>
              </div>
            </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

@endsection
