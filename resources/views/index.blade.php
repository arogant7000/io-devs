@extends('layouts.master')

@section('title')

@endsection

@section('content')


<div class="container content-sm">
      <div class="headline"><h2>Latest <a href="/p/post">Post</a></h2></div>
			<div class="row margin-bottom-20">
        @if(!$posts->count())
        There is No post
      @else
        @foreach ($posts as $post)
          <div class="col-md-3 col-sm-6">
  					<div class="thumbnails thumbnail-style thumbnail-kenburn">
  						<div class="thumbnail-img">
  							<div class="overflow-hidden">
  								<img class="img-responsive" src="{{ voyager::image($post->image)}}" alt="">
  							</div>
  							<a class="btn-more hover-effect" href="{{ url('/p/'.$post->slug) }}">read more +</a>
  						</div>
  						<div class="caption">
  							<h3>
                  <a class="hover-effect" href="{{ url('/p/'.$post->slug) }}"> {{$post ->title}}</a>
                </h3>
  							<p>
  							  {!! str_limit($post->body, $limit=70, $end =' ..... ') !!}

                    <a class="" href="{{ url('/p/'.$post->slug) }}">Read More</a>
  							</p>

  						</div>
  					</div>
  				</div>
        @endforeach
      @endif

			</div>
			<!-- End Recent post -->

      <div class="headline"><h2>Latest <a href="/p/news">news</a></h2></div>
			<div class="row margin-bottom-20">
        @if(!$news->count())
        There is No post
      @else
        @foreach ($news as $post)
          <div class="col-md-3 col-sm-6">
  					<div class="thumbnails thumbnail-style thumbnail-kenburn">
  						<div class="thumbnail-img">
  							<div class="overflow-hidden">
  								<img class="img-responsive" src="{{ voyager::image($post->image)}}" alt="">
  							</div>
  							<a class="btn-more hover-effect" href="{{ url('/p/'.$post->slug) }}">read more +</a>
  						</div>
  						<div class="caption">
  							<h3>
                  <a class="hover-effect" href="{{ url('/p/'.$post->slug) }}"> {{$post ->title}}</a>
                </h3>
  							<p>
  							  {!! str_limit($post->body, $limit=70, $end =' ..... ') !!}
  							</p>

  						</div>
  					</div>
  				</div>
        @endforeach
      @endif

			</div>
			<!-- End Recent news -->


      <div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
      				<div class="headline"><h2 class="pull-left">Recent Works : TIK Developers</h2>
      					<div class="owl-navigation">
      						<div class="customNavigation">
      							<a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>
      							<a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
      						</div>
      					</div><!--/navigation-->
      				</div>

      				<div class="owl-recent-works-v1">

                @foreach ($works as $work)
                  <div class="item">
        						<a href="{{ url('/'.$work->slug) }}">
        							<em class="overflow-hidden">
        								<img class="img-responsive" src="{{ voyager::image($work->image)}}" alt="">
        							</em>
        							<span>
        								<strong>{{$work ->title}}</strong>
        								<i>{{$work ->caption}}</i>
        							</span>
        						</a>
        					</div>
                @endforeach

      				</div>
      			</div>


            <div class="row margin-bottom-20">
				<!-- Welcome Block -->

          @foreach ($primary as $key => $value)
				<div class="col-md-8 md-margin-bottom-40">
					<div class="headline"><h2>Welcome To Portal TIK</h2></div>
					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive margin-bottom-20" src="{{ voyager::image($value->avatar)}}" alt="">
						</div>
						<div class="col-sm-8">
							<p>

                <p>{!! str_limit($value->body, $limit=1200, $end =' ..... ') !!}</p>

							</p>
              <blockquote class="hero-unify">
    						<p>{!! str_limit($value->quote, $limit=100, $end =' ..... ') !!}</p>
    						<small>{{$value->skill}} - {{$value->name}}</small>
    					</blockquote>
						</div>
					</div>

				</div><!--/col-md-8-->
          @endforeach
				<!-- Latest Shots -->
				<div class="col-md-4 md-margin-bottom-20">
					<div class="headline"><h2>Latest Shots</h2></div>
					<div id="myCarousel" class="carousel slide carousel-v1">
						<div class="carousel-inner">

              @for ($i=0; $i < sizeOf($galery); $i++)
                <div class="item @if($i ==0) active @endif">
                  <img class="img-responsive" src="{{ voyager::image($galery[$i]->image)}}" alt="">
                  <div class="carousel-caption">
  									<p>{{$galery[$i]->title}}</p>
  								</div>
                </div>
              @endfor


						</div>

						<div class="carousel-arrow">
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div><!--/col-md-4-->
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
</div>
@endsection
