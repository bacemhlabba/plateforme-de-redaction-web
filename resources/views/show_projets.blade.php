@extends('template')
@section('main_nav')
<nav id="header" class="fixed w-full z-30 top-0 text-white">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
    <div class="pl-4 flex items-center">
      <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="">
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
          <a class="toggleColour inline-block py-2 px-4 text-white font-bold hover:underline focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="mr-3">
            <a class="toggleColour inline-block py-2 px-4 text-white font-bold hover:underline focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('profile') }}">Profile</a>
          </li>
      </ul>
      
      <a 
      href="{{ route('logout') }}"
        id="navAction"
        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-100 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Logout
      </a>
    </div>
  </div>
  <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
@endsection
@section('content')
  
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <h1 class="my-4 text-5xl font-bold leading-tight">
          All available projects:
        </h1>
      </div>
@endsection

@section('section')
<br>
<div class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg text-black items-center ">
<table >
  <tr>
    <th>Identifier</th>
    <th>Title</th>
    <th>Price(TND)</th>
    <th>Description</th>
    <th>Delivery Date</th>
  </tr>
  @foreach ($projets as $projet)
  <tr>
    <td>{{ $projet['identifier'] }}</td>
    <td>{{ $projet['title'] }}</td>
    <td>{{ $projet['price'] }}</td>
    <td>{{ $projet['description'] }}</td>
    <td>{{ $projet['delivery_date'] }}</td>
  </tr>
  @endforeach
</table>
@endsection

