@extends('layout.main')
@section('section');


    <!-- Section Background Scooter-->
    <section class="text-center">
        <div class="jumbotron jumbotron-fluid jumbotron-makanan">
          <div class="container content">
            <h1 class="display-4 fs-1 text-light " data-aos="zoom-out-up">Our Foodpedia</h1>
            <p class="text-white " data-aos="zoom-out-up" data-aos-delay="50"><a href="#food" class="btn btn-dark text-decoration-none "> Let's Check It</a></p>
          </div>
        </div>
        {{-- <p class="fw-bold fs-4 text-light"><?= waktu(); ?> Skut !!!</p> --}}      
      </section>

      {{-- Section Menu Makanan --}}
      <section id="gallery-food">
        <div class="container" id="food">
            <div class="row text-center mb-3">
                <div class="col">
                    <h3 class="foodhead" data-aos="fade-up-right"><Span class="fw-bold fs-1">Food</Span> Pedia</h3>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-md-3">
                    <img src="/images/foto/food/1.jpg" alt="gambar1" class="img-fluid gallery-img-food">
                </div>
                <div class="col-md-3">
                    <img src="/images/foto/food/2.jpg"  alt="gambar2" class="img-fluid gallery-img-food">
                </div>
                <div class="col-md-3">
                    <img src="/images/foto/food/3.jpg" alt="gambar3" class="img-fluid gallery-img-food">
                </div>
                <div class="col-md-3">
                    <img src="/images/foto/food/4.jpg" alt="gambar4" class="img-fluid gallery-img-food">
                </div>
                <div class="col-md-3">
                    <img src="/images/foto/food/5.jpg" alt="gambar5" class="img-fluid gallery-img-food">
                </div>
                <div class="col-md-3">
                    <img src="/images/foto/food/6.jpg" alt="gambar6" class="img-fluid gallery-img-food">
                </div>
                <div class="col-md-3">
                    <img src="/images/foto/food/7.jpg" alt="gambar7" class="img-fluid gallery-img-food">
                </div>
            </div>
        </div>
        <div class="" style="height: 250px"></div>
    </section>
      {{-- Akhir Section Menu Makanan --}}

      {{-- Section Opsional --}}
      <section class="minuman-menu">
          <div class="container">
          <a href="/minuman" class="text-decoration-none text-muted">
            <div class="card" style="width: 18rem;">
                <img src="/images/foto/slide6.jpg" class="card-img-top img-filter" alt="minuman">
                <div class="card-body">
                  <p class="card-text text-center">Your Drink</p>
                  <p class="card-text text-center text-scooter">By Scooter</p>
                </div>
              </div>
          </a>
        </div>
      </section>
      {{-- Akhir Section Opsional --}}
      
@endsection