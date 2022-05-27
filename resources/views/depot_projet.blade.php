@extends('template')
@section('main_nav')
<nav id="header" class="fixed w-full z-30 top-0 text-white">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
    <div class="pl-4 flex items-center">
      <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/">
      Redactors.Tn
      </a>
    </div>
    <div class="block lg:hidden pr-4">
      <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
      <ul class="list-reset lg:flex justify-end flex-1 items-center">
        <li class="mr-3">
          <a class="toggleColour inline-block py-2 px-4 text-white font-bold hover:underline focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="/">Home</a>
        </li>
        <li class="mr-3">
            <a class="toggleColour inline-block py-2 px-4 text-white font-bold hover:underline focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('inscription_redacteur') }}">Register As Writer</a>
          </li>
      </ul>
      
      <a
      href="{{ route('login') }}"
        id="navAction"
        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-100 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Login
      </a>
    </div>
  </div>
  <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
@endsection

@section('section')
<center><img src="{{ asset('images/logo_app.png') }}" alt="Application logo" width="100px" /></center>
<div class="max-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient text-black ">
<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg text-black ">
<form method="POST" action="add" enctype="multipart/form-data">
    @csrf
    <!-- id -->
    <div>
        <label for="identifier">Identifier</label>

        <input id="identifier" class="block mt-1 w-full bg-gray-200" type="text" name="identifier" :value="old('identifier')" required autofocus />
    </div>
    <!-- title-->
    <div>
    <label for="title">Title</label>

      <input id="title" class="block mt-1 w-full bg-gray-200" type="text" name="title" :value="old('title')" required autofocus />
  </div>

    <!-- price -->
    <div class="mt-4">
        <label for="price">Price</label>

        <input id="price" class="block mt-1 w-full bg-gray-200" type="number" name="price" :value="old('price')" required />
    </div>

    <!-- description -->
    <div class="mt-4">
        <label for="description">Description</label>

        <textarea id="description" class="block mt-1 w-full bg-gray-200" type="text" name="description" rows="4" cols="50" value="old('description')" required>
        </textarea>
    </div>

    <!--delivery date-->
    <div class="mt-4">
        <label for="delivery_date">Delivery date</label>

        <input id="delivery_date" class="block mt-1 w-full bg-gray-200" type="date" name="delivery_date" required />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
            {{ __('Publish') }}
        </x-button>
    </div>
</form>

</div>
</div>

@endsection