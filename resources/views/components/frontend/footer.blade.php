<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<a href="./" id="footer_logo">
								<img class="footer-logo-image" src="{{ asset('assets/images/logo.png') }}" alt="Studio Vision Films" style="width: 45%;" />
							</a>
							<div class="footer-social">
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook" target="_blank" rel="noopener noreferrer" href="@setting('facebook_url')"><i class="fa fa-facebook"></i></a>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter" target="_blank" rel="noopener noreferrer" href="@setting('twitter_url')"><i class="fa fa-twitter"></i></a>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="YouTube" target="_blank" rel="noopener noreferrer" href="@setting('youtube_url')"><i class="fa fa-youtube"></i></a>
								<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram" target="_blank" rel="noopener noreferrer" href="@setting('instagram_url')"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Our Services</h3>
								<ul>
									<li><a href="javascript:void(0)">Equipment Hire</a></li>
									<li><a href="javascript:void(0)">Filmming Services</a></li>
									<li><a href="javascript:void(0)">Studio Hire</a></li>
									<li><a href="javascript:void(0)">Dressing</a></li>
									<li><a href="javascript:void(0)">Flexibe Office Space</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Quick Links</h3>
								<ul>
									<li><a href="javascript:void(0)">My Account</a></li>
									<li><a href="javascript:void(0)">View Order</a></li>
									<li><a href="{{ route('about-us') }}">About Us</a></li>
									<li><a href="javascript:void(0)">Promotions</a></li>
									<li><a href="{{ route('contact-us') }}">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Conect With Us</h3>
								<div class="textwidget">
									<p>A: @setting('address')</p>
									<p>P: @setting('phone')</p>
									<p>E: <a href="mailto:@setting('email')">@setting('email')</a></p>
								</div>
								<div class="footer-gmap">
									<a href="#gmap-popup" class="open-popup-link">Google Map</a>
									<div id="gmap-popup" class="mfp-hide">
										<iframe id="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.0554760559626!2d151.42366529037852!3d-32.80714560754794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b73360bf7441cf9%3A0x7d18a93f0244f271!2s14+Goulburn+St%2C+Abermain+NSW+2326%2C+Australia!5e0!3m2!1sen!2s!4v1482743874873" width="600" height="450" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>