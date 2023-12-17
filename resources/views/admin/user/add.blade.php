@extends('admin.layout.index')

@section('content')
<div class="page-header">
	<h1>
		Thêm người dùng
	</h1>
	
	<div class="">
		<a class="white" href="list">
			<i class="ace-icon fa fa-undo bigger-110">  &nbsp;Trở về danh sách &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</i>
		</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên đăng nhập </label>

				<div class="col-sm-9">
					<input type="text" id="user" name="user" placeholder="Username" class="col-xs-10 col-sm-5" />
				</div>
			</div>		

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Mật khẩu </label>

				<div class="col-sm-9">
					<input type="password" id="pass" name="pass" placeholder="Password" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ và tên </label>

				<div class="col-sm-9">
					<input type="text" id="fullname" name="fullname" placeholder="Họ tên" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="image"> Ảnh </label>
				
				<div class="col-sm-2"><img id='img-upload' width="100%"/></div>
				<div class="col-sm-7">
					<input type="file" id="imgInp" name="avatar" class="col-xs-10 col-sm-5" />
				</div>
			</div>	

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Số điện thoại </label>

				<div class="col-sm-9">
					<input class=" input-mask-phone" type="text" id="phone" name="phone" placeholder="(999) 999-9999" />
				</div>
			</div>		

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

				<div class="col-sm-9">
					<input type="text" id="email" name="email" placeholder="Email" class="col-xs-10 col-sm-5" />
				</div>
			</div>		

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Giới tính </label>

				<div class="col-sm-9">
					<div class="radio">
						<label>
							<input name="gender" type="radio" class="ace" value="Nam" />
							<span class="lbl"> Nam</span>
						</label>
						<label>
							<input name="gender" type="radio" class="ace" value="Nữ" />
							<span class="lbl" > Nữ</span>
						</label>
					</div>
				</div>
			</div>
			

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ngày sinh </label>

				<div class="col-sm-9 ">
					<input class="date-picker" id="birthday" name="birthday" type="text" data-date-format="dd-mm-yyyy" placeholder="Ngày sinh"  />
				</div>
			</div>

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Địa chỉ </label>

				<div class="col-sm-9">
					<input type="text" id="address" name="address" placeholder="Địa chỉ" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="status" > Ghi chú </label>
				<div class="col-sm-9 "><textarea name="note" id="note" rows="9" placeholder="Content..." ></textarea></div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="status" > Trạng thái </label>

				<div class="col-sm-9">
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="checkbox" value="1" />
						<span class="lbl" for="status"></span>
					</label>
				</div>
			</div>

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="role" > Phân Quyền </label>

				<div class="col-sm-9">
					<label>
						<input name="role" id="role" class="ace ace-switch ace-switch-6" type="radio" value="3" />
						<span class="lbl" for="role">Admin</span>
					</label>
					<label>
						<input name="role" id="role" class="ace ace-switch ace-switch-6" type="radio" value="2" />
						<span class="lbl" for="role">Doctor</span>
					</label>
					<label>
						<input name="role" id="role" class="ace ace-switch ace-switch-6" type="radio" value="1" />
						<span class="lbl" for="role">Custom</span>
					</label>
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