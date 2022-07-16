@extends('index')
@section('content')


<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

<script>
  $(document).ready(function(){
    $('.navbar ul li').children().eq(0).addClass('active');
    // $("#header").css({"background-color": "transparent"});
    $("#header.header-scrolled").css({"background-color": "black"});
	});
</script> 

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>The University Of Money Inventors</h1>
          <h2>...print your own money legally!</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-money-dollar-circle-fill"></i>
            <h3><a href="">Financial Education</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-money-dollar-box-line"></i>
            <h3><a href="">Profit Engineering</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-money-dollar-circle-line"></i>
            <h3><a href="">Investment Management</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-money-dollar-box-fill"></i>
            <h3><a href="">Government Stimulus Package</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-exchange-dollar-line"></i>
            <h3><a href="">Estate Management</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-money-dollar-circle-fill"></i>
            <h3><a href="">Seminar/Event Promotion</a></h3>
          </div>
        </div>
      
      </div>

    </div>
  </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-2 content" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('assets/img/banner.jpg')}}" class="img-fluid toper" alt="">

            <ul class="ex-toper">
              <li><i class="ri-check-double-line"></i>The rich don’t believe in trading hours for paycheck. Do you?</li>
              <li><i class="ri-check-double-line"></i> The rich know the importance of being financially literate and financially intelligent. Do you?</li>
              <li><i class="ri-check-double-line"></i> The rich understand the true nature of money. Do you?</li>
              <li><i class="ri-check-double-line"></i>The rich understand the time value of money and opportunity costs. Do you?</li>
              <li><i class="ri-check-double-line"></i>The rich know how to properly analyze investment opportunities. Do you?</li>
              <li><i class="ri-check-double-line"></i> The rich know how to make compound interest work for them. Do you?</li>
              <li><i class="ri-check-double-line"></i> The rich own nothing but control everything. Do you?</li>

            </ul>

            <p class="ex-toper">
            Many are being crushed financially between the jaws of a deadly vise: On one side, unemployment, recession, foreign competition and other economic maladies limit our ability to earn more; on the other side, our own government through direct and indirect taxation, inflation, regulation, and other ruinous economic policies, makes the money we receive worth less and less.
            </p>
      
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>WELCOME HOME…</h3>
            <p class="fst-italic bolder">
            "Why should our government with the sovereign authority and constitutional right to create and supply the nation’s money give that privilege and power away to private monopoly of banks, borrow that same money back at compounded interest, and then use the taxpayers’ hard-earned money to repay the multiplication of debt?"
                --Professor Henry O.
            </p>
        
            <p class="yellow">
            Welcome to The University of Money Inventors (UMI). Here we teach you how to create/print money in four different forms: Currency; Credit; Scrip; and ROI (return on investment) in addition to ten (10) ways the rich and powerful use to amass wealth.
            </p>

            <p>
            In today’s economy, it is delusional to think you will get ahead by getting a good job and saving money for a cozy retirement. The reality is that the rich are getting richer as the financial resources of the poor and middle-class are wiped out. Unfortunately, the poor and the middle class have no idea the rules of money have changed.
            </p>
          
            <img src="{{asset('assets/img/man-count.jpg')}}" class="img-fluid toper" alt="">

            <p class="toper">
              In 1971, US President Richard Nixon, without the approval of Congress, took the U.S. dollar off the gold standard and changed the rules of money – not just for the united states, but also for the world. Is the economic crisis faced by the world today an accident? No. Can those in power solve our economic crisis? No. How can the crisis be solved when the very people and organizations that created the crisis – and profit from it – are still large in charge? As the wisdom goes, you cannot solve a problem using the same thinking used in creating it.
          
         </p>
         
          
          
          </div>
        </div>


        
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-1 content" data-aos="fade-left" data-aos-delay="100">


            <p class="toper">
            Caught between these two jaws, we suddenly realize that we are not living as well as we thought we would. We are not enjoying life as much as we thought we should. We are in a rat race…and…the rats are winning! But what can we do? You do what the rich and powerful are doing…
            </p>


            <p>
            
            </p>


       
            <p>
           
          </p>
 
          
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content" data-aos="fade-right" data-aos-delay="100">
          <!-- <img src="{{asset('assets/img/bundle.jpg')}}" class="img-fluid ex-toper" alt=""> -->
          <p class="fst-italic bolder yellow toper">
          Print Your Own Money Legally…
In the Form of Currency, Credit, Scrip…
Or… Through Return on Investments (ROI)!

          </p>
          <p class="toper">
          
          </p>
          

  

          <p>
         
          </p>

        
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


@endsection