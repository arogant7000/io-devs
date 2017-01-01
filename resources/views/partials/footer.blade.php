<!--=== Footer  ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="{{ asset('assets/img/tik2	.png')}}" alt=""></a>
							<p>About Website</p>
							<p>Belum dicari harus dikembangkan ide. Please wait!!!</p>
						</div><!--/col-md-3-->
						<!-- End About -->

						<div class="col-md-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>Latest Posts</h2></div>
								<ul class="list-unstyled latest-list">
									@if(!$recent->count())
			            There is no Post
			          @else
			            @foreach ($recent as $post)
									<li>
										<a href="{{ url('/p/'.$post->slug) }}">{{$post ->title}}</a>
										<small>{{ $post->created_at->format('M d,Y \a\t h:i a') }}</small>
									</li>
								@endforeach
							@endif
								</ul>
							</div>
						</div><!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Pages</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="/p/about-us">About Us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/p/our-team">Our Team</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Kerja Kami</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Community Kami</a><i class="fa fa-angle-right"></i></li>
								<li><a href="/p/contact-us">Kontak Kami</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Contact Us</h2></div>
							<address class="md-margin-bottom-40">
								Jl. Banda Aceh-Medan Km. 280.3, Buketrata<br />
								Lhokseumawe Aceh, Indonesia <br />
								Mobile Phone: +6282360602080 <br />
								Postal Code: 24301 <br />
								Email: <a href="mailto:arogant7000@gmail.com" class="">arogant7000@gmail.com</a>
							</address>
						</div>


						<!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2016 &copy; All Rights Reserved.
								<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> | Design by <a href="#">Ichsan Mulya</a>
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer ===-->
