@extends('layouts.index')

@section('content')
<!-- About section -->
<section class="bg-white py-14 md:py-20">
  <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4">
    <div class="w-full md:w-1/2 animate__animated animate__fadeInLeft animate__delay-1s">
      <img src="{{ asset('images/poster.jpeg') }}" alt="Fundraising Campaign" class="rounded-lg shadow-lg md:order-first" />
    </div>
    <div class="w-full md:w-1/2 p-2 sm:p-4 md:p-16 md:order-last animate__animated animate__fadeInRight animate__delay-1s">
      <h2 class="text-3xl font-bold mb-4">Tentang <span class="text-blue-900">Kampanye Kami</span></h2>
      <h4 class="text-gray-600 mb-6 text-lg font-semibold">
        Selayang Pandang Ma'had Tahfidzul Qur'an Ibnu Mubarok
      </h4>
      <p class="text-gray-600 mb-6">Ma'had Tahfidzul Qur'an Ibnu Mubarok adalah sebuah pondok tahfidz yang semula dibuka untuk kalangan terbatas.</p>
      <p class="text-gray-600 mb-6">Ternyata pada perkembanganya peminatnya banyak karena full gratis dengan program-program unggulan yang diminati masyarakat.</p>
      <p class="text-gray-600 mb-6">Dari sinilah kami berusaha untuk menambah bangunan lantai satu yang sudah ada. Karena tidak bisa lagi menampung santri yang ada.</p>
      <p class="text-gray-600 mb-6"> Rencana ke depan kami akan membangun lantai dua. Sehingga memerlukan biaya yang tidak sedikit. Perkiraan total biaya adalah 500 juta rupiah.</p>
      <p class="text-gray-600 mb-6">
        Karena tanggung jawab kami sebagai bagian dari berkhitmad kepada umat maka kami mencoba membuka pondok ini dengan gratis. Kami juga membuka open donasi sesuai kemampuan.</p>
    </div>
  </div>
</section>


<!-- Galeri section -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800">
    <style>
      .zoom:hover img {
        transform: scale(1.1);
      }
    </style>

    <h2 class="text-3xl font-bold mb-12 text-black text-center animate__animated animate__fadeInLeft animate__delay-1s">
      Kegiatan<span class="text-blue-900"> Kami</span>
    </h2>

    <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-6 m-auto">


      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover animate__animated animate__fadeInLeft animate__delay-2s" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('images/kegiatan1.jpeg') }}" class="w-full transition duration-300 ease-linear align-middle" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Kegiatan 1</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover animate__animated animate__fadeInLeft animate__delay-2s" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('images/kegiatan2.jpeg') }}" class="w-full transition duration-300 ease-linear align-middle" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Kegiatan 2</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover animate__animated animate__fadeInLeft animate__delay-3s" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('images/kegiatan3.jpeg') }}" class="w-full transition duration-300 ease-linear align-middle" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Kegiatan 3</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover animate__animated animate__fadeInLeft animate__delay-3s" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('images/kegiatan4.jpeg') }}" class="w-full transition duration-300 ease-linear align-middle h-full object-cover" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Kegiatan 4</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover animate__animated animate__fadeInLeft animate__delay-4s" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('images/kegiatan5.jpeg') }}" class="w-full transition duration-300 ease-linear align-middle h-full object-cover" />
        <a href="#">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Kegiatan 5</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover animate__animated animate__fadeInLeft animate__delay-4s" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('images/kegiatan6.jpeg') }}" class="w-full transition duration-300 ease-linear align-middle h-full object-cover" />
        <a href="#">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Kegiatan 6</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover animate__animated animate__fadeInLeft animate__delay-5s" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('images/kegiatan7.jpeg') }}" class="w-full transition duration-300 ease-linear align-middle h-full object-cover" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Kegiatan 7</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>

      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover animate__animated animate__fadeInLeft animate__delay-5s" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <img src="{{ asset('images/kegiatan8.jpeg') }}" class="w-full transition duration-300 ease-linear align-middle h-full object-cover" />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-lg font-bold text-white m-6">Kegiatan 8</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>
    </div>


  </section>
  <!-- Section: Design Block -->

</div>
@endsection
