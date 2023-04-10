@extends('layouts.index')

@section('content')
<!-- Hero section -->
<section class="bg-gray-50 py-14 md:py-20">
  <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4">
    <div class="w-full md:w-1/2 p-6 animate__animated animate__fadeInLeft animate__delay-1s">
      <h2 class="text-3xl sm:text-4xl font-bold mb-4">Bergabunglah dalam Kampanye <span class="text-blue-900">Penggalangan Dana Kami</span></h2>
      <p class="text-gray-600 mb-6">
        Saat ini kami mengelola pondok tahfidz gratis dengan jumlah santri 12 anak. Qodarulloh tahun ajaran baru ini sudah ada yang mendaftar 20 anak sedangkan lokasi pondok kami belum bisa menampung santri banyak. Maka dalam waktu dekat ini kami ingin membuat lantai 2 sebagai asrama.
      </p>
      <a href="{{ route('donation') }}" class="bg-blue-900 text-white py-2 px-6 rounded-full transition duration-300 hover:bg-blue-950">Donasi Sekarang</a>
    </div>
    <div class="w-full md:w-1/2 animate__animated animate__fadeInRight animate__delay-1s">
      <div x-data="slider()" x-init="init()" class="splide rounded-lg shadow-lg">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <img src="{{ asset('images/hero.jpeg') }}" alt="Fundraising Campaign" class="rounded-lg" />
            </li>
            <li class="splide__slide">
              <img src="{{ asset('images/hero2.jpeg') }}" alt="Fundraising Campaign" class="rounded-lg" />
            </li>
            <li class="splide__slide">
              <img src="{{ asset('images/hero3.jpeg') }}" alt="Fundraising Campaign" class="rounded-lg" />
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  function slider() {
    return {
      init() {
        new Splide('.splide', {
          type: 'loop',
          autoplay: true,
          interval: 5000,
          arrows: false,
          pagination: true,
        }).mount();
      }
    }
  }
</script>







<!-- Footer -->
@endsection
