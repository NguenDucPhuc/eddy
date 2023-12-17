<div id="sidebar" class="sidebar responsive ace-save-state" >
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>
	<div class="nav-search" id="nav-search">
		<form class="form-search-menu">
			<span class="input-icon">
				<input type="text" placeholder="Tìm kiếm ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div>
	<ul class="nav nav-list">
		@if(ucfirst(Auth()->user()->role)==2)
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">
					Quản lý người dùng
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				
				<li class="">
					<a href="{{route('admin.user.list')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách
					</a>

					<b class="arrow"></b>
				</li>

				{{-- <li class="">
					<a href="{{route('admin.user.add')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm mới
					</a>

					<b class="arrow"></b>
				</li> --}}
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> Quản lý danh mục </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{route('admin.category.list')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="{{route('admin.category.add')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm mới
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Quản lý sản phẩm </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{route('admin.product.list')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="{{route('admin.product.add')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm mới
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> Quản lý khách hàng </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{route('admin.customer.list')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="{{route('admin.customer.add')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm mới
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> Quản lý Slide </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{route('admin.slide.list')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="{{route('admin.slide.add')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm mới
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> Quản lý Đơn hàng </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{route('admin.order.list')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Danh sách
					</a>

					<b class="arrow"></b>
				</li>

				{{-- <li class="">
					<a href="{{route('admin.order.add')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm mới
					</a>

					<b class="arrow"></b>
				</li> --}}
			</ul>
		</li>
		@else
		<div class="alert alert-danger">
			Bạn chưa đựơc phân quyền cho các chức năng này !
		</div>
		@endif
	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>