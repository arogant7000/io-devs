@extends('layouts.mastershow')

@section('title')
 Arsip Jurnal IT
@endsection

@section('content')


  <div class="container content">
    <div class="breadcrumbs">
          <div class="container">
            <h1 class="pull-left">Arsip Jurnal IT</h1>
          </div><!--/container-->
        </div>
    <div class="row">
      <div class="col-md-9">
        <table class="table table-hover ">
  									<thead>
  										<tr>
  											<th>#</th>
  											<th>Title</th>
  											<th>Details</th>
                        <th>Action</th>
  										</tr>
  									</thead>
  									<tbody>
                      <?php $no=1; ?>
                      @foreach ($jurnal as $key => $value)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$value->name}}</td>
                          <td>{{$value->details}}</td>
                          <td><a class="btn btn-info btn-xs" href="{{ url($value->url)}}"><i class="fa fa-cloud-download"></i></a></td>
                        </tr>
                      @endforeach
  									</tbody>
  								</table>
      </div>

      <div class="col-md-3">
        <!-- BLOG -->
        <div class="margin-bottom-50">
					<h2 class="title-v4">Blog &amp; Comments</h2>

					<div class="blog-thumb-v3">
						<small><a href="#">komentator</a></small>
						<h3><a href="#">How to run a country: A 10 point manifesto for leaders who stand – and want to deliver</a></h3>
					</div>
          <div class="blog-thumb-v3">
						<small><a href="#">komentator</a></small>
						<h3><a href="#">How to run a country: A 10 point manifesto for leaders who stand – and want to deliver</a></h3>
					</div>

					<hr class="hr-xs">
          <!-- Recent News -->
            <div class="margin-bottom-50">
  					<h2 class="title-v4">Recent Post</h2>
            @if(!$recent->count())
            There is no Post
          @else
            @foreach ($recent as $a)
  					<div class="blog-thumb blog-thumb-circle margin-bottom-15">
  						<div class="blog-thumb-hover">
                <img class="img-responsive" src="{{ voyager::image($a->image)}}" alt="">
  							<a class="hover-grad" href="{{ url('/p/'.$a->slug) }}"><i class="fa fa-link"></i></a>
  						</div>
  						<div class="blog-thumb-desc">
  							<h3><a href="{{ url('/p/'.$a->slug) }}">{{$a ->title}}</a></h3>
  							<ul class="blog-thumb-info">
  								<li>{{ $a->created_at->format('M d,Y \a\t h:i a') }}</li>
  							</ul>
  						</div>
  					</div>
          @endforeach
        @endif
  				</div>
				</div>
        <!-- Social Shares -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Social</h2>
					<ul class="blog-social-shares">
						<li>
							<i class="rounded-x fb fa fa-facebook"></i>
							<a class="rounded-3x" href="#">Like</a>
							<span class="counter">0</span>
						</li>
						<li>
							<i class="rounded-x tw fa fa-twitter"></i>
							<a class="rounded-3x" href="#">Follow Us</a>
							<span class="counter">0</span>
						</li>
						<li>
							<i class="rounded-x gp fa fa-google-plus"></i>
							<a class="rounded-3x" href="#">Add to circle</a>
							<span class="counter">0</span>
						</li>
					</ul>
				</div>
				<!-- End Social Shares -->

        <!-- Recent News -->
          <div class="margin-bottom-50">
					<h2 class="title-v4">Recent News</h2>
          @if(!$news->count())
          There is no News
        @else
          @foreach ($news as $b)
					<div class="blog-thumb blog-thumb-circle margin-bottom-15">
						<div class="blog-thumb-hover">
              <img class="img-responsive" src="{{ voyager::image($b->image)}}" alt="">
							<a class="hover-grad" href="{{ url('/p/'.$b->slug) }}"><i class="fa fa-link"></i></a>
						</div>
						<div class="blog-thumb-desc">
							<h3><a href="{{ url('/p/'.$b->slug) }}">{{$b ->title}}</a></h3>
							<ul class="blog-thumb-info">
								<li>31 Nov, 2016</li>
							</ul>
						</div>
					</div>
        @endforeach
      @endif
				</div>



      </div>
    </div>
  </div>
@endsection
