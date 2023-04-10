@extends('layouts.noauth')

@section('content')
<section class="bg-gray-50">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-800 md:text-2xl">
          Sign In
        </h1>
        <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login.custom') }}">
          @csrf
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-blue-900">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-blue-900">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
          </div>
          <button type="submit" class="w-full text-white bg-blue-900 hover:bg-indigo-900 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-300">Sign in</button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            Register? <a href="#" class="font-medium text-primary-600 hover:underline" aria-disabled="true">Sign up</a>
          </p>
          @if (session('success'))
          <div id="error-notification" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-3" role="alert" x-data="{ show: true, dismiss: function() { this.show = false; } }" x-show="show">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span id="error-close-btn" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" x-on:click="dismiss()">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <<path d="M14.348 5.652a.999.999 0 1 0-1.414 1.414L10 9.414l-2.93 2.93a.999.999 0 1 0 1.414 1.414L11.414 11l2.93 2.93a.999.999 0 1 0 1.414-1.414L12.828 11l2.52-2.52z" />
              </svg>
            </span>
          </div>
          @endif
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
