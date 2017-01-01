@extends('layouts.mastershow')

@section('title')
  About Us
@endsection

@section('content')
  <!--=== Breadcrumbs v3 ===-->
		<div class="breadcrumbs-v3 img-v3 text-center">
			<div class="container">
				<h1>Team Name</h1>
				<p>Description #gambarbackground</p>
			</div><!--/end container-->
		</div>
		<!--=== End Breadcrumbs v3 ===-->
    <div class="container content-sm">
			<div class="headline-center margin-bottom-60">
				<h2>WE ARE TEAM</h2>

        <p><strong>
          description
        </strong></p>
		</div>

				<div class="row">
					<div class="col-md-6 md-margin-bottom-50">
						<img class="img-responsive" src="" alt="Gambar Team">
					</div>
					<div class="col-md-6">
						<p>Body</p><br>
						<div class="row">
							<ul class="col-xs-6 list-unstyled lists-v1">
								<li><i class="fa fa-angle-right"></i>???</li>
								<li><i class="fa fa-angle-right"></i>???</li>
								<li><i class="fa fa-angle-right"></i>???</li>
								<li><i class="fa fa-angle-right"></i>???</li>
							</ul>
              <ul class="col-xs-6 list-unstyled lists-v1">
								<li><i class="fa fa-angle-right"></i>???</li>
								<li><i class="fa fa-angle-right"></i>???</li>
								<li><i class="fa fa-angle-right"></i>???</li>
								<li><i class="fa fa-angle-right"></i>???</li>
							</ul>
						</div>
					</div>
				</div><!--/end row-->
			</div>
			<!--=== End Container Part ===-->

      <!--=== Service Block v5 ===-->
			<div class="service-block-v5">
				<div class="container">
					<div class="row equal-height-columns">
						<div class="col-md-4 service-inner equal-height-column">
							<i class="icon-custom icon-md rounded-x icon-bg-u icon-diamond"></i>
							<span>Service</span>
							<p>desc</p>
						</div>
						<div class="col-md-4 service-inner equal-height-column service-border">
							<i class="icon-custom icon-md rounded-x icon-bg-u icon-rocket"></i>
							<span>Service</span>
							<p>Desc</p>
						</div>
						<div class="col-md-4 service-inner equal-height-column">
							<i class="icon-custom icon-md rounded-x icon-bg-u icon-support"></i>
							<span>Service</span>
							<p>Desc</p>
						</div>
					</div><!--/end row-->
				</div><!--/end container-->
			</div>
			<!--=== End Service Block v5 ===-->

      <div class="container content-sm">
						<div class="headline-center margin-bottom-60">
							<h2>MEET OUR TEAM</h2>

              Desv

              </div>

							<div class="row team-v4">
  @foreach ($primary as $key => $value)
								<div class="col-md-4 col-sm-6 md-margin-bottom-50">
									<img class="img-responsive" src="{{ voyager::image($value->avatar)}}" alt="Gambar">
									<span>{{$value->name}}</span>
									<small>-{{$value->skill}}-</small>
									<p>{!! str_limit($value->quote, $limit=100, $end =' ..... ') !!} </p>
									<ul class="list-inline team-social-v4">
                    <li><a href="{{ $value->twitter }}"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="{{ $value->instagram }}"><i class="rounded-x fa fa-instagram"></i></a></li>
                    <li><a href="{{ $value->facebook }}"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="{{ $value->google }}"><i class="rounded-x fa fa-google-plus"></i></a></li>
									</ul>
								</div>
        @endforeach
							</div><!--/end row-->
						</div>
						<!--=== End Team v4 ===-->

            <div class="bg-color-light">
							<div class="container content-sm">
								<div class="headline-center margin-bottom-60">
									<h2>WHAT PEOPLE SAY</h2>
									<p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
										Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<!-- Testimonials v4 -->
											<div class="testimonials-v4 md-margin-bottom-50">
												<div class="testimonials-v4-in">
													<p>The best programs are written so that computing machines can perform them quickly and so that human beings can understand them clearly. A programmer is ideally an essayist who works with traditional aesthetic and literary forms as well as mathematical concepts.</p>
												</div>
												<img class="rounded-x" src="assets/img/testimonials/img5.jpg" alt="thumb">
												<span class="testimonials-author">
													Jeremy Asigner<br>
													<em>Web Developer, <a href="#">Google Inc.</a></em>
												</span>
											</div>
											<!-- End Testimonials v4 -->
										</div>
										<div class="col-sm-6">
											<!-- Testimonials v4 -->
											<div class="testimonials-v4">
												<div class="testimonials-v4-in">
													<p>We see a lot of feature-driven product design in which the cost of features is not properly accounted. Features can have a negative value to customers because they make the products more difficult to understand and use. We are finding that people like products that just work.</p>
												</div>
												<img class="rounded-x" src="assets/img/testimonials/img4.jpg" alt="thumb">
												<span class="testimonials-author">
													John Davenport<br>
													<em>UX/UI Designer, <a href="#">Apple Inc.</a></em>
												</span>
											</div>
											<!-- End Testimonials v4 -->
										</div>
									</div><!--/end row-->
								</div><!--/end container-->
							</div>
							<!--=== End Testimonials v4 ===-->
@endsection
