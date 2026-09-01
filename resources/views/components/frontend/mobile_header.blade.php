<div id="menu-slideout" class="slideout-menu hidden-md-up">
			<div class="mobile-menu">
				<ul id="mobile-menu" class="menu">
					<li>
						<a href="{{ route('home') }}">Home</a>
					</li>
					<li>
						<a href="{{ route('about-us') }}">About</a>
					</li>
					<li class="dropdown">
						<a href="#">Pages</a>
						<i class="sub-menu-toggle fa fa-angle-down"></i>
						<ul class="sub-menu">
							<li>
								<a href="{{ route('bts-gallery') }}">BTS Gallery</a>
							</li> 
							<li>
								<a href="{{ route('audition') }}">Video Auditions</a>
							</li>  							
							<li>
								<a href="{{ route('our-team') }}">Our Team</a>
							</li>
							<li>
								<a href="{{ route('our-services') }}">Our Services</a>
							</li>							
						</ul>
					</li>
					<li>
						<a href="{{ route('our-projects') }}">Productions</a>
					</li>					
					<li>
						<a href="{{ route('contact-us') }}">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="top-search">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<form>
							<input type="search" class="top-search-input" name="s" placeholder="What are you looking for?" />
						</form>
					</div>
				</div>
			</div>
		</div>