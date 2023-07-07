@section('sidebar')
  
<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="{{asset('dashboard/assets/img/dp.jpg')}}" class="img-circle user-img-circle"
											alt="User Image" />
									</div>
									<div class="pull-left info">
										<p> Kiran Patel</p>
										<a href="{{route('dashboards.index')}}"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							
							<li class="nav-item">
								<a  class="nav-link nav-toggle"> <i class="far fa-image"></i>
									<span class="title">Banner</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('banners.index')}}" class="nav-link "> <span class="title">Show
												Banner</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('banners.create')}}" class="nav-link "> <span class="title">Add
												Banner</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a  class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Teacher</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('teachers.index')}}" class="nav-link "> <span class="title">Show
												Teacher</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('teachers.create')}}" class="nav-link "> <span class="title">Add
												Teacher</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Courses</span> <span class="arrow"></span>
									<span class="label label-rouded label-menu label-success">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('courses.index')}}" class="nav-link "> <span class="title">Show
												Courses</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('courses.create')}}" class="nav-link "> <span class="title">Add
												Course</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a  class="nav-link nav-toggle"> <i class="far fa-calendar"></i>
									<span class="title">Event</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('events.index')}}" class="nav-link "> <span class="title">Show Event</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('events.create')}}" class="nav-link "> <span class="title">Add Event</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link nav-toggle"> <i class="fas fa-history"></i>
									<span class="title">History</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('histories.index')}}" class="nav-link "> <span class="title">Show
												History</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('histories.create')}}" class="nav-link "> <span class="title">Add
												History</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a  class="nav-link nav-toggle"> <i class="material-icons">face</i>
									<span class="title"></span> Testimonial <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('testimonials.index')}}" class="nav-link "> <span class="title">Show Testimonial
												</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('testimonials.create')}}" class="nav-link "> <span class="title">Add Testimonial</span>
										</a>
									</li>
								</ul>
							</li>
                             
							<li class="nav-item">
								<a  class="nav-link nav-toggle"> <i class="fab fa-blogger"></i>
									<span class="title"></span> Blog <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('blogs.index')}}" class="nav-link "> <span class="title">Show Blog
												</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('blogs.create')}}" class="nav-link "> <span class="title">Add Blog</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a  class="nav-link nav-toggle">
									<i class="material-icons">email</i>
									<span class="title">Subscribe</span>
									<span class="arrow"></span>
									<span class="label label-rouded label-menu label-danger">new</span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('subscribes.index')}}" class="nav-link ">
											<span class="title">Show Subscribe</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a  class="nav-link nav-toggle">
									<i class="material-icons">subtitles</i>
									<span class="title">Contact </span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('contacts.index')}}" class="nav-link ">
											<span class="title">Show Contact</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
</div> 	</div>
</div>		
</div>			
		
	
		
@endsection