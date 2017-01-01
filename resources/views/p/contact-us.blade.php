@extends('layouts.mastercontact')

@section('title')
  Contact Us
@endsection

@section('content')
  <div class="container content">
    <div class="row margin-bottom-60">
      <div class="col-md-6 col-sm-6">
        <!-- Google Map -->
        <div id="map" class="height-450">
        </div>
        <!-- End Google Map -->
      </div>
      <div class="col-md-6 col-sm-6">
        <!-- Get in Touch -->
        <h3>Let's Connected</h3>
        <p>We love to Connected and Always Available</p>

        <hr>

        <!-- Contacts -->
        <h3>The Office</h3>
        <ul class="list-unstyled who">
          <li><a href="#"><i class="fa fa-home"></i>Jl. Banda Aceh-Medan Km. 280.3, Buketrata Lhokseumawe, Aceh 24301, Indonesia</a></li>
          <li><a href="mailto:ichsan.mulya@outlook.com"><i class="fa fa-envelope"></i>ichsan.mulya@outlook.com</a></li>
          <li><a href="#"><i class="fa fa-phone"></i>+6282360602080</a></li>
          <li><a href="#"><i class="fa fa-globe"></i>http://www.io-devs.azurewebsites.net</a></li>
        </ul>

        <hr>

        <!-- Business Hours -->
        <h3>Business Hours</h3>
        <ul class="list-unstyled">
          <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
          <li><strong>Saturday:</strong> 11am to 3pm</li>
          <li><strong>Sunday:</strong> Closed</li>
        </ul>
      </div>
    </div>
    <div class="headline"><h2>Our Partners</h2></div>
    <div class="owl-clients-v1">
      @if (!$partners->count())
        <div class="item">
          <img src="assets/img/map-img.png" alt="">
        </div>
      @else
        @foreach ($partners as $key => $value)
          <div class="item">
            <img src="{{ voyager::image($value->image)}}" alt="">
          </div>
        @endforeach
      @endif
    </div>

  </div><!--/container-->
  <!--=== End Content Part ===-->
@endsection
