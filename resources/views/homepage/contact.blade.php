@extends('layout.master')

@section('title','HOMEPAGE')

@section('content')

  <section id="page-breadcrumb">
    <div class="vertical-center sun">
      <div class="container">
        <div class="row">
          <div class="action">
            <div class="col-sm-12">
              <h1 class="title">Kontaktujte ma</h1>
              <p>Zostante blízko</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="map-section">
    <div class="container">
      <div id="gmap"> </div>
      <div class="contact-info">
        <h2>Kontakt</h2>
        <address>
          E-mail: <a href="mailto:a.majik7@gmail.com">a.majik7@gmail.com</a> <br>
          Facebook: <a href="">Facebook</a> <br>
          Twitter: <a href="">Twitter</a> <br>
          Mobil: 0904 037 790 <br>
        </address>

        <h2>Adresa</h2>
        <address>
          95503 Topoľčany <br>
          SLOVENSKO <br>
        </address>
      </div>
    </div>
  </section>

@endsection