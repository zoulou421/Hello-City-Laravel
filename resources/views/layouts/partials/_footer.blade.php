 <footer>
    <p class="text-gray-400">&copy;Copyright@ {{ date('Y') }} &middot;
      @if(! Route::is('about'))
       <a  class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('about') }}">About Us</a>
      @endif
    </p>
  </footer>