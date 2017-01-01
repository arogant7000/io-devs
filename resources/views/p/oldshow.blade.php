@extends('layouts.mastershow')

@section('title')
  {{ $post->title }}
@endsection

@section('content')


  <div class="container content">
    <div class="row">
      <div class="col-md-9">
        <!-- Judul -->
      <div class="blog-grid margin-bottom-30">
        <h2 class="blog-grid-title-lg">{{ $post->title }}</h2>
        <p class="blog-grid-title-lg">{{ $post->description }}</p>
        <div class="overflow-h margin-bottom-10">
          <ul class="blog-grid-info pull-left">
            <li>{{ $post->created_at->format('M d,Y \a\t h:i a') }}</li>
          </ul>
          <div class="pull-right">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_sharing_toolbox"></div>
          </div>
        </div>
        <img class="img-responsive" src="{{ voyager::image($post->image)}}" alt="">
      </div>
      <!-- End Judul -->

      <p>
        {!! $post->body !!}
      </p>

      <ul class="source-list">
        <li>
          <strong>{{ $post->created_at->format('M d,Y \a\t h:i a') }}</strong>
          By <a href="{{ url('/user/'.$post->author_id) }}"> {{ $post->author->name }} </a>
        </li>
  		</ul>

        <div class="margin-bottom-50">

          <h2 class="title-v4">Comments ({{ $comments->count() }})</h2>
          @if ($comments)
            @foreach ($comments as $comment)
              <!-- Blog Comments v2 -->
              <div class="row blog-comments-v2">
                <div class="commenter">
                  <img class="rounded-x" src="{{ Voyager::image($comment->author->avatar) }}" class="img-responsive" alt="">
                </div>
                <div class="comments-itself">
                  <h4>
                    {{ $comment->author->name }}
                    <span>{{ $comment->created_at->format('M d, Y \a\t h:i a') }}</span>
                  </h4>
                  <p>{{ $comment->body }}</p>
                </div>
              </div>
              <!-- End Blog Comments v2 -->
            @endforeach
          @endif
          @if (Auth::guest())
            <h2 class="title-v4">Please <a href="/login">Login</a> to Comment</h2>
            @else
              <h2 class="title-v4">Post a Comment</h2>

              <fieldset>
                  <form class="comment-style-v2" action="/comment/add" method="post" id="sky-form3">
                    <div class="form-group sky-space-30">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="on_post" value="{{ $post->id }}">
                  <input type="hidden" name="slug" value="{{ $post->slug }}">
                    <div>
                    <textarea rows="8" name="body" required="required" id="message" placeholder="Write comment here ..." class="form-control bg-color-light"></textarea>
                  </div></div>
                  <input type="submit" name='post_comment' value="Send Comments" class="btn-u btn-u-success">

                </fieldset>

                </form>


          @endif
			  </div>
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
