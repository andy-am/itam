@extends('layout.master')

@section('title','HOMEPAGE')

@section('content')

  <section id="home-slider">
    <div class="container">
      <div class="row">
        <div class="main-slider">
          <div class="slide-text">
            <h1>O mne</h1>
            <p>V prvom rade by som sa vám chcel predstaviť. Moje meno je Mgr. Andrej Májik. Mám {{ floor((time() - strtotime("1989-04-10")) / (60*60*24*365)) }} rokov.
              Vyštudoval som aplikovanú informatiku.Už viac ako 7 rokov sa venujem webovým technológiam. Som zameraný hlavne na tworbu webov pomocou PHP(Laravel) a jQuery.</p>
            {{--<a href="#" class="btn btn-common">SIGN UP</a>--}}
          </div>
          <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
          <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
          <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
          <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
          <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
        </div>
      </div>
    </div>
    <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
  </section>
  <!--/#home-slider-->

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="single-service">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
              <img src="http://static1.squarespace.com/static/55916c9fe4b0f356a27adc38/559d035ce4b02629e8b00b79/559d18b3e4b0271a54aed4a7/1436358836048/laravel-1.png" alt="">
            </div>
            <h2>Framework Laravel >= 5.2 </h2>
            <p>Jeden z najlepších a najpoužívanejších frameworkrov za posledné roky. Skúsenosti s týmto frameworkom mám už dlhšie ako <strong> {{ floor((strtotime("now") - strtotime('2015-10-15 00:00:00')) / ((60 * 60 * 24 * 30))) }} </strong> mesiacov.</p>
          </div>
        </div>
        <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="single-service">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
              <img src="http://www.icone-png.com/png/52/52460.png" alt="">
            </div>
            <h2>jQuery</h2>
            <p>jQuery je jedna z najznámejších knižníc javascriptu, pomocou ktorej "rozhýbem" Váš nový web. S jQuery mám skúsenosti cca <strong> {{ floor((strtotime("now") - strtotime('2013-01-01 00:00:00')) / ((60 * 60 * 24 * 30))) }} </strong> mesiacov.</p>
          </div>
        </div>
        <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
          <div class="single-service">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
              <img src="http://www.pngall.com/wp-content/uploads/2016/04/Database-PNG-1.png" alt="">
            </div>
            <h2>Databáza</h2>
            <p>Neoddeliteľná súčasť dnešných projektov. Slúži ako úložisko vaších dát. Skúsenosti s databázami mám <strong> {{ floor((strtotime("now") - strtotime('2015-10-15 00:00:00')) / ((60 * 60 * 24 * 30))) }} </strong> mesiacov. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#services-->

  <section id="action" class="responsive">
    <div class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="action take-tour">
            <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
              <h1 class="title">Triangle Corporate Template</h1>
              <p>A responsive, retina-ready &amp; wide multipurpose template.</p>
            </div>
            <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
              <div class="tour-button">
                <a href="#" class="btn btn-common">TAKE THE TOUR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#action-->

  <section id="features">
    <div class="container">
      <div class="row">
        <div class="single-features">
          <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
            <img src="images/home/image1.png" class="img-responsive" alt="">
          </div>
          <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
            <h2>Experienced and Enthusiastic</h2>
            <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
          </div>
        </div>
        <div class="single-features">
          <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
            <h2>Built for the Responsive Web</h2>
            <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
          </div>
          <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
            <img src="images/home/image2.png" class="img-responsive" alt="">
          </div>
        </div>
        <div class="single-features">
          <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
            <img src="images/home/image3.png" class="img-responsive" alt="">
          </div>
          <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
            <h2>Experienced and Enthusiastic</h2>
            <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#features-->

  <section id="clients">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
            <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
            <h1 class="title">{{Lang::get("homepage.spokojniKlienti")}}</h1>
            <p>{{Lang::get("homepage.spokojniKlientiText")}}</p>
          </div>
          <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="col-xs-3 col-sm-2">
              <a href="#"><img src="images/home/client1.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-xs-3 col-sm-2">
              <a href="#"><img src="images/home/client2.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-xs-3 col-sm-2">
              <a href="#"><img src="images/home/client3.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-xs-3 col-sm-2">
              <a href="#"><img src="images/home/client4.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-xs-3 col-sm-2">
              <a href="#"><img src="images/home/client5.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-xs-3 col-sm-2">
              <a href="#"><img src="images/home/client6.png" class="img-responsive" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection