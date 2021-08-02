<head>
    <title>{{ $title }}</title>

    <script src="{{ asset('js/map.js') }}"></script>
</head>

<x-layout>

    <x-page-header :title="$title"/>

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="contact-info">
              <div class="info-item">
                <div class="info">
                  <h4 class="title">Address</h4>
                  <p>Your current address goes to here,120 example, country.</p>
                </div>
              </div>
              <div class="info-item">
                <div class="info">
                  <h4 class="title">Phone</h4>
                  <a href="tel:+8801234 567 890">+8801234 567 890</a>
                  <a href="tel:+8801234 567 890">+8801234 567 890</a>
                </div>
              </div>
              <div class="info-item">
                <div class="info">
                  <h4 class="title">Web</h4>
                  <a href="mailto:info@example.com">info@example.com</a>
                  <a href="mailto:www.example.com">www.example.com</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <!--== Start Contact Form ==-->
            <div class="contact-form">
              <h4 class="contact-form-title">Contact Form Title</h4>
              <p class="desc">Contact Form Brief</p>
              <form id="contact-form" action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                <div class="row row-gutter-20">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="con_name" placeholder="Name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="email" name="con_email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="con_phone" placeholder="Number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="con_name" placeholder="Subject">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="con_message" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <button class="btn btn-theme" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!--== End Contact Form ==-->

            <!--== Message Notification ==-->
            <div class="form-message"></div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <section class="brand-logo-area">
      <div class="container pt--0">
        <div class="brand-logo-content">
          <div class="row">
            <div class="col-12">
              <div class="swiper-container brand-logo-slider-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <a href="#/"><img src="{{asset('img/brand-logo/6.jpg')}}" alt="Image-HasTech"></a>
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <a href="#/"><img src="{{asset('img/brand-logo/2.jpg')}}" alt="Image-HasTech"></a>
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <a href="#/"><img src="{{asset('img/brand-logo/3.jpg')}}" alt="Image-HasTech"></a>
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <a href="#/"><img src="{{asset('img/brand-logo/4.jpg')}}" alt="Image-HasTech"></a>
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <a href="#/"><img src="{{asset('img/brand-logo/5.jpg')}}" alt="Image-HasTech"></a>
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Brand Logo Area Wrapper ==-->

    <div id="map"></div>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZUjubmY-8Y7V174Pq0hld7SZYxoqZhI8&callback=initMap&libraries=&v=weekly"
        async
    ></script>

</x-layout>
