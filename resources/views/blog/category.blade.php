@extends('layouts.blog')

@section('tilte')

Category  {{ $category->name }}

@endsection

@section('header')

    <!-- Header -->
    <header class="header text-white h-fullscreen overflow-hidden" style="background-image: linear-gradient(-45deg, #667eea 0%, #764ba2 100%);">
      <canvas class="constellation" data-radius="0"></canvas>
      <div class="container position-static">
        <div class="row align-items-center h-100">

          <div class="col-lg-7">
            <h1 class="display-4 fw-500">Built For <span class="fw-400 pl-2" data-typing="Startups, Entrepreneurs, Makers, Developers, SaaS, WebApp" data-type-speed="80"></span></h1>
            <p class="lead mt-5 mb-7 mb-md-9 w-80"><strong>TheSaaS</strong> is an elegant, modern and fully customizable SaaS and WebApp template powered by Bootstrap 4</p>
            <a class="btn btn-xl btn-round btn-success w-200 mr-3 px-6 d-none d-md-inline-block" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=regular&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">Buy Now — $19</a>
            <a class="btn btn-xl btn-round btn-outline-light w-200 px-6" href="#section-demo">Explore Demos</a>
          </div>

          <div class="col-lg-5 d-none d-lg-block">
          </div>

        </div>

        <div class="d-none d-lg-block sample-blocks">

          @foreach ($posts as $post)

          <a href="block/cover.html#block-2" target="_blank">
            <img class="shadow-6" src="/img/{{ $post->image }}" width="120px" height="60px" alt="" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0">
            <div class="card-body">
              <h6 class="mb-0">{{ $post->category->name }}</h6>
            </div>
          </a>

          @endforeach



        </div>

      </div>
    </header><!-- /.header -->



@endsection

