@extends ('base')
  

@section('title', 'About Us | '.config('app.name') )

@section('content')

         <h1>Hello from Dakar</h1>
         
         <p>Building &hearts; by FORMATION KILO</p>


         <p><a href="{{ route ('home') }}">Revenir à la page d'accueil</a></p>
         
@endsection