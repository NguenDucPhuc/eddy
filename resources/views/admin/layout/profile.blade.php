@extends('admin.layout.index')
@section('content')
<div class="tab-content no-border padding-24">
	<div id="home" class="tab-pane active">
		<div class="row">
			<div class="col-xs-12 col-sm-3 center">
				

			</div><!-- /.col -->

			<div class="col-xs-12 col-sm-9">
				<h2 class="blue">
					<span class="middle">{{ $user->name}}</span>

				</h2>

				<div class="profile-user-info">
					<div class="profile-info-row">
						<div class="profile-info-name"> Email </div>

						<div class="profile-info-value">
							<span>{{ $user->email}}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Điện thoại </div>

						<div class="profile-info-value">
							<span>{{ $user->phone}}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Địa chỉ </div>

						<div class="profile-info-value">
							<i class="fa fa-map-marker light-orange bigger-110"></i>
							<span>{{ $user->address}}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Ngày sinh </div>

						<div class="profile-info-value">
							<span>{{ $user->birthday}}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Ngày hoat động </div>

						<div class="profile-info-value">
							<span>{{ $user->created_at}}</span>
						</div>
					</div>
					<a href="edit&{{$user->id}}">
								<button type="button" class="btn btn-success" >Chỉnh sửa</button>
							</a>
				</div>

			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="space-20"></div>

			@endsection