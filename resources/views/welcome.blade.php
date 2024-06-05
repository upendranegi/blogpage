@include('include.Header')
    

    <main id="main">

     

       

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-5 mt-5">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Our Blog</span>
                    <h2>Our Blog </h2>

                </div>

                <div class="row gy-4">
                    @foreach ($data as $item => $dvalaue)
    

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
              
              </div>
              <h3><a href="/blogpage/{{$dvalaue->id}}" class="stretched-link">{{$dvalaue->Tittle}}</a></h3>
              <p> {{$dvalaue->Description}}</p>
            </div>
          </div><!-- End Card Item -->
          @endforeach
                 

                </div>

            </div>
        </section><!-- End Services Section -->

      


      

    </main><!-- End #main -->


    @include('include.Fotter')