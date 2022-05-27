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
          <a class="toggleColour inline-block py-2 px-4 text-white font-bold hover:underline focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="depot_projet">Add Project</a>
        </li>
        <li class="mr-3">
          <a class="toggleColour inline-block py-2 px-4 text-white font-bold hover:underline focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="">Home</a>
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
@section('desgin')
<div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
          ></path>
        </g>
      </g>
    </svg>
  </div>
@endsection
@section('content')
    
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <p class="uppercase tracking-loose w-full">You are tired of searching?</p>
        <h1 class="my-4 text-5xl font-bold leading-tight">
          Now with our platform everything is possible
        </h1>
        <p class="leading-normal text-2xl mb-8">
          What are you waiting for? hurry up and Register
        </p>
      </div>
@endsection

@section('section')
<section class="bg-white border-b py-8">
  <div class="container mx-auto flex flex-wrap pt-4 pb-12">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
      Our Team
    </h1>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
      <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
        <center>
        <img class="team" src="https://scontent.ftun9-1.fna.fbcdn.net/v/t1.6435-9/169580704_299159328590897_2166790701170404690_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=vLNJzQ3GuH8AX_Cw4F5&_nc_ht=scontent.ftun9-1.fna&oh=00_AT93D05Na6njrqpfhDfSdboifiizWsfLGwjo4cu26OSv4w&oe=62AB063E" alt="Application logo" width="200px" />
        </center>
        <div class="w-full font-bold text-xl text-gray-800 px-6">
        <center> Bacem Hlabba   </center> 
        </div>
        <center>  <p class="text-gray-800 text-base px-6 mb-5">
          Filiere: ADBD <br>
            classe : TD4  <br>
            <div class="w-full font-bold text-xl text-gray-800 px-6">
            Data Base Manager and Laravel Developer
            </div>
          </p></center>
        
      </div>
      <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
        <div class="flex items-center justify-center">
          <a href="https://www.facebook.com/Mr.Bacem.Hlabba" target="_blank" class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Contact me
          </a>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
      <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
        <center>
        <img class="team" src="https://scontent.ftun10-1.fna.fbcdn.net/v/t39.30808-1/278533287_1137355777113280_3502615583379743978_n.jpg?stp=dst-jpg_s200x200&_nc_cat=103&ccb=1-7&_nc_sid=7206a8&_nc_ohc=CenZVGVYf7kAX_X9_1j&_nc_ht=scontent.ftun10-1.fna&oh=00_AT_JTROgpj-xitHKQuBrg-s4Px_ANz24U3eiJDLIRFUkTw&oe=629290EA" alt="Application logo" width="200px" />
        </center>  
        <div class="w-full font-bold text-xl text-gray-800 px-6">
        <center>  Nourhen dahmeni</center>
          </div>
          <center>   <p class="text-gray-800 text-base px-6 mb-5">
          Filiere: ADBD <br>
            classe : TD4
            <div class="w-full font-bold text-xl text-gray-800 px-6">
            Web Designer and  FrontEnd Laravel Developer
            </div>
          </p></center>
        
      </div>
      <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
        <div class="flex items-center justify-center">
          <a href="https://www.facebook.com/profile.php?id=100025166059163" target="_blank" class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Contact me
          </a>
        </div>
      </div>
      
    </div>
    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
      <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
        <center>
        <img class="team" src="https://scontent.ftun10-1.fna.fbcdn.net/v/t39.30808-6/279967247_1327422467753473_7986653098168983780_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Vi1El-x2384AX_UgA3w&_nc_ht=scontent.ftun10-1.fna&oh=00_AT_H4_p21-FUQfj7Q-CP7FOyPLLR2uVvmSwlxQnIGGkwVQ&oe=62927281" alt="Application logo" width="200px" />
        </center>  
        <div class="w-full font-bold text-xl text-gray-800 px-6">
        <center>  Salma Ferjani</center>
          </div>
          <center>   <p class="text-gray-800 text-base px-6 mb-5">
          Filiere: ADBD <br>
            classe : TD4
            <div class="w-full font-bold text-xl text-gray-800 px-6">
            Web Designer and  FrontEnd Laravel Developer

            </div>
          </p></center>
        
      </div>
      <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
        <div class="flex items-center justify-center">
          <a href="https://www.facebook.com/ferjani.salma.1675" target="_blank" class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Contact me
          </a>
        </div>
      </div>
      
    </div>
    </div>
  </div>
  
</section>
<footer >
  <center>
 by:Bacem Hlabba,Nourhen dahmeni & Salma Ferjani </br>Contact information: <a  href="mailto:Bacem.hlabba@gmail.com">
  Our mail</a>
</center>
</footer>
@endsection