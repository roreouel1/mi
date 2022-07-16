@extends('index')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

<script>
  $(document).ready(function(){
    $('.navbar ul li').children().eq(4).addClass('active');
	});
</script> 

 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact looker">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992.7226997641558!2d-0.17134240884457647!3d5.583156232260306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a94f3a7db61%3A0x63c8e7cdf33c2377!2sW.E.B.%20DuBois%20Centre%20in%20Accra!5e0!3m2!1sen!2sgh!4v1656135389773!5m2!1sen!2sgh" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>W.E.B. DuBois Center
Cantonments, Accra
Ghana 
</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@moneyinventors.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+233 55 454 8689/+233 57 599 7519</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('send_contact')}}" method="post"  class="php-email-form" role="form">

            @csrf

              <div class="row">

              @foreach (['danger', 'warning', 'success', 'info'] as $msg)
				     	@if(Session::has('alert-' . $msg))
                	<div class="col-lg-8 alert alert-inv alert-inv-{{ $msg }} alert-wth-icon alert-dismissible fade show" role="alert">
                 <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p> 
      
                
                </div>
                @endif
                @endforeach


                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection