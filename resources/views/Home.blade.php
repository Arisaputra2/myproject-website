  @extends('layout.main')
  @section('section');
  <!-- Section Background Scooter-->
    <section class="text-center" id="home">
      <div class="jumbotron jumbotron-fluid jumbotron-home">
        <div class="container content">
          <h1 class="display-4 fs-1 text-light " data-aos="zoom-out-up">Scooter Coffee</h1>
          <p class="lead text-white" data-aos="zoom-out-up" data-aos-delay="50">Jam Operasional 10.00 - 23.00</p>
        </div>
      </div>
      {{-- <p class="fw-bold fs-4 text-light"><?= waktu(); ?> Skut !!!</p> --}}      
    </section>


    <!-- Section About -->
      <section class="text-center mb-5">
      <div class="container-fluid"data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="50">
        <h1 class="p-2 about">About Scooter Coffee</h1>
        <p class="text-capitalize about-scooter">Scooter Coffee adalah coffee shop kecil yang sudah berdiri sejak tahun 2015 </p>
        <video controls width="700">
            <source src="video/scooter.mp4" type="video/mp4">
              Your browser does not support HTML5 video
        </video>
      </div>
      </section>
    <!-- Section Akhir About -->

    <!-- Section Motivation Menu -->
    <section class="mt-3">
      <div class="container-fluid p-0" id="contentfoto">
      <img src="images/foto/foto8.jpg" alt="foto back" width="100%" id="backfoto">
      <div class="centered text-white text-center text-line">Citra <span>rasa</span> yang luar <span>biasa</span></div>
    </div>
    </section>

    <!-- Section Akhir Motivation -->

    {{-- Section Show Menu 1 --}}
      <div class="container show-menu">
        <div class="row">
            <div class="col-6" data-aos="fade-right" data-aos-duration="500">
              <img src="images/foto/slide1.jpg" alt="show menu" class="img-fluid rounded">
            </div>
            <div class="col-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
              <h3 class="text-center">V60 Coffee</h3>
              <p class="text-center text-capitalize">Teknik V60 adalah salah satu teknik yang paling sering digunakan oleh para barista. Umumnya, metode ini dilakukan dengan cara menuangkan air panas secara perlahan di sekitar bubuk kopi di atas alat dengan gerakan melingkar</p>
            </div>          
        </div>
      </div>
    {{-- Section Akhir Show Menu 1--}}

    {{-- Section Show Menu 2--}}
      <div class="container show-menu show-menu-2">
        <div class="row">
            <div class="col-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
              <h3 class="text-center">Caffe Latte</h3>
              <p class="text-center text-capitalize">  caffe latte merupakan perpaduan antara kopi espresso dan susu yang dapat dinikmati kapan saja, baik dalam keadaan dingin ataupun panas.

                Terdapat dua versi tentang sejarah penemuan kopi latte . Beberapa orang menyebutkan bahwa menu kopi latte dibuat pada sekitar tahun 1980-an oleh David Schomer, seorang pria asal Amerika Serikat, yang gemar membuat pola atau lukisan pada secangkir espresso dengan cara menuangkan susu.
                
                Sementara, di waktu yang hampir bersamaan, seorang pria Italia bernama Luigi Lupi juga membuat seni yang sama di atas secangkir kopi dan disebut juga sebagai cikal bakal kopi latte.
              </p>
            </div> 
            <div class="col-6" data-aos="fade-left" data-aos-duration="500">
              <img src="images/foto/slide4.jpg" alt="show menu" class="img-fluid rounded">
            </div>         
        </div>
      </div>
    {{-- Section Akhir Show Menu 2--}}

    <section>
      <div class="container">
       <div class="row text-center mb-5 mt-4">
          <div class="col">
           <h3 class="head-question">A Question</h3>
          </div>
        </div>
        <div class="container background p-0">
          <div class="row">
            <div class="col-6">
              <img src="/images/foto/form.jpg" alt="formpic" width="480px" class="rounded">
            </div>
            <div class="col-sm-5">
              <form class="mt-5">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-5">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-floating mb-5">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 190px;min-height:100px; max-height:200px" maxlength="300"></textarea>
                  <label for="floatingTextarea2">Comments</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-primary d-none" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
              </form>
            </div>
          </div>
        </div>
    </div>
    </section>
<div class="div" style="height: 500px"></div>
@endsection
