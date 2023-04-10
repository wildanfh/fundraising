<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Ma'had Tahfizh Ibnul Mubarok</title>

  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <script src="{{ asset('js/splide.min.js') }}"></script>
  </head>

<body>
  <div class="filler"></div>
  <nav x-data="{ open: false, scrollY: 0 }" class="nav bg-blue-900" :class="{ 'fix': scrollY > 175 }">
    <!-- <img src="src/assets/logo_small.png" alt="logo" class="nav-logo" /> -->
    <h2 class="logo text-xl font-bold text-white">Ma'had Ibnul Mubarok</h2>
    <div class="nav-item" :class="{ 'active': open }">
      <a href="{{ route('home') }}" class="nav-link">Home</a>
      <a href="{{ route('about') }}" class="nav-link">Tentang Kami</a>
      <a href="{{ route('donation') }}" class="nav-link">Donasi</a>
      <a href="{{ route('login') }}" class="nav-link">Login</a>
    </div>

    <button class="ham-menu" @click="open = !open" :class="{ 'active': open }" id="hamMenu">
      <span class="line line1"></span>
      <span class="line line2"></span>
      <span class="line line3"></span>
    </button>

    <script>
      window.addEventListener("scroll", () => {
        Alpine.store('scrollY', window.scrollY);
      });
    </script>
  </nav>

  @yield('content')

  <footer class="bg-blue-900 p-4 text-center">
    <span class="text-gray-100">&copy; 2023</span>
    <a class="font-semibold text-gray-100" href="#">Ma'had Tahfizh Ibnul Mubarok.</a>
  </footer>
</body>

</html>
