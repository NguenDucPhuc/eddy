@extends('admin.layout.index')

@section('content')
<div class="page-header">
	<h1>
		Thêm người dùng
	</h1>
	
	<div class="">
		<a class="white" href="danhsach">
			<i class="ace-icon fa fa-undo bigger-110">  &nbsp;Trở về danh sách &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</i>
		</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{ csrf_field() }}
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ và tên </label>

				<div class="col-sm-9">
					<input type="text" id="name" name="name" value=" {{$user->name}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Số điện thoại </label>

				<div class="col-sm-9">
					<input class=" input-mask-phone" type="text" id="phone" name="phone" value=" {{$user->phone}}" />
				</div>
			</div>		

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

				<div class="col-sm-9">
					<input type="text" id="email" name="email" value=" {{$user->email}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>		

			
			

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ngày sinh </label>

				<div class="col-sm-9 ">
					<input class="date-picker" id="birthday" name="birthday" type="text" data-date-format="dd-mm-yyyy" value=" {{$user->birthday}}"  />
				</div>
			</div>

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Địa chỉ </label>

				<div class="col-sm-9">
					<input type="text" id="address" name="address" value=" {{$user->address}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>


			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="role" > Phân Quyền </label>

				<div class="col-sm-9">
					
					@if($user->role==2)
					<label>
						<input name="role" id="role" class="ace ace-switch ace-switch-6" type="radio" value="2" checked="true"  />
						<span class="lbl" for="role">Admin</span>
					</label>
					<label>
						<input name="role" id="role" class="ace ace-switch ace-switch-6" type="radio" value="1" />
						<span class="lbl" for="role">Custom</span>
					</label>
					@else
					<label>
						<input name="role" id="role" class="ace ace-switch ace-switch-6" type="radio" value="2" />
						<span class="lbl" for="role">Admin</span>
					</label>
					<label>
						<input name="role" id="role" class="ace ace-switch ace-switch-6" type="radio" value="1" checked="true" />
						<span class="lbl" for="role">Custom</span>
					</label>
					@endif
				</div>
			</div>


			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit" name="addNew">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Submit
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reset
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="button">
						<i class="ace-icon fa fa-undo bigger-110"></i>

						<a href="list">Trở về danh sách</a>
					</button>
				</div>
			</div>

			
		</form>
	</div><!-- /.col -->
</div>
@endsection