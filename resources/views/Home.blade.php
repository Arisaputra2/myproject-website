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

@endsection
