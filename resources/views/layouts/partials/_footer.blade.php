 <!--footer>
    <p class="text-gray-400">&copy;Copyright@ {{ date('Y') }} &middot;
      @if(! Route::is('about'))
       <a  class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('about') }}">About Us</a>
      @endif
    </p>
  </footer-->

<!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer_area bg-black relative z-10">
        <div class="shape absolute left-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
            <img src="{{ asset('assets/images/footer-shape-left.png')}}" alt="">
        </div>
        <div class="shape absolute right-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
            <img src="{{ asset('assets/images/footer-shape-right.png')}}" alt="">
        </div>
        <div class="container">
            <div class="footer_widget pt-18 pb-120">
                <div class="row justify-center">
                    <div class="w-full md:w-1/2 lg:w-3/12">
                        <div class="footer_about mt-13 mx-3">
                            <div class="footer_logo">
                                <a href="#"><img src="{{ asset('assets/images/logo.png')}}" class="shadow-md rounded-md" alt=""></a>
                            </div>
                            <div class="footer_content mt-8">
                                <p class="text-white">Bigafrique est un groupe, la maison mère de  l'entreprise Formation KILO;initiatrice du projet Sénégal Dev.</p>
                            </div>
                        </div> <!-- footer about -->

  


    </div>
                    <div class="w-full md:w-1/2 lg:w-5/12">
                        <div class="footer_link_wrapper flex flex-wrap mx-3">
                            <div class="footer_link w-1/2 md:pl-13 mt-13">
                                <h2 class="footer_title text-xl font-semibold text-white">Liens rapides</h2>
                                <ul class="link pt-4">
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Entreprise</a></li>
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Politique de confidentialité</a></li>
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Notre démarche</a></li>
                                </ul>
                            </div> <!-- footer link -->
                            <div class="footer_link w-1/2 md:pl-13 mt-13">
                                <h2 class="footer_title text-xl font-semibold text-white">Ressources</h2>
                                <ul class="link pt-4">
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Support</a></li>
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Contactez-nous</a></li>
                                    <li><a href="#" class="text-white mt-4 hover:text-theme-color">Termes</a></li>
                                </ul>
                            </div> <!-- footer link -->
                        </div> <!-- footer link wrapper -->
                    </div>
                    <div class="w-full md:w-2/3 lg:w-4/12">
                        <div class="footer_subscribe mt-13 mx-3">
                            <h2 class="footer_title text-xl font-semibold text-white">Newsletter</h2>
                            <div class="subscribe_form text-right mt-9 relative">
                                <form action="#">
                                    <input type="text" placeholder="Enter email" class="w-full py-5 px-6 bg-white text-black rounded-full border-none">
                                    <button class="main-btn subscribe-btn">S'abonner</button>
                                </form>
                            </div>
                        </div> <!-- footer subscribe -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer_copyright pt-3 pb-6 border-t-2 border-solid border-white border-opacity-10 sm:flex justify-between">
                <div class="footer_social pt-4 mx-3 text-center">
                    <ul class="social flex justify-center sm:justify-start">
                        <li class="mr-3"><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li class="mr-3"><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-filled"></i></a></li>
                        <li class="mr-3"><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li class="mr-3"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div> <!-- footer social -->
                <div class="footer_copyright_content pt-4 text-center">
                    <p class="text-white">Conçu, développé et déployé par <a href="https://www.formationkilo.com/" rel="nofollow" class="text-white hover:text-theme-color">Formation KILO</a> et Bigafrique </p>
 </div> <!-- footer copyright content -->

</div> <!-- footer copyright -->
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Tiny Slider js ======-->
    <script src="{{ asset('assets/js/tiny-slider.js')}}"></script>

    <!--====== Wow js ======-->
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>
