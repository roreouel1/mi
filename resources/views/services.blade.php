@extends('index')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

<script>
  $(document).ready(function(){
    $('.navbar ul li').children().eq(2).addClass('active');
	});
</script> 


 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check out our Services</p>
          <p class="fst-italic">“Given the resources on earth, every man, woman, and child 
should be a millionaire many times over.” 
</p>

<p>
– Professor Henry O.
</p>
<p class="topper">
All rates and fees are negotiable
</p>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">1. Profit Engineering</a></h4>
              <h5>Are you an INVESTOR?</h5>
              <p>If I help you to generate sales/revenue/profit you wouldn’t have made, will you give me 15% or 25% or 40% of the proceeds?</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">2. Investment/Money Management</a></h4>
              <h5>Are you a BUSINESS OWNER?</h5>
              <p>If I help you double, triple, quadruple or multiply 10X your investment portfolio/dividend, will you give me 25% or 40% of the proceeds?</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">3. Government Stimulus Package</a></h4>
              <h5>Are you a "Third World” GOVERNMENT with an escalating national debt?</h5>
              <p>
If I teach you a way to access billions or trillions of interest-free credit for the purposes of funding capital projects which will result in creating full employment and stimulating the local economy, will you give me 5% fees?
</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">4. Estate Management</a></h4>
              <h5>Are you an ESTATE OWNER/PROPERTY OWNER?</h5>
              <p>If I help you liquidate or monetize or turn your property into a cash-generating asset, will you give me 15% or 25% or 50% of the proceeds?</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">5. Seminar/Event Promotion</a></h4>
              <h5>Are you an EVENT ORGANIZER?</h5>
              <p>If I help you increase patronage/revenue/profit, will you give me 25% or 40% of the proceeds?</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">6. Mentorship/Consultation
                /Coaching</a></h4>
              <p>Picking my brain, experience or wisdom will cost you $1500/hour</p>

              <p>We offer consulting in the following services for businesses in need:</p> 
              <ul class="list">
              <li>
              Mergers & Acquisitions
              </li>
              <li>
              Retail Services

              </li>
              <li>
              Asset Purchases

              </li>
              <li>

              Equity, Mezzanine & Subordinated Debt


              </li>
              <li>
              Business Valuation Services

              </li>

              <li>
              Business Turnaround Services

              </li>

              <li>
              Advertising

              </li>

              <li>

              Public Relations

              </li>

              <li>
              Accounting Advice

              </li>
              <li>
              Tender Offer / Acquisition Advisory Services

              </li>
              <li>
              Management Buyouts

              </li>
              <li>
              Joint Venture

              </li>

              <li>
              Marketing & Advertising with Impact

              </li>
              <li>
              Debtor-in-Possession Services

              </li>
              <li>
              Web Design

              </li>
              <li>
              IT/Technical Services 

              </li>
              <li>
              Electronic Security System Solutions (CCTV Surveillance; Electronic Access Control; Fibre Optic, RFID, Biometric, Gate Automation, Turnstile and Facial Recognition; Time & Attendance; Fleet Management.)
              </li>
             </ul>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section> -->
    <!-- End Cta Section -->

@endsection