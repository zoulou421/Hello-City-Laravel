@extends ('base')
 

@section('content')

        <img src="{{ asset('images/EMP3.jpg')}}" alt="find out who we are" class="mt-12 rounded shadow-md h-32" />
         <h1 class="mt-5 text-3xl sm:text-4xl font-semibold text-red-600">Hello from Dakar</h1>
         <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}</p>
@endsection
