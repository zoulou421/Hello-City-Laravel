@extends ('layouts.base', ['title'=> 'About Us'])
  

@section('title', 'About Us | '.config('app.name') )

@section('content')
 
 <img src="{{ asset('images/sn_flag.png')}}" alt="Senegal flag" class="my-12 shadow-md " />
         
         
         <h2 class="mb-5 text-gray-700">
            Is in building <span class="text-pink-500">&hearts; </span> by FORMATION KILO
         </h2>


         <p><a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route ('home') }}">Revenir à la page d'accueil</a></p>
         
@endsection