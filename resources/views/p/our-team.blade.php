@extends('layouts.mastershow')

@section('title')
 Our Team
@endsection

@section('content')

  <div class="container">
    <div class="headline-center margin-bottom-60">
      <h2>OUR THE BEST TEAM</h2>
      <p>Berperan dalam Membangun Website ini.<br>
        Tidak Pernah <strong>Menolak</strong> untuk melakukan Perubahan </p>
      </div>

      <div class="row team-v5 margin-bottom-30">

        @foreach ($primary as $key => $value)
        <div class="col-sm-4 sm-margin-bottom-50">
          <div class="team-img">
            <img class="img-responsive" src="{{ voyager::image($value->avatar)}}" alt="">
            <div class="team-hover">
              <ul class="list-inline team-social-v5">
                <li><a href="{{ $value->twitter }}"><i class="rounded-x fa fa-twitter"></i></a></li>
                <li><a href="{{ $value->instagram }}"><i class="rounded-x fa fa-instagram"></i></a></li>
                <li><a href="{{ $value->facebook }}"><i class="rounded-x fa fa-facebook"></i></a></li>
                <li><a href="{{ $value->google }}"><i class="rounded-x fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <span> {{$value->name}} </span>
          <small> {{$value->skill}} </small>
          <p> {!! str_limit($value->quote, $limit=100, $end =' ..... ') !!} </p>
        </div>
        @endforeach

      </div><!--/end team v5-->
    </div>
    <!--=== End Team v5 ===-->

    <hr class="margin-bottom-60">

    <!--=== Team v6 ===-->
    <div class="container">
      <div class="headline-center margin-bottom-60">
        <h2>SUPPORT MEMBERS</h2>
        <p>Team yang siap selalu membantu<br>
          </p>
        </div>

        <div class="row team-v6 margin-bottom-60">
          @foreach ($secondary as $key => $value)
          <div class="col-md-3 col-sm-6 md-margin-bottom-50">
            <img class="img-responsive" src="{{ voyager::image($value->avatar)}}" alt="">
            <span>{{$value->name}}</span>
            <small>{{$value->skill}}</small>
            <ul class="list-inline social-icons-v1">
              <li><a href="{{ $value->twitter }}"><i class="rounded-x fa fa-twitter"></i></a></li>
              <li><a href="{{ $value->instagram }}"><i class="rounded-x fa fa-instagram"></i></a></li>
              <li><a href="{{ $value->facebook }}"><i class="rounded-x fa fa-facebook"></i></a></li>
              <li><a href="{{ $value->google }}"><i class="rounded-x fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        @endforeach

        </div><!--/end team v6-->

      </div>
      <!--=== End Team v6 ===-->

      <!--=== Call To Action v2 ===-->
      <div class="call-action-v2 parallaxBg">
        <div class="container">
          <h2>We are Hiring!</h2>
          <p>Siap dan mencoba dalam segala aspek Development</p>
          <a href="#" class="btn-u">Join Now</a>
        </div>
      </div>
      <!--=== End Call To Action v2 ===-->

@endsection
