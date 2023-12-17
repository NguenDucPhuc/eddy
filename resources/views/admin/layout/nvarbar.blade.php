<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left" >
					<a href="index.html" class="navbar-brand">
						<small>
							<img src="images/icons/icon_eddy.png" alt="">
							EDDY Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						{{-- <li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														 New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li> --}}

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<?php $avatar= ucfirst(Auth()->user()->avatar) ?>
								{{-- <img class="nav-user-photo" src="
								{{url('../')}}/uploads/avt/{{$avatar}}
								" alt="{{ ucfirst(Auth()->user()->name) }}"> --}}
								<span class="user-info">
									<small>Chào mừng,</small>
									{{ ucfirst(Auth()->user()->name) }}
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								<li>
									<a href="{{route('admin.user.profile',ucfirst(Auth()->user()->id))}}">
										<i class="ace-icon fa fa-user"></i>
										Hồ sơ
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="{{url('admin/logout')}}">
										<i class="ace-icon fa fa-power-off"></i>
										Đăng xuất
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>