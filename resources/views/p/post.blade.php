@extends('layouts.mastershow')

@section('title')
  All Post
@endsection

@section('content')
  <div class="breadcrumbs">
  			<div class="container">
  				<h1 class="pull-left">Post Section</h1>
  				<ul class="pull-right breadcrumb">
  					<li><a href="/">Home</a></li>
  					<li class="active">Post Section</li>
  				</ul>
  			</div><!--/container-->
  		</div>


      <div class="container content-md">
			<div class="row news-v1">
        @if(!$posts->count())
        There is No news
        @else
        @foreach ($posts as $post)
        <div class="col-md-4 md-margin-bottom-40">
					<div class="news-v1-in">
						<img class="img-responsive" src="{{ voyager::image($post->image)}}" alt="">
						<h3><a href="{{ url('/p/'.$post->slug) }}">{{$post ->title}}</a></h3>
						<p>
						  {!! str_limit($post->body, $limit=88, $end =' ..... ') !!}
						</p>
						<ul class="list-inline news-v1-info">
							<li><span>By</span> <a href="#">{{ $post->author->name }}</a></li>
							<li>|</li>
							<li><i class="fa fa-clock-o"></i> {{ $post->created_at->format('M d,Y \a\t h:i a') }}</li>
							<li class="pull-right"><a href="{{ url('/p/'.$post->slug) }}"></li>
						</ul>
					</div>
				</div>
      @endforeach
    @endif

			</div>
      <!-- Pager v4 -->
      <ul class="pager pager-v4 margin-bottom-50">

        <!-- <li class="page-amount">!! $post->links() !!}</li>  -->

      </ul>
      <!-- End Pager v4 -->
		</div>

@endsection
