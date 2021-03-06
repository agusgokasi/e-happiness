@extends('layouts.app_guest')

@section('content')
<br><br>
<style>
/* This stylesheet sets the width of all images to 100%: */


.bg-image{

background-image: url("{{ asset('images/background.jpg') }}");
height: 100%;
background-position: center;
background-repeat: repeat;
background-size: cover;

}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}

 /* Footer color for sake of consistency with Navbar */
 .page-footer { background-color: #1C2331; }
      @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {background: #1C2331!important;}
      }
</style>

<body class="bg-image">
  <section>
      <h3 class="h3 text-center mb-5">E-Happiness</h3>
      <div class="row text-center">
        <div class="col-3"></div>
        
        <div class="col-3"><img style="display: block; max-width: 100%; height: auto;width: auto;"  src="{{ asset('images/smile.jpg') }}"></div>

        

        <div class="col-3"><img style="display: block; max-width: 100%; height: auto;width: auto;"  src="{{ asset('images/sad.jpg') }}"></div>
        <div class="col-3"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-4 text-center"></div>
            {{-- <div class="col-xl-4 text-center"><img src="{{ asset('images/logo-unj.png') }}" width=50% heigth=50% alt=""></div> --}}

            <div class="col-xl-4 text-center"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <div class="col">
            <p class="grey-text text-center">
           What is <b>Happiness</b>? 
           <br>
           <br>We can assure you that this is one simple question, yet often confusing most people. 
           <br><b>"Happiness"</b> simply means <b>"the state of being happy"</b>. But, majority of people have no idea whether they are happy or not.
           <br>
           <br>By using <b>E-Happiness</b>, you are able to calculate your <b>family's happiness</b> through simple question forms based on statistics.
           <br>
           <br>But why <b>Family</b>?
           <br>
           <br>There's just something about family that makes us feel different. This special bond affects <br>our well-being in many ways, especially <b>happiness</b>. Well, let's get started, shall we?
              
            </p>
            <container>
              <div class="row">
                <div class="col-xl-4"></div>
                <div class="col-xl-4 text-center">
                  <a href="{{ route('cek') }}" class="btn btn-primary">
                    <b>Test Your Family Happiness NOW !</b>
                  </a>
                </div>
                <div class="col-xl-4"></div>
              </div>

            </container>
          </div>
        </div>
         <br><br><br>
  <footer class=" wow fadeIn">
          <div class="copyright text-center">
          <br><br>
              <span>Copyright © E-Happiness
                <script>
                    document.write(new Date().getFullYear())
                </script>
              </span><br>
              <span>
                Photo by Heyday Photism from Pexels &
                Image by <a href="https://pixabay.com/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3090056">Gerd Altmann</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3090056">Pixabay</a></span>
     <br>
     <div>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
      </div>
  </footer>
      </div>
  </section>
  <!--Section -->
 


</body>
@endsection
