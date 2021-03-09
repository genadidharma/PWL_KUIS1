@extends('layouts.app')

@section('content')
<!-- Goods -->
<section class="goods section-padding">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">
        <h1 class="mb-4" data-aos="fade-up">The Goods are good</h1>
      </div>
      <div class="col-xl-6 col-sm-12 mt-5">
        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
          <img src="{{asset('images/project/project-image01.jpg')}}" class="img-fluid" alt="project image">
          <div class="project-info card-info d-flex mb-3">
            <div class="mr-auto">
              <small>tes</small>
              <h3>
                <span>tes</span>
              </h3>
            </div>
            <h2 class="align-self-center">
              <span>Rp 5000</span>
            </h2>
          </div>
        </div>
      </div>

    </div>
</section>
@endsection