@include('layouts.partials._header') 
    <div
      class="min-h-screen flex flex-col items-center justify-center bg-gray-100"
    >
      <div
        class="
          flex flex-col
          bg-[#FF6347]
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-50
          max-w-md
        "
      >
        <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
          Inscrivez-vous et formez-vous sur forfait.
        </div>
        <div class="mt-4 self-center text-xs sm:text-sm text-gray-400">
         Apprentissage accléré en accès forfaitaire.Inscrivez-vous 
        </div>

        <div class="mt-10">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="flex flex-col mb-5">
              <label
                for="name"
                class="mb-1 text-xs tracking-wide text-gray-600"
                >Nom Complet:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  " 
                >
                  <i class="fas fa-user text-red-500"></i>
                </div>

                <input
                  id="name"
                  type="text"
                  value="{{ __('Name') }}"
                   name="name" :value="old('name')" required autofocus autocomplete="name"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                  placeholder="Saisissez votre nom"
                />
              </div>
            </div>
            <div class="flex flex-col mb-5">
              <label
                for="email"
                class="mb-1 text-xs tracking-wide text-gray-600"
                > Addresse e-mail:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <i class="fas fa-at text-red-500"></i>
                </div>

                <input
                  id="email"
                  type="email" name="email" :value="old('email')" required
                  value="{{ __('Email') }}" 
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  "
                  placeholder="Enter your email"
                />
              </div>
            </div>
            <div class="flex flex-col mb-6">
              <label
                for="password"
                class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                >Mot de passe:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <span>
                    <i class="fas fa-lock text-red-500"></i>
                  </span>
                </div>

                <input
                  id="password"
                  value="{{ __('Password') }}"
                  type="password" name="password" required autocomplete="new-password"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-tomato-400
                  "
                  placeholder="Saisissez votre mot de passe"
                />
              </div>
            </div>
         <!-- confirmation de mot de passe :debut-->
            <div class="flex flex-col mb-6">
              <label
                for="password_confirmation"
                class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600"
                >Mot de passe:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <span>
                    <i class="fas fa-lock text-red-500"></i>
                  </span>
                </div>

                <input
                  id="password"
                  value="{{ __('Confirm Password') }}"
                  id="password_confirmation" 
                  type="password" name="password_confirmation" required autocomplete="new-password"
                  class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-tomato-400
                  "
                  placeholder="Saisissez votre mot de passe"
                />
              </div>
            </div>
         <!--fin confirmation mot de passe -->
                     @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex w-full">
              <button
                type="submit"
                class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-red-500
                  hover:bg-blue-600
                  rounded-2xl
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                "
              >
                <span class="mr-2 uppercase">Créér votre compte</span>
                <span>
                  <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </span>
                {{ __('Register') }}
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="flex justify-center items-center mt-6">
        <a
          href="#"
          target="_blank"
          class="
            inline-flex
            items-center
            text-gray-700
            font-medium
            text-xs text-center
          "
        >
          <span class="ml-2"
            >Avez-vous déjà un compte ?
            <a
              href="{{ route('login') }}
              class="text-xs ml-2 text-red-500 font-semibold"
              >Connectez-vous {{ __('Already registered?') }}</a
            ></span
          >

          <span class="ml-2"
            > | 
            <a
              href="{{ url('/')}}"
              class="text-xs ml-2 text-blue-500 font-semibold"
              >Retour à l'accueil</a
            ></span
          >
         </a>
      </div>
    </div>
  
  

    <!--====== Tiny Slider js ======-->
    <script src="{{ asset('assets/js/tiny-slider.js')}}"></script>

    <!--====== Wow js ======-->
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>

  



 