@extends('layouts.index')

@section('content')
<!-- Donation section -->
<section class="bg-gray-50 text-white py-14 md:py-20">
  <div class="container mx-auto flex justify-center items-center px-4">
    <div class="w-full md:w-2/3 animate__fadeInUp animate__animated animate__delay-1s">
      <h2 class="text-3xl text-black font-bold mb-4">Berikan <span class="text-blue-900">Donasimu</span></h2>
      <!-- Modal for message -->
      @if(session('success'))
      <div id="success-alert" class="mb-3 w-full items-center rounded-lg bg-green-100 px-6 py-5 text-base text-green-800 data-te-alert-show:inline-flex" role="alert" data-te-alert-init data-te-alert-show>
        <strong class="mr-1">Success! </strong> {{ session('success') }}.
      </div>
      @endif
      @if(session('error'))
      <div id="error-alert" class="mb-3 w-full items-center rounded-lg bg-red-100 px-6 py-5 text-base text-red-800 data-te-alert-show:inline-flex" role="alert" data-te-alert-init data-te-alert-show>
        <strong class="mr-1">error! </strong> {{ session('error') }}.
      </div>
      @endif
      <form action="{{ route('contributors.store') }}" method="POST" class="grid grid-cols-2 gap-4 mb-8">
        @csrf
        @method('POST')
        <div class="col-span-2 md:col-span-1">
          <label for="nama" class="block text-gray-500 font-bold mb-2">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" class="w-full text-black border-gray-400 border-solid border-2 py-2 px-4 rounded-lg" placeholder="Abdullah" />
        </div>
        <div class="col-span-2 md:col-span-1">
          <label for="email" class="block text-black text-gray-500 font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" class="w-full text-black border-gray-400 border-solid border-2 py-2 px-4 rounded-lg" placeholder="abdullah@gmail.com" />
        </div>
        <div x-data="{ selectedOption: '' }" class="col-span-2">
          <label for="amount" class="block text-gray-500 font-bold mb-2">Jumlah Donasi</label>
          <select id="amount" name="amount" x-model="selectedOption" class="w-full text-black border-gray-400 border-solid border-2 py-2 px-4 rounded-lg">
            <option value="">Pilih jumlah donasi</option>
            <option value="20000">20.000</option>
            <option value="50000">50.000</option>
            <option value="100000">100.000</option>
            <option value="200000">200.000</option>
            <option value="c">Lainnya</option>
          </select>
          <template x-if="selectedOption === 'c'">
            <input type="text" name="amount_custom" class="w-full text-black border-gray-400 border-solid border-2 py-2 px-4 rounded-lg mt-2" placeholder="Masukkan jumlah donasi" x-model="app.amount" x-on:input="selectedOption = 'c'" />
          </template>

          @if($errors->has('amount'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4">
            {{ $errors->first('amount') }}
          </div>
          @endif
        </div>



        <div class="col-span-2">
          <label for="no_telepon" class="block text-gray-500 font-bold mb-2">Nomor Whatsapp</label>
          <input type="text" id="no_telepon" name="no_telepon" class="w-full text-black border-gray-400 border-solid border-2 py-2 px-4 rounded-lg" value="+62" />
          @if($errors->has('no_telepon'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4">
            {{ $errors->first('no_telepon') }}
          </div>
          @endif

        </div>
        <button type="submit" class="bg-blue-900 text-gray-100 py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300 col-span-2">
          Donasi Sekarang
        </button>
      </form>

    </div>
  </div>
</section>
<script>
  const successAlert = document.getElementById("success-alert");
  // Set a timer to hide the alert after 3 seconds
  setTimeout(function() {
    successAlert.style.display = "none";
  }, 1000 * 60 * 60);
</script>
@endsection