@section('content')

    <!-- Main Content -->
    <main class="main-content">

      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Demos
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section id="section-demo" class="section overflow-hidden bg-gray">
        <div class="container">
          <header class="section-header">
            <small>Demo</small>
            <h2>Sample Landing Pages</h2>
            <hr>
            <p class="lead">Apart from internal pages, we have designed several single sample pages to get start with.</p>
          </header>

          <div class="row gap-y">

            @forelse($posts as $post)

          <div class="col-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <div class="card-img-top">
            <a class="card shadow-1 hover-shadow-7" href="{{ route('blog.show', $post->id) }}" >

              <img class="card-img-top" src="/img/{{ $post->image }}" alt="Demo">
              <div class="badges">
                <a class="badge badge-info" href="#"> {{ $post->category->name }}</a>
              </div>
              </div>


              <div class="card-body">
                <h6 class="mb-0">{{ $post->title}}</h6>
              </div>
            </a>
          </div>
          @empty

                          <p class="text-center">

                          No result found for query {{ request()->query('search') }}

                          </p>

                          @endforelse

          </div>


          {{ $posts->appends(['search'=> request()->query('search')])->links() }}

        </div>
      </section>


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blocks & Elements
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section pb-10">
        <div class="container">
          <div class="row gap-y align-items-center">

            <div class="col-lg-6">

              <h2 class="mb-5">Blocks & Elements</h2>
              <p class="lead mb-0">This template includes hundreds of blocks to rapidly create your pages by copy & paste our block's code to your page, and backed by a lot of elements to develop your own blocks.</p>

              <br><hr class="w-30 ml-0"><br>

              <p class="mb-6 small">Explore or <a href="block/index.html">view all blocks</a></p>
              <div class="row gap-y" data-provide="slider" data-slides-to-show="3" data-slides-to-scroll="2" data-dots="true">

                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="block/cover.html">
                    <p><i class="icon-picture lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Cover</h6>
                  </a>
                </div>


                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="block/feature.html">
                    <p><i class="icon-genius lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Feature</h6>
                  </a>
                </div>


                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="block/blog.html">
                    <p><i class="icon-browser lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Blog</h6>
                  </a>
                </div>


                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="block/shop.html">
                    <p><i class="icon-basket lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Shop</h6>
                  </a>
                </div>


                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="block/team.html">
                    <p><i class="icon-profile-male lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Team</h6>
                  </a>
                </div>

                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="uikit/typography.html">
                    <p><i class="icon-pencil lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Typography</h6>
                  </a>
                </div>


                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="uikit/card.html">
                    <p><i class="icon-video lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Card</h6>
                  </a>
                </div>


                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="uikit/form.html">
                    <p><i class="icon-envelope lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Form</h6>
                  </a>
                </div>


                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="uikit/map.html">
                    <p><i class="icon-map lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Map</h6>
                  </a>
                </div>


                <div class="col">
                  <a class="card card-body border hover-shadow-6 text-center py-6" href="uikit/social.html">
                    <p><i class="icon-facebook lead-6 text-muted"></i></p>
                    <h6 class="mb-0">Social</h6>
                  </a>
                </div>

              </div>

            </div>

            <div class="col-lg-5 ml-lg-auto d-none d-lg-block">
              <img src="assets/img/preview/blocks-and-elements.png" alt="...">
            </div>

          </div>
        </div>
      </section>


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | CTA
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section text-center" style="background-image: linear-gradient(135deg, #f9f7ff 0%, #fff 50%, #f6f3ff 100%);">
        <div class="container">

          <div class="row">
            <div class="col-md-6 mx-auto">
              <p><img src="assets/img/icon/rocket2.png" alt="join us"></p>
              <br>
              <h3 class="mb-6"><strong>Join over 3,400 companies that trust us.</strong></h3>
              <p class="lead text-muted">Try it yourself for a while. Request a refund if you didn't find it useful and awesome as we advertised.</p>
              <br>
              <a class="btn btn-xl btn-round btn-info px-7" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=regular&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">Get a license — $19</a>
            </div>
          </div>

        </div>
      </section>


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | More Features
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section">
        <div class="container">
          <header class="section-header">
            <h2>More Features</h2>
            <hr>
            <p class="lead">We are so excited and proud of our product. It's really easy to create a landing page for your awesome product.</p>
          </header>

          <div class="row gap-y text-center mt-7">

            <div class="col-md-6 col-xl-4 mb-6 feature-1">
              <p class="feature-icon"><i class="icon-browser" style="color: #50a1ff"></i></p>
              <p class="lead-1">Works great in all modern browsers</p>
            </div>

            <div class="col-md-6 col-xl-4 mb-6 feature-1">
              <p class="feature-icon"><i class="icon-grid" style="color: #563d7c"></i></p>
              <p class="lead-1">Based on Bootstrap framework 4</p>
            </div>

            <div class="col-md-6 col-xl-4 mb-6 feature-1">
              <p class="feature-icon"><i class="icon-paintbrush" style="color: #ffbe00"></i></p>
              <p class="lead-1">Elements with multiple colors</p>
            </div>

            <div class="col-md-6 col-xl-4 mb-6 feature-1">
              <p class="feature-icon"><i class="icon-documents" style="color: #37b8af"></i></p>
              <p class="lead-1">Very well code documentation</p>
            </div>

            <div class="col-md-6 col-xl-4 mb-6 feature-1">
              <p class="feature-icon"><i class="icon-gift" style="color: #eb4a62"></i></p>
              <p class="lead-1">Variety of sample landing pages</p>
            </div>

            <div class="col-md-6 col-xl-4 mb-6 feature-1">
              <p class="feature-icon"><i class="icon-download" style="color: #46da60"></i></p>
              <p class="lead-1">Free updates forever</p>
            </div>

          </div>

        </div>
      </section>


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Testimonials
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray">
        <div class="container">
          <header class="section-header">
            <small>Testimonials</small>
            <h2>Happy Customers</h2>
            <hr>
            <p class="lead">Join thousands of satisfied customers using our template globally.</p>
          </header>


          <div data-provide="slider" data-dots="true" data-autoplay="false" data-slides-to-show="2">
            <div class="p-5">
              <div class="card border hover-shadow-6">
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col-auto mr-auto">
                      <h6><strong>Design Quality</strong></h6>
                    </div>

                    <div class="col-auto">
                      <div class="rating mb-3">
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                      </div>
                    </div>
                  </div>

                  <p>Superb, comprehensive, professional. And most importantly, it makes me look good! Thank you.</p>
                  <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2784705" target="_blank"><em>coolrebel</em></a></p>

                </div>
              </div>
            </div>


            <div class="p-5">
              <div class="card border hover-shadow-6">
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col-auto mr-auto">
                      <h6><strong>Code Quality</strong></h6>
                    </div>

                    <div class="col-auto">
                      <div class="rating mb-3">
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                      </div>
                    </div>
                  </div>

                  <p>Really well organized code, responsive customer service. excellent value for money. Recommended 100%</p>
                  <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2739368" target="_blank"><em>yorickgroeven</em></a></p>

                </div>
              </div>
            </div>


            <div class="p-5">
              <div class="card border hover-shadow-6">
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col-auto mr-auto">
                      <h6><strong>Code Quality</strong></h6>
                    </div>

                    <div class="col-auto">
                      <div class="rating mb-3">
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                      </div>
                    </div>
                  </div>

                  <p>Excellent design and code quality. Infinite variations to be combined. Congrats for this job!</p>
                  <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2710320" target="_blank"><em>epino</em></a></p>

                </div>
              </div>
            </div>


            <div class="p-5">
              <div class="card border hover-shadow-6">
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col-auto mr-auto">
                      <h6><strong>Documentation Quality</strong></h6>
                    </div>

                    <div class="col-auto">
                      <div class="rating mb-3">
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                      </div>
                    </div>
                  </div>

                  <p>Really good template, easy to customize with a really good documentation. Many different example of pages.</p>
                  <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2686598" target="_blank"><em>pepsit36</em></a></p>

                </div>
              </div>
            </div>


            <div class="p-5">
              <div class="card border hover-shadow-6">
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col-auto mr-auto">
                      <h6><strong>Design Quality</strong></h6>
                    </div>

                    <div class="col-auto">
                      <div class="rating mb-3">
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                      </div>
                    </div>
                  </div>

                  <p>The theme and customer support are both top-tier! Thank you for saving us 30+ hours of work.</p>
                  <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2683519" target="_blank"><em>Its_Complete</em></a></p>

                </div>
              </div>
            </div>


            <div class="p-5">
              <div class="card border hover-shadow-6">
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col-auto mr-auto">
                      <h6><strong>Code Quality</strong></h6>
                    </div>

                    <div class="col-auto">
                      <div class="rating mb-3">
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                      </div>
                    </div>
                  </div>

                  <p>The BEST template we have bought on Themeforest in terms of design and code quality. Can't wait for their admin template!</p>
                  <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2653514" target="_blank"><em>KungWoo</em></a></p>

                </div>
              </div>
            </div>


            <div class="p-5">
              <div class="card border hover-shadow-6">
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col-auto mr-auto">
                      <h6><strong>Customer Support</strong></h6>
                    </div>

                    <div class="col-auto">
                      <div class="rating mb-3">
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                        <label class="fa fa-star active"></label>
                      </div>
                    </div>
                  </div>

                  <p>TheThemeio is the best coder, which we ever worked in themeforest. Fast and on-demand email support. Good and quality work. Thank you for your help.</p>
                  <p class="small-2 text-lighter mb-0">By <a class="text-inherit" href="https://themeforest.net/ratings/2646286" target="_blank"><em>webserviz</em></a></p>

                </div>
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
      <section class="section text-white py-8">
        <canvas class="overlay opacity-95" data-granim="#667eea,#764ba2,#00cdac,#3cba92"></canvas>

        <div class="container">
          <header class="section-header">
            <small><strong>Own it</strong></small>
            <h2 class="display-3 fw-400">Get It <span class="mark-underline">Now</span></h2>
            <hr>
            <p class="lead-2">If you have made your decision to purchase this template, go ahead and press on the following button to get a license in less than a minute.</p>
          </header>

          <p class="text-center">
            <a class="btn btn-xl btn-round btn-light w-250" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=regular&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">Purchase for <span class="pl-2">$19</span></a><br>
            <small><a class="text-white opacity-80" href="https://themeforest.net/item/thesaas-responsive-bootstrap-saas-software-webapp-template/19778599?license=extended&open_purchase_for_item_id=19778599&purchasable=source&ref=thethemeio">or purchase an Extended License</a></small>
          </p>
        </div>
      </section>

    </main>



@endsection
