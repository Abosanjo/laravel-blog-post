@extends('layouts.blog')

@section('title')

About us

@endsection

@section('header')
<!-- Header -->
<header class="header text-white" style="background-image: url(/img/14.jpg);">
  <div class="overlay opacity-75" style="background-image: linear-gradient(to top, #0d8464 0%, #4c8bb1 100%);"></div>
  <div class="container text-center">

    <div class="row">
      <div class="col-md-8 mx-auto py-8">

        <h1 class="display-41">We make startups proud</h1>
        <p class="lead-2 opacity-901 mt-6">Creating a beautiful website with high conversion is our passion</p>

      </div>
    </div>

  </div>
</header><!-- /.header -->


@endsection

@section('content')

<!-- Main Content -->
<main class="main-content">

  <section class="section">
    <div class="container">
      <div class="row gap-y align-items-center">

        <div class="col-md-8 mx-auto">
          <h2>About Us</h2>
          <p class="lead">We’re a team of creative and experienced designers and developers. We used to work as freelancers and we know what do you need and more that, we know what do your customers want from you.</p>
          <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
          <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>

        </div>

      </div>
    </div>
  </section>
  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Slider
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section p-0">
    <div data-provide="slider" data-autoplay="true" data-slides-to-show="2" data-css-ease="linear" data-speed="12000" data-autoplay-speed="0" data-pause-on-hover="false">
      <div class="p-2">
        <div class="rounded bg-img h-400" style="background-image: url(/img/14.jpg)"></div>
      </div>

      <div class="p-2">
        <div class="rounded bg-img h-400" style="background-image: url(/img/15.jpg)"></div>
      </div>

      <div class="p-2">
        <div class="rounded bg-img h-400" style="background-image: url(/img/12.jpg)"></div>
      </div>

      <div class="p-2">
        <div class="rounded bg-img h-400" style="background-image: url(/img/13.jpg)"></div>
      </div>
    </div>
  </section>


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Our Mission
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section id="section-mission" class="section">
    <div class="container">
      <div class="row gap-y align-items-center">

        <div class="col-md-7 mx-auto">
          <h2>Our Mission</h2>
          <p class="lead">We’re a team of creative and experienced designers and developers. We used to work as freelancers and we know what do you need and more that, we know what do your customers want from you.</p>

          <br>

          <p>
            <i class="ti-check text-success mr-2"></i>
            <span> Deliver a high quality web design</span>
          </p>

          <p>
            <i class="ti-check text-success mr-2"></i>
            <span> Support our customers once signing a contract</span>
          </p>

          <p>
            <i class="ti-check text-success mr-2"></i>
            <span> Streamline an expanded array of web</span>
          </p>

          <p>
            <i class="ti-check text-success mr-2"></i>
            <span> Pursue web-enabled niche markets with professionals</span>
          </p>
        </div>

      </div>
    </div>
  </section>


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Numbers
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section text-white" style="background-color: #93a5cf">
    <div class="container">
      <div class="row gap-y text-center">

        <div class="col-md-4">
          <p class="small text-uppercase ls-2">Finished Projects</p>
          <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="42"></p>
        </div>

        <div class="col-md-4">
          <p class="small text-uppercase ls-2">Happy Customers</p>
          <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="5478"></p>
        </div>

        <div class="col-md-4">
          <p class="small text-uppercase ls-2">User Satisfaction</p>
          <p class="lead-8 lh-1 fw-700" data-provide="countup" data-from="0" data-to="100" data-prefix="%"></p>
        </div>

      </div>
    </div>
  </section>


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Testimonials
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section">
    <div class="container">
      <header class="section-header">
        <h2>What People Say</h2>
        <br>
        <p class="lead">We waited until we could do it right. Then we did! Instead of creating a carbon copy.</p>
      </header>

      <div class="row gap-y text-center">

        <div class="col-lg-4">
          <blockquote class="blockquote">
            <div><img class="avatar avatar-xl" src="{{ asset('img/avatar/1.jpg') }}" alt="..."></div>
            <div class="fs-15 mt-6">When you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</div>
            <footer><em>Steve Jobs</em></footer>
          </blockquote>
        </div>

        <div class="col-lg-4">
          <blockquote class="blockquote">
            <div><img class="avatar avatar-xl" src="{{ asset('img/avatar/2.jpg') }}" alt="..."></div>
            <div class="fs-15 mt-6">Design everything on the assumption that people are not heartless or stupid but marvelously capable, given the chance.</div>
            <footer><em>John Jones</em></footer>
          </blockquote>
        </div>

        <div class="col-lg-4">
          <blockquote class="blockquote">
            <div><img class="avatar avatar-xl" src="{{ asset('img/avatar/3.jpg') }}" alt="..."></div>
            <div class="fs-15 mt-6">Technology is just a tool. In terms of getting the kids working together and motivating them, the teacher is the most important.</div>
            <footer><em>Bill Gates</em></footer>
          </blockquote>
        </div>

      </div>

    </div>
  </section>


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Customers
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section bg-gray py-6">
    <div class="container">

      <div class="partner partner-sm">
        <img src="{{ asset('img/partner/1.png') }}" alt="partner 1">
        <img src="{{ asset('img/partner/2.png') }}" alt="partner 2">
        <img src="{{ asset('img/partner/3.png') }}" alt="partner 3">
        <img src="{{ asset('img/partner/4.png') }}" alt="partner 4">
        <img src="{{ asset('img/partner/5.png') }}" alt="partner 5">
        <img src="{{ asset('img/partner/6.png') }}" alt="partner 6">
      </div>

    </div>
  </section>


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | Team
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section">
    <div class="container">
      <header class="section-header">
        <small>People</small>
        <h2>Meet The Team</h2>
        <hr>
        <p class="lead">Meet our small team that make those great products</p>
      </header>


      <div class="row gap-y">
        <div class="col-md-6 col-lg-3 team-1">
          <a href="#">
            <img src="{{ asset('img/pro.jpg') }}" alt="...">
          </a>
          <h6>Sanjo JR.</h6>
          <small>Co-Founder & CEO</small>
          <p>Signs you'll a, life itself to in signs seed under fruitful good open behold Our of stars whales forth.</p>
          <br>
          <div class="social social-brand">
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
            <a class="social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
            <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>


        <div class="col-md-6 col-lg-3 team-1">
          <a href="#">
            <img src="{{ asset('img/neno.jpg') }}" alt="...">
          </a>
          <h6>Neno</h6>
          <small>Co-Founder & CTO</small>
          <p>Signs you'll a, life itself to in signs seed under fruitful good open behold Our of stars whales forth.</p>
          <br>
          <div class="social social-brand">
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
            <a class="social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
            <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>


        <div class="col-md-6 col-lg-3 team-1">
          <a href="#">
            <img src="{{ asset('img/sanjo.jpg') }}" alt="...">
          </a>
          <h6>Sanjo JR.</h6>
          <small>lead dev</small>
          <p>Signs you'll a, life itself to in signs seed under fruitful good open behold Our of stars whales forth.</p>
          <br>
          <div class="social social-brand">
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
            <a class="social-gplus" href="#"><i class="fa fa-google-plus"></i></a>
            <a class="social-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 team-1">
          <a href="#">
            <img src="{{ asset('img/avatar/8.jpg') }}" alt="...">
          </a>
          <h6>Animor Tiruse</h6>
          <small>Designer</small>
          <div class="social social-gray">
            <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!--
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  | CTA
  |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
  !-->
  <section class="section text-center py-12" style="background-image: url(/img/thumb/15.jpg)" data-overlay="7">
    <div class="container">
      <h2 class="display-4 text-white mb-7"><strong>Join Our Team.</strong></h2>
      <a class="btn btn-lg btn-round btn-info" href="#">View Openings</a>
    </div>
  </section>


</main><!-- /.main-content -->

@endsection
