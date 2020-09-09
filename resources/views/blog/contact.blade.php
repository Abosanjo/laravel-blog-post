@extends('layouts.blog')

@section('title')

Contact us

@endsection


@section('header')
<!-- Header -->
<header class="header text-white" style="background-image: url(/img/14.jpg);">
  <div class="overlay opacity-75" style="background-image: linear-gradient(to top, #0d8464 0%, #4c8bb1 100%);"></div>
  <div class="container text-center">

    <div class="row">
      <div class="col-md-8 mx-auto py-8">

        <h1 class="display-4">Let's Get In Touch</h1>
        <p class="lead-2 mt-6">Here are the ways you can contact us with any questions you have</p>
      </div>
    </div>

  </div>
</header><!-- /.header -->


@endsection

@section('content')
<!-- Main Content -->
<main class="main-content">


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Contact form
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section text-white bg-dark bg-img" style="background-image: url(/img/thumb/14.jpg)" data-overlay="6">
    <div class="container">

      <form class="row gap-y" action="../assets/php/sendmail.php" method="POST" data-form="mailer">
        <div class="col-lg-7">
          <h3>Contact Us</h3>
          <br>

          <div class="alert alert-success d-on-success">We received your message and will contact you back soon.</div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input class="form-control form-control-lg" type="text" name="name" placeholder="Name">
            </div>

            <div class="form-group col-md-6">
              <input class="form-control form-control-lg" type="email" name="email" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control form-control-lg" rows="4" placeholder="Message" name="message"></textarea>
          </div>

          <button class="btn btn-lg btn-primary" type="submit">Send message</button>

        </div>


        <div class="col-lg-4 ml-auto text-center text-lg-left">
          <hr class="d-lg-none">
          <h3>Find Us</h3>
          <br>
          <p>2651 Main Street, Suit 124<br>Khartoum , om, 98101</p>
          <p>+249 9123 45678<br>+249 123 456789</p>
          <p>hello@thetheme.io</p>
          <div class="fw-400">Follow Us</div>
          <div class="social social-sm social-inline">
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
            <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
          </div>
        </div>
      </form>

    </div>

  </section>



</main><!-- /.main-content -->

@endsection
